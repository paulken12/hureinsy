<div class="row">

    @if(!empty($experience->id))
        <input type="hidden" name="exp_key[]" value="{{empty($experience->id) ? '':$experience->id}}">
    @endif

    <div class="col">
        <div class="form-group">
            <label for="exp_company_name">Company name</label>
            <input type="text" id="exp_company_name" name="exp_company_name[]"
                   class="form-control"
                   title="Company name" value="{{empty($experience->company_name) ? '':$experience->company_name}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="exp_company_address">Company Address</label>
            <input type="text" id="exp_company_address" name="exp_company_address[]"
                   class="form-control"
                   title="Company Address" value="{{empty($experience->company_address) ? '':$experience->company_address}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="exp_date_from">Date from</label>
            <input type="text" id="exp_date_from" name="exp_date_from[]" class="form-control"
                   title="Date from" value="{{empty($experience->date_from) ? '':$experience->date_from}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="exp_date_to">Date to</label>
            <input type="text" id="exp_date_to" name="exp_date_to[]" class="form-control"
                   title="Data to" value="{{empty($experience->date_to) ? '':$experience->date_to}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="exp_industry">Industry</label>
            <input type="text" id="exp_industry" name="exp_industry[]" class="form-control"
                   title="Industry" value="{{empty($experience->industry) ? '':$experience->industry}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="exp_salary">Salary</label>
            <input type="text" id="exp_salary" name="exp_salary[]" class="form-control"
                   title="Salary" value="{{empty($experience->salary) ? '':$experience->salary}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="exp_reason_for_leaving">Reason for leaving</label>
            <textarea name="exp_reason_for_leaving[]" id="exp_reason_for_leaving" cols="30"
                      rows="5" class="form-control"
                      title="Reason for leaving">{{empty($experience->reason_for_leaving) ? '':$experience->reason_for_leaving}}</textarea>
        </div>

    </div>
</div>