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
                'key'=>'appr',
                'request_status'=>'Approved'
            ],
            [
                'key'=>'asse',
                'request_status'=>'Assessed'
            ],
            [
                'key'=>'pend',
                'request_status'=>'Pending'
            ],
            [
                'key'=>'reje',
                'request_status'=>'Rejected'
            ],
            [
                'key'=>'reas',
                'request_status'=>'Reassessment'
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterPafStatus::create($value);
        }
    }
}
