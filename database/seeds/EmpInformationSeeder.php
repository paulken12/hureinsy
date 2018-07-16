<?php

use Illuminate\Database\Seeder;

class EmpInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = new \App\AppHelper();
        $test->importCsv('user.csv',\App\User::class);
        $test->importCsv('info.csv',\App\EmpBasicInfo::class);
        $test->importCsv('add.csv',\App\EmpAddressInfo::class);
        $test->importCsv('add.csv',\App\EmpAddressInfo::class);
        $test->importCsv('edu.csv',\App\EmpEducationalBackground::class);
        $test->importCsv('eme.csv',\App\EmpEmergencyContact::class);
        $test->importCsv('exp.csv',\App\EmpWorkExperience::class);
        $test->importCsv('fam.csv',\App\EmpFamilyBackground::class);
        $test->importCsv('gov.csv',\App\EmpBenefitInfo::class);
        $test->importCsv('med.csv',\App\EmpMedicalInfo::class);
        $test->importCsv('train.csv',\App\EmpTraining::class);
        $test->importCsv('cont.csv',\App\EmpContactInfo::class);
    }
}
