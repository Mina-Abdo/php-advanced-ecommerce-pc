<?php
namespace App\Traits;

use App\Notifications\VerifyEmail;

trait SendEmailVerificationTrait
{
    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }
}
