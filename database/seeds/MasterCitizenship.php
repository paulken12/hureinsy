<?php

use Illuminate\Database\Seeder;

class MasterCitizenship extends Seeder
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
                'key'=>'ph',
                'citizenship'=>'Filipino'
            ],
            [
                'key'=>'us',
                'citizenship'=>'American'
            ],
            [
                'key'=>'br',
                'citizenship'=>'Brazilian'
            ],
            [
                'key'=>'ca',
                'citizenship'=>'Canadian'
            ],
            [
                'key'=>'in',
                'citizenship'=>'Indian'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterCitizenship::create($value);
        }
    }
}
