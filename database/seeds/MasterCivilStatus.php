<?php

use Illuminate\Database\Seeder;

class MasterCivilStatus extends Seeder
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
                'key'=>'sin',
                'civil_status'=>'Single'
            ],
            [
                'key'=>'mar',
                'civil_status'=>'Married'
            ],
            [
                'key'=>'wid',
                'civil_status'=>'Widowed'
            ],
            [
                'key'=>'sep',
                'civil_status'=>'Separated'
            ],
            [
                'key'=>'ann',
                'civil_status'=>'Annulled'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterCivilStatus::create($value);
        }
    }
}
