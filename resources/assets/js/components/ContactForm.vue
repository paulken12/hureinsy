<template>
    <div class="card bg-light mb-4">
        <div class="card-body">
            <h5>Contact Information</h5>
            <hr>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="con_telephone_num" class="sr-only">Telephone no.</label>
                        <input type="text" id="con_telephone_num" v-model="telephone_num"
                               class="form-control" title="Telephone no." placeholder="Telephone no." @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="con_mobile_num" class="sr-only">Mobile no.</label>
                        <input type="text" id="con_mobile_num" v-model="mobile_num" class="form-control"
                               title="Mobile no." placeholder="Mobile no." @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="con_other_num" class="sr-only">Other no.</label>
                        <input type="text" id="con_other_num" v-model="other_mobile" class="form-control"
                               title="Other no." placeholder="Other no." @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="con_email" class="sr-only">Email</label>
                        <input type="text" id="con_email" v-model="email" class="form-control" @change="onChange"
                               title="Email" placeholder="Email">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {

        data: function () {
            return {

                telephone_num: '',
                mobile_num: '',
                other_mobile: '',
                email: '',

            }
        },

        methods:{
            onChange(){
                return this.$emit('emit-contact',this.$data);
            },
        }
    }
</script>