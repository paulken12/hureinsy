@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container-fluid">
            <div class="card mt-1">

                <div class="card-body">

                    <form action="" METHOD="POST">
                        {{csrf_field()}}

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
                                @include('profiles.includes.address')
                            </div>
                        </div>
                        <br>

                        <div class="card bg-light">
                            <div class="card-body">
                                <h5>Family Background</h5>
                                <hr>
                                @include('profiles.includes.family')
                            </div>
                        </div>
                        <br>

                        <div class="card bg-light">
                            <div class="card-body">
                                <h5>Educational Background</h5>
                                <hr>
                                @include('profiles.includes.education')
                            </div>
                        </div>
                        <br>

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
                    </form>
                </div>

                <div class="card-footer text-center">
                    <br>
                    <label class="form-check-inline">
                        <input type="checkbox" name="i-understand"
                               id="i-understand">&nbsp; I certify that the provided information is true and correct to the best of my knowledge.
                    </label>
                    <br>
                    <input type="submit" class="btn btn-success" id="submit-form" value="Submit" name="submit-form">
                    <a href="#">
                        <input type="button" class="btn btn-secondary" value="Preview">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection