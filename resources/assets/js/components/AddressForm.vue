<template>

    <div class="card bg-light">
        <div class="card-body" v-for="add in address">
            <h5 v-text="add.address_type"></h5>
            <hr>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <label for="add_unit_num">Unit no.</label>
                        <input type="text" id="add_unit_num" v-model="add.add_unit_num" class="form-control" title="Unit no." @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="add_block">Block</label>
                        <input type="text" id="add_block" v-model="add.add_block" class="form-control" title="Block" @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="add_street_name">Street name</label>
                        <input type="text" id="add_street_name" v-model="add.add_street_name" class="form-control" title="Street name" @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="add_subdivision">Subdivision</label>
                        <input type="text" id="add_subdivision" v-model="add.add_subdivision" class="form-control" title="Subdivision" @change="onChange">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="add_barangay">Barangay</label>
                        <input type="text" id="add_barangay" v-model="add.add_barangay" class="form-control" title="Barangay" @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="add_city">City</label>
                        <input type="text" id="add_city" v-model="add.add_city" class="form-control" title="City" @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="add_province">Province</label>
                        <input type="text" id="add_province" v-model="add.add_province" class="form-control" title="Province" @change="onChange">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="add_zip_code">Zip code</label>
                        <input type="text" id="add_zip_code" v-model="add.add_zip_code" class="form-control" title="Zip code" @change="onChange">
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>

<script>

    export default {

        data: function () {
            return{

               address:[],
            }

        },

       created: function () {
           this.address.push(
               {
                   address_type: 'Residential Address',
                   master_address_key: 'ra',
                   add_unit_num: '',
                   add_block: '',
                   add_street_name: '',
                   add_subdivision: '',
                   add_barangay: '',
                   add_city: '',
                   add_province: '',
                   add_zip_code: '',
               },
               {
                   address_type: 'Permanent Address',
                   master_address_key: 'pa',
                   add_unit_num: '',
                   add_block: '',
                   add_street_name: '',
                   add_subdivision: '',
                   add_barangay: '',
                   add_city: '',
                   add_province: '',
                   add_zip_code: '',
               }
           );
       },

        methods: {
           onChange() {

              this.$emit('emit-address', this.$data);

           }

        }
    }
</script>