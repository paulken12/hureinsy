<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = new \App\AppHelper();

        $file = base_path().'/database/seeds/csv/status.csv';

        $customerArr = $test->csvToArray($file);

        DB::table('role_status')->insert($customerArr);
    }
}
