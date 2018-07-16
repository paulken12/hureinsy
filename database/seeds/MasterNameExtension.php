<?php

use Illuminate\Database\Seeder;

class MasterNameExtension extends Seeder
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
                'key'=>'jr',
                'name_extension'=>'JR'
            ],
            [
                'key'=>'sen',
                'name_extension'=>'SENIOR'
            ],
            [
                'key'=>'i',
                'name_extension'=>'I'
            ],
            [
                'key'=>'ii',
                'name_extension'=>'II'
            ],
            [
                'key'=>'iii',
                'name_extension'=>'III'
            ],
            [
                'key'=>'vi',
                'name_extension'=>'VI'
            ],
            [
                'key'=>'v',
                'name_extension'=>'V'
            ],
            [
                'key'=>'vi',
                'name_extension'=>'VI'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterNameExtension::create($value);
        }
    }
}
