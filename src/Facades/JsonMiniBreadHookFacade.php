<?php

namespace Cristianhr\JsonMiniBreadHook\Facades;

use Illuminate\Support\Facades\Facade;
use Cristianhr\JsonMiniBreadHook\JsonMiniBreadHook;

class JsonMiniBreadHookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return JsonMiniBreadHook::class;
    }
}
