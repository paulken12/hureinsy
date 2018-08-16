<template>

    <div class="card">
        <form action="/register/confirmed" METHOD="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <div class="card-body">

                <div class="card bg-light">
                    <div class="card-body">
                        <h5>Personal Information</h5>
                        <hr>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="basic_first_name" class="sr-only">First Name</label>
                                    <input type="text" id="basic_first_name" name="basic_first_name" v-model="form.basic_first_name"
                                           class="form-control"
                                           v-bind:class="{ 'is-invalid' : form.errors.has('basic_first_name')}"
                                           title="First Name" placeholder="First Name" >
                                    <small class="text-danger" v-if="form.errors.has('basic_first_name')" v-text="form.errors.get('basic_first_name')"></small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="basic_middle_name" class="sr-only">Middle Name</label>
                                    <input type="text" id="basic_middle_name" name="basic_middle_name" v-model="form.basic_middle_name"
                                           class="form-control"
                                           v-bind:class="{ 'is-invalid': form.errors.has('basic_middle_name')}"
                                           title="Middle Name" placeholder="Middle Name" >
                                    <small class="text-danger" v-if="form.errors.has('basic_middle_name')" v-text="form.errors.get('basic_middle_name')"></small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="basic_last_name" class="sr-only">Last Name</label>
                                    <input type="text" id="basic_last_name" name="basic_last_name" v-model="form.basic_last_name"
                                           class="form-control"
                                           v-bind:class="{ 'is-invalid' : form.errors.has('basic_last_name')}"
                                           title="Last Name" placeholder="Last Name" >
                                    <small class="text-danger" v-if="form.errors.has('basic_last_name')" v-text="form.errors.get('basic_last_name')"></small>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="basic_extension" class="sr-only">Extension</label>
                                    <select id="basic_extension" v-model="form.basic_extension_key" class="form-control" >
                                        <option disabled value="">Extension</option>
                                        <option v-for="extensionType in extension"
                                                v-bind:value="extensionType.key">{{extensionType.name_extension}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">

                                <div class="form-group">
                                    <label for="basic_birth_date" class="sr-only">Date of birth</label>
                                    <input type="text" id="basic_birth_date" v-model="form.basic_date_of_birth"
                                           class="form-control"
                                           title="Birth of birth" placeholder="Birth of birth">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="basic_civil_status_key" class="sr-only">Civil Status</label>
                                    <select id="basic_civil_status_key" v-model="form.basic_civil_status_key"
                                            class="form-control">
                                        <option disabled value="">Civil Status</option>
                                        <option v-for="civilType in civil" v-bind:value="civilType.key">
                                            {{civilType.civil_status}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="basic_citizenship_key" class="sr-only">Citizenship</label>
                                    <select id="basic_citizenship_key" class="form-control"
                                            v-model="form.basic_citizenship_key">
                                        <option disabled value="">Citizenship</option>
                                        <option v-for="citizenshipType in citizenship"
                                                v-bind:value="citizenshipType.key">{{citizenshipType.citizenship}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="gender_key" class="sr-only">Gender</label>
                                    <select id="gender_key" class="form-control" v-model="form.basic_gender_key" >
                                        <option disabled value="">Gender</option>
                                        <option v-for="genderType in gender" v-bind:value="genderType.key">
                                            {{genderType.gender}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="basic_birth_place" class="sr-only">Birth Place</label>
                            <input type="text" id="basic_birth_place" v-model="form.basic_birth_place" class="form-control"
                                   title="Birth Place" placeholder="Birth Place" >
                        </div>
                    </div>
                </div>

                <br>

                <div class="card bg-light mb-4">
                    <div class="card-body">
                        <h5>Contact Information</h5>
                        <hr>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="con_telephone_num" class="sr-only">Telephone no.</label>
                                    <input type="text" id="con_telephone_num" v-model="form.telephone_num"
                                           class="form-control" title="Telephone no." placeholder="Telephone no." >
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="con_mobile_num" class="sr-only">Mobile no.</label>
                                    <input type="text" id="con_mobile_num" v-model="form.mobile_num" class="form-control"
                                           title="Mobile no." placeholder="Mobile no." >
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="con_other_num" class="sr-only">Other no.</label>
                                    <input type="text" id="con_other_num" v-model="form.other_mobile" class="form-control"
                                           title="Other no." placeholder="Other no." >
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="con_email" class="sr-only">Email</label>
                                    <input type="text" id="con_email" v-model="form.email" class="form-control" 
                                           title="Email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="card bg-light">
                    <div class="card-body" v-for="(address, index) in form.address_type">
                        <h5 v-text="address"></h5>
                        <hr>

                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label for="add_unit_num">Unit no.</label>
                                    <input type="text" id="add_unit_num" v-model="form.add_unit_num[index]" class="form-control" title="Unit no.">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="add_block">Block</label>
                                    <input type="text" id="add_block" v-model="form.add_block[index]" class="form-control" title="Block">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="add_street_name">Street name</label>
                                    <input type="text" id="add_street_name" v-model="form.add_street_name[index]" class="form-control" title="Street name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="add_subdivision">Subdivision</label>
                                    <input type="text" id="add_subdivision" v-model="form.add_subdivision[index]" class="form-control" title="Subdivision">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="add_barangay">Barangay</label>
                                    <input type="text" id="add_barangay" v-model="form.add_barangay[index]" class="form-control" title="Barangay">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="add_city">City</label>
                                    <input type="text" id="add_city" v-model="form.add_city[index]" class="form-control" title="City">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="add_province">Province</label>
                                    <input type="text" id="add_province" v-model="form.add_province[index]" class="form-control" title="Province">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="add_zip_code">Zip code</label>
                                    <input type="text" id="add_zip_code" v-model="form.add_zip_code[index]" class="form-control" title="Zip code">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <br>

                <div class="card bg-light pb-4 pt-4">
                    <div class="card-body" v-for="(family, index) in form.family_type">
                        <div class="container m-0 p-0">
                            <div class="row m-0 p-0">
                                <div class="col m-0 p-0">
                                    <strong v-text="family" hidden></strong>
                                    <label for="fam-type" class="sr-only">Family type</label>
                                    <select id="fam-type" class="form-control w-25 border-info" v-model="form.master_family_key[index]" >
                                        <option disabled value="">Family type</option>
                                        <option v-for="familyType in families" v-bind:value="familyType.key">
                                            {{familyType.family_type}}
                                        </option>
                                    </select>
                                </div>
                                <div class="col m-0 p-0">
                                    <a class="btn btn-danger float-right custom-btn-color" @click="removeSibling(index)">x</a>
                                </div>
                            </div>



                        </div>

                        <hr>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fam_last_name" class="sr-only">Last name</label>
                                    <input type="text" id="fam_last_name" class="form-control" v-model="form.fam_last_name[index]"
                                           title="Last name"
                                           placeholder="Last name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="fam_first_name" class="sr-only">First name</label>
                                    <input type="text" id="fam_first_name" class="form-control" v-model="form.fam_first_name[index]"
                                           title="First name" placeholder="First name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="fam_date_of_birth" class="sr-only">Date of birth</label>
                                    <input type="text" id="fam_date_of_birth" class="form-control" v-model="form.fam_date_of_birth[index]"
                                           title="Date of birth" placeholder="Date of birth">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fam_gender_key" class="sr-only">Gender</label>
                                    <select id="fam_gender_key" class="form-control" v-model="form.fam_gender_key[index]" >
                                        <option disabled value="">Gender</option>
                                        <option v-for="genderType in gender" v-bind:value="genderType.key">
                                            {{genderType.gender}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="fam_employer" class="sr-only">Employer</label>
                                    <input type="text" id="fam_employer" class="form-control" v-model="form.fam_employer[index]"
                                           title="Employer"
                                           placeholder="Employer">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="fam_occupation" class="sr-only">Occupation</label>
                                    <input type="text" id="fam_occupation" class="form-control" v-model="form.fam_occupation[index]"
                                           title="Occupation" placeholder="Occupation">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid text-center">
                        <a class="btn btn-secondary btn-sm custom-btn-color" @click="addSibling">Add family member</a>
                    </div>

                </div>

                <br>
            </div>

            <div class="card-footer text-center">
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        I certify that the provided information is true and correct to the best of my
                        knowledge.
                    </label>
                </div>
                <br>
                <input type="submit" class="btn btn-success" id="submit-form" value="Submit"
                       name="submit-form">
                {{form.errors.any()}}
                <a href="#">
                    <input type="button" class="btn btn-secondary" value="Preview">
                </a>
            </div>
        </form>
    </div>

</template>

<script>

    export default {

        props: ['user', 'profile', 'gender', 'citizenship', 'civil', 'extension','educations','families'],

        data: function () {
            return {

                form: new Form({
                    basic_first_name: this.isNameEmpty(),
                    basic_middle_name: '',
                    basic_last_name: '',
                    basic_extension_key: '',
                    basic_date_of_birth: '',
                    basic_civil_status_key: '',
                    basic_citizenship_key: '',
                    basic_gender_key: '',
                    basic_birth_place: '',

                    telephone_num: '',
                    mobile_num: '',
                    other_mobile: '',
                    email: '',

                    address_type: ['Residential Address','Permanent Address'],
                    master_address_key: ['ra','pa'],
                    add_unit_num: [],
                    add_block: [],
                    add_street_name: [],
                    add_subdivision: [],
                    add_barangay: [],
                    add_city: [],
                    add_province: [],
                    add_zip_code: [],

                    family_type: ['Father','Mother'],
                    master_family_key:['fat','mot'],
                    fam_last_name:[],
                    fam_first_name:[],
                    fam_date_of_birth:[],
                    fam_gender_key:['m','f'],
                    fam_employer:[],
                    fam_occupation:[],
                })
            }
        },


        methods: {

            onSubmit(){
                this.form.post('/register/confirmed');
            },
            
            addSibling()
            {
                this.form.family_type.push('Sibling');
                this.form.master_family_key.push('sib');
                this.form.fam_last_name.push('');
                this.form.fam_first_name.push('');
                this.form.fam_date_of_birth.push('');
                this.form.fam_gender_key.push('');
                this.form.fam_employer.push('');
                this.form.fam_occupation.push('');
            },

            removeSibling: function(index) {
                this.form.family_type.splice(index, 1);
                this.form.master_family_key.splice(index, 1);
                this.form.fam_last_name.splice(index, 1);
                this.form.fam_first_name.splice(index, 1);
                this.form.fam_date_of_birth.splice(index, 1);
                this.form.fam_gender_key.splice(index, 1);
                this.form.fam_employer.splice(index, 1);
                this.form.fam_occupation.splice(index, 1);
            },
            


            isNameEmpty() {
                if (this.profile.first_name.length > 0) {
                    return this.profile.first_name
                }
                return ''
            },

        },

    }
</script>

<style>
    .custom-btn-color{
        color: white;
    }
</style>

