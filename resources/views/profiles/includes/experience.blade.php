<div class="row">
    <input type="hidden" name="key" value="{{empty($experience->id) ? '':$experience->id}}">
    <div class="col">
        <div class="form-group">
            <label for="company_name">Company name</label>
            <input type="text" id="company_name" name="company_name"
                   class="form-control"
                   title="Company name" value="{{empty($experience->company_name) ? '':$experience->company_name}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="company_address">Company Address</label>
            <input type="text" id="company_address" name="company_address"
                   class="form-control"
                   title="Company Address" value="{{empty($experience->company_address) ? '':$experience->company_address}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="date_from">Date from</label>
            <input type="text" id="date_from" name="date_from" class="form-control"
                   title="Date from" value="{{empty($experience->date_from) ? '':$experience->date_from}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="date_to">Date to</label>
            <input type="text" id="date_to" name="date_to" class="form-control"
                   title="Data to" value="{{empty($experience->date_to) ? '':$experience->date_to}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="industry">Industry</label>
            <input type="text" id="industry" name="industry" class="form-control"
                   title="Industry" value="{{empty($experience->industry) ? '':$experience->industry}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" id="salary" name="salary" class="form-control"
                   title="Salary" value="{{empty($experience->salary) ? '':$experience->salary}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="reason_for_leaving">Reason for leaving</label>
            <textarea name="reason_for_leaving" id="reason_for_leaving" cols="30"
                      rows="5" class="form-control"
                      title="Reason for leaving">{{empty($experience->reason_for_leaving) ? '':$experience->reason_for_leaving}}</textarea>
        </div>

    </div>
</div>