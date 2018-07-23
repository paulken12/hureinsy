<input type="hidden" name="key" value="{{empty($benefit->id) ? '':$benefit->id}}">

<div class="form-group">
    <label for="sss_num">SSS Id</label>
    <input type="text" id="sss_num" name="sss_num" class="form-control" title="SS Id"
           value="{{empty($benefit->sss_num) ? '':$benefit->sss_num}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>

<div class="form-group">
    <label for="pagibig_num">Pag-Ibig Id</label>
    <input type="text" id="pagibig_num" name="pagibig_num" class="form-control"
           title="Pag-Ibig Id"
           value="{{empty($benefit->pagibig_num) ? '':$benefit->pagibig_num}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>

<div class="form-group">
    <label for="philhealth_num">Philhealth Id</label>
    <input type="text" id="philhealth_num" name="philhealth_num" class="form-control"
           title="Philhealth Id"
           value="{{empty($benefit->philhealth_num) ? '':$benefit->philhealth_num}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>

<div class="form-group">
    <label for="tin_num">TIN Id</label>
    <input type="text" id="tin_num" name="tin_num" class="form-control" title="TIN Id"
           value="{{empty($benefit->tin_num) ? '':$benefit->tin_num}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>

<div class="form-group">
    <label for="payroll_account">Chinabank account</label>
    <input type="text" id="payroll_account" name="payroll_account" class="form-control"
           title="Chinabank account"
           value="{{empty($benefit->payroll_account) ? '':$benefit->payroll_account}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>
