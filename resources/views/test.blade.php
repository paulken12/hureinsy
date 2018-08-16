@extends('layouts.app')

@section('content')

    {{--<div class="card">--}}
        {{--<form action="" METHOD="POST">--}}
            {{--<div class="card-body">--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Personal Information</h5>--}}
                        {{--<hr>--}}

                        {{--<div class="form-row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="basic_first_name" class="sr-only">First Name</label>--}}
                                    {{--<input type="text" id="basic_first_name"--}}
                                           {{--class="form-control"--}}
                                           {{--title="First Name" placeholder="First Name">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="basic_middle_name" class="sr-only">Middle Name</label>--}}
                                    {{--<input type="text" id="basic_middle_name"--}}
                                           {{--class="form-control"--}}
                                           {{--title="Middle Name" placeholder="Middle Name">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="basic_last_name" class="sr-only">Last Name</label>--}}
                                    {{--<input type="text" id="basic_last_name" class="form-control"--}}
                                           {{--title="Last Name" placeholder="Last Name">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-2">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="basic_extension" class="sr-only">Extension</label>--}}
                                    {{--<select id="basic_extension" class="form-control">--}}
                                        {{--<option value="test">Test</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="basic_birth_date" class="sr-only">Date of birth</label>--}}
                                    {{--<input type="text" id="basic_birth_date"--}}
                                           {{--class="form-control"--}}
                                           {{--title="Birth of birth" placeholder="Birth of birth">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="basic_civil_status_key" class="sr-only">Civil Status</label>--}}
                                    {{--<select id="basic_civil_status_key"--}}
                                            {{--class="form-control">--}}
                                        {{--<option value="test">Test</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="basic_citizenship_key" class="sr-only">Citizenship</label>--}}
                                    {{--<select id="basic_citizenship_key"--}}
                                            {{--class="form-control">--}}
                                        {{--<option value="test">Test</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-2">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="basic_gender_key" class="sr-only">Gender</label>--}}
                                    {{--<select id="basic_gender_key" class="form-control">--}}
                                        {{--<option value="test">Test</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<div class="form-group">--}}
                            {{--<label for="basic_birth_place" class="sr-only">Birth Place</label>--}}
                            {{--<input type="text" id="basic_birth_place" class="form-control"--}}
                                   {{--title="Birth Place" placeholder="Birth Place">--}}
                        {{--</div>--}}


                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Contact Information</h5>--}}
                        {{--<hr>--}}

                        {{--<div class="form-row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="con_telephone_num" class="sr-only">Telephone no.</label>--}}
                                    {{--<input type="text" id="con_telephone_num"--}}
                                           {{--class="form-control" title="Telephone no." placeholder="Telephone no.">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="con_mobile_num" class="sr-only">Mobile no.</label>--}}
                                    {{--<input type="text" id="con_mobile_num" class="form-control"--}}
                                           {{--title="Mobile no." placeholder="Mobile no.">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="con_other_num" class="sr-only">Other no.</label>--}}
                                    {{--<input type="text" id="con_other_num" class="form-control"--}}
                                           {{--title="Other no." placeholder="Other no.">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="con_email" class="sr-only">Email</label>--}}
                                    {{--<input type="text" id="con_email" class="form-control"--}}
                                           {{--title="Email" placeholder="Email">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Address Information</h5>--}}
                        {{--<hr>--}}
                        {{--<span>Permanent Address</span>--}}

                        {{--<br>--}}
                        {{--<br>--}}

                        {{--<div class="form-row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="add_unit_num" class="sr-only">Unit no.</label>--}}
                                    {{--<input type="text" id="add_unit_num" class="form-control" title="Unit no." placeholder="Unit no.">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="add_block" class="sr-only">Block</label>--}}
                                    {{--<input type="text" id="add_block" class="form-control" title="Block" placeholder="Block">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="add_street_name" class="sr-only">Street name</label>--}}
                                    {{--<input type="text" id="add_street_name" class="form-control" title="Street name"--}}
                                           {{--placeholder="Street name">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="add_subdivision" class="sr-only">Subdivision</label>--}}
                                    {{--<input type="text" id="add_subdivision" class="form-control" title="Subdivision"--}}
                                           {{--placeholder="Subdivision">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="add_barangay" class="sr-only">Barangay</label>--}}
                                    {{--<input type="text" id="add_barangay" class="form-control" title="Barangay"--}}
                                           {{--placeholder="Barangay">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="add_city" class="sr-only">City</label>--}}
                                    {{--<input type="text" id="add_city" class="form-control" title="City" placeholder="City">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="add_province" class="sr-only">Province</label>--}}
                                    {{--<input type="text" id="add_province" class="form-control" title="Province"--}}
                                           {{--placeholder="Province">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="add_zip_code" class="sr-only">Zip code</label>--}}
                                    {{--<input type="text" id="add_zip_code" class="form-control" title="Zip code"--}}
                                           {{--placeholder="Zip code">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<br><br>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}


                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Family Information</h5>--}}
                        {{--<hr>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-3">--}}
                                {{--<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"--}}
                                     {{--aria-orientation="vertical">--}}
                                    {{--<a class="nav-link active" id="v-pills-father-tab" data-toggle="pill"--}}
                                       {{--href="#v-pills-father" role="tab" aria-controls="v-pills-father"--}}
                                       {{--aria-selected="true">Father</a>--}}
                                    {{--<a class="nav-link" id="v-pills-mother-tab" data-toggle="pill"--}}
                                       {{--href="#v-pills-mother" role="tab" aria-controls="v-pills-mother"--}}
                                       {{--aria-selected="false">Mother</a>--}}
                                    {{--<a class="nav-link" id="v-pills-sibling-tab" data-toggle="pill"--}}
                                       {{--href="#v-pills-sibling" role="tab" aria-controls="v-pills-sibling"--}}
                                       {{--aria-selected="false">Siblings</a>--}}
                                    {{--<a class="nav-link" id="v-pills-spouse-tab" data-toggle="pill"--}}
                                       {{--href="#v-pills-spouse" role="tab" aria-controls="v-pills-spouse"--}}
                                       {{--aria-selected="false">Spouse</a>--}}
                                    {{--<a class="nav-link" id="v-pills-children-tab" data-toggle="pill"--}}
                                       {{--href="#v-pills-children" role="tab" aria-controls="v-pills-children"--}}
                                       {{--aria-selected="false">Children</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-9">--}}
                                {{--<div class="tab-content" id="v-pills-tabContent">--}}
                                    {{--<div class="tab-pane fade show active" id="v-pills-father"--}}
                                         {{--role="tabpanel"--}}
                                         {{--aria-labelledby="v-pills-father-tab">--}}
                                        {{--<h5 class="text-info">Father information</h5>--}}
                                        {{--<hr>--}}
                                        {{--<input type="hidden" name="fam_key[]" value="fat">--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane fade" id="v-pills-mother" role="tabpanel"--}}
                                         {{--aria-labelledby="v-pills-mother-tab">--}}
                                        {{--<h5 class="text-info">Mother information</h5>--}}
                                        {{--<hr>--}}
                                        {{--<input type="hidden" name="fam_key[]" value="mot">--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane fade" id="v-pills-sibling" role="tabpanel"--}}
                                         {{--aria-labelledby="v-pills-sibling-tab">--}}
                                        {{--<h5 class="text-info">Sibling information</h5>--}}
                                        {{--<hr>--}}
                                        {{--<input type="hidden" name="fam_key[]" value="sib">--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane fade" id="v-pills-spouse" role="tabpanel"--}}
                                         {{--aria-labelledby="v-pills-spouse-tab">--}}
                                        {{--<h5 class="text-info">Spouse information</h5>--}}
                                        {{--<hr>--}}
                                        {{--<input type="hidden" name="fam_key[]" value="spo">--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane fade" id="v-pills-children" role="tabpanel"--}}
                                         {{--aria-labelledby="v-pills-children-tab">--}}
                                        {{--<h5 class="text-info">Spouse information</h5>--}}
                                        {{--<hr>--}}
                                        {{--<input type="hidden" name="fam_key[]" value="chi">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}

                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Educational Background</h5>--}}
                        {{--<hr>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}

                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Educational Background</h5>--}}
                        {{--<hr>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}

                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Work Experience</h5>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Character Reference</h5>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Emergency Contact</h5>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Medical Information</h5>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Skill & Others</h5>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Trainings / Seminars</h5>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Conviction</h5>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}

                {{--<div class="card bg-light">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5>Benefits</h5>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
            {{--</div>--}}

            {{--<div class="card-footer text-center">--}}
                {{--<br>--}}
                {{--<div class="form-check">--}}
                    {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
                    {{--<label class="form-check-label" for="defaultCheck1">--}}
                        {{--I certify that the provided information is true and correct to the best of my--}}
                        {{--knowledge.--}}
                    {{--</label>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<input type="submit" class="btn btn-success" id="submit-form" value="Submit"--}}
                       {{--name="submit-form">--}}
                {{--<a href="#">--}}
                    {{--<input type="button" class="btn btn-secondary" value="Preview">--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}
@endsection


