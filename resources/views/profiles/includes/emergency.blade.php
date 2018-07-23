<div class="row">

    <input type="hidden" name="key" value="{{empty($emergency->id) ? '':$emergency->id}}">

    <div class="col">
        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" class="form-control"
                   title="First name" value="{{empty($emergency->first_name) ? '':$emergency->first_name}}" required>
        </div>
    </div>
    <div class="col">

        <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" class="form-control" title="Last name"
                   value="{{empty($emergency->last_name) ? '':$emergency->last_name}}" required>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="middle_name">Middle name</label>
            <input type="text" id="middle_name" name="middle_name" class="form-control"
                   title="Middle name" value="{{empty($emergency->middle_name) ? '':$emergency->middle_name}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="contact_num">Contact no.</label>
            <input type="text" id="contact_num" name="contact_num" class="form-control"
                   title="Contact no." value="{{empty($emergency->contact_num) ? '':$emergency->contact_num}}" required>
        </div>
    </div>
</div>



