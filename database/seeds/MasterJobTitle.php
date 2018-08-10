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
                'key'=>'pres',
                'job_titles'=>'President'
            ],
            [
                'key'=>'cs',
                'job_titles'=>'Corporate Secretary'
            ],
            [
                'key'=>'hoo',
                'job_titles'=>'Head of Operations'
            ],
            [
                'key'=>'adm',
                'job_titles'=>'Administrator'
            ],
            [
                'key'=>'hr',
                'job_titles'=>'Human Resource'
            ],
            [
                'key'=>'hra',
                'job_titles'=>'Human Resource Assistant'
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
                'key'=>'pm',
                'job_titles'=>'Project Manager'
            ],
            [
                'key'=>'ts',
                'job_titles'=>'Team Supervisor'
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
                'key'=>'it-ma',
                'job_titles'=>'IT Manager'
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
                'key'=>'sr-se',
                'job_titles'=>'Senior Software Engineer'
            ],
            [
                'key'=>'jr-se',
                'job_titles'=>'Junior Software Engineer'
            ],
            [
                'key'=>'ns',
                'job_titles'=>'Network Support'
            ],
            [
                'key'=>'it-ts',
                'job_titles'=>'IT Technical Support'
            ],
            [
                'key'=>'sam',
                'job_titles'=>'Sales Assistant Manager'
            ],
            [
                'key'=>'ss',
                'job_titles'=>'Sales Staff'
            ],
        ];

        foreach ($values as $value)
        {
            \App\MasterJobTitle::create($value);
        }
    }
}
