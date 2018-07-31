<div class="row">

    @if(!empty($reference->id))
        <input type="hidden" name="ref_key[]" value="{{empty($reference->id) ? '':$reference->id}}">
    @endif

    <div class="col">
        <div class="form-group">
            <label for="ref_job_title">Job Title</label>
            <input type="text" id="ref_job_title" name="ref_job_title[]" class="form-control" title="Job Title"
                   value="{{empty($reference->job_title) ? '':$reference->job_title}}" >
        </div>
    </div>
</div>


<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="ref_first_name">First name</label>
            <input type="text" id="ref_first_name" name="ref_first_name[]" class="form-control" title="First name"
                   value="{{empty($reference->first_name) ? '':$reference->first_name}}" >
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="ref_last_name">Last name</label>
            <input type="text" id="ref_last_name" name="ref_last_name[]" class="form-control"
                   title="Last name" value="{{empty($reference->last_name) ? '':$reference->last_name}}" >
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="ref_middle_name">Middle name</label>
            <input type="text" id="ref_middle_name" name="ref_middle_name[]" class="form-control"
                   title="Middle name" value="{{empty($reference->middle_name) ? '':$reference->middle_name}}" >
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="ref_company_name">Company name</label>
            <input type="text" id="ref_company_name" name="ref_company_name[]" class="form-control"
                   title="Company name" value="{{empty($reference->company_name) ? '':$reference->company_name}}" >
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="ref_company_address">Company address</label>
            <input type="text" id="ref_company_address" name="ref_company_address[]" class="form-control"
                   title="Company address"
                   value="{{empty($reference->company_address) ? '':$reference->company_address}}" >
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="ref_contact_num">Contact no.</label>
            <input type="text" id="ref_contact_num" name="ref_contact_num[]" class="form-control"
                   title="Contact no." value="{{empty($reference->contact_num) ? '':$reference->contact_num}}">
        </div>

    </div>
</div>
