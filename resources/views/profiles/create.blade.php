@extends('layouts.app')

@section('content')
    @auth()
        <div class="row">
            <div class="container-fluid">
                <div class="card">
                    <form action="{{route('register.confirmed')}}" METHOD="POST">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Personal Information</h5>
                                    <hr>
                                    @include('profiles.includes.basic')
                                </div>
                            </div>
                            <br>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Contact Information</h5>
                                    <hr>
                                    @include('profiles.includes.contact')
                                </div>
                            </div>
                            <br>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Address Information</h5>
                                    <hr>
                                    <span>Permanent Address</span>
                                    <input type="hidden" name="add_key[]" value="pa">
                                    @include('profiles.includes.address')
                                    <br><br>
                                    <span>Residential Address</span>
                                    <input type="hidden" name="add_key[]" value="ra">
                                    @include('profiles.includes.address')
                                </div>
                            </div>
                            <br>


                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Family Information</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                                 aria-orientation="vertical">
                                                <a class="nav-link active" id="v-pills-father-tab" data-toggle="pill"
                                                   href="#v-pills-father" role="tab" aria-controls="v-pills-father"
                                                   aria-selected="true">Father</a>
                                                <a class="nav-link" id="v-pills-mother-tab" data-toggle="pill"
                                                   href="#v-pills-mother" role="tab" aria-controls="v-pills-mother"
                                                   aria-selected="false">Mother</a>
                                                <a class="nav-link" id="v-pills-sibling-tab" data-toggle="pill"
                                                   href="#v-pills-sibling" role="tab" aria-controls="v-pills-sibling"
                                                   aria-selected="false">Siblings</a>
                                                <a class="nav-link" id="v-pills-spouse-tab" data-toggle="pill"
                                                   href="#v-pills-spouse" role="tab" aria-controls="v-pills-spouse"
                                                   aria-selected="false">Spouse</a>
                                                <a class="nav-link" id="v-pills-children-tab" data-toggle="pill"
                                                   href="#v-pills-children" role="tab" aria-controls="v-pills-children"
                                                   aria-selected="false">Children</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-father"
                                                     role="tabpanel"
                                                     aria-labelledby="v-pills-father-tab">
                                                    <h5 class="text-info">Father information</h5>
                                                    <hr>
                                                    <input type="hidden" name="fam_key[]" value="fat">
                                                    @include('profiles.includes.family')
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-mother" role="tabpanel"
                                                     aria-labelledby="v-pills-mother-tab">
                                                    <h5 class="text-info">Mother information</h5>
                                                    <hr>
                                                    <input type="hidden" name="fam_key[]" value="mot">
                                                    @include('profiles.includes.family')
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-sibling" role="tabpanel"
                                                     aria-labelledby="v-pills-sibling-tab">
                                                    <h5 class="text-info">Sibling information</h5>
                                                    <hr>
                                                    <input type="hidden" name="fam_key[]" value="sib">
                                                    @include('profiles.includes.family')
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-spouse" role="tabpanel"
                                                     aria-labelledby="v-pills-spouse-tab">
                                                    <h5 class="text-info">Spouse information</h5>
                                                    <hr>
                                                    <input type="hidden" name="fam_key[]" value="spo">
                                                    @include('profiles.includes.family')
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-children" role="tabpanel"
                                                     aria-labelledby="v-pills-children-tab">
                                                    <h5 class="text-info">Spouse information</h5>
                                                    <hr>
                                                    <input type="hidden" name="fam_key[]" value="chi">
                                                    @include('profiles.includes.family')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Educational Background</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                                 aria-orientation="vertical">
                                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                                   href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                   aria-selected="true">Elementary</a>
                                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                                   href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                   aria-selected="false">Secondary</a>
                                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                                   href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                   aria-selected="false">College</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                     aria-labelledby="v-pills-home-tab">
                                                    <input type="hidden" name="edu_key[]" value="ele">
                                                    @include('profiles.includes.education')
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                     aria-labelledby="v-pills-profile-tab">
                                                    <input type="hidden" name="edu_key[]" value="sec">
                                                    @include('profiles.includes.education')
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                     aria-labelledby="v-pills-messages-tab">
                                                    <input type="hidden" name="edu_key[]" value="col">
                                                    @include('profiles.includes.education')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            {{--<div class="card bg-light">--}}
                            {{--<div class="card-body">--}}
                            {{--<h5>Educational Background</h5>--}}
                            {{--<hr>--}}
                            {{--<education-form :user="{{ $user }}"--}}
                            {{--:educations="{{ $educations }}"--}}
                            {{--></education-form>--}}
                            {{--@include('profiles.includes.education')--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<br>--}}

                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Work Experience</h5>
                                    <hr>
                                    @include('profiles.includes.experience')
                                </div>
                            </div>
                            <br>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Character Reference</h5>
                                    <hr>
                                    @include('profiles.includes.reference')
                                </div>
                            </div>
                            <br>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Emergency Contact</h5>
                                    <hr>
                                    @include('profiles.includes.emergency')
                                </div>
                            </div>
                            <br>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Medical Information</h5>
                                    <hr>
                                    @include('profiles.includes.medical')
                                </div>
                            </div>
                            <br>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Skill & Others</h5>
                                    <hr>
                                    @include('profiles.includes.skills')
                                </div>
                            </div>
                            <br>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Trainings / Seminars</h5>
                                    <hr>
                                    @include('profiles.includes.training')
                                </div>
                            </div>
                            <br>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Conviction</h5>
                                    <hr>
                                    @include('profiles.includes.conviction')
                                </div>
                            </div>
                            <br>

                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5>Benefits</h5>
                                    <hr>
                                    @include('profiles.includes.benefits')
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="card-footer text-center">
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    I certify that the provided information is true and correct to the best of my
                                    knowledge.
                                </label>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-success" id="submit-form" value="Submit"
                                   name="submit-form">
                            <a href="#">
                                <input type="button" class="btn btn-secondary" value="Preview">
                            </a>
                        </div>

                        {{$errors}}
                    </form>
                </div>
            </div>
        </div>
    @endauth
@endsection