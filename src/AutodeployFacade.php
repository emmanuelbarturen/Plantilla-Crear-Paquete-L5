<?php namespace Ebarturen\Autodeploy;
use Illuminate\Support\Facades\Facade;
class AutodeployFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Autodeploy';
    }
}