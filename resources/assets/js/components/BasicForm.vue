<template>
    <div class="card bg-light">
        <div class="card-body">
            <h5>Personal Information</h5>
            <hr>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="basic_first_name" class="sr-only">First Name</label>
                        <input type="text" id="basic_first_name" name="basic_first_name" v-model="basic_first_name"
                               class="form-control"
                               v-bind:class="{ 'is-invalid' : errors.has('basic_first_name')}"
                               title="First Name" placeholder="First Name" @change="onChange">
                        <small class="text-danger" v-if="errors.has('basic_first_name')" v-text="errors.get('basic_first_name')"></small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="basic_middle_name" class="sr-only">Middle Name</label>
                        <input type="text" id="basic_middle_name" name="basic_middle_name" v-model="basic_middle_name"
                               class="form-control"
                               v-bind:class="{ 'is-invalid': errors.has('basic_middle_name')}"
                               title="Middle Name" placeholder="Middle Name" @change="onChange">
                        <small class="text-danger" v-if="errors.has('basic_middle_name')" v-text="errors.get('basic_middle_name')"></small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="basic_last_name" class="sr-only">Last Name</label>
                        <input type="text" id="basic_last_name" name="basic_last_name" v-model="basic_last_name"
                               class="form-control"
                               v-bind:class="{ 'is-invalid' : errors.has('basic_last_name')}"
                               title="Last Name" placeholder="Last Name" @change="onChange">
                        <small class="text-danger" v-if="errors.has('basic_last_name')" v-text="errors.get('basic_last_name')"></small>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="basic_extension" class="sr-only">Extension</label>
                        <select id="basic_extension" v-model="basic_extension_key" class="form-control" @change="onChange">
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
                        <input type="text" id="basic_birth_date" v-model="basic_date_of_birth"
                               class="form-control"
                               title="Birth of birth" placeholder="Birth of birth" @change="handler('basic_date_of_birth')">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="basic_civil_status_key" class="sr-only">Civil Status</label>
                        <select id="basic_civil_status_key" v-model="basic_civil_status_key"
                                class="form-control" @change="handler('basic_civil_status_key')">
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
                                v-model="basic_citizenship_key" @change="handler('basic_citizenship_key')">
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
                        <select id="gender_key" class="form-control" v-model="basic_gender_key" @change="handler('basic_gender_key')" >
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
                <input type="text" id="basic_birth_place" v-model="basic_birth_place" class="form-control"
                       title="Birth Place" placeholder="Birth Place" @change="onChange">
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: ['profile', 'gender', 'citizenship', 'civil', 'extension','errors'],

        data: function () {
            return {
                basic_first_name: this.isNameEmpty(),
                basic_middle_name: '',
                basic_last_name: '',
                basic_extension_key: '',
                basic_date_of_birth: '',
                basic_civil_status_key: '',
                basic_citizenship_key: '',
                basic_gender_key: '',
                basic_birth_place: '',
            }
        },
        methods: {

            onChange(){
                return this.$emit('emit-basic',this.$data);
            },

            removeError(event)
            {
                this.errors.clear(event);
            },

            handler: function(event){
                this. onChange();
                this.removeError(event);
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
