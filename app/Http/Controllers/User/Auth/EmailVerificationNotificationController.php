<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\AbstractAuth\Auth\EmailVerificationNotificationController as AbstractEmailVerificationNotificationController;

class EmailVerificationNotificationController extends AbstractEmailVerificationNotificationController
{
    /**
     * guard
     *
     * @var string
     */
    public $guard = 'web';

    /**
     * routeNamePrefix
     *
     * @var string
     */
    public $routeNamePrefix = 'users.';


    /**
     * Get the value of guard
     */
    public function getGuard() :string
    {
        return $this->guard;
    }

    /**
     * Set the value of guard
     *
     * @return  self
     */
    public function setGuard(string $guard)
    {
        $this->guard = $guard;

        return $this;
    }

    /**
     * Get the value of routeNamePrefix
     */
    public function getRouteNamePrefix() :string
    {
        return $this->routeNamePrefix;
    }

    /**
     * Set the value of routeNamePrefix
     *
     * @return  self
     */
    public function setRouteNamePrefix(string $routeNamePrefix)
    {
        $this->routeNamePrefix = $routeNamePrefix;

        return $this;
    }
}
