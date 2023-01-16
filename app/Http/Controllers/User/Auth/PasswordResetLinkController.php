<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\AbstractAuth\Auth\PasswordResetLinkController as AbstractPasswordResetLinkController;

class PasswordResetLinkController extends AbstractPasswordResetLinkController
{
    /**
     * viewPrefix
     *
     * @var string
     */
    public $viewPrefix = 'user.';

    /**
     * broker
     *
     * @var string
     */
    public $broker = 'users';

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
}
