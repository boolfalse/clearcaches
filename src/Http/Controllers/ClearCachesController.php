<?php

namespace Boolfalse\ClearCaches\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ClearCachesController extends Controller
{
    public function checking_cc()
    {
        return view('clearcaches::cc'); // package_name::blade_name
    }
    public function clearcaches()
    {
        Artisan::call('view:clear');
        echo "View caches cleared successfully!<br />";
        Artisan::call('route:clear');
        echo "Route caches cleared successfully!<br />";
        Artisan::call('config:clear');
        echo "Config caches cleared successfully!<br />";
        Artisan::call('cache:clear');
        echo "Cache caches cleared successfully!<br />";
		Artisan::call('clear-compiled');
        echo "The compiled services & packages files have been removed!<br />";
        Artisan::call('config:cache');
        echo "Configs created successfully!<br />";
        exec('composer dump-autoload');
        echo "Autoload Dumped successfully!<br />";
    }



    //    public function droptables() // first
//    {
//        //ss TODO: explore the way to getting options and attributes from PHP CLI command
//        //ss https://ourcodeworld.com/articles/read/248/how-to-create-a-custom-console-command-artisan-for-laravel-5-3
////        if(empty($this->option('y'))){
//            //ss https://laracasts.com/discuss/channels/laravel/drop-all-tables-instead-of-migration-rollback
//            if (!$this->confirm('CONFIRM DROP ALL TABLES IN THE CURRENT DATABASE? [y|N]')) {
//                exit('Drop Tables command aborted');
//            }
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

    public function droptables()
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

        echo "All DB Tables have dropped successfully!<br />";
    }
}
