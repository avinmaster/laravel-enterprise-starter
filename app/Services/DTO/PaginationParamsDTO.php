<?php

namespace App\Services\DTO;

class PaginationParamsDTO
{
    public function __construct(
        public int $page,
        public int $per_page
    ) {
    }
}
