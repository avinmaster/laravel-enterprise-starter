<?php

use App\Http\Controllers\Api\V1\AdPosition\AdPositionController;
use App\Http\Controllers\Api\V1\Advertiser\AdvertiserController;
use App\Http\Controllers\Api\V1\AdvertiserCategory\AdvertiserCategoryController;
use App\Http\Controllers\Api\V1\ApiFramework\ApiFrameworkController;
use App\Http\Controllers\Api\V1\App\AppController;
use App\Http\Controllers\Api\V1\AuctionResult\AuctionResultController;
use App\Http\Controllers\Api\V1\Bandwidth\BandwidthController;
use App\Http\Controllers\Api\V1\BannerAdType\BannerAdTypeController;
use App\Http\Controllers\Api\V1\BidModifier\BidModifierController;
use App\Http\Controllers\Api\V1\Browser\BrowserController;
use App\Http\Controllers\Api\V1\BrowserVersion\BrowserVersionController;
use App\Http\Controllers\Api\V1\Campaign\CampaignController;
use App\Http\Controllers\Api\V1\CampaignCreative\CampaignCreativeController;
use App\Http\Controllers\Api\V1\Carrier\CarrierController;
use App\Http\Controllers\Api\V1\City\CityController;
use App\Http\Controllers\Api\V1\Continent\ContinentController;
use App\Http\Controllers\Api\V1\Country\CountryController;
use App\Http\Controllers\Api\V1\Creative\CreativeController;
use App\Http\Controllers\Api\V1\CreativeAddon\CreativeAddonController;
use App\Http\Controllers\Api\V1\CreativeAttribute\CreativeAttributeController;
use App\Http\Controllers\Api\V1\CreativeLineItem\CreativeLineItemController;
use App\Http\Controllers\Api\V1\CreativeOfAdvertiser\CreativeOfAdvertiserController;
use App\Http\Controllers\Api\V1\CreativeSize\CreativeSizeController;
use App\Http\Controllers\Api\V1\CreativeTemplate\CreativeTemplateController;
use App\Http\Controllers\Api\V1\Currency\CurrencyController;
use App\Http\Controllers\Api\V1\DataProvider\DataProviderController;
use App\Http\Controllers\Api\V1\DeliveryModifier\DeliveryModifierController;
use App\Http\Controllers\Api\V1\DeviceMake\DeviceMakeController;
use App\Http\Controllers\Api\V1\DeviceModel\DeviceModelController;
use App\Http\Controllers\Api\V1\Event\EventController;
use App\Http\Controllers\Api\V1\Inventory\InventoryController;
use App\Http\Controllers\Api\V1\InventorySource\InventorySourceController;
use App\Http\Controllers\Api\V1\Language\LanguageController;
use App\Http\Controllers\Api\V1\LineItem\LineItemController;
use App\Http\Controllers\Api\V1\List\ListController;
use App\Http\Controllers\Api\V1\Metro\MetroController;
use App\Http\Controllers\Api\V1\OperatingSystemVersion\OperatingSystemVersionController;
use App\Http\Controllers\Api\V1\Region\RegionController;
use App\Http\Controllers\Api\V1\SegmentTree\SegmentTreeController;
use App\Http\Controllers\Api\V1\TargetingExpression\TargetingExpressionController;
use App\Http\Controllers\Api\V1\Team\TeamController;
use App\Http\Controllers\Api\V1\TechnicalVendors\TechnicalVendorsController;
use App\Http\Controllers\Api\V1\Timezone\TimezoneController;
use App\Http\Controllers\Api\V1\UploadFile\UploadFileController;
use App\Http\Controllers\Api\V1\User\UserController;
use App\Http\Controllers\Api\V1\UserInvitation\UserInvitationController;
use App\Http\Controllers\Api\V1\Vendor\VendorController;
use App\Http\Controllers\Api\V1\VendorFee\VendorFeeController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::prefix('users')->group(function () {
        Route::prefix('/{id}')->group(function () {
            Route::post('/upload/image', [UserController::class, 'uploadImage']);
        });
    });

    Route::prefix('user_invitations')->group(function () {
        Route::post('/', [UserInvitationController::class, 'send'])
            ->middleware(['is_active_user', 'is_owner']);
    });

    Route::prefix('teams')->group(function () {
        Route::post('/', [TeamController::class, 'create'])
            ->middleware(['is_active_user', 'is_owner']);
        Route::patch('/{team_id}', [TeamController::class, 'update'])
            ->middleware(['is_active_user', 'is_owner']);
    });

    Route::prefix('creatives')->group(function () {
        Route::get('/', [CreativeController::class, 'index']);
        Route::post('/', [CreativeController::class, 'create']);

        Route::prefix('/{id}')->group(function () {
            Route::get('/', [CreativeController::class, 'show']);
            Route::put('/', [CreativeController::class, 'update']);
            Route::delete('/', [CreativeController::class, 'delete']);
        });
    });

    Route::prefix('advertisers')->group(function () {
        Route::post('/', [AdvertiserController::class, 'create']);
        Route::put('/{id}', [AdvertiserController::class, 'update']);
        Route::get('/{id}', [AdvertiserController::class, 'show']);
        Route::get('/', [AdvertiserController::class, 'index']);
        Route::delete('/{id}', [AdvertiserController::class, 'delete']);
        Route::post('/bulk_delete', [AdvertiserController::class, 'bulkDelete']);

        Route::prefix('/{advertiser_id}')->group(function () {
            Route::prefix('/creatives')->group(function () {
                Route::get('/', [CreativeOfAdvertiserController::class, 'index']);
            });
        });
    });

    Route::prefix('advertiser_categories')->group(function () {
        Route::get('/', [AdvertiserCategoryController::class, 'index']);
    });

    Route::prefix('continents')->group(function () {
        Route::get('/', [ContinentController::class, 'index']);
    });

    Route::prefix('currencies')->group(function () {
        Route::get('/', [CurrencyController::class, 'index']);
    });

    Route::prefix('creative_templates')->group(function () {
        Route::get('/', [CreativeTemplateController::class, 'index']);
    });

    Route::prefix('creative_addons')->group(function () {
        Route::get('/', [CreativeAddonController::class, 'index']);
    });

    Route::prefix('creative_sizes')->group(function () {
        Route::get('/', [CreativeSizeController::class, 'index']);
    });

    Route::prefix('ad_positions')->group(function () {
        Route::get('/', [AdPositionController::class, 'index']);
    });

    Route::prefix('api_frameworks')->group(function () {
        Route::get('/', [ApiFrameworkController::class, 'index']);
    });

    Route::prefix('banner_ad_types')->group(function () {
        Route::get('/', [BannerAdTypeController::class, 'index']);
    });

    Route::prefix('creative_attributes')->group(function () {
        Route::get('/', [CreativeAttributeController::class, 'index']);
    });

    Route::prefix('events')->group(function () {
        Route::post('/', [EventController::class, 'create']);
        Route::get('/{id}', [EventController::class, 'show']);
        Route::get('/', [EventController::class, 'index']);
        Route::delete('/{id}', [EventController::class, 'delete']);
    });

    Route::prefix('campaigns')->group(function () {
        Route::post('/', [CampaignController::class, 'create']);
        Route::put('/{id}', [CampaignController::class, 'update']);
        Route::get('/{id}', [CampaignController::class, 'show']);
        Route::get('/', [CampaignController::class, 'index']);
        Route::delete('/{id}', [CampaignController::class, 'delete']);

        Route::prefix('/{campaign_id}')->group(function () {
            Route::prefix('/creatives')->group(function () {
                Route::post('/', [CampaignCreativeController::class, 'create']);
                Route::get('/', [CampaignCreativeController::class, 'index']);

                Route::prefix('/{campaign_creative_id}')->group(function () {
                    Route::get('/', [CampaignCreativeController::class, 'show']);
                });
            });
        });
    });

    Route::prefix('bid/modifiers')->group(function () {
        Route::post('/', [BidModifierController::class, 'create']);
        Route::put('/{id}', [BidModifierController::class, 'update']);
        Route::get('/{id}', [BidModifierController::class, 'show']);
        Route::get('/', [BidModifierController::class, 'index']);
    });

    Route::prefix('delivery/modifiers')->group(function () {
        Route::post('/', [DeliveryModifierController::class, 'create']);
        Route::put('/{id}', [DeliveryModifierController::class, 'update']);
        Route::get('/{id}', [DeliveryModifierController::class, 'show']);
        Route::get('/', [DeliveryModifierController::class, 'index']);
        Route::delete('/{id}', [DeliveryModifierController::class, 'delete']);
    });

    Route::prefix('line_items')->group(function () {
        Route::get('/', [LineItemController::class, 'index']);
        Route::post('/', [LineItemController::class, 'create']);

        Route::prefix('/{line_item_id}')->group(function () {
            Route::get('/', [LineItemController::class, 'show']);
            Route::patch('/', [LineItemController::class, 'setTargetingExpressionId']);

            Route::prefix('/creatives')->group(function () {
                Route::post('/', [CreativeLineItemController::class, 'create']);
                Route::get('/', [CreativeLineItemController::class, 'index']);

                Route::prefix('/{cli_id}')->group(function () {
                    Route::get('/', [CreativeLineItemController::class, 'show']);
                });
            });
        });
    });

    Route::post('upload/file', [UploadFileController::class, 'upload']);

    Route::prefix('vendors')->group(function () {
        Route::get('/', [VendorController::class, 'index']);
    });

    Route::prefix('vendor_fees')->group(function () {
        Route::get('/', [VendorFeeController::class, 'index']);
        Route::post('/', [VendorFeeController::class, 'create']);

        Route::prefix('/{id}')->group(function () {
            Route::get('/', [VendorFeeController::class, 'show']);
        });
    });

    Route::get('technical_vendors', [TechnicalVendorsController::class, 'index']);

    Route::prefix('bandwidths')->group(function () {
        Route::get('/', [BandwidthController::class, 'index']);
    });

    Route::prefix('browsers')->group(function () {
        Route::get('/', [BrowserController::class, 'index']);
    });

    Route::prefix('browsers_versions')->group(function () {
        Route::get('/', [BrowserVersionController::class, 'index']);
    });

    Route::prefix('carriers')->group(function () {
        Route::get('/', [CarrierController::class, 'index']);
    });

    Route::prefix('device_makes')->group(function () {
        Route::get('/', [DeviceMakeController::class, 'index']);
    });

    Route::prefix('device_models')->group(function () {
        Route::get('/', [DeviceModelController::class, 'index']);
    });

    Route::prefix('operating_system_versions')->group(function () {
        Route::get('/', [OperatingSystemVersionController::class, 'index']);
    });

    Route::prefix('cities')->group(function () {
        Route::get('/', [CityController::class, 'index']);
    });

    Route::prefix('countries')->group(function () {
        Route::get('/', [CountryController::class, 'index']);
    });

    Route::prefix('lists')->group(function () {
        Route::get('/', [ListController::class, 'index']);
    });

    Route::prefix('metros')->group(function () {
        Route::get('/', [MetroController::class, 'index']);
    });

    Route::prefix('regions')->group(function () {
        Route::get('/', [RegionController::class, 'index']);
    });

    Route::prefix('targeting_expressions')->group(function () {
        Route::get('/', [TargetingExpressionController::class, 'index']);
        Route::post('/', [TargetingExpressionController::class, 'create']);

        Route::prefix('/{id}')->group(function () {
            Route::get('/', [TargetingExpressionController::class, 'show']);
        });
    });

    Route::prefix('apps')->group(function () {
        Route::get('/', [AppController::class, 'index']);
    });

    Route::prefix('inventories')->group(function () {
        Route::get('/', [InventoryController::class, 'index']);
    });

    Route::prefix('data-providers')->group(function () {
        Route::get('/', [DataProviderController::class, 'index']);
    });

    Route::prefix('inventory-sources')->group(function () {
        Route::get('/', [InventorySourceController::class, 'index']);
    });

    Route::prefix('languages')->group(function () {
        Route::get('/', [LanguageController::class, 'index']);
    });

    Route::prefix('segment-trees')->group(function () {
        Route::get('/', [SegmentTreeController::class, 'index']);
    });

    Route::prefix('timezones')->group(function () {
        Route::get('/', [TimezoneController::class, 'index']);
    });
});

Route::prefix('auction_result')->group(function () {
    Route::post('/win_notice/{ad_id}', [AuctionResultController::class, 'win']);
    Route::post('/loss_notice/{ad_id}', [AuctionResultController::class, 'lose']);
    Route::post('/billing_notice/{ad_id}', [AuctionResultController::class, 'billing']);
    Route::post('/billing_notice', [AuctionResultController::class, 'billing']);
});
