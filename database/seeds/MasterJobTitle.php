<?php

use Illuminate\Database\Seeder;

class MasterJobTitle extends Seeder
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
                'key'=>'adm',
                'job_titles'=>'Administrator'
            ],
            [
                'key'=>'hr',
                'job_titles'=>'Human Resource'
            ],
            [
                'key'=>'ao',
                'job_titles'=>'Accounting Officer'
            ],
            [
                'key'=>'aa',
                'job_titles'=>'Admin Assistant'
            ],
            [
                'key'=>'om',
                'job_titles'=>'Operations Manager'
            ],
            [
                'key'=>'ase',
                'job_titles'=>'Associate Software Engineer'
            ],
            [
                'key'=>'jv',
                'job_titles'=>'Java Developer'
            ],
            [
                'key'=>'it-spe',
                'job_titles'=>'IT Specialist'
            ],
            [
                'key'=>'rhd',
                'job_titles'=>'Regional Help Desk'
            ],
            [
                'key'=>'ad-lms',
                'job_titles'=>'Applications Developer (LMS Track)'
            ],
            [
                'key'=>'ad-esit-ftds',
                'job_titles'=>'Application Developer - ESIT FTDS'
            ],
            [
                'key'=>'ns',
                'job_titles'=>'Network Support'
            ],
            [
                'key'=>'na',
                'job_titles'=>'Network Administrator'
            ],
            [
                'key'=>'jr-se',
                'job_titles'=>'Junior Software Engineer'
            ],
            [
                'key'=>'ns',
                'job_titles'=>'Network Support'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterJobTitle::create($value);
        }
    }
}
