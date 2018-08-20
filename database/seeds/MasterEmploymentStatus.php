<?php

use Illuminate\Database\Seeder;

class MasterEmploymentStatus extends Seeder
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
                'key' => 'ren',
                'employment_status' => 'renewal',
            ],
            [
                'key' => 'eoc',
                'employment_status' => 'end of contract',
            ],
            [
                'key' => 'tra',
                'employment_status' => 'transfer',
            ],
            [
                'key' => 'reh',
                'employment_status' => 'rehire',
            ],
            [
                'key' => 'ttp',
                'employment_status' => 'trainee to project',
            ],
            [
                'key' => 'reg',
                'employment_status' => 'regularization',
            ],
            [
                'key' => 'eop',
                'employment_status' => 'end of probationary period',
            ],
            [
                'key' => 'sai',
                'employment_status' => 'salary increase',
            ],
            [
                'key' => 'sfr',
                'employment_status' => 'separation for rehire',
            ],
            [
                'key' => 'snr',
                'employment_status' => 'separation not for rehire',
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterEmploymentStatus::create($value);
        }    
    }
}
