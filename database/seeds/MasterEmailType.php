<?php

use Illuminate\Database\Seeder;

class MasterEmailType extends Seeder
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
                'key'=>'pri',
                'email_type'=>'Primary Email'
            ],
            [
                'key'=>'sec',
                'email_type'=>'Secondary Email'
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterEmailType::create($value);
        }
    }
}
