<?php

use Illuminate\Database\Seeder;

class MasterPafSubStatus extends Seeder
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
                'key'=>'acc',
                'sub_request_status'=>'Accepted'
            ],
            [
                'key'=>'den',
                'sub_request_status'=>'Denied'
            ],
            [
                'key'=>'inc-inf',
                'sub_request_status'=>'HR needs more info'
            ],
            [
                'key'=>'rev-ex',
                'sub_request_status'=>'Executive is currently reviewing your request'
            ],
            [
                'key'=>'rev-hr',
                'sub_request_status'=>'HR is currently reviewing your request'
            ],
            [
                'key'=>'rev-ma',
                'sub_request_status'=>'Manager and Employee currently evaluating request'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterPafSubStatus::create($value);
        }
    }
}
