<?php

namespace App\Models;

use App\Constants\User\UserConstants;
use App\Services\Auth\DTO\RegisterDTO;
use Database\Factories\UserFactory;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

/**
 * App\Models\User
 *
 * @property string $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $password
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class User extends Authenticatable implements HasMedia
{
    use HasRoles;
    use HasUuids;
    use Notifiable;
    use HasFactory;
    use HasApiTokens;
    use HasPermissions;
    use CanResetPassword;
    use InteractsWithMedia;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'password',
        'status',
        'phone',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $keyType = 'string';

    public static function createModel(RegisterDTO $dto): array
    {
        return [
            'id'            => Str::uuid()->toString(),
            'first_name'    => $dto->firstName,
            'last_name'     => $dto->lastName,
            'email'         => $dto->email,
            'password'      => Hash::make($dto->password),
            'status'        => UserConstants::STATUS_ACTIVE,
            'phone'         => $dto->phone
        ];
    }

    public function findForPassport($email): ?self
    {
        return User::where('email', $email)->first();
    }

    public static function newFactory(): UserFactory
    {
        return new UserFactory();
    }

    public function invitations(): hasOne
    {
        return $this->hasOne(UserInvitation::class);
    }

    private static function generateReferralCode($userId, $username):string
    {
        $baseString = $userId . $username . time();
        $hashedString = hash('sha256', $baseString);

        return substr($hashedString, 0, 10);
    }

    public function ownedTeams(): HasMany
    {
        return $this->hasMany(Team::class, 'owner_id');
    }

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'user_teams');
    }

    public function profilePhoto(): MorphOne
    {
        return $this->morphOne(Media::class, 'model')
            ->where('collection_name', UserConstants::PROFILE_PHOTO);
    }
}
