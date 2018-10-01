<?php

namespace Boolfalse\ClearCaches\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ClearCachesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clearcaches {--dump=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all Laravel Caches and Dump Autoload.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	Artisan::call('clear-compiled');
        echo "The compiled services & packages files have been removed!\n";

        Artisan::call('view:clear');
        echo "View caches cleared successfully!\n";

        Artisan::call('route:clear');
        echo "Route caches cleared successfully!\n";

        Artisan::call('config:clear');
        echo "Config caches cleared successfully!\n";

        Artisan::call('cache:clear');
        echo "Cache caches cleared successfully!\n";

        Artisan::call('config:cache');
        echo "Configs created successfully!\n";

        $dump = $this->option('dump');
        if(empty($dump)){
            exec('composer dump-autoload');
            echo "Autoload Dumped successfully!\n";
        }
		else {
            if(strtolower($dump) == 'n' || strtolower($dump) == 'no'){
                echo "Autoload Does't Dumped!\n";
            } else {
                exec('composer dump-autoload');
                echo "Autoload Dumped successfully!\n";
            }
        }
    }
}
