<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Traits\sendPasswordResetNotificationTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable #implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable , sendPasswordResetNotificationTrait;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'email_verified_at',
    ];
}
