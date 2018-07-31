
@can('basic_edit')
    <div class="form-group">
        <label for="company_id">Company Id</label>
        <input type="text" id="company_id" name="company_id" class="form-control-plaintext" title="Company Id"
               value="{{empty($basicInfo->company_id) ? '':$basicInfo->company_id}}" {{empty($basicInfo->company_id) ? : 'readonly'}}>
    </div>
@endcan

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="basic_first_name">First Name</label>
            <input type="text" id="basic_first_name" name="basic_first_name"
                   class="form-control {{$errors->has('basic_first_name') ? ' is-invalid' : ''}}" title="First name"
                   value="{{empty($basicInfo->first_name) ? '':$basicInfo->first_name }}">
            @if ($errors->has('basic_first_name'))
                <span class="invalid-feedback" role="alert">
            <strong>
                {{ $errors->first('basic_first_name') }}
            </strong>
        </span>
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="basic_middle_name">Middle Name</label>
            <input type="text" id="basic_middle_name" name="basic_middle_name"
                   class="form-control {{$errors->has('basic_middle_name') ? ' is-invalid' : ''}}"
                   title="Middle name" value="{{empty($basicInfo->middle_name) ? '':$basicInfo->middle_name }}">
            @if ($errors->has('basic_middle_name'))
                <span class="invalid-feedback" role="alert">
            <strong>
                {{ $errors->first('basic_middle_name') }}
            </strong>
        </span>
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="basic_last_name">Last Name</label>
            <input type="text" id="basic_last_name" name="basic_last_name"
                   class="form-control {{$errors->has('basic_last_name') ? ' is-invalid' : ''}}"
                   title="Last name" value="{{empty($basicInfo->last_name) ? '':$basicInfo->last_name}}">
            @if ($errors->has('basic_last_name'))
                <span class="invalid-feedback" role="alert">
            <strong>
                {{ $errors->first('basic_last_name') }}
            </strong>
        </span>
            @endif
        </div>
    </div>

    <div class="col-1">
        <div class="form-group">
            <label for="basic_extension_key">Ext.</label>
            <input type="text" id="basic_extension_key" name="basic_extension_key"
                   class="form-control"
                   title="Last name" value="{{empty($basicInfo->master_name_extension_key) ? '':$basicInfo->master_name_extension_key}}">
        </div>
    </div>
</div>


@can('basic_edit')
    <div class="row">
        <div class="col">
            @if(!empty($basicInfo->gender->gender))
                <div class="form-group">
                    <label for="basic_gender_key">Gender</label>
                    <input type="text" id="basic_gender_key" name="basic_gender_key" class="form-control" title="Gender"
                           value="{{empty($basicInfo->gender->gender) ? '':$basicInfo->gender->gender}}">
                </div>
            @else
                <div class="form-group">
                    <label for="basic_gender_key">Gender</label>
                    <select name="basic_gender_key" id="basic_gender_key" class="form-control">
                        @foreach ($gender as $sex)
                            <option value="{{$sex->key}}">{{$sex->gender}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
        </div>
        <div class="col">
            <div class="form-group">
                <label for="basic_date_of_birth">Birth Date</label>
                <input type="text" id="basic_date_of_birth" name="basic_date_of_birth" class="form-control" title="Birth date"
                       value="{{empty($basicInfo->date_of_birth) ? '':$basicInfo->date_of_birth}}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="basic_birth_place">Birth Place</label>
                <input type="text" id="basic_birth_place" name="basic_birth_place" class="form-control" title="Birth place"
                       value="{{empty($basicInfo->birth_place) ? '':$basicInfo->birth_place}}">
            </div>
        </div>
    </div>
@endcan

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="basic_civil_status_key">Civil Status</label>
            <select name="basic_civil_status_key" id="basic_civil_status_key" class="form-control">
                @foreach ($civilStatus as $status)
                    <option value="{{$status->key}}">{{$status->civil_status}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="basic_citizenship_key">Citizenship</label>
            <select name="basic_citizenship_key" id="basic_citizenship_key" class="form-control">
                @foreach ($citizenship as $citizen)
                    <option value="{{empty($citizen->key) ? '':$citizen->key}}">{{empty($citizen->citizenship) ? '': $citizen->citizenship}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>





