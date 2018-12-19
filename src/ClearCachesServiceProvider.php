<?php

namespace Boolfalse\ClearCaches;

use Boolfalse\ClearCaches\Commands\ClearCachesCommand;
use Boolfalse\ClearCaches\Commands\DropTablesCommand;
use Boolfalse\ClearCaches\Commands\FlushSessionsCommand;
use Illuminate\Support\ServiceProvider;

class ClearCachesServiceProvider extends ServiceProvider
{
    protected $commands = [
        ClearCachesCommand::class,
        DropTablesCommand::class,
        FlushSessionsCommand::class,
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