<?php

namespace App\Services\SegmentTree\Actions;

use App\Http\Resources\SegmentTree\SegmentTreeResource;
use App\Repositories\Read\SegmentTree\SegmentTreeReadRepositoryInterface;
use App\Services\SegmentTree\DTO\IndexSegmentTreeDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexSegmentTreeAction
{
    public function __construct(
        protected SegmentTreeReadRepositoryInterface $readRepository
    ) {
    }

    public function run(IndexSegmentTreeDTO $dto): AnonymousResourceCollection
    {
        $data = $this->readRepository->index($dto);

        return SegmentTreeResource::collection($data);
    }
}
