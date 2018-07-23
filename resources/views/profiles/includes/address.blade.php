<div class="row">
    <input type="hidden" name="key" value="{{empty($address->master_address_key) ? '': $address->master_address_key}}">
    <div class="col">
        <div class="form-group">
            <label for="unit_num">Unit no.</label>
            <input type="text" id="unit_num" name="unit_num" class="form-control" title="Unit no."
                   value="{{empty($address->unit_num) ? '': $address->unit_num}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="block">Block</label>
            <input type="text" id="block" name="block" class="form-control" title="Block"
                   value="{{empty($address->block) ? '': $address->block}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="street_name">Street name</label>
            <input type="text" id="street_name" name="street_name" class="form-control" title="Street name"
                   value="{{empty($address->street_name) ? '': $address->street_name}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="subdivision">Subdivision</label>
            <input type="text" id="subdivision" name="subdivision" class="form-control" title="Subdivision"
                   value="{{empty($address->subdivision) ? '': $address->subdivision}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="barangay">Barangay</label>
            <input type="text" id="barangay" name="barangay" class="form-control" title="Barangay"
                   value="{{empty($address->barangay) ? '': $address->barangay}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" class="form-control" title="City"
                   value="{{empty($address->city) ? '': $address->city}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="province">Province</label>
            <input type="text" id="province" name="province" class="form-control" title="Province"
                   value="{{empty($address->province) ? '': $address->province}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="zip_code">Zip code</label>
            <input type="text" id="zip_code" name="zip_code" class="form-control" title="Zip code"
                   value="{{empty($address->zip_code) ? '': $address->zip_code}}">
        </div>
    </div>
</div>