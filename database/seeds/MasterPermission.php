<?php

use Illuminate\Database\Seeder;

class MasterPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
            [
                'name'=>'basic_view',
                'label'=>'Can view user basic information'
            ],

            [
                'name'=>'basic_create',
                'label'=>'Can create/add user basic information',
            ],

            [
                'name'=>'basic_edit',
                'label'=>'Can edit user basic information',
            ],

            [
                'name'=>'basic_delete',
                'label'=>'Can delete user basic information',
            ],

            [
                'name'=>'address_view',
                'label'=>'Can view user address',
            ],

            [
                'name'=>'address_create',
                'label'=>'Can create/add user address',
            ],

            [
                'name'=>'address_edit',
                'label'=>'Can edit user address',
            ],

            [
                'name'=>'address_delete',
                'label'=>'Can delete user address',
            ],

            [
                'name'=>'contact_view',
                'label'=>'Can view user contact',
            ],

            [
                'name'=>'contact_create',
                'label'=>'Can create/add user contact',
            ],

            [
                'name'=>'contact_edit',
                'label'=>'Can edit user contact',
            ],

            [
                'name'=>'contact_delete',
                'label'=>'Can delete user contact',
            ],

            [
                'name'=>'benefit_view',
                'label'=>'Can view user benefit',
            ],

            [
                'name'=>'benefit_create',
                'label'=>'Can create/add user benefit',
            ],

            [
                'name'=>'benefit_edit',
                'label'=>'Can edit user benefit',
            ],

            [
                'name'=>'benefit_delete',
                'label'=>'Can delete user benefit',
            ],

            [
                'name'=>'family_view',
                'label'=>'Can view user family info',
            ],

            [
                'name'=>'family_create',
                'label'=>'Can create/add user family info',
            ],

            [
                'name'=>'family_edit',
                'label'=>'Can edit user family info',
            ],

            [
                'name'=>'family_delete',
                'label'=>'Can delete user family info',
            ],

            [
                'name'=>'education_view',
                'label'=>'Can view user education background',
            ],

            [
                'name'=>'education_create',
                'label'=>'Can create/add user education background',
            ],

            [
                'name'=>'education_edit',
                'label'=>'Can edit user education background',
            ],

            [
                'name'=>'education_delete',
                'label'=>'Can delete user education background',
            ],

            [
                'name'=>'experience_view',
                'label'=>'Can view user work experience',
            ],

            [
                'name'=>'experience_create',
                'label'=>'Can create/add user work experience',
            ],

            [
                'name'=>'experience_edit',
                'label'=>'Can edit user work experience',
            ],

            [
                'name'=>'experience_delete',
                'label'=>'Can delete user work experience',
            ],

            [
                'name'=>'training_view',
                'label'=>'Can view user trainings',
            ],

            [
                'name'=>'training_create',
                'label'=>'Can create/add user trainings',
            ],

            [
                'name'=>'training_edit',
                'label'=>'Can edit user trainings',
            ],

            [
                'name'=>'training_delete',
                'label'=>'Can delete user trainings',
            ],

            [
                'name'=>'criminal_view',
                'label'=>'Can view user criminal info',
            ],

            [
                'name'=>'criminal_create',
                'label'=>'Can create/add user criminal info',
            ],

            [
                'name'=>'criminal_edit',
                'label'=>'Can edit user criminal info',
            ],

            [
                'name'=>'criminal_delete',
                'label'=>'Can delete user criminal info',
            ],

            [
                'name'=>'reference_view',
                'label'=>'Can view user references',
            ],

            [
                'name'=>'reference_create',
                'label'=>'Can create/add user references',
            ],

            [
                'name'=>'reference_edit',
                'label'=>'Can edit user references',
            ],

            [
                'name'=>'reference_delete',
                'label'=>'Can delete user references',
            ],

            [
                'name'=>'emergency_view',
                'label'=>'Can view user emergency contacts',
            ],

            [
                'name'=>'emergency_create',
                'label'=>'Can create/add user emergency contacts',
            ],

            [
                'name'=>'emergency_edit',
                'label'=>'Can edit user emergency contacts',
            ],

            [
                'name'=>'emergency_delete',
                'label'=>'Can delete user emergency contacts',
            ],

            [
                'name'=>'medical_view',
                'label'=>'Can view user medical info',
            ],

            [
                'name'=>'medical_create',
                'label'=>'Can create/add user medical info',
            ],

            [
                'name'=>'medical_edit',
                'label'=>'Can edit user medical info',
            ],

            [
                'name'=>'medical_delete',
                'label'=>'Can delete user medical info',
            ],

            [
                'name'=>'skill_view',
                'label'=>'Can view user skill info',
            ],

            [
                'name'=>'skill_create',
                'label'=>'Can create/add user skill info',
            ],

            [
                'name'=>'skill_edit',
                'label'=>'Can edit user skill info',
            ],

            [
                'name'=>'skill_delete',
                'label'=>'Can delete user skill info',
            ],

            [
                'name'=>'contract_view',
                'label'=>'Can view user contract',
            ],

            [
                'name'=>'contract_create',
                'label'=>'Can create/add user contract',
            ],

            [
                'name'=>'contract_edit',
                'label'=>'Can edit user contract',
            ],

            [
                'name'=>'contract_delete',
                'label'=>'Can delete user contract',
            ],

            [
                'name'=>'manager_view',
                'label'=>'Can request a paf',
            ],
        ];

        foreach ($value as $item) {
            \App\Permission::create($item);
        }
    }
}
