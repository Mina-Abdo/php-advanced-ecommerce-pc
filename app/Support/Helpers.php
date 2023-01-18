<?php

use Illuminate\Database\Eloquent\Model;

/**
 * getProviderFromModel
 *
 * @param  mixed $model
 * @return string
 */
function getProviderFromModel(Model $model) :?string
{
    foreach(config('auth.providers') as $provider => $values){
        if($model instanceof $values['model']){
            return $provider;
        }
    }
    return null;

}

/**
 * getGuardFromProvider
 *
 * @param  mixed $provider
 * @return string
 */
function getGuardFromProvider(string $provider) :?string
{
    foreach(config('auth.guards') as $guard => $values){
        if($provider == $values['provider']){
            return $guard;
        }
    }
    return null;
}

/**
 * getGuardFromModel
 *
 * @param  mixed $model
 * @return string
 */
function getGuardFromModel(Model $model) :?string
{
    $provider = getProviderFromModel($model);
    return getGuardFromProvider($provider);
}

/**
     * Get guardRouteMap
     *
     * @return  array
     */
    function getGuardRouteMap(string $guard)
    {
        return config('auth.guard_route_map')[$guard] ?? 'users.';
    }
