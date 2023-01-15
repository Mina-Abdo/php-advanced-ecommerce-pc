<?php
namespace App\Http\Controllers\AbstractAuth\Contracts;

interface ViewPrefixInterface
{
    /**
     * getViewPrefix
     *
     * @return string
     */
    public function getViewPrefix() :string;

    /**
     * setViewPrefix
     *
     * @param  string $viewPrefix
     * @return void
     */
    public function setViewPrefix(string $viewPrefix);
}
