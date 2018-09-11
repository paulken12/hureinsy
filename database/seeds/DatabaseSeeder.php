<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MasterPermission::class);
        $this->call(MasterRole::class);
        $this->call(EmpInformationSeeder::class);
        $this->call(MasterAddressType::class);
        $this->call(MasterBloodType::class);
        $this->call(MasterCitizenship::class);
        $this->call(MasterCivilStatus::class);
        $this->call(MasterDepartment::class);
        $this->call(MasterEducationalType::class);
        $this->call(MasterEmailType::class);
        $this->call(MasterEmployeeStatus::class);
        $this->call(MasterFamilyType::class);
        $this->call(MasterGender::class);
        $this->call(MasterJobTitle::class);
        $this->call(MasterNameExtension::class);
        $this->call(MasterTeam::class);
        $this->call(MasterCompany::class);
        $this->call(PermissionRole::class);
        $this->call(RoleUser::class);
        $this->call(MasterJobType::class);
        $this->call(MasterEmploymentStatus::class);
        $this->call(MasterPafStatus::class);
        $this->call(MasterPafSubStatus::class);
        $this->call(MasterPafScheduleType::class);
        $this->call(StatusRole::class);
        $this->call(SubStatusRole::class);

    }
}
