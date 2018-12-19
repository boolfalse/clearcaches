<?php

namespace Boolfalse\ClearCaches\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Session;

class FlushSessionsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flushsessions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Flush all Laravel sessions.';

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
        Session::flush(); // removes all session data
    }
}
