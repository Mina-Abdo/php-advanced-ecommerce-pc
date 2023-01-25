<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\AbstractAuth\Auth\PasswordController as AbstractPasswordController;

class PasswordController extends AbstractPasswordController
{
    /**
     * guard
     *
     * @var string
     */
    public $guard = 'admin';


    /**
     * Get the value of guard
     * @return string
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
}
