<?php

namespace App\Services\LineItemFlight\UseCases;

use App\Repositories\Write\LineItemFlight\LineItemFlightWriteRepositoryInterface;
use Illuminate\Support\Str;

class CreateLineItemFlightsUseCase
{
    public function __construct(
        protected LineItemFlightWriteRepositoryInterface $lineItemFlightWriteRepository,
    ) {
    }

    public function run(string $line_item_id, array $flights): void
    {
        foreach ($flights as &$flightData) {
            $flightData['id'] = Str::uuid()->toString();
            $flightData['line_item_id'] = $line_item_id;
        }

        $this->lineItemFlightWriteRepository->insert($flights);
    }
}