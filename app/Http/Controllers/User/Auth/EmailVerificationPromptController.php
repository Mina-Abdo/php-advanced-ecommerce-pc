<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\AbstractAuth\Auth\EmailVerificationPromptController as AbstractEmailVerificationPromptController;

class EmailVerificationPromptController extends AbstractEmailVerificationPromptController
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
     * viewPrefix
     *
     * @var string
     */
    public $viewPrefix = 'user.';


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
