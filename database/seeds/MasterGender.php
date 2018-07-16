/**
<?php

use Illuminate\Database\Seeder;

class MasterGender extends Seeder
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
                'key'=>'m',
                'gender'=>'Male'
            ],
            [
                'key'=>'f',
                'gender'=>'Female'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterGender::create($value);
        }
    }
}
