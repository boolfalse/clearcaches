<?php

namespace Boolfalse\ClearCaches;

use Boolfalse\ClearCaches\Commands\ClearCachesCommand;
use Boolfalse\ClearCaches\Commands\DropTablesCommand;
use Illuminate\Support\ServiceProvider;

class ClearCachesServiceProvider extends ServiceProvider
{
    protected $commands = [
        ClearCachesCommand::class,
        DropTablesCommand::class,
    ];

    public function boot()
    {
		//
    }

    public function register()
    {
        $this->commands($this->commands);
    }
}