<?php

namespace App\Exceptions;

use Exception;

class RequestException extends Exception
{
    public function __construct(
        public readonly array $response = [],
        string $message = '',
        int $code = 0,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
