<?php

use Illuminate\Database\Seeder;

class MasterJobType extends Seeder
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
                'key' => 'int',
                'job_type'=>'Intern'
            ],
            [
                'key' => 'trn',
                'job_type'=>'Trainee'
            ],
            [
                'key' => 'prb',
                'job_type'=>'Probationary'
            ],
            [
                'key' => 'reg',
                'job_type'=>'Regular'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterJobType::create($value);
        }
    }
}
