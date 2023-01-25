<?php

namespace App\Http\Controllers\Admin\Auth;


use App\Http\Controllers\AbstractAuth\Auth\ConfirmablePasswordController AS AbstractConfirmablePasswordController;

class ConfirmablePasswordController extends AbstractConfirmablePasswordController
{
    /**
     * viewPrefix
     *
     * @var string
     */
    public $viewPrefix = 'admin.';

    /**
     * guard
     *
     * @var string
     */
    public $guard = 'admin';

    /**
     * routeNamePrefix
     *
     * @var string
     */
    public $routeNamePrefix = 'admins.';

    /**
     * Get the value of viewPrefix
     */
    public function getViewPrefix() :string
    {
        return $this->viewPrefix;
    }

    /**
     * Set the value of viewPrefix
     *
     * @return  self
     */
    public function setViewPrefix(string $viewPrefix)
    {
        $this->viewPrefix = $viewPrefix;

        return $this;
    }

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
