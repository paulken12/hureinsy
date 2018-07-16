<?php

use Illuminate\Database\Seeder;

class MasterEmployeeStatus extends Seeder
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
                'key'=>'ua',
                'employee_status'=>'Active'
            ],
            [
                'key'=>'ui',
                'employee_status'=>'Inactive'
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterEmployeeStatus::create($value);
        }
    }
}
