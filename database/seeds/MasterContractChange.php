<?php

use Illuminate\Database\Seeder;

class MasterContractChange extends Seeder
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
                'type' => 'renewal',
            ],
            [
                'key' => 'eoc',
                'type' => 'end of contract',
            ],
            [
                'key' => 'tra',
                'type' => 'transfer',
            ],
            [
                'key' => 'reh',
                'type' => 'rehire',
            ],
            [
                'key' => 'ttp',
                'type' => 'trainee to project',
            ],
            [
                'key' => 'reg',
                'type' => 'regularization',
            ],
            [
                'key' => 'eop',
                'type' => 'end of probationary period',
            ],
            [
                'key' => 'sai',
                'type' => 'salary increase',
            ],
            [
                'key' => 'sfr',
                'type' => 'separation for rehire',
            ],
            [
                'key' => 'snr',
                'type' => 'separation not for rehire',
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterContractChange::create($value);
        }
    }
}
