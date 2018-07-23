<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpBasicInfo extends Model
{
    protected $table = 'emp_basic_info';
    protected $guarded = [];
    protected $dates = ['date_of_birth'];

    public function path() {
        return 'profile/'. $this->first_name;
    }

    /**
     * Get the route key name.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'first_name';
    }

    public function owner() {
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

    public function jobDetail() {
        return $this->hasMany(EmpJobDetail::class);
    }

    public function image() {
        return $this->hasMany(EmpImage::class);
    }

    public function gender() {
        return $this->belongsTo(MasterGender::class, 'master_gender_key');
    }

    public function civilStatus() {
        return $this->belongsTo(MasterCivilStatus::class, 'master_civil_status_key');
    }

    public function citizenship() {
        return $this->belongsTo(MasterCitizenship::class, 'master_citizenship_key');
    }
}

