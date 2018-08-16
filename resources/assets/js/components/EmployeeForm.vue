<template>

    <div class="card">
        <form action="/register/confirmed" METHOD="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <div class="card-body">

                <basic-form
                        :gender="gender"
                        :profile="profile"
                        :civil="civil"
                        :citizenship="citizenship"
                        :extension="extension"
                        :errors="form.errors"
                        @emit-basic="from_basic"
                ></basic-form>

                <br>

                <contact-form
                        ref="contact"
                ></contact-form>

                <address-form
                        @emit-address="from_address"
                ></address-form>

                <br>

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

    import BasicForm from './BasicForm.vue';
    import ContactForm from './ContactForm.vue';
    import EducationForm from './EducationForm.vue';
    import AddressForm from './AddressForm.vue';

    export default {

        props: ['user', 'profile', 'gender', 'citizenship', 'civil', 'extension','educations'],

        components: { BasicForm, ContactForm, EducationForm, AddressForm },

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

                    emp_address: [],

                    add_unit_num: [],
                    add_block: [],
                    add_street_name: [],
                    add_subdivision: [],
                    add_barangay: [],
                    add_city: [],
                    add_province: [],
                    add_zip_code: [],
                })
            }
        },
        methods: {

            onSubmit(){
                console.log(this.$refs.contact.$data);
                // this.form.post('/register/confirmed');
            },

            from_basic: function (basicInfo) {
                this.form.basic_first_name = basicInfo.basic_first_name;
                this.form.basic_middle_name = basicInfo.basic_middle_name;
                this.form.basic_last_name = basicInfo.basic_last_name;
                this.form.basic_extension_key = basicInfo.basic_extension_key;
                this.form.basic_date_of_birth = basicInfo.basic_date_of_birth;
                this.form.basic_civil_status_key = basicInfo.basic_civil_status_key;
                this.form.basic_citizenship_key = basicInfo.basic_citizenship_key;
                this.form.basic_gender_key = basicInfo.basic_gender_key;
                this.form.basic_birth_place = basicInfo.basic_birth_place;
            },

            from_address: function(address)
            {
                this.emp_address = address;

            },

            contact: function(field){
                console.log(field.$refs.contact.telephone_num);
                this.telephone_num =  field.$refs.contact.telephone_num;
                this.mobile_num =  field.$refs.contact.mobile_num;
                this.other_mobile =  field.$refs.contact.other_mobile;
                this.email =  field.$refs.contact.email;
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

