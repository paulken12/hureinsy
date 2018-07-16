<?php

use Illuminate\Database\Seeder;

class MasterTeam extends Seeder
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
                'key'=>'ace',
                'team'=>'ACE'
            ],
            [
                'key'=>'adm',
                'team'=>'ADM'
            ],
            [
                'key'=>'dec',
                'team'=>'DEC'
            ],
            [
                'key'=>'dts',
                'team'=>'DTS'
            ],
            [
                'key'=>'exm',
                'team'=>'EXM'
            ],
            [
                'key'=>'fac',
                'team'=>'FAC'
            ],
            [
                'key'=>'jjr',
                'team'=>'JJR'
            ],
            [
                'key'=>'pma',
                'team'=>'PMA'
            ],
            [
                'key'=>'qms',
                'team'=>'QMS'
            ],
            [
                'key'=>'rhd',
                'team'=>'RHD'
            ],
            [
                'key'=>'wpr',
                'team'=>'WPR'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterTeam::create($value);
        }
    }
}
