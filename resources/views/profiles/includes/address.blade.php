<div class="row">

    @if(!empty($address->id))
        <input type="hidden" name="add_key[]" value="{{empty($address->id) ? '': $address->id}}">
    @endif

    <div class="col">
        <div class="form-group">
            <label for="add_unit_num">Unit no.</label>
            <input type="text" id="add_unit_num" name="add_unit_num[]" class="form-control" title="Unit no."
                   value="{{empty($address->unit_num) ? '': $address->unit_num}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="add_block">Block</label>
            <input type="text" id="add_block" name="add_block[]" class="form-control" title="Block"
                   value="{{empty($address->block) ? '': $address->block}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="add_street_name">Street name</label>
            <input type="text" id="add_street_name" name="add_street_name[]" class="form-control" title="Street name"
                   value="{{empty($address->street_name) ? '': $address->street_name}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="add_subdivision">Subdivision</label>
            <input type="text" id="add_subdivision" name="add_subdivision[]" class="form-control" title="Subdivision"
                   value="{{empty($address->subdivision) ? '': $address->subdivision}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="add_barangay">Barangay</label>
            <input type="text" id="add_barangay" name="add_barangay[]" class="form-control" title="Barangay"
                   value="{{empty($address->barangay) ? '': $address->barangay}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="add_city">City</label>
            <input type="text" id="add_city" name="add_city[]" class="form-control" title="City"
                   value="{{empty($address->city) ? '': $address->city}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="add_province">Province</label>
            <input type="text" id="add_province" name="add_province[]" class="form-control" title="Province"
                   value="{{empty($address->province) ? '': $address->province}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="add_zip_code">Zip code</label>
            <input type="text" id="add_zip_code" name="add_zip_code[]" class="form-control" title="Zip code"
                   value="{{empty($address->zip_code) ? '': $address->zip_code}}">
        </div>
    </div>
</div>