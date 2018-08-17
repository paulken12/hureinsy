<?php

use Illuminate\Database\Seeder;

class MasterPafStatus extends Seeder
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
                'key'=>'com',
                'request_status'=>'Completed'
            ],
            [
                'key'=>'clo',
                'request_status'=>'Closed'
            ],
            [
                'key'=>'inc',
                'request_status'=>'Incomplete'
            ],
            [
                'key'=>'pen',
                'request_status'=>'Pending'
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterPafStatus::create($value);
        }
    }
}
