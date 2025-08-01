<?php

declare(strict_types=1);

namespace Modules\Auth\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Auth\Database\Factories\UserFactory;

class User extends \App\Models\User
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'uid', 'name', 'email', 'password', 'active',
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'active' => 'boolean',
        'password' => 'hashed',
    ];

    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }
}
