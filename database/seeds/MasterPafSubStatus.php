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
                'master_id_status'=>'1',
                'sub_request_status'=>'HR Pending',
                'description'=>'Available HR will review the PAF request'
            ],
            [
                'master_id_status'=>'1',
                'sub_request_status'=>'Executive Pending',
                'description'=>'Executive will final review the PAF request'
            ],
            [
                'master_id_status'=>'1',
                'sub_request_status'=>'Manager Pending',
                'description'=>'HR returned the request to the manager to reassess the PAF request'
            ],
            [
                'master_id_status'=>'2',
                'sub_request_status'=>'HR Approved',
                'description'=>'HR approved the PAF request but for employee request only'
            ],
            [
                'master_id_status'=>'2',
                'sub_request_status'=>'HR Denied',
                'description'=>'HR denied the PAF request but for employee request only'
            ],
            [
                'master_id_status'=>'2',
                'sub_request_status'=>'Executive Approved',
                'description'=>'The Executive has approved the paf request'
            ],
            [
                'master_id_status'=>'2',
                'sub_request_status'=>'Executive Denied',
                'description'=>'The Executive has denied the paf request'
            ],
            [
                'master_id_status'=>'3',
                'sub_request_status'=>'Duplicate Request',
                'description'=>'The PAF request submitted was a duplicate'
            ],
            [
                'master_id_status'=>'3',
                'sub_request_status'=>'Closed Request',
                'description'=>'The PAF request was closed after reassessment'
            ],
        ];

        foreach ($values as $value)
        {
            \App\SubStatus::create($value);
        }
    }
}
