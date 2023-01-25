<?php
namespace App\Traits;

use App\Notifications\ResetPassword;

trait sendPasswordResetNotificationTrait
{
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
