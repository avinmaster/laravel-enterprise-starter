<?php

namespace App\Http\Controllers\Api\V1\SegmentTree;

use App\Http\Controllers\ApiController;
use App\Http\Requests\SegmentTree\IndexSegmentTreeRequest;
use App\Services\SegmentTree\Actions\IndexSegmentTreeAction;
use App\Services\SegmentTree\DTO\IndexSegmentTreeDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SegmentTreeController extends ApiController
{
    public function index(
        IndexSegmentTreeRequest $request,
        IndexSegmentTreeAction $indexSegmentTreeAction
    ): AnonymousResourceCollection {
        $dto = IndexSegmentTreeDTO::fromRequest($request);

        return $indexSegmentTreeAction->run($dto);
    }
}
