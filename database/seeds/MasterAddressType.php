<?php

use Illuminate\Database\Seeder;

class MasterAddressType extends Seeder
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
                'key'=>'ra',
                'address_type'=>'Residential Address'
            ],
            [
                'key'=>'pa',
                'address_type'=>'Permanent Address'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterAddressType::create($value);
        }
    }
}
