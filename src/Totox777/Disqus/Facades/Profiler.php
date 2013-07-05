<?php namespace Totox777\Disqus\Facades;

use Illuminate\Support\Facades\Facade;

class Profiler extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'disqus'; }

}