<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
            [
                'name'=>'su',
                'label'=>'Developer',
            ],
            [
                'name'=>'adm',
                'label'=>'Administrator',
            ],
            [
                'name'=>'hr',
                'label'=>'Human Resource',
            ],
            [
                'name'=>'mng',
                'label'=>'Manager',
            ],
            [
                'name'=>'visor',
                'label'=>'Supervisor',
            ],
            [
                'name'=>'emp',
                'label'=>'Employee',
            ],
        ];

        foreach ($value as $item) {
            \App\Role::create($item);
        }
    }
}
