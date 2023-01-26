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

/**
 * getModelFromGuard
 *
 * @param  mixed $guard
 * @return string
 */
function getProviderFromGuard(string $guard) :?string
{
    return config('auth.guards')[$guard]['provider'] ?? null;
}

function getModelFromProvider(string $provider) :?string
{
    $model =  explode('\Models\\' , config('auth.providers')[$provider]['model'] )[1];
    return $model ?? null;
}

function getModelFromGuard(string $guard) :?string
{
    $provider = config('auth.guards')[$guard]['provider'] ?? null;
    $model =  explode('\Models\\' , config('auth.providers')[$provider]['model'] )[1];
    return $model ?? null;
}
