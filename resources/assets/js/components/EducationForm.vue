<template>
    <div>
        <div class="card mb-2" v-for="(edu, index) in education">
            <div class="card-body">

                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <label for="key" class="sr-only">Education Type</label>
                            <select id="key" class="form-control" v-model="edu.edu_key" @change="onEducationApplied">
                                <option value="">- level -</option>
                                <option v-for="educationType in options" v-bind:value="educationType.key">{{educationType.educational_level}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="name_of_school" class="sr-only">School name</label>
                            <input type="text" id="name_of_school" class="form-control" placeholder="School name"
                                   title="School name" v-model="edu.name_of_school" @change="onEducationApplied">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="course" class="sr-only">Course</label>
                            <input type="text" id="course" class="form-control" title="Course" v-model="edu.course" @change="onEducationApplied" placeholder="Course">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="year_graduated" class="sr-only">Year graduated</label>
                            <input type="text" id="year_graduated" class="form-control"
                                   title="Year graduated" v-model="edu.year_graduated" @change="onEducationApplied" placeholder="Year graduated">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="award" class="sr-only">Awards</label>
                            <textarea class="form-control"  id="award" cols="30"
                                      rows="2" v-model="edu.award" @change="onEducationApplied" placeholder="Awards"></textarea>
                        </div>
                    </div>
                </div>

                <a class="btn btn-danger btn-sm float-right" v-on:click="removeElement(index)" style="color: white">Remove</a>
            </div>
        </div>

        <div class="form-group text-center">
            <a class="btn btn-primary btn-sm" @click="addEducation" style="color: white">Add education</a>
        </div>

    </div>
</template>

<script>
    export default {
        props:['user','edu_educations'],

        data: function () {
            return {
                education: [],
                options: this.edu_educations
            }
        },
        methods: {
            addEducation: function() {
                this.education.push({
                    edu_key: '',
                    course: '',
                    name_of_school: '',
                    year_graduated: '',
                    award: '',
                });
            },
            removeElement: function(index) {
                this.education.splice(index, 1);
            },

            educ(){
                return this.education
            },


            onEducationApplied()
            {
                this.$emit('education-loaded', this.educ);
            }
        }

    }
</script>
