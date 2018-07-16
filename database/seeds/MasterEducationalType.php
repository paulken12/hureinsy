<?php

use Illuminate\Database\Seeder;

class MasterEducationalType extends Seeder
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
                'key'=>'gs',
                'educational_level'=>'Graduate Studies'
            ],
            [
                'key'=>'col',
                'educational_level'=>'College'
            ],
            [
                'key'=>'voc',
                'educational_level'=>'Vocational'
            ],
            [
                'key'=>'sec',
                'educational_level'=>'Secondary'
            ],
            [
                'key'=>'ele',
                'educational_level'=>'Elementary'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterEducationalType::create($value);
        }
    }
}
