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
                'request_status'=>'Open'
            ],
            [
                'request_status'=>'Completed'
            ],
            [
                'request_status'=>'Closed'
            ],

        ];

        foreach ($values as $value)
        {
            \App\Status::create($value);
        }
    }
}
