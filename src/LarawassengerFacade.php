<?php
namespace UzzairWebstudio\Larawassenger;

use Illuminate\Support\Facades\Facade;

class LarawassengerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larawassenger';
    }
}
