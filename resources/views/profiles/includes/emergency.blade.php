<div class="row">

    <input type="hidden" name="eme_key" value="{{empty($emergency->id) ? '':$emergency->id}}">

    <div class="col">
        <div class="form-group">
            <label for="eme_first_name">First name</label>
            <input type="text" id="eme_first_name" name="eme_first_name" class="form-control"
                   title="First name" value="{{empty($emergency->first_name) ? '':$emergency->first_name}}" >
        </div>
    </div>
    <div class="col">

        <div class="form-group">
            <label for="eme_last_name">Last name</label>
            <input type="text" id="eme_last_name" name="eme_last_name" class="form-control" title="Last name"
                   value="{{empty($emergency->last_name) ? '':$emergency->last_name}}" >
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="eme_middle_name">Middle name</label>
            <input type="text" id="eme_middle_name" name="eme_middle_name" class="form-control"
                   title="Middle name" value="{{empty($emergency->middle_name) ? '':$emergency->middle_name}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="eme_contact_num">Contact no.</label>
            <input type="text" id="eme_contact_num" name="eme_contact_num" class="form-control"
                   title="Contact no." value="{{empty($emergency->contact_num) ? '':$emergency->contact_num}}" >
        </div>
    </div>
</div>



