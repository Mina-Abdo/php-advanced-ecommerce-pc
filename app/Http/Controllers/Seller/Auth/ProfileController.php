<?php

namespace App\Http\Controllers\Seller\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SellerProfileUpdateRequest;
use App\Http\Controllers\AbstractAuth\Auth\ProfileController as AbstractProfileController;

class ProfileController extends AbstractProfileController
{
    /**
     * viewPrefix
     *
     * @var string
     */
    public $viewPrefix = 'seller.';

    /**
     * guard
     *
     * @var string
     */
    public $guard = 'seller';

    /**
     * routeNamePrefix
     *
     * @var string
     */
    public $routeNamePrefix = 'sellers.';

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

    /**
     * Update the seller's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SellerProfileUpdateRequest $request)
    {
        $request->user($this->getGuard())->fill($request->validated());

        if ($request->user($this->getGuard())->isDirty('email')) {
            $request->user($this->getGuard())->email_verified_at = null;
        }

        $request->user($this->getGuard())->save();

        if($request->has('email'))
        {
            event(new Registered($request->user($this->getGuard())));
        }
        return Redirect::route($this->getRouteNamePrefix() . 'profile.edit')->with('status', 'profile-updated');

    }
}
