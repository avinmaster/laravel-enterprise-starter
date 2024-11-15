# Laravel Enterprise Architecture - Complete Analysis

**Project Type:** Enterprise Resource Management API (Reference Implementation)  
**Framework:** Laravel 9  
**PHP Version:** 8.2+  
**Purpose:** Demonstrating production-grade architecture patterns

---

## Table of Contents

1. [Executive Summary](#executive-summary)
2. [Technology Stack](#technology-stack)
3. [Architectural Patterns](#architectural-patterns)
4. [Layer-by-Layer Architecture](#layer-by-layer-architecture)
5. [Code Flow Example](#code-flow-example)
6. [Design Patterns in Detail](#design-patterns-in-detail)
7. [Naming Conventions](#naming-conventions)
8. [Request Lifecycle](#request-lifecycle)
9. [Data Flow Patterns](#data-flow-patterns)
10. [Infrastructure & External Services](#infrastructure--external-services)
11. [Security Architecture](#security-architecture)
12. [Error Handling Strategy](#error-handling-strategy)
13. [Domain Organization](#domain-organization)
14. [Best Practices Observed](#best-practices-observed)
15. [Potential Improvements](#potential-improvements)

---

## Executive Summary

This is a sophisticated Laravel-based API starter demonstrating **Clean Architecture** with clear separation of concerns. The project showcases **Domain-Driven Design (DDD)** principles organized around business domains, serving as a reference implementation for enterprise-grade applications.

### Key Architectural Highlights:

- **CQRS-like Pattern**: Separate Read and Write repositories
- **Service Layer Pattern**: Actions, UseCases, and Tasks
- **DTO Pattern**: Data Transfer Objects for type-safe data transport
- **Repository Pattern**: Interface-driven data access with dependency injection
- **Resource Pattern**: Consistent API response formatting
- **Exception-Driven Error Handling**: Domain-specific exceptions

---

## Technology Stack

### Core Framework & Language
```json
{
  "framework": "Laravel 9.x",
  "php": "^8.2",
  "architecture": "RESTful API"
}
```

### Major Dependencies

| Package | Purpose | Category |
|---------|---------|----------|
| `laravel/passport` | OAuth2 Authentication | Security |
| `predis/predis` | Redis Client | Caching |
| `babenkoivan/elastic-scout-driver` | ElasticSearch Integration | Search |
| `laravel/scout` | Search Abstraction | Search |
| `spatie/laravel-data` | Type-safe DTOs | Data Transfer |
| `spatie/laravel-permission` | Role & Permission Management | Authorization |
| `spatie/laravel-medialibrary` | Media Management | File Handling |
| `spatie/enum` | Type-safe Enums | Domain Modeling |
| `php-ffmpeg/php-ffmpeg` | Video Processing | Media Processing |
| `doctrine/dbal` | Database Abstraction | Database |
| `guzzlehttp/guzzle` | HTTP Client | Integration |

### Development Tools
- **PHPUnit**: Testing framework
- **Laravel Pint**: Code style fixer
- **Spatie Ignition**: Error page improvement
- **Mockery**: Mocking library

---

## Architectural Patterns

### 1. **Layered Architecture**

```
┌─────────────────────────────────────────────────────────┐
│                    HTTP Layer (Routes)                   │
│                   Middleware (Auth, etc)                 │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                  Controller Layer                        │
│     (Thin controllers - orchestration only)              │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                 Request Validation Layer                 │
│         (FormRequest with typed getters)                 │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                      DTO Layer                           │
│    (Spatie Data - Type-safe data transfer)               │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                  Application/Service Layer               │
│        Actions → UseCases → Tasks                        │
│           (Business Logic Container)                     │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                  Repository Layer                        │
│         Read Repos  |  Write Repos                       │
│         (CQRS Separation)                                │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                    Domain Models                         │
│              (Eloquent Models)                           │
└─────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────┐
│                   Infrastructure                         │
│    Database | ElasticSearch | Redis | FFmpeg            │
└─────────────────────────────────────────────────────────┘
```

### 2. **CQRS (Command Query Responsibility Segregation)**

The project implements a **read/write separation** pattern:

**Write Side (Commands):**
```php
// Write Repository Interface
interface CampaignWriteRepositoryInterface
{
    public function create(array $data): Campaign;
    public function update(string $id, array $data): bool;
    public function delete(string $id): bool;
}
```

**Read Side (Queries):**
```php
// Read Repository Interface  
interface CampaignReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): Campaign;
    public function index(IndexCampaignDTO $dto, array $relations = []): LengthAwarePaginator;
}
```

**Benefits:**
- Optimized queries for reads vs writes
- Scalability - can use different databases/caching strategies
- Clear separation of concerns
- Easier to implement caching on read side

### 3. **Dependency Injection & IoC**

All dependencies are injected via constructor and bound in Service Providers:

```php
// RepositoryServiceProvider.php
public function register(): void
{
    $this->app->bind(CampaignWriteRepositoryInterface::class, CampaignWriteRepository::class);
    $this->app->bind(CampaignReadRepositoryInterface::class, CampaignReadRepository::class);
    // ... 40+ repository bindings
}
```

This enables:
- Easy testing (mock interfaces)
- Flexibility (swap implementations)
- Loose coupling

---

## Layer-by-Layer Architecture

### Layer 1: HTTP & Routing

**File:** `routes/api.php`

All routes protected by `auth:api` middleware (Laravel Passport):

```php
Route::middleware('auth:api')->group(function () {
    Route::prefix('campaigns')->group(function () {
        Route::post('/', [CampaignController::class, 'create']);
        Route::put('/{id}', [CampaignController::class, 'update']);
        Route::get('/{id}', [CampaignController::class, 'show']);
        Route::get('/', [CampaignController::class, 'index']);
        Route::delete('/{id}', [CampaignController::class, 'delete']);
    });
});
```

**Additional Middleware Used:**
- `is_active_user` - checks if user is active
- `is_owner` - authorization checks

### Layer 2: Controllers

**Pattern:** Thin controllers that delegate to Actions

**Location:** `app/Http/Controllers/Api/V1/{Domain}/{Domain}Controller.php`

**Example:** `CampaignController.php`

```php
class CampaignController extends ApiController
{
    // Every method follows the same pattern:
    // 1. Inject Request & Action
    // 2. Create DTO from Request
    // 3. Execute Action
    // 4. Return Resource
    
    public function create(
        CreateCampaignRequest $request,
        CreateCampaignAction $createCampaignAction
    ): CampaignResource {
        $dto = CreateCampaignDTO::fromRequest($request);
        return $createCampaignAction->run($dto);
    }
}
```

**Key Characteristics:**
- Extends `ApiController` (provides response helpers)
- Single Responsibility: HTTP orchestration only
- No business logic
- Type-hinted returns

### Layer 3: Request Validation

**Pattern:** FormRequest with constants and typed getters

**Location:** `app/Http/Requests/{Domain}/{Action}{Domain}Request.php`

**Example:** `CreateCampaignRequest.php`

```php
class CreateCampaignRequest extends FormRequest
{
    // Constants for field names (avoid magic strings)
    public const ADVERTISER_ID = 'advertiser_id';
    public const NAME = 'name';
    // ... 40+ field constants
    
    public function rules(): array
    {
        return [
            self::ADVERTISER_ID => ['uuid', 'required'],
            self::NAME => ['string', 'required', 'between:1,255'],
            self::BUDGET_TYPE => ['nullable', 'integer', new EnumRule(CampaignBudgetTypeEnum::class)],
            // ... validated with type-safe enum rules
        ];
    }
    
    // Typed getters prevent magic array access
    public function getAdvertiserId(): string
    {
        return $this->get(self::ADVERTISER_ID);
    }
    
    public function getName(): string
    {
        return $this->get(self::NAME);
    }
}
```

**List Requests:**
For index/listing endpoints, extends `ListRequest`:

```php
class IndexCampaignRequest extends ListRequest
{
    // Inherits pagination & search functionality
}
```

**ListRequest Base Class provides:**
- `page` (default: 1)
- `per_page` (10-100, default: 10)
- `q` (search query)

### Layer 4: DTOs (Data Transfer Objects)

**Pattern:** Spatie Data with static factory methods

**Location:** `app/Services/{Domain}/DTO/{Action}{Domain}DTO.php`

**Example:** `CreateCampaignDTO.php`

```php
class CreateCampaignDTO extends Data
{
    // Typed properties
    public string $user_id;
    public string $advertiser_id;
    public string $name;
    public ?string $alternative_id;
    public bool $active;
    // ... 40+ typed properties
    
    // Factory method from Request
    public static function fromRequest(CreateCampaignRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,  // Auto-inject auth user
            'advertiser_id' => $request->getAdvertiserId(),
            'name' => $request->getName(),
            // ... map all fields using typed getters
        ]);
    }
}
```

**Benefits:**
- Type safety
- IDE autocomplete
- Single source of truth for data shape
- Validation at DTO level via Spatie Data
- Immutable by design

**Pagination DTO:**
```php
class PaginationParamsDTO
{
    public function __construct(
        public int $page,
        public int $per_page
    ) {}
}
```

### Layer 5: Service Layer (Actions, UseCases, Tasks)

**Pattern:** Three-tier service organization

**Location:** `app/Services/{Domain}/{Type}/`

#### **Actions** (Primary orchestrators)

**Purpose:** High-level business operations exposed to controllers

**Example:** `CreateCampaignAction.php`

```php
class CreateCampaignAction
{
    public function __construct(
        protected CampaignWriteRepositoryInterface $campaignWriteRepository
    ) {}

    public function run(CreateCampaignDTO $dto): CampaignResource
    {
        // Transform DTO to array using Model helper
        $data = Campaign::createModel($dto);
        
        // Delegate to repository
        $campaign = $this->campaignWriteRepository->create($data);
        
        // Return Resource for consistent API response
        return new CampaignResource($campaign);
    }
}
```

**Characteristics:**
- Single `run()` method
- Accepts DTO, returns Resource
- May coordinate multiple Tasks/UseCases
- Thin wrapper - delegates to repositories

#### **UseCases** (Complex business logic)

**Purpose:** Multi-step business processes, often with side effects

**Example:** `CreateTargetingExpressionModulesUseCase.php`

```php
class CreateTargetingExpressionModulesUseCase
{
    public function __construct(
        protected TargetingExpressionModuleWriteRepositoryInterface $repository
    ) {}

    public function run(string $targeting_expression_id, array $modules): void
    {
        // Complex business logic
        foreach ($modules as &$moduleData) {
            $moduleData['id'] = Str::uuid()->toString();
            $moduleData['targeting_expression_id'] = $targeting_expression_id;
        }
        
        // Bulk operation
        $this->repository->insert($modules);
    }
}
```

**When to use:**
- Multiple repository interactions
- Complex transformations
- Side effects (notifications, events, etc.)

#### **Tasks** (Atomic units of work)

**Purpose:** Small, reusable, single-responsibility operations

**Example:** `SendUserInvitationAction` using Tasks

```php
class SendUserInvitationAction
{
    public function __construct(
        protected CreateUserInvitationTask $createUserInvitationTask,
        protected SendUserInvitationTask $sendUserInvitationTask,
    ) {}

    public function run(SendUserInvitationDTO $dto): void
    {
        $userInvitation = $this->createUserInvitationTask->run($dto);
        $this->sendUserInvitationTask->run($dto->email, $userInvitation->hash);
    }
}
```

**Hierarchy:**
```
Action (coordinates)
  ├── UseCase (complex logic)
  └── Task (atomic operation)
```

### Layer 6: Repository Layer

**Pattern:** Interface + Implementation with CQRS separation

**Location:** 
- `app/Repositories/Read/{Domain}/{Domain}ReadRepository{Interface}.php`
- `app/Repositories/Write/{Domain}/{Domain}WriteRepository{Interface}.php`

#### Write Repository

**Interface:**
```php
interface CampaignWriteRepositoryInterface
{
    public function create(array $data): Campaign;
    public function update(string $id, array $data): bool;
    public function delete(string $id): bool;
}
```

**Implementation:**
```php
class CampaignWriteRepository implements CampaignWriteRepositoryInterface
{
    private function query(): Builder
    {
        return Campaign::query();
    }

    /**
     * @throws FailedToCreateCampaignException
     */
    public function create(array $data): Campaign
    {
        if (!$campaign = $this->query()->create($data)) {
            throw new FailedToCreateCampaignException();
        }
        return $campaign;
    }

    /**
     * @throws FailedToUpdateCampaignException
     */
    public function update(string $id, array $data): bool
    {
        if (!$this->query()->where('id', $id)->update($data)) {
            throw new FailedToUpdateCampaignException();
        }
        return true;
    }
}
```

#### Read Repository

**Interface:**
```php
interface CampaignReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): Campaign;
    public function index(IndexCampaignDTO $dto, array $relations = []): LengthAwarePaginator;
}
```

**Implementation:**
```php
class CampaignReadRepository implements CampaignReadRepositoryInterface
{
    private function query(): Builder
    {
        return Campaign::query();
    }

    /**
     * @throws CampaignDoesNotExistException
     */
    public function getById(string $id, array $relations = []): Campaign
    {
        $campaign = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$campaign) {
            throw new CampaignDoesNotExistException();
        }
        return $campaign;
    }

    public function index(IndexCampaignDTO $dto, array $relations = []): LengthAwarePaginator
    {
        return $this->query()
            ->where('user_id', $dto->user_id)
            ->with($relations)
            ->paginate(
                $dto->pagination->per_page,
                ['*'],
                'page',
                $dto->pagination->page
            );
    }
}
```

**Key Features:**
- **Private query() builder** - encapsulates model access
- **Eager loading support** - `$relations` parameter
- **Domain exceptions** - not generic Laravel exceptions
- **Type hints** - return types enforced

### Layer 7: Domain Models

**Pattern:** Eloquent models with business helper methods

**Location:** `app/Models/{Domain}.php`

**Example:** `Campaign.php`

```php
class Campaign extends Model
{
    use HasUuids;           // UUID primary keys
    use SoftDeletes;        // Soft delete support

    protected $fillable = [/* 40+ fields */];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // Relation constants for reusability
    public const RELATIONS = ['lineItems'];

    // Static factory method: DTO → array for persistence
    public static function createModel(CreateCampaignDTO $dto): array
    {
        return [
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'name' => $dto->name,
            // ... JSON encoding for arrays
            'frequency_caps_limits' => json_encode($dto->frequency_caps_limits),
            'continents' => json_encode($dto->continents),
        ];
    }

    // Relationships
    public function lineItems(): HasMany
    {
        return $this->hasMany(LineItem::class);
    }
}
```

**Special Model: Ad (with ElasticSearch)**

```php
class Ad extends Model
{
    use Searchable;  // Laravel Scout + Elastic Driver

    public function toSearchableArray(): array
    {
        return [
            'active' => $this->active,
            'cpm_bid' => $this->cpm_bid,
            'advertiser' => json_decode($this->advertiser),
            'targeting_include' => json_decode($this->targeting_include),
            // ... indexed fields
        ];
    }

    protected static function boot(): void
    {
        parent::boot();

        // Auto-index on save
        static::saved(function ($model) {
            $model->searchable();
        });

        // Create ElasticSearch index if not exists
        $elasticClient->indices()->create(['index' => 'ads']);
        $elasticClient->indices()->putMapping([/* mapping config */]);
    }
}
```

### Layer 8: API Resources

**Pattern:** JsonResource for consistent API responses

**Location:** `app/Http/Resources/{Domain}/{Domain}Resource.php`

**Example:** `CampaignResource.php`

```php
class CampaignResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'advertiser_id' => $this->resource->advertiser_id,
            'name' => $this->resource->name,
            
            // Relationships
            'line_items' => $this->resource->lineItems,
            
            // Type casting
            'spend_budget_lifetime' => +$this->resource->spend_budget_lifetime,
            
            // JSON decoding
            'frequency_caps_limits' => json_decode($this->resource->frequency_caps_limits),
            'continents' => json_decode($this->resource->continents),
            
            // Nested resources
            'metrics' => new MetricResource($this),
            
            // Timestamps
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
```

**Collection Usage:**
```php
// In Action
return CampaignResource::collection($campaigns);
```

---

## Code Flow Example

### Complete Request Flow: Creating a Campaign

```
1. HTTP Request (POST /api/campaigns)
   ↓
2. Route Middleware (auth:api)
   ↓ [Passport authenticates user]
3. CampaignController::create()
   ↓
4. CreateCampaignRequest validation
   ↓ [Laravel validates all rules]
5. CreateCampaignDTO::fromRequest()
   ↓ [Spatie Data creates type-safe DTO]
6. CreateCampaignAction::run($dto)
   ↓
7. Campaign::createModel($dto)
   ↓ [Transforms DTO to array, encodes JSON]
8. CampaignWriteRepository::create($data)
   ↓ [Eloquent creates record]
   ↓ [Throws FailedToCreateCampaignException on failure]
9. new CampaignResource($campaign)
   ↓ [Formats response with toArray()]
10. JSON Response (201 Created)
```

**Code:**

```php
// 1-2: Route
Route::post('/', [CampaignController::class, 'create']);

// 3: Controller
public function create(
    CreateCampaignRequest $request,      // 4: Auto-validates
    CreateCampaignAction $createCampaignAction
): CampaignResource {
    $dto = CreateCampaignDTO::fromRequest($request);  // 5: DTO
    return $createCampaignAction->run($dto);          // 6-10: Execute
}

// 6: Action
public function run(CreateCampaignDTO $dto): CampaignResource
{
    $data = Campaign::createModel($dto);  // 7: Transform
    $campaign = $this->campaignWriteRepository->create($data);  // 8: Persist
    return new CampaignResource($campaign);  // 9: Format
}

// 8: Repository
public function create(array $data): Campaign
{
    if (!$campaign = $this->query()->create($data)) {
        throw new FailedToCreateCampaignException();
    }
    return $campaign;
}
```

---

## Design Patterns in Detail

### 1. **Service Layer Pattern**

**Three-tier organization:**

| Type | Purpose | Example | Complexity |
|------|---------|---------|------------|
| **Actions** | High-level operations exposed to controllers | `CreateCampaignAction` | Low-Medium |
| **UseCases** | Complex multi-step business processes | `CreateTargetingExpressionModulesUseCase` | Medium-High |
| **Tasks** | Atomic, reusable units of work | `CreateUserInvitationTask`, `SendUserInvitationTask` | Low |

**When to use which:**

- **Action**: Standard CRUD operations, simple workflows
- **UseCase**: Multi-entity operations, complex business rules
- **Task**: Reusable operations called by Actions/UseCases

### 2. **DTO Pattern (Data Transfer Objects)**

**Implementation:** Spatie Laravel Data

**Benefits:**
- Type safety across layers
- Single source of truth
- Validation at DTO level
- IDE autocomplete
- Testability

**Example Flow:**
```
HTTP Request → FormRequest → DTO → Action → Repository
```

### 3. **Repository Pattern**

**Key Features:**
- Interface-driven (testability)
- CQRS separation (Read/Write split)
- Domain exceptions (not generic)
- Private query builders (encapsulation)

**Bound in Service Provider:**
```php
$this->app->bind(CampaignWriteRepositoryInterface::class, CampaignWriteRepository::class);
$this->app->bind(CampaignReadRepositoryInterface::class, CampaignReadRepository::class);
```

### 4. **Resource Pattern**

**Purpose:** Consistent API response formatting

**Features:**
- Hides internal model structure
- Transforms data (JSON decode, type casting)
- Includes nested resources
- Supports collections

### 5. **Factory Pattern**

**DTO Factories:**
```php
CreateCampaignDTO::fromRequest($request);
```

**Model Factories:**
```php
Campaign::createModel($dto);
```

### 6. **Strategy Pattern (Implicit)**

Repository interfaces allow swapping implementations:
- Could swap Eloquent for Query Builder
- Could add caching layer
- Could use different data sources for Read/Write

---

## Naming Conventions

### Controllers
```
{Domain}Controller.php
Example: CampaignController, AdvertiserController
Location: app/Http/Controllers/Api/V1/{Domain}/
```

### Requests
```
{Action}{Domain}Request.php
Examples:
- CreateCampaignRequest
- UpdateCampaignRequest
- IndexCampaignRequest
- GetCampaignRequest
- DeleteCampaignRequest
Location: app/Http/Requests/{Domain}/
```

### DTOs
```
{Action}{Domain}DTO.php
Examples:
- CreateCampaignDTO
- UpdateCampaignDTO
- IndexCampaignDTO
Location: app/Services/{Domain}/DTO/
```

### Actions
```
{Action}{Domain}Action.php
Examples:
- CreateCampaignAction
- UpdateCampaignAction
- IndexCampaignAction
- GetCampaignAction
- DeleteCampaignAction
Location: app/Services/{Domain}/Actions/
```

### UseCases
```
{Action}{Domain}UseCase.php
Example: CreateTargetingExpressionModulesUseCase
Location: app/Services/{Domain}/UseCases/
```

### Tasks
```
{Action}{Subject}Task.php
Examples:
- CreateUserInvitationTask
- SendUserInvitationTask
Location: app/Services/{Domain}/Tasks/
```

### Repositories
```
{Domain}{Type}Repository{Interface}.php
Examples:
- CampaignReadRepository.php
- CampaignReadRepositoryInterface.php
- CampaignWriteRepository.php
- CampaignWriteRepositoryInterface.php
Location: app/Repositories/{Type}/{Domain}/
```

### Resources
```
{Domain}Resource.php
Example: CampaignResource
Location: app/Http/Resources/{Domain}/
```

### Models
```
{Domain}.php (singular)
Example: Campaign, Advertiser, LineItem
Location: app/Models/
```

### Exceptions
```
{Error}{Domain}Exception.php
Examples:
- FailedToCreateCampaignException
- CampaignDoesNotExistException
- FailedToDeleteCampaignException
Location: app/Exceptions/{Domain}/
```

### Enums
```
{Domain}{Attribute}Enum.php
Examples:
- CampaignBudgetTypeEnum
- CampaignRevenueTypeEnum
Location: app/Enums/{Domain}/
```

### Constants
```
{Domain}Constants.php
Example: CampaignConstants
Location: app/Constants/{Domain}/
```

---

## Request Lifecycle

### 1. **HTTP Request arrives**
```
POST /api/campaigns
Headers: Authorization: Bearer {token}
Body: { advertiser_id: "...", name: "...", ... }
```

### 2. **Middleware Chain**
```php
Route::middleware('auth:api')->group(function () {
    // Passport validates token
    // Attaches user to request
});
```

### 3. **Route Matching**
```php
Route::post('/', [CampaignController::class, 'create']);
```

### 4. **Controller Invocation**
```php
public function create(
    CreateCampaignRequest $request,     // Auto-injected & validated
    CreateCampaignAction $createCampaignAction  // Auto-injected via DI
): CampaignResource
```

### 5. **Request Validation** (FormRequest)
```php
// Automatic validation before controller method runs
public function rules(): array {
    return [
        'advertiser_id' => ['uuid', 'required'],
        'name' => ['string', 'required', 'between:1,255'],
        // ... 40+ validation rules
    ];
}
// If validation fails: 422 Unprocessable Entity with errors
```

### 6. **DTO Creation**
```php
$dto = CreateCampaignDTO::fromRequest($request);
// Type-safe object with all validated data
// Includes authenticated user: $dto->user_id
```

### 7. **Action Execution**
```php
return $createCampaignAction->run($dto);
```

### 8. **Model Transformation**
```php
$data = Campaign::createModel($dto);
// Converts DTO to array
// Handles JSON encoding for arrays
```

### 9. **Repository Persistence**
```php
$campaign = $this->campaignWriteRepository->create($data);
// Eloquent creates record
// Throws domain exception on failure
```

### 10. **Resource Transformation**
```php
return new CampaignResource($campaign);
// Formats response with toArray()
// Decodes JSON fields
// Includes relationships
```

### 11. **JSON Response**
```json
{
  "id": "uuid",
  "user_id": "uuid",
  "advertiser_id": "uuid",
  "name": "Campaign Name",
  "line_items": [],
  "created_at": "2025-11-12T...",
  ...
}
```

### Error Handling During Lifecycle

**Validation Error (Step 5):**
```json
HTTP 422 Unprocessable Entity
{
  "status": 422,
  "errors": {
    "message": "The given data was invalid.",
    "errors": {
      "name": "The name field is required."
    }
  }
}
```

**Domain Exception (Step 9):**
```json
HTTP 400 Bad Request
{
  "status": 619,
  "errors": {
    "message": "Failed to create campaign"
  }
}
```

**Authentication Error:**
```json
HTTP 401 Unauthorized
{
  "status": 401,
  "errors": {
    "message": "Unauthenticated."
  }
}
```

---

## Data Flow Patterns

### CRUD Operations Pattern

Every domain follows this consistent pattern:

| HTTP Method | Action | Request | DTO | Repository Method | Resource |
|-------------|--------|---------|-----|-------------------|----------|
| GET | index | IndexCampaignRequest | IndexCampaignDTO | CampaignReadRepository::index() | CampaignResource::collection() |
| GET | show | GetCampaignRequest | - | CampaignReadRepository::getById() | CampaignResource |
| POST | create | CreateCampaignRequest | CreateCampaignDTO | CampaignWriteRepository::create() | CampaignResource |
| PUT | update | UpdateCampaignRequest | UpdateCampaignDTO | CampaignWriteRepository::update() | CampaignResource |
| DELETE | delete | DeleteCampaignRequest | - | CampaignWriteRepository::delete() | JsonResponse |

### Nested Resources Pattern

For relationships (e.g., Campaigns → Creatives):

```php
// Route
Route::prefix('campaigns/{campaign_id}')->group(function () {
    Route::prefix('creatives')->group(function () {
        Route::post('/', [CampaignCreativeController::class, 'create']);
        Route::get('/', [CampaignCreativeController::class, 'index']);
    });
});
```

### Pagination Pattern

**Request:**
```
GET /api/campaigns?page=1&per_page=25
```

**DTO:**
```php
class IndexCampaignDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;
}

class PaginationParamsDTO
{
    public int $page;
    public int $per_page;
}
```

**Repository:**
```php
return $this->query()
    ->where('user_id', $dto->user_id)
    ->paginate(
        $dto->pagination->per_page,
        ['*'],
        'page',
        $dto->pagination->page
    );
```

**Response:**
```json
{
  "data": [...],
  "links": {...},
  "meta": {
    "current_page": 1,
    "per_page": 25,
    "total": 100
  }
}
```

---

## Infrastructure & External Services

### 1. **Authentication - Laravel Passport (OAuth2)**

**Configuration:** `config/passport.php`

```php
'private_key' => env('PASSPORT_PRIVATE_KEY'),
'public_key' => env('PASSPORT_PUBLIC_KEY'),
```

**Keys stored in:** `storage/oauth-private.key`, `storage/oauth-public.key`

**Usage:**
```php
Route::middleware('auth:api')->group(function () {
    // Protected routes
});
```

**Token Access:**
```php
$request->user()->id  // Authenticated user
```

### 2. **Search - ElasticSearch via Scout**

**Configuration:**
- `config/scout.php` - Scout driver config
- `config/elastic.scout_driver.php` - Elastic driver config
- `config/elastic.client.php` - Elastic client config
- `config/elastic.mapping.ads.php` - Index mapping

**Implementation in Ad Model:**
```php
use Elastic\ScoutDriverPlus\Searchable;

class Ad extends Model
{
    use Searchable;

    public function toSearchableArray(): array
    {
        return [/* indexed fields */];
    }

    protected static function boot(): void
    {
        static::saved(function ($model) {
            $model->searchable();  // Auto-index on save
        });
    }
}
```

**Usage:**
```php
Ad::search('query')->get();
```

### 3. **Caching - Redis via Predis**

**Configuration:** `config/cache.php`, `config/database.php`

**Not explicitly used in code samples, but available for:**
- Session storage
- Cache layer for repositories
- Queue backend

### 4. **Media Processing - FFmpeg**

**Package:** `php-ffmpeg/php-ffmpeg`

**Likely used for:**
- Video creative processing
- Thumbnail generation
- Format conversion

### 5. **Media Management - Spatie Media Library**

**Package:** `spatie/laravel-medialibrary`

**Configuration:** `config/media-library.php`

**Likely used for:**
- Creative asset management
- File uploads
- Image transformations

### 6. **Permissions - Spatie Permission**

**Package:** `spatie/laravel-permission`

**Configuration:** `config/permission.php`

**Likely used for:**
- Role-based access control
- Team permissions
- Resource ownership checks

---

## Security Architecture

### 1. **Authentication**

**OAuth2 via Laravel Passport:**
- Token-based authentication
- Personal access tokens
- Password grant type
- Secure key storage

### 2. **Authorization**

**Middleware Stack:**
```php
Route::middleware(['auth:api', 'is_active_user', 'is_owner'])
```

**Custom Middleware:**
- `is_active_user` - Checks user account status
- `is_owner` - Verifies resource ownership

**Policies (Gate-based):**
- `app/Policies/CampaignPolicy.php`
- `app/Policies/AdvertiserPolicy.php`
- `app/Policies/CreativePolicy.php`
- etc.

### 3. **Input Validation**

**Multi-layer validation:**

1. **FormRequest validation rules**
2. **Spatie Enum validation** for type safety
3. **DTO type hints** for compile-time checks

**Example:**
```php
public function rules(): array
{
    return [
        'budget_type' => [
            'nullable',
            'integer',
            new EnumRule(CampaignBudgetTypeEnum::class),
        ],
    ];
}
```

### 4. **SQL Injection Protection**

- Eloquent ORM (parameterized queries)
- Query builder escaping
- No raw SQL in code samples

### 5. **Mass Assignment Protection**

```php
protected $fillable = [/* explicit whitelist */];
```

### 6. **CORS Configuration**

**File:** `config/cors.php`

### 7. **Secrets Management**

- `.env` file for environment variables
- Keys in `storage/` (gitignored)
- No hardcoded secrets in code

---

## Error Handling Strategy

### Exception Hierarchy

```
Exception (PHP)
  └── BusinessLogicException (Abstract Base)
        ├── FailedToCreateCampaignException
        ├── CampaignDoesNotExistException
        ├── FailedToUpdateCampaignException
        ├── FailedToDeleteCampaignException
        └── ... 40+ domain exceptions
```

### BusinessLogicException Base Class

```php
abstract class BusinessLogicException extends Exception
{
    // Status codes
    public const VALIDATION_FAILED = 422;
    public const FAILED_TO_CREATE_CAMPAIGN = 619;
    public const CAMPAIGN_DOES_NOT_EXIST = 621;
    // ... 40+ unique error codes

    private int $httpStatusCode = 400;  // Default

    public function getHttpStatusCode(): int;
    abstract public function getStatus(): int;
    abstract public function getStatusMessage(): string;
}
```

### Domain Exception Example

```php
class FailedToCreateCampaignException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_CAMPAIGN;  // 619
    }

    public function getStatusMessage(): string
    {
        return __('errors.campaign.failed_create');  // Localized
    }
}
```

### Global Exception Handler

**File:** `app/Exceptions/Handler.php`

**Handles:**
- ValidationException → 422 with field errors
- ModelNotFoundException → 404
- AuthenticationException → 401
- AuthorizationException → 403
- BusinessLogicException → Custom status codes
- Generic exceptions → 500 (details hidden in production)

**Response Format:**
```json
{
  "status": 619,
  "errors": {
    "message": "Failed to create campaign"
  }
}
```

### Repository Exception Throwing

```php
public function create(array $data): Campaign
{
    if (!$campaign = $this->query()->create($data)) {
        throw new FailedToCreateCampaignException();
    }
    return $campaign;
}
```

**Benefits:**
- Explicit error handling
- Domain-specific error messages
- Unique error codes for debugging
- Localization support

---

## Domain Organization

The project is organized around business domains:

### Core Domains (Business Logic)

| Domain | Models | Purpose |
|--------|--------|---------|
| **Advertiser** | Advertiser | Ad agencies/brands |
| **Campaign** | Campaign | Marketing campaigns |
| **LineItem** | LineItem | Campaign line items |
| **Creative** | Creative | Ad creatives (banners, videos) |
| **TargetingExpression** | TargetingExpression, TargetingExpressionModule | Audience targeting |
| **BidModifier** | BidModifier | Bid adjustments |
| **DeliveryModifier** | DeliveryModifier | Delivery pacing |
| **VendorFee** | VendorFee | Vendor fee structures |

### Supporting Domains

| Domain | Purpose |
|--------|---------|
| **User** | User management |
| **Team** | Team/organization management |
| **UserInvitation** | User invitation flow |
| **Event** | Custom tracking events |
| **UploadFile** | File upload handling |

### Lookup/Reference Domains

| Domain | Purpose |
|--------|---------|
| **AdvertiserCategory** | Industry categories |
| **Continent, Country, Region, City, Metro** | Geo-targeting |
| **Language** | Language targeting |
| **Currency** | Multi-currency support |
| **Carrier** | Mobile carrier targeting |
| **Browser, BrowserVersion** | Browser targeting |
| **DeviceMake, DeviceModel** | Device targeting |
| **OperatingSystemVersion** | OS targeting |
| **Inventory, InventorySource** | Ad inventory |
| **App** | Mobile apps |
| **DataProvider** | Data providers |
| **SegmentTree** | Audience segments |
| **Timezone** | Timezone support |
| **CreativeTemplate** | Creative templates |
| **CreativeAddon** | Creative add-ons |
| **CreativeAttribute** | Creative attributes |
| **CreativeSize** | Ad sizes |
| **AdPosition** | Ad placements |
| **ApiFramework** | API frameworks |
| **BannerAdType** | Banner types |
| **Bandwidth** | Connection types |
| **TechnicalVendors** | Technical vendors |

### Special Domains

| Domain | Purpose |
|--------|---------|
| **AuctionResult** | RTB auction results (win/loss notices) |
| **Ad** | ElasticSearch-indexed ad documents |

### Folder Structure per Domain

```
app/Services/{Domain}/
  ├── Actions/
  │     ├── Create{Domain}Action.php
  │     ├── Update{Domain}Action.php
  │     ├── Index{Domain}Action.php
  │     ├── Get{Domain}Action.php
  │     └── Delete{Domain}Action.php
  ├── DTO/
  │     ├── Create{Domain}DTO.php
  │     ├── Update{Domain}DTO.php
  │     └── Index{Domain}DTO.php
  ├── UseCases/
  │     └── {Complex}UseCase.php
  └── Tasks/
        └── {Atomic}Task.php
```

---

## Best Practices Observed

### 1. **Type Safety**

✅ **Typed properties everywhere:**
```php
public string $user_id;
public ?string $alternative_id;
public bool $active;
```

✅ **Return type hints:**
```php
public function run(CreateCampaignDTO $dto): CampaignResource
```

✅ **Enum validation:**
```php
new EnumRule(CampaignBudgetTypeEnum::class)
```

### 2. **Explicit is Better than Implicit**

✅ **Constants for field names:**
```php
public const ADVERTISER_ID = 'advertiser_id';
```

✅ **Typed getters instead of array access:**
```php
public function getAdvertiserId(): string
{
    return $this->get(self::ADVERTISER_ID);
}
```

✅ **Explicit exception throwing:**
```php
if (!$campaign) {
    throw new CampaignDoesNotExistException();
}
```

### 3. **Single Responsibility Principle**

✅ **Controllers only orchestrate:**
```php
$dto = CreateCampaignDTO::fromRequest($request);
return $createCampaignAction->run($dto);
```

✅ **Actions delegate to repositories:**
```php
$campaign = $this->campaignWriteRepository->create($data);
```

✅ **Models only define structure and relationships:**
```php
public function lineItems(): HasMany
{
    return $this->hasMany(LineItem::class);
}
```

### 4. **Dependency Injection**

✅ **Constructor injection:**
```php
public function __construct(
    protected CampaignWriteRepositoryInterface $campaignWriteRepository
) {}
```

✅ **Interface-based dependencies:**
```php
CampaignWriteRepositoryInterface (not concrete class)
```

### 5. **Consistent Naming**

✅ **Follows Laravel conventions**
✅ **Domain-aligned folders**
✅ **Predictable file locations**

### 6. **Domain-Driven Design**

✅ **Organized by business domain** (not technical layer)
✅ **Domain-specific exceptions**
✅ **Ubiquitous language** (Campaign, Advertiser, LineItem)

### 7. **Separation of Concerns**

✅ **Read/Write repository split**
✅ **Validation in FormRequests**
✅ **Business logic in Actions/UseCases**
✅ **Response formatting in Resources**

### 8. **Error Handling**

✅ **Domain exceptions with unique codes**
✅ **Localized error messages**
✅ **Consistent error response format**

### 9. **Security**

✅ **OAuth2 authentication**
✅ **Input validation at multiple layers**
✅ **Authorization middleware**
✅ **Fillable whitelist on models**

### 10. **Documentation**

✅ **PHPDoc comments:**
```php
/**
 * @throws FailedToCreateCampaignException
 */
```

✅ **Model property annotations:**
```php
/**
 * @property string $id
 * @property string $name
 */
```

---

## Potential Improvements

### 1. **Testing Coverage**

**Current State:** Only `ExampleTest.php` found

**Recommendations:**
- Add unit tests for Actions/UseCases
- Add integration tests for API endpoints
- Mock repository interfaces for isolated testing
- Add feature tests for complete flows

**Example Test Structure:**
```php
tests/
  ├── Unit/
  │     ├── Actions/
  │     ├── UseCases/
  │     └── DTOs/
  ├── Feature/
  │     ├── Campaign/
  │     │     ├── CreateCampaignTest.php
  │     │     ├── UpdateCampaignTest.php
  │     │     └── IndexCampaignTest.php
  │     └── ...
  └── Integration/
        └── Repositories/
```

### 2. **Database Transactions in Actions**

**Current:** No explicit transaction handling in Actions

**Recommendation:** Wrap complex operations in DB transactions:

```php
public function run(CreateCampaignDTO $dto): CampaignResource
{
    return DB::transaction(function () use ($dto) {
        $data = Campaign::createModel($dto);
        $campaign = $this->campaignWriteRepository->create($data);
        
        // Additional operations...
        
        return new CampaignResource($campaign);
    });
}
```

### 3. **Event-Driven Architecture**

**Opportunity:** Use Laravel Events for side effects

**Example:**
```php
// In Action
event(new CampaignCreated($campaign));

// Listener
class SendCampaignCreatedNotification
{
    public function handle(CampaignCreated $event)
    {
        // Send email, log, update analytics, etc.
    }
}
```

**Benefits:**
- Decouple side effects
- Easier to add features
- Better for async processing

### 4. **Caching Layer for Read Repositories**

**Pattern:** Repository decorator with cache

```php
class CachedCampaignReadRepository implements CampaignReadRepositoryInterface
{
    public function __construct(
        private CampaignReadRepositoryInterface $repository,
        private CacheInterface $cache
    ) {}

    public function getById(string $id, array $relations = []): Campaign
    {
        return $this->cache->remember("campaign:{$id}", 3600, function () use ($id, $relations) {
            return $this->repository->getById($id, $relations);
        });
    }
}
```

### 5. **API Versioning Strategy**

**Current:** `Api/V1/` namespace exists

**Recommendation:** Document versioning strategy:
- When to create V2?
- Deprecation policy?
- Version negotiation (URL vs header)?

### 6. **Query Optimization**

**Current:** Eager loading via `$relations` parameter

**Recommendation:**
- Add query scopes for common filters
- Implement N+1 query detection
- Add database indexes for frequently queried columns

### 7. **Rate Limiting**

**Recommendation:** Add rate limiting middleware:

```php
Route::middleware(['auth:api', 'throttle:60,1'])->group(function () {
    // 60 requests per minute
});
```

### 8. **API Documentation**

**Recommendation:** Generate API docs with:
- Swagger/OpenAPI
- Laravel API Resource Docs
- Postman collections

### 9. **Logging & Monitoring**

**Recommendation:** Add structured logging:

```php
// In Action
Log::info('Campaign created', [
    'campaign_id' => $campaign->id,
    'user_id' => $dto->user_id,
    'advertiser_id' => $dto->advertiser_id,
]);
```

**Also consider:**
- Application Performance Monitoring (APM)
- Error tracking (Sentry, Bugsnag)
- Query monitoring

### 10. **Code Quality Tools**

**Current:** `phpstan` in vendor

**Recommendation:** Enforce in CI:
```bash
composer require --dev phpstan/phpstan
vendor/bin/phpstan analyse app --level=8
```

**Also add:**
- PHP CS Fixer (already have Pint)
- PHPUnit with coverage reports
- Pre-commit hooks

### 11. **Background Job Processing**

**Opportunity:** Move slow operations to queues

**Examples:**
- Media processing (FFmpeg)
- ElasticSearch indexing
- Notification sending
- Report generation

```php
// In Action
ProcessCreativeMedia::dispatch($creative);
```

### 12. **Soft Delete Handling**

**Current:** Models use `SoftDeletes`

**Recommendation:** Ensure:
- Restore endpoints exist
- Cascade soft deletes for related records
- Cleanup job for permanently deleting old records

### 13. **Audit Trail**

**Recommendation:** Add activity logging:
- Who created/updated records
- What changed (old vs new values)
- When actions occurred

**Package suggestion:** `spatie/laravel-activitylog`

### 14. **API Response Standardization**

**Current:** Resources provide structure

**Recommendation:** Wrap all responses consistently:

```json
{
  "success": true,
  "data": { ... },
  "meta": { ... },
  "errors": null
}
```

### 15. **Environment-Specific Configuration**

**Recommendation:** Document environment configs:
- Local development setup
- Staging environment
- Production requirements
- CI/CD pipeline

---

## Summary

This starter pack demonstrates a **mature, well-architected Laravel application** following industry best practices:

### Strengths

✅ **Clean Architecture** - Clear separation of concerns  
✅ **Type Safety** - Extensive use of typed properties and DTOs  
✅ **CQRS Pattern** - Read/Write repository separation  
✅ **Dependency Injection** - Interface-driven design  
✅ **Domain-Driven Design** - Business-aligned organization  
✅ **Consistent Patterns** - Predictable structure across domains  
✅ **Explicit Error Handling** - Domain exceptions with unique codes  
✅ **Security** - OAuth2, validation, authorization  
✅ **Scalability** - ElasticSearch, Redis, queue support  

### Areas for Enhancement

⚠️ **Testing Coverage** - Add comprehensive tests  
⚠️ **Transaction Management** - Wrap complex operations  
⚠️ **Caching Strategy** - Implement repository caching  
⚠️ **Event-Driven Features** - Use events for side effects  
⚠️ **Documentation** - API docs, architecture diagrams  
⚠️ **Monitoring** - Logging, APM, error tracking  

### Architecture Score: 9/10

This project serves as an **excellent reference** for:
- Laravel API development
- Clean architecture implementation
- Domain-driven design in PHP
- Scalable application structure

The codebase is **production-ready** with minor improvements needed primarily in testing and operational observability.

---

## Appendix: Quick Reference

### File Locations

```
app/
├── Console/Kernel.php
├── Constants/{Domain}/{Domain}Constants.php
├── Enums/{Domain}/{Domain}{Attribute}Enum.php
├── Exceptions/
│   ├── Handler.php
│   ├── BusinessLogicException.php
│   └── {Domain}/{Error}{Domain}Exception.php
├── Http/
│   ├── Controllers/
│   │   ├── ApiController.php
│   │   └── Api/V1/{Domain}/{Domain}Controller.php
│   ├── Middleware/
│   ├── Requests/
│   │   ├── ListRequest.php
│   │   └── {Domain}/{Action}{Domain}Request.php
│   └── Resources/{Domain}/{Domain}Resource.php
├── Models/{Domain}.php
├── Policies/{Domain}Policy.php
├── Providers/
│   ├── AppServiceProvider.php
│   ├── AuthServiceProvider.php
│   ├── RepositoryServiceProvider.php
│   └── RouteServiceProvider.php
├── Repositories/
│   ├── Read/{Domain}/{Domain}ReadRepository{Interface}.php
│   └── Write/{Domain}/{Domain}WriteRepository{Interface}.php
└── Services/
    ├── DTO/PaginationParamsDTO.php
    └── {Domain}/
        ├── Actions/{Action}{Domain}Action.php
        ├── DTO/{Action}{Domain}DTO.php
        ├── UseCases/{Complex}UseCase.php
        └── Tasks/{Atomic}Task.php
```

### Key Commands

```bash
# Start containers
docker compose up -d

# Access container
docker exec -it enterprise-api-php bash

# Run migrations
php artisan migrate

# Seed database
php artisan db:seed

# Install Passport
php artisan passport:install --uuids
php artisan passport:client --password

# Install FFmpeg
sudo apt install ffmpeg

# Run tests
vendor/bin/phpunit

# Code style
vendor/bin/pint

# Clear cache
php artisan cache:clear
php artisan config:clear
```

---

**End of Architecture Analysis**
