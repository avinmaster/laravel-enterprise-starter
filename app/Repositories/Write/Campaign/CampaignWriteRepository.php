<?php

namespace App\Repositories\Write\Campaign;

use App\Exceptions\Campaign\FailedToDeleteCampaignException;
use App\Exceptions\Campaign\FailedToUpdateCampaignException;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Builder;
use App\Exceptions\Campaign\FailedToCreateCampaignException;

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
        /* @var Campaign $campaign */
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

    /**
     * @throws FailedToDeleteCampaignException
     */
    public function delete(string $id): bool
    {
        if (!$this->query()->where('id', $id)->delete()) {
            throw new FailedToDeleteCampaignException();
        }

        return true;
    }
}
