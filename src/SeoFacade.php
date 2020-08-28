<?php

namespace ClaudiusNascimento\Seo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ClaudiusNascimento\Seo\Skeleton\SkeletonClass
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
