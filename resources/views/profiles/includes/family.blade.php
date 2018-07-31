<div class="row">

    @if(!empty($family->id))
        <input type="hidden" name="fam_key[]" value="{{empty($family->id) ? '':$family->id}}">
    @endif

    <div class="col">
        <div class="form-group">
            <label for="fam_last_name">Last name</label>
            <input type="text" id="fam_last_name" name="fam_last_name[]" class="form-control" title="Last name"
                   value="{{empty($family->last_name) ? '':$family->last_name}}" >
                    {{--{{empty($family) ? '':"disabled"}}--}}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="fam_first_name">First name</label>
            <input type="text" id="fam_first_name" name="fam_first_name[]" class="form-control" title="First name"
                   value="{{empty($family->first_name) ? '':$family->first_name}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="fam_date_of_birth">Birth date</label>
            <input type="text" id="fam_date_of_birth" name="fam_date_of_birth[]" class="form-control" title="Birth date"
                   value="{{empty($family->date_of_birth) ? '':$family->date_of_birth}}">
        </div>
    </div>
    <div class="col">
        @if(!empty($basicInfo->gender->gender))
            <div class="form-group">
                <label for="fam_gender_key">Gender</label>
                <input type="text" id="fam_gender_key" name="fam_gender_key[]" class="form-control" title="Gender"
                       value="{{empty($basicInfo->gender->gender) ? '':$basicInfo->gender->gender}}">
            </div>
        @else
            <div class="form-group">
                <label for="fam_gender_key">Gender</label>
                <select name="fam_gender_key[]" id="fam_gender_key" class="form-control">
                    @foreach ($gender as $sex)
                        <option value="{{$sex->key}}">{{$sex->gender}}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="fam_employer">Employer</label>
            <input type="text" id="fam_employer" name="fam_employer[]" class="form-control" title="Employer"
                   value="{{empty($family->employer) ? '':$family->employer}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="fam_occupation">Occupation</label>
            <input type="text" id="fam_occupation" name="fam_occupation[]" class="form-control" title="Occupation"
                   value="{{empty($family->occupation) ? '':$family->occupation}}">
        </div>
    </div>
</div>



