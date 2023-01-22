<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\AbstractAuth\Auth\NewPasswordController as AbstractNewPasswordController;


class NewPasswordController extends AbstractNewPasswordController
{
    /**
     * viewPrefix
     *
     * @var string
     */
    public $viewPrefix = 'seller.';

    /**
     * broker
     *
     * @var string
     */
    public $broker = 'sellers';

    /**
     * routeNamePrefix
     *
     * @var string
     */
    public $routeNamePrefix = 'sellers.';

    /**
     * Get the value of viewPrefix
     * @return string
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
     * Get the value of broker
     * @return string
     */
    public function getBroker() :string
    {
        return $this->broker;
    }

    /**
     * Set the value of broker
     *
     * @return  self
     */
    public function setBroker(string $broker)
    {
        $this->broker = $broker;

        return $this;
    }

    /**
     * Get the value of routeNamePrefix
     * @return string
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
