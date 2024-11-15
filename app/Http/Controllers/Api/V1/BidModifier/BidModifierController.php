<?php

namespace App\Http\Controllers\Api\V1\BidModifier;

use App\Http\Controllers\ApiController;
use App\Http\Requests\BidModifier\UpdateBidModifierRequest;
use App\Services\BidModifier\Actions\UpdateBidModifierAction;
use App\Services\BidModifier\DTO\IndexBidModifierDTO;
use App\Services\BidModifier\DTO\CreateBidModifierDTO;
use App\Http\Resources\BidModifier\BidModifierResource;
use App\Http\Requests\BidModifier\GetBidModifierRequest;
use App\Http\Requests\BidModifier\IndexBidModifierRequest;
use App\Services\BidModifier\Actions\GetBidModifierAction;
use App\Http\Requests\BidModifier\CreateBidModifierRequest;
use App\Services\BidModifier\Actions\IndexBidModifierAction;
use App\Services\BidModifier\Actions\CreateBidModifierAction;
use App\Services\BidModifier\DTO\UpdateBidModifierDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Exceptions\BidModifier\FailedToCreateBidModifierException;

class BidModifierController extends ApiController
{
    /**
     * @throws FailedToCreateBidModifierException
     */
    public function create(
        CreateBidModifierRequest $request,
        CreateBidModifierAction  $createBidModifierAction
    ): BidModifierResource
    {
        $dto = CreateBidModifierDTO::fromRequest($request);

        return $createBidModifierAction->run($dto);
    }

    public function update(
        UpdateBidModifierRequest $request,
        UpdateBidModifierAction  $updateBidModifierAction
    ): BidModifierResource
    {
        $dto = UpdateBidModifierDTO::fromRequest($request);

        return $updateBidModifierAction->run($request->getId(), $dto);
    }

    public function show(
        GetBidModifierRequest $request,
        GetBidModifierAction  $getBidModifierAction
    ): BidModifierResource
    {
        return $getBidModifierAction->run($request->getId());
    }

    public function index(
        IndexBidModifierRequest $request,
        IndexBidModifierAction  $indexBidModifierAction
    ): AnonymousResourceCollection
    {
        $dto = IndexBidModifierDTO::fromRequest($request);

        return $indexBidModifierAction->run($dto);
    }
}
