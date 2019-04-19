<?php

namespace {{Vendor}}\{{PackageClass}}\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \{{Vendor}}\{{PackageClass}}\{{PackageClass}}
 */
class {{PackageClass}} extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '{{PackageClass}}';
    }
}
