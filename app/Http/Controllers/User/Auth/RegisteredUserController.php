<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\AbstractAuth\Auth\RegisteredUserController as AbstractRegisteredUserController;

class RegisteredUserController extends AbstractRegisteredUserController
{
    /**
     * guard
     *
     * @var string
     */
    public $guard = 'web';
    /**
     * routNamePrefix
     *
     * @var string
     */
    public $routeNamePrefix = 'users.';
    /**
     * viewPrefix
     *
     * @var string
     */
    public $viewPrefix = 'user.';

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

    /**
     * Get viewPrefix
     *
     * @return  string
     */
    public function getViewPrefix() :string
    {
        return $this->viewPrefix;
    }

    /**
     * Set viewPrefix
     *
     * @param  string  $viewPrefix  viewPrefix
     *
     * @return  self
     */
    public function setViewPrefix(string $viewPrefix)
    {
        $this->viewPrefix = $viewPrefix;

        return $this;
    }
}
