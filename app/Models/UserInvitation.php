<?php

namespace App\Models;

use App\Constants\UserInvitation\UserInvitationConstants;
use App\Services\UserInvitation\DTO\SendUserInvitationDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\User
 *
 * @property string $id
 * @property string $sender_id
 * @property string $email
 * @property string $hash
 * @property string $status
 */
class UserInvitation extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'sender_id',
        'email',
        'hash',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $keyType = 'string';

    public static function createModel(SendUserInvitationDTO $dto): array
    {
        return [
            'id'        => Str::uuid()->toString(),
            'sender_id' => $dto->sender_id,
            'email'     => $dto->email,
            'hash'      => Str::random(32),
            'status'    => UserInvitationConstants::STATUS_SENT,
        ];
    }
}
