<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpBasicInfo extends Model
{
    protected $table = 'emp_basic_info';
    protected $guarded = [];
    protected $dates = ['date_of_birth'];

    public function path() {
        return 'profile/'. $this->slug;
    }

    /**
     * Get the route key name.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function contract() {
        return $this->hasMany(EmpContract::class);
    }

    public function address() {
        return $this->hasMany(EmpAddressInfo::class);
    }

    public function contact() {
        return $this->hasMany(EmpContactInfo::class);
    }

    public function benefit() {
        return $this->hasMany(EmpBenefitInfo::class);
    }

    public function family() {
        return $this->hasMany(EmpFamilyBackground::class);
    }

    public function education() {
        return $this->hasMany(EmpEducationalBackground::class);
    }

    public function experience() {
        return $this->hasMany(EmpWorkExperience::class);
    }

    public function training() {
        return $this->hasMany(EmpTraining::class);
    }

    public function criminalInfo() {
        return $this->hasMany(EmpCriminalInfo::class);
    }

    public function reference() {
        return $this->hasMany(EmpCharacterReference::class);
    }

    public function emergency() {
        return $this->hasMany(EmpEmergencyContact::class);
    }

    public function medical() {
        return $this->hasMany(EmpMedicalInfo::class);
    }

    public function skill() {
        return $this->hasMany(EmpSkillInfo::class);
    }

    public function gender() {
        return $this->belongsTo(MasterGender::class, 'master_gender_key');
    }

    public function getGenderAttribute() {
        return  $this->gender()->pluck('gender')->first();
    }

    public function civilStatus() {
        return $this->belongsTo(MasterCivilStatus::class, 'master_civil_status_key');
    }

    public function getCivilStatusAttribute() {
        return  $this->civilStatus()->pluck('civil_status')->first();
    }

    public function citizenship() {
        return $this->belongsTo(MasterCitizenship::class, 'master_citizenship_key');
    }

    public function getCitizenshipAttribute() {
        return  $this->citizenship()->pluck('citizenship')->first();
    }

    public function extension() {
        return $this->belongsTo(MasterNameExtension::class, 'master_name_extension_key');
    }

}

