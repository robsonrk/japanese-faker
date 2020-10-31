<?php

namespace Robsonrk\JapaneseFaker;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Robsonrk\JapaneseFaker\Skeleton\SkeletonClass
 */
class JapaneseFakerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'japanese-faker';
    }
}
