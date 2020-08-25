<?php

namespace Claudiusnascimento\Seo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Claudiusnascimento\Seo\Skeleton\SkeletonClass
 */
class SeoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'seo';
    }
}
