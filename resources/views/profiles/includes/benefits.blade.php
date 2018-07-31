<input type="hidden" name="gov_key" value="{{empty($benefit->id) ? '':$benefit->id}}">

<div class="form-group">
    <label for="gov_sss_num">SSS Id</label>
    <input type="text" id="gov_sss_num" name="gov_sss_num" class="form-control" title="SS Id"
           value="{{empty($benefit->sss_num) ? '':$benefit->sss_num}}" >
</div>

<div class="form-group">
    <label for="gov_pagibig_num">Pag-Ibig Id</label>
    <input type="text" id="gov_pagibig_num" name="gov_pagibig_num" class="form-control"
           title="Pag-Ibig Id"
           value="{{empty($benefit->pagibig_num) ? '':$benefit->pagibig_num}}" >
</div>

<div class="form-group">
    <label for="gov_philhealth_num">Philhealth Id</label>
    <input type="text" id="gov_philhealth_num" name="gov_philhealth_num" class="form-control"
           title="Philhealth Id"
           value="{{empty($benefit->philhealth_num) ? '':$benefit->philhealth_num}}" >
</div>

<div class="form-group">
    <label for="gov_tin_num">TIN Id</label>
    <input type="text" id="gov_tin_num" name="gov_tin_num" class="form-control" title="TIN Id"
           value="{{empty($benefit->tin_num) ? '':$benefit->tin_num}}" >
</div>

<div class="form-group">
    <label for="gov_payroll_account">Chinabank account</label>
    <input type="text" id="gov_payroll_account" name="gov_payroll_account" class="form-control"
           title="Chinabank account"
           value="{{empty($benefit->payroll_account) ? '':$benefit->payroll_account}}" >
</div>
