<div class="row">

    <input type="hidden" name="key" value="{{empty($reference->id) ? '':$reference->id}}">

    <div class="col">
        <div class="form-group">
            <label for="job_title">Job Title</label>
            <input type="text" id="job_title" name="job_title" class="form-control" title="Job Title"
                   value="{{empty($reference->job_title) ? '':$reference->job_title}}" {{empty($basicInfo) ? '':"disabled"}}>
        </div>
    </div>
</div>


<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" class="form-control" title="First name"
                   value="{{empty($reference->first_name) ? '':$reference->first_name}}" {{empty($basicInfo) ? '':"disabled"}}>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" class="form-control"
                   title="Last name" value="{{empty($reference->last_name) ? '':$reference->last_name}}" {{empty($basicInfo) ? '':"disabled"}}>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="middle_name">Middle name</label>
            <input type="text" id="middle_name" name="middle_name" class="form-control"
                   title="Middle name" value="{{empty($reference->middle_name) ? '':$reference->middle_name}}" {{empty($basicInfo) ? '':"disabled"}}>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="company_name">Company name</label>
            <input type="text" id="company_name" name="company_name" class="form-control"
                   title="Company name" value="{{empty($reference->company_name) ? '':$reference->company_name}}" {{empty($basicInfo) ? '':"disabled"}}>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="company_address">Company address</label>
            <input type="text" id="company_address" name="company_address" class="form-control"
                   title="Company address"
                   value="{{empty($reference->company_address) ? '':$reference->company_address}}" {{empty($basicInfo) ? '':"disabled"}}>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="contact_num">Contact no.</label>
            <input type="text" id="contact_num" name="contact_num" class="form-control"
                   title="Contact no." value="{{empty($reference->contact_num) ? '':$reference->contact_num}}">
        </div>

    </div>
</div>
