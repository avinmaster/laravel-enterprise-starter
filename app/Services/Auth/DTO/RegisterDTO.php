<?php

namespace App\Services\Auth\DTO;

use App\Http\Requests\Auth\RegisterRequest;
use Spatie\LaravelData\Data;

class RegisterDTO extends Data
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;
    public ?string $hash;
    public string $phone;

    public static function fromRequest(RegisterRequest $request): self
    {
        return self::from([
            'firstName'  => $request->getFirstName(),
            'lastName'   => $request->getLastName(),
            'email'      => $request->getEmail(),
            'password'   => $request->getPassword(),
            'hash'       => $request->getHash(),
            'phone'       => $request->getPhone(),
        ]);
    }
}
