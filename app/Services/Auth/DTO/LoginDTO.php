<?php

namespace App\Services\Auth\DTO;

use App\Http\Requests\Auth\AuthRequest;
use Spatie\LaravelData\Data;

class LoginDTO extends Data
{
    public string $email;
    public string $password;
    public ?string $ip;
    public ?bool $remember;

    public static function fromRequest(AuthRequest $request): self
    {
        return self::from([
            'email' => $request->getUsername(),
            'password' => $request->getPassword(),
            'ip' => $request->getIp(),
            'remember' => $request->has('remember') ? $request->getRemember() : false,
        ]);
    }
}
