<?php

namespace App\Providers;

use App\Repositories\Read\Advertiser\AdvertiserReadRepository;
use App\Repositories\Read\Advertiser\AdvertiserReadRepositoryInterface;
use App\Repositories\Read\AdvertiserCategory\AdvertiserCategoryReadRepository;
use App\Repositories\Read\AdvertiserCategory\AdvertiserCategoryReadRepositoryInterface;
use App\Repositories\Read\App\AppReadRepository;
use App\Repositories\Read\App\AppReadRepositoryInterface;
use App\Repositories\Read\BidModifier\BidModifierReadRepository;
use App\Repositories\Read\BidModifier\BidModifierReadRepositoryInterface;
use App\Repositories\Read\Campaign\CampaignReadRepository;
use App\Repositories\Read\Campaign\CampaignReadRepositoryInterface;
use App\Repositories\Read\CampaignCreative\CampaignCreativeReadRepository;
use App\Repositories\Read\CampaignCreative\CampaignCreativeReadRepositoryInterface;
use App\Repositories\Read\City\CityReadRepository;
use App\Repositories\Read\City\CityReadRepositoryInterface;
use App\Repositories\Read\Continent\ContinentReadRepository;
use App\Repositories\Read\Continent\ContinentReadRepositoryInterface;
use App\Repositories\Read\Creative\CreativeOfAdvertiserReadRepository;
use App\Repositories\Read\Creative\CreativeOfAdvertiserReadRepositoryInterface;
use App\Repositories\Read\Creative\CreativeReadRepository;
use App\Repositories\Read\Creative\CreativeReadRepositoryInterface;
use App\Repositories\Read\CreativeLineItem\CreativeLineItemReadRepository;
use App\Repositories\Read\CreativeLineItem\CreativeLineItemReadRepositoryInterface;
use App\Repositories\Read\CreativeTemplate\CreativeTemplateReadRepository;
use App\Repositories\Read\CreativeTemplate\CreativeTemplateReadRepositoryInterface;
use App\Repositories\Read\Currency\CurrencyReadRepository;
use App\Repositories\Read\Currency\CurrencyReadRepositoryInterface;
use App\Repositories\Read\DataProvider\DataProviderReadRepository;
use App\Repositories\Read\DataProvider\DataProviderReadRepositoryInterface;
use App\Repositories\Read\DeliveryModifier\DeliveryModifierReadRepository;
use App\Repositories\Read\DeliveryModifier\DeliveryModifierReadRepositoryInterface;
use App\Repositories\Read\Event\EventReadRepository;
use App\Repositories\Read\Event\EventReadRepositoryInterface;
use App\Repositories\Read\Inventory\InventoryReadRepository;
use App\Repositories\Read\Inventory\InventoryReadRepositoryInterface;
use App\Repositories\Read\InventorySource\InventorySourceReadRepository;
use App\Repositories\Read\InventorySource\InventorySourceReadRepositoryInterface;
use App\Repositories\Read\Language\LanguageReadRepository;
use App\Repositories\Read\Language\LanguageReadRepositoryInterface;
use App\Repositories\Read\LineItem\LineItemReadRepository;
use App\Repositories\Read\LineItem\LineItemReadRepositoryInterface;
use App\Repositories\Read\List\ListReadRepository;
use App\Repositories\Read\List\ListReadRepositoryInterface;
use App\Repositories\Read\Metro\MetroReadRepository;
use App\Repositories\Read\Metro\MetroReadRepositoryInterface;
use App\Repositories\Read\Region\RegionReadRepository;
use App\Repositories\Read\Region\RegionReadRepositoryInterface;
use App\Repositories\Read\SegmentTree\SegmentTreeReadRepository;
use App\Repositories\Read\SegmentTree\SegmentTreeReadRepositoryInterface;
use App\Repositories\Read\TargetingExpression\TargetingExpressionReadRepository;
use App\Repositories\Read\TargetingExpression\TargetingExpressionReadRepositoryInterface;
use App\Repositories\Read\Team\TeamReadRepository;
use App\Repositories\Read\Team\TeamReadRepositoryInterface;
use App\Repositories\Read\Timezone\TimezoneReadRepository;
use App\Repositories\Read\Timezone\TimezoneReadRepositoryInterface;
use App\Repositories\Read\User\UserReadRepository;
use App\Repositories\Read\User\UserReadRepositoryInterface;
use App\Repositories\Read\UserInvitation\UserInvitationReadRepository;
use App\Repositories\Read\UserInvitation\UserInvitationReadRepositoryInterface;
use App\Repositories\Read\VendorFee\VendorFeeReadRepository;
use App\Repositories\Read\VendorFee\VendorFeeReadRepositoryInterface;
use App\Repositories\Write\Advertiser\AdvertiserWriteRepository;
use App\Repositories\Write\Advertiser\AdvertiserWriteRepositoryInterface;
use App\Repositories\Write\BidModifier\BidModifierWriteRepository;
use App\Repositories\Write\BidModifier\BidModifierWriteRepositoryInterface;
use App\Repositories\Write\Campaign\CampaignWriteRepository;
use App\Repositories\Write\Campaign\CampaignWriteRepositoryInterface;
use App\Repositories\Write\CampaignCreative\CampaignCreativeWriteRepository;
use App\Repositories\Write\CampaignCreative\CampaignCreativeWriteRepositoryInterface;
use App\Repositories\Write\Creative\CreativeWriteRepository;
use App\Repositories\Write\Creative\CreativeWriteRepositoryInterface;
use App\Repositories\Write\CreativeLineItem\CreativeLineItemWriteRepository;
use App\Repositories\Write\CreativeLineItem\CreativeLineItemWriteRepositoryInterface;
use App\Repositories\Write\DeliveryModifier\DeliveryModifierWriteRepository;
use App\Repositories\Write\DeliveryModifier\DeliveryModifierWriteRepositoryInterface;
use App\Repositories\Write\Event\EventWriteRepository;
use App\Repositories\Write\Event\EventWriteRepositoryInterface;
use App\Repositories\Write\LineItem\LineItemWriteRepository;
use App\Repositories\Write\LineItem\LineItemWriteRepositoryInterface;
use App\Repositories\Write\LineItemFlight\LineItemFlightWriteRepository;
use App\Repositories\Write\LineItemFlight\LineItemFlightWriteRepositoryInterface;
use App\Repositories\Write\TargetingExpression\TargetingExpressionWriteRepository;
use App\Repositories\Write\TargetingExpression\TargetingExpressionWriteRepositoryInterface;
use App\Repositories\Write\TargetingExpressionModule\TargetingExpressionModuleWriteRepository;
use App\Repositories\Write\TargetingExpressionModule\TargetingExpressionModuleWriteRepositoryInterface;
use App\Repositories\Write\Team\TeamWriteRepository;
use App\Repositories\Write\Team\TeamWriteRepositoryInterface;
use App\Repositories\Write\User\UserWriteRepository;
use App\Repositories\Write\User\UserWriteRepositoryInterface;
use App\Repositories\Write\UserInvitation\UserInvitationWriteRepository;
use App\Repositories\Write\UserInvitation\UserInvitationWriteRepositoryInterface;
use App\Repositories\Write\VendorFee\VendorFeeWriteRepository;
use App\Repositories\Write\VendorFee\VendorFeeWriteRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(TeamReadRepositoryInterface::class, TeamReadRepository::class);
        $this->app->bind(TeamWriteRepositoryInterface::class, TeamWriteRepository::class);
        $this->app->bind(UserReadRepositoryInterface::class, UserReadRepository::class);
        $this->app->bind(UserWriteRepositoryInterface::class, UserWriteRepository::class);
        $this->app->bind(UserInvitationReadRepositoryInterface::class, UserInvitationReadRepository::class);
        $this->app->bind(UserInvitationWriteRepositoryInterface::class, UserInvitationWriteRepository::class);
        $this->app->bind(AdvertiserWriteRepositoryInterface::class, AdvertiserWriteRepository::class);
        $this->app->bind(AdvertiserReadRepositoryInterface::class, AdvertiserReadRepository::class);
        $this->app->bind(EventWriteRepositoryInterface::class, EventWriteRepository::class);
        $this->app->bind(EventReadRepositoryInterface::class, EventReadRepository::class);
        $this->app->bind(CampaignWriteRepositoryInterface::class, CampaignWriteRepository::class);
        $this->app->bind(CampaignReadRepositoryInterface::class, CampaignReadRepository::class);
        $this->app->bind(CreativeReadRepositoryInterface::class, CreativeReadRepository::class);
        $this->app->bind(CreativeOfAdvertiserReadRepositoryInterface::class, CreativeOfAdvertiserReadRepository::class);
        $this->app->bind(CreativeWriteRepositoryInterface::class, CreativeWriteRepository::class);
        $this->app->bind(DeliveryModifierWriteRepositoryInterface::class, DeliveryModifierWriteRepository::class);
        $this->app->bind(DeliveryModifierReadRepositoryInterface::class, DeliveryModifierReadRepository::class);
        $this->app->bind(ContinentReadRepositoryInterface::class, ContinentReadRepository::class);
        $this->app->bind(CurrencyReadRepositoryInterface::class, CurrencyReadRepository::class);
        $this->app->bind(AdvertiserCategoryReadRepositoryInterface::class, AdvertiserCategoryReadRepository::class);
        $this->app->bind(CreativeTemplateReadRepositoryInterface::class, CreativeTemplateReadRepository::class);
        $this->app->bind(LineItemReadRepositoryInterface::class, LineItemReadRepository::class);
        $this->app->bind(LineItemWriteRepositoryInterface::class, LineItemWriteRepository::class);
        $this->app->bind(VendorFeeReadRepositoryInterface::class, VendorFeeReadRepository::class);
        $this->app->bind(VendorFeeWriteRepositoryInterface::class, VendorFeeWriteRepository::class);
        $this->app->bind(BidModifierWriteRepositoryInterface::class, BidModifierWriteRepository::class);
        $this->app->bind(BidModifierReadRepositoryInterface::class, BidModifierReadRepository::class);
        $this->app->bind(CityReadRepositoryInterface::class, CityReadRepository::class);
        $this->app->bind(ListReadRepositoryInterface::class, ListReadRepository::class);
        $this->app->bind(MetroReadRepositoryInterface::class, MetroReadRepository::class);
        $this->app->bind(RegionReadRepositoryInterface::class, RegionReadRepository::class);
        $this->app->bind(CreativeLineItemReadRepositoryInterface::class, CreativeLineItemReadRepository::class);
        $this->app->bind(CreativeLineItemWriteRepositoryInterface::class, CreativeLineItemWriteRepository::class);
        $this->app->bind(TargetingExpressionReadRepositoryInterface::class, TargetingExpressionReadRepository::class);
        $this->app->bind(TargetingExpressionWriteRepositoryInterface::class, TargetingExpressionWriteRepository::class);
        $this->app->bind(
            TargetingExpressionModuleWriteRepositoryInterface::class,
            TargetingExpressionModuleWriteRepository::class
        );
        $this->app->bind(LineItemFlightWriteRepositoryInterface::class, LineItemFlightWriteRepository::class);
        $this->app->bind(AppReadRepositoryInterface::class, AppReadRepository::class);
        $this->app->bind(InventoryReadRepositoryInterface::class, InventoryReadRepository::class);
        $this->app->bind(DataProviderReadRepositoryInterface::class, DataProviderReadRepository::class);
        $this->app->bind(InventorySourceReadRepositoryInterface::class, InventorySourceReadRepository::class);
        $this->app->bind(LanguageReadRepositoryInterface::class, LanguageReadRepository::class);
        $this->app->bind(SegmentTreeReadRepositoryInterface::class, SegmentTreeReadRepository::class);
        $this->app->bind(TimezoneReadRepositoryInterface::class, TimezoneReadRepository::class);
        $this->app->bind(CampaignCreativeWriteRepositoryInterface::class, CampaignCreativeWriteRepository::class);
        $this->app->bind(CampaignCreativeReadRepositoryInterface::class, CampaignCreativeReadRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
