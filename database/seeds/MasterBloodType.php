<?php

use Illuminate\Database\Seeder;

class MasterBloodType extends Seeder
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
                'key'=>'o-plus',
                'blood_type'=>'O-Positive'
            ],
            [
                'key'=>'o-neg',
                'blood_type'=>'O-Negative'
            ],
            [
                'key'=>'a-plus',
                'blood_type'=>'A-Positive'
            ],
            [
                'key'=>'a-neg',
                'blood_type'=>'A-Negative'
            ],
            [
                'key'=>'b-plus',
                'blood_type'=>'B-Positive'
            ],
            [
                'key'=>'b-neg',
                'blood_type'=>'B-Negative'
            ],
            [
                'key'=>'ab-plus',
                'blood_type'=>'AB-Positive'
            ],
            [
                'key'=>'ab-neg',
                'blood_type'=>'AB-Negative'
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterBloodType::create($value);
        }
    }
}
