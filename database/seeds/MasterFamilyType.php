<?php

use Illuminate\Database\Seeder;

class MasterFamilyType extends Seeder
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
                'key'=>'fat',
                'family_type'=>'Father'
            ],
            [
                'key'=>'mot',
                'family_type'=>'Mother'
            ],
            [
                'key'=>'sib',
                'family_type'=>'Sibling'
            ],
            [
                'key'=>'spo',
                'family_type'=>'Spouse'
            ],
            [
                'key'=>'chi',
                'family_type'=>'Children'
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterFamilyType::create($value);
        }
    }
}
