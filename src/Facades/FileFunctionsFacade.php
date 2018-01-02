<?php namespace Webcore\FileManager\Facades;

use Illuminate\Support\Facades\Facade;
use Webcore\FileManager\Services\FileFunctionsService;

class FileFunctionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new FileFunctionsService();
    }
}