<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\AbstractAuth\Auth\VerifyEmailController as AbstractVerifyEmailController;

class VerifyEmailController extends AbstractVerifyEmailController
{
    /**
     * guard
     *
     * @var string
     */
    public $guard = 'seller';
    /**
     * routNamePrefix
     *
     * @var string
     */
    public $routeNamePrefix = 'sellers.';

    /**
     * Get guard
     *
     * @return  string
     */
    public function getGuard() :string
    {
        return $this->guard;
    }

    /**
     * Set guard
     *
     * @param  string  $guard  guard
     *
     * @return  self
     */
    public function setGuard(string $guard)
    {
        $this->guard = $guard;

        return $this;
    }

    /**
     * Get routNamePrefix
     *
     * @return  string
     */
    public function getRouteNamePrefix() :string
    {
        return $this->routeNamePrefix;
    }

    /**
     * Set routNamePrefix
     *
     * @param  string  $routeNamePrefix  routNamePrefix
     *
     * @return  self
     */
    public function setRouteNamePrefix(string $routeNamePrefix)
    {
        $this->routeNamePrefix = $routeNamePrefix;

        return $this;
    }
}
