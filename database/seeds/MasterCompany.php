<?php

use Illuminate\Database\Seeder;

class MasterCompany extends Seeder
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
                'key'=>'raj',
                'name'=>'RAJ Technologies Inc.',
                'address'=>'Labsan Street, Kayang Extension, Baguio City'
            ],
            [
                'key'=>'ti-bc',
                'name'=>'Texas Instruments Philippines, Inc. Baguio City Office',
                'address'=>'EPZA, Loakan Road., Baguio City'
            ],
            [
                'key'=>'ti-cl',
                'name'=>'Texas Instruments Philippines, Inc. Clark Office',
                'address'=>'Gil Puyat Ave., Clark Freeport Zone, Clark, Pampanga'
            ],
            [
                'key'=>'moog',
                'name'=>'Moog Controls Corporation',
                'address'=>'EPZA, Loakan Road., Baguio City'
            ],

        ];

        foreach ($values as $value)
        {
            \App\MasterCompany::create($value);
        }
    }
}
