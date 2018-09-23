<?php

namespace Boolfalse\ClearCaches\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DropTablesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'droptables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop all tables from DB.';

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
        DB::beginTransaction();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // turn off referential integrity
        //ss https://laravel-tricks.com/tricks/drop-all-tables
        foreach(DB::select('SHOW TABLES') as $table) {
            $table_array = get_object_vars($table);
            Schema::drop($table_array[key($table_array)]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // turn referential integrity back on

        DB::commit();

        echo "All DB Tables have dropped successfully!\n";
    }

//    public function handle() // first
//    {
//        //ss https://ourcodeworld.com/articles/read/248/how-to-create-a-custom-console-command-artisan-for-laravel-5-3
////        if(empty($this->option('y'))){
//        //ss https://laracasts.com/discuss/channels/laravel/drop-all-tables-instead-of-migration-rollback
//        if (!$this->confirm('CONFIRM DROP ALL TABLES IN THE CURRENT DATABASE? [y|N]')) {
//            exit('Drop Tables command aborted');
//        }
////        }
//
//        $colname = 'Tables_in_' . env('DB_DATABASE');
//        $tables = DB::select('SHOW TABLES');
//        foreach($tables as $table) {
//            $droplist[] = $table->$colname;
//        }
//        $droplist = implode(',', $droplist);
//
//        DB::beginTransaction();
//
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // turn off referential integrity
//        DB::statement("DROP TABLE " . $droplist);
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // turn referential integrity back on
//
//        DB::commit();
//
//        $this->comment(PHP_EOL . "If no errors showed up, all tables were successfully dropped!" . PHP_EOL);
//    }

}
