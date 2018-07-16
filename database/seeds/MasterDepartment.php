<?php

use Illuminate\Database\Seeder;

class MasterDepartment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $values = [
            [
                'key'=>'ofc',
                'department'=>'ADMIN'
            ],
            [
                'key'=>'it-ace',
                'department'=>'IT ACE'
            ],
            [
                'key'=>'it-loc',
                'department'=>'IT LOCAL'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterDepartment::create($value);
        }
    }
}
