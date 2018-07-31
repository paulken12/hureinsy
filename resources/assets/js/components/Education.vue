<template>
    <div>
        <div class="card mb-2" v-for="(row, index) in rows" :key="row">
            <div class="card-body">

                <div class="form-group">
                    <label for="key">Education Type</label>
                    <select name="key" id="key" class="form-control">
                        <option v-for="education in educations" v-bind:value="education.key">{{education.educational_level}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" id="course" name="course" class="form-control" title="Course" v-model="row.course">
                </div>

                <div class="form-group">
                    <label for="name_of_school">School name</label>
                    <input type="text" id="name_of_school" name="name_of_school" class="form-control"
                           title="School name" v-model="row.name_of_school">
                </div>

                <div class="form-group">
                    <label for="year_graduated">Year graduated</label>
                    <input type="text" id="year_graduated" name="year_graduated" class="form-control"
                           title="Year graduated" v-model="row.year_graduated">
                </div>

                <div class="form-group">
                    <label for="award">Awards</label>
                    <textarea class="form-control" name="award" id="award" cols="30"
                              rows="5" v-model="row.award"></textarea>
                </div>

                <a class="btn btn-danger btn-sm float-right" v-on:click="removeElement(index);" style="cursor: pointer">Remove</a>
            </div>
        </div>

        <div class="form-group text-center">
            <button class="btn btn-primary " @click="addRow">Add Education</button>
        </div>

    </div>
</template>

<script>
    export default {
        props:['user','educations'],

        data: function () {
            return {
                rows: [],
                options: this.educations
            }
        },
        methods: {
            addRow: function() {
                this.rows.push({
                    key: '',
                    course: '',
                    name_of_school: '',
                    year_graduated: '',
                    award: '',
                });
            },
            removeElement: function(index) {
                this.rows.splice(index, 1);
            }
        }

    }
</script>
