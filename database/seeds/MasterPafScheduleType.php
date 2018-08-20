<?php

use Illuminate\Database\Seeder;

class MasterPafScheduleType extends Seeder
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
                'key' => 'dept',
                'schedule_type'=>'Department Request'
            ],
            [
                'key' => 'empl',
                'schedule_type'=>'Employee Request'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterPafScheduleType::create($value);
        }
    }
}
