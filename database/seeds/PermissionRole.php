<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = new \App\AppHelper();

        $file = base_path().'/database/seeds/csv/perm.csv';

        $customerArr = $test->csvToArray($file);

        DB::table('permission_role')->insert($customerArr);
    }
}
