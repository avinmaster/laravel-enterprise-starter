<?php

namespace App\Services\Campaign\Actions;

use App\Http\Resources\Campaign\CampaignResource;
use App\Models\Campaign;
use App\Repositories\Read\Campaign\CampaignReadRepositoryInterface;
use App\Repositories\Write\Campaign\CampaignWriteRepositoryInterface;
use App\Services\Campaign\DTO\UpdateCampaignDTO;

class UpdateCampaignAction
{
    public function __construct(
        protected CampaignReadRepositoryInterface  $campaignReadRepository,
        protected CampaignWriteRepositoryInterface $campaignWriteRepository,
    ) {
    }

    public function run(string $campaign_id, UpdateCampaignDTO $dto): CampaignResource
    {
        $campaignData = $this->prepareUpdateData($dto);
        $this->campaignWriteRepository->update($campaign_id, $campaignData);

        $campaign = $this->campaignReadRepository->getById($campaign_id);

        return new CampaignResource($campaign->load(Campaign::RELATIONS));
    }

    private function prepareUpdateData(UpdateCampaignDTO $dto): array
    {
        return [
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'name' => $dto->name,
            'alternative_id' => $dto->alternative_id,
            'active' => $dto->active,
            'favorite' => $dto->favorite,
            'notes' => $dto->notes,
            'currency' => $dto->currency,
            'campaign_preset' => $dto->campaign_preset,
            'default_line_item_preset' => $dto->default_line_item_preset,
            'default_targeting_preset' => $dto->default_targeting_preset,
            'custom_event_association' => $dto->custom_event_association,
            'start_date' => $dto->start_date,
            'end_date' => $dto->end_date,
            'budget_type' => $dto->budget_type,
            'spend_budget_lifetime' => $dto->spend_budget_lifetime,
            'spend_budget_daily' => $dto->spend_budget_daily,
            'impressions_budget_lifetime' => $dto->impressions_budget_lifetime,
            'impressions_budget_daily' => $dto->impressions_budget_daily,
            'revenue_type' => $dto->revenue_type,
            'revenue_amount' => $dto->revenue_amount,
            'bid_modifier_id' => $dto->bid_modifier_id,
            'delivery_modifier_id' => $dto->delivery_modifier_id,
            'min_bid' => $dto->min_bid,
            'max_bid' => $dto->max_bid,
            'ghost_bidding_id_type' => $dto->ghost_bidding_id_type,
            'ghost_bidding_id_vendor' => $dto->ghost_bidding_id_vendor,
            'ghost_bidding_id_vendor_id' => $dto->ghost_bidding_id_vendor_id,
            'frequency_caps_id_type' => $dto->frequency_caps_id_type,
            'frequency_caps_use_fallback' => $dto->frequency_caps_use_fallback,
            'frequency_caps_limits' => $dto->frequency_caps_limits,
            'frequency_caps_id_vendor' => $dto->frequency_caps_id_vendor,
            'frequency_caps_id_vendor_id' => $dto->frequency_caps_id_vendor_id,
            'continents' => $dto->continents,
            'event_ids' => $dto->event_ids,
            'segment_extension_type' => $dto->segment_extension_type,
            'segment_type' => $dto->segment_type,
            'segment_vendors' => $dto->segment_vendors,
            'enable_skad_tracking' => $dto->enable_skad_tracking,
            'created_at' => $dto->created_at,
            'updated_at' => $dto->updated_at,
        ];
    }
}
