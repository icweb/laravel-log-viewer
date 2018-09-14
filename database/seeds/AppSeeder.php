<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $log_files = [
            [
                'name'      => 'Helpdesk',
                'source'    => 'help.wcsi.org',
                'path'      => '/var/www/html/helpdesk-p7.wcsiweb.com/storage/logs'
            ],
        ];

        foreach($log_files as $item)
        {
            DB::table('log_files')->insert($item);
        }
    }
}
