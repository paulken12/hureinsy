<div class="row">
    <input type="hidden" name="key" value="{{empty($family->id) ? '':$family->id}}">
    <div class="col">
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" class="form-control" title="Last name"
                   value="{{empty($family->last_name) ? '':$family->last_name}}" {{empty($family) ? '':"disabled"}}>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" class="form-control" title="First name"
                   value="{{empty($family->first_name) ? '':$family->first_name}}" {{empty($family) ? '':"disabled"}}>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="date_of_birth">Birth date</label>
            <input type="text" id="date_of_birth" name="date_of_birth" class="form-control" title="Birth date"
                   value="{{empty($family->date_of_birth) ? '':$family->date_of_birth}}" {{empty($family) ? '':"disabled"}}>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="master_gender_key">Gender</label>
            <input type="text" id="master_gender_key" name="master_gender_key" class="form-control" title="Gender"
                   value="{{empty($family->gender->gender) ? '':$family->gender->gender}}" {{empty($family) ? '':"disabled"}}>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="employer">Employer</label>
            <input type="text" id="employer" name="employer" class="form-control" title="Employer"
                   value="{{empty($family->employer) ? '':$family->employer}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" id="occupation" name="occupation" class="form-control" title="Occupation"
                   value="{{empty($family->occupation) ? '':$family->occupation}}">
        </div>
    </div>
</div>



