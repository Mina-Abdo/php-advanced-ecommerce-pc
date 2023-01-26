<?php

namespace App\Models;

use App\Models\Product;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\SendEmailVerificationTrait;
use App\Traits\sendPasswordResetNotificationTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Seller extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable , SendEmailVerificationTrait , sendPasswordResetNotificationTrait;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'shop_name',
        'password',
        'phone',
        'status',
        'email_verified_at',
        'phone_verified_at',
        'verification_code',
        'verification_code_expiration',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
