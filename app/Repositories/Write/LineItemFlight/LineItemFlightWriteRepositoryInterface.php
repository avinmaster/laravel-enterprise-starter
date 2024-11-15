<?php

namespace App\Repositories\Write\LineItemFlight;

interface LineItemFlightWriteRepositoryInterface
{
    public function insert(array $data): void;
}
