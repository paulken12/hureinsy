@extends('layouts.app')

@section('content')
    @foreach ($employees->basicInfo as $basicInfo)
        <div class="card mb-3">
            <div class="card-header">
                {{$basicInfo->first_name}}&nbsp;{{$basicInfo->last_name}}

                {{--owner can update his/her profile but not others--}}
                @can('update', $basicInfo)
                    <span class="float-right">
                    <a href="{{route('profile.basic.edit', ['first_name'=>$basicInfo->first_name])}}"
                       class="btn btn-secondary btn-sm">Update</a>
                </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <img src="{{asset($employees->avatar_path)}}" alt="Avatar"
                             style="height: 130px; width: 130px; background: #4e555b">
                    </div>
                    <div class="col-sm-10">
                        Company Id: {{$basicInfo->company_id}} &nbsp;<br>
                        Gender: {{$basicInfo->gender->gender}} &nbsp;<br>
                        Civil Status: {{$basicInfo->civilStatus->civil_status}} &nbsp;<br>
                        Citizenship: {{$basicInfo->citizenship->citizenship}} &nbsp;<br>
                        Birth date: {{$basicInfo->date_of_birth->format('jS \o\f F ,Y')}} &nbsp;<br>
                        Birth place: {{$basicInfo->birth_place? : '-'}}<br>
                    </div>
                </div>
            </div>
        </div>

        {{--login owner can only view his/her full profile--}}
        @can('update',$basicInfo)

            {{--Contract--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Contract</h4>
                    <hr>
                    @forelse($basicInfo->contract as $contract)
                        Company: {{$contract->company->name? : '-'}} &nbsp;<br>
                        Contract start: {{$contract->contract_start? : '-'}} &nbsp;<br>
                        Contract end: {{$contract->contract_end? : '-'}} &nbsp;<br>
                        Status: {{$contract->employment_status? : '-'}} &nbsp;<br>
                        Resigned date: {{$contract->resigned_date? : '-'}} &nbsp;<br>
                        Department: {{$contract->department->department? : '-'}}<br>
                        Job type: {{$contract->master_job_type_key? : '-'}}<br>
                    @empty
                        <p class="text-center">No contract yet</p>
                    @endforelse
                </div>

                @can('contract_view')
                    <div class="card-footer text-muted">
                        <a href="#" class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Address Information--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Address</h4>
                    <hr>
                    @forelse ($basicInfo->address as $address)
                        <h5>{{$address->mAddress->address_type}}:</h5>
                        {{$address->unit_num}}&nbsp;
                        {{$address->block}}
                        {{$address->street_name}}&nbsp;
                        {{$address->subdivision}}&nbsp;
                        {{$address->barangay}}&nbsp;
                        {{$address->city}}&nbsp;
                        {{$address->province}}&nbsp;
                        {{$address->zip_code}}&nbsp;
                        <br>
                        <br>
                    @empty
                        <p class="text-center">No address provided</p>
                    @endforelse
                </div>

                @can('address_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.address.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Contact Information--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Contact</h4>
                    <hr>
                    @forelse ($basicInfo->contact as $contact)
                        Telephone No. : {{$contact->telephone_num}} <br>
                        Mobile No. : {{$contact->mobile_num}}<br>
                        Other No. : {{$contact->other_mobile}}<br>
                        Email. : {{$employees->email}}<br>
                    @empty
                        <p class="text-center">No contact available</p>
                    @endforelse
                </div>

                @can('contact_view')

                    <div class="card-footer text-muted">
                        <span class="float-right">
                            <a href="{{route('profile.contact.edit', ['first_name'=>$basicInfo->first_name])}}"
                               class="btn btn-secondary btn-sm">Update</a>
                        </span>
                    </div>
                @endcan
            </div>

            {{--Benefit Information--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Benefits</h4>
                    <hr>
                    @forelse($basicInfo->benefit as $benefit)
                        SSS No. : {{$benefit->sss_num}} <br>
                        PAGIBIG No. : {{$benefit->pagibig_num}}<br>
                        PHILHEALTH No. : {{$benefit->philhealth_num}} <br>
                        TIN No. : {{$benefit->tin_num}}<br>
                        PAYROLL No. : {{$benefit->payroll_account}}<br>
                    @empty
                        <p class="text-center">This human doesn't have it</p>
                    @endforelse
                </div>

                @can('benefit_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.benefits.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Family Background--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Family Background</h4>
                    <hr>
                    @forelse ($basicInfo->family as $family)
                        <br>
                        <h5>{{$family->family->family_type}}</h5>
                        <br>
                        Name: {{$family->last_name}},&nbsp;{{$family->first_name}} <br>
                        Birth date: {{$family->date_of_birth === '0000-00-00' ?  '-' : $family->date_of_birth }}<br>
                        Occupation: {{$family->occupation? : 'Not specified'}}<br>
                        Employer: {{$family->employer? : 'Not specified' }}<br>
                        Gender: {{$family->gender->gender}}<br>
                    @empty
                        <p class="text-center">This alien doesn't have family</p>
                    @endforelse
                </div>

                @can('family_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.family.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Educatioanl Background--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Educational Background</h4>
                    <hr>
                    @forelse ($basicInfo->education as $education)
                        <h5>Level: {{$education->background->educational_level}}</h5>
                        Course: {{$education->course}}<br>
                        School name: {{$education->name_of_school? : 'Not specified'}} <br>
                        Year graduated: {{$education->year_graduated? : 'Not specified'}}<br>
                        Award: {{$education->award? : 'No Awards'}}<br><br>
                    @empty
                        <p class="text-center">No educational background provided</p>
                    @endforelse
                </div>

                @can('education_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.education.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Work Experience--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Work Experience</h4>
                    <hr>
                    @forelse ($basicInfo->experience as $experience)
                        <h5>{{$experience->title->job_titles}}</h5>
                        Company name: {{$experience->company_name? : 'Not specified'}}&nbsp;<br>
                        Company address: {{$experience->company_address? : 'Not specified' }}&nbsp;<br>
                        Date from: {{$experience->date_from === '0000-00-00' ? '':$experience->date_from}}&nbsp;-
                        Date to: {{$experience->date_to === '0000-00-00' ? '':$experience->date_to}}&nbsp;<br>
                        Industry: {{$experience->industry? : 'Not specified'}}&nbsp;<br>
                        Salary: {{$experience->salary? : 'Not specified'}}&nbsp;<br>
                        Reason for leaving: <br>{{$experience->reason_for_leaving? : 'Not specified'}}<br>
                    @empty
                        <p class="text-center">No work experience</p>
                    @endforelse
                </div>

                @can('experience_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.experience.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Character Reference--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Character Reference</h4>
                    <hr>
                    @forelse ($basicInfo->reference as $reference)
                        Job title: {{$reference->job_title}}<br>
                        Name: {{$reference->first_name}}&nbsp;{{$reference->middle_name}}&nbsp;{{$reference->last_name}}<br>
                        Company name: {{$reference->company_name? : 'Not specified'}}<br>
                        Company address: {{$reference->company_address? : 'Not specified'}}<br>
                        Contact: {{$reference->contact_num? : 'Not specified'}}&nbsp;<br>
                    @empty
                        <p class="text-center">No character reference</p>
                    @endforelse
                </div>

                @can('reference_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.reference.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Emergency Contacts--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Emergency Contact</h4>
                    <hr>
                    @forelse ($basicInfo->emergency as $emergency)
                        Name: {{$emergency->first_name}}&nbsp;
                        {{$emergency->middle_name}}&nbsp;
                        {{$emergency->last_name}}<br>
                        Contact no.: {{$emergency->contact_num? : 'Not specified'}}<br>
                        Relationship: {{$emergency->relationship? : 'Not specified'}}&nbsp;
                    @empty
                        <p class="text-center">No emergency contact</p>
                    @endforelse
                </div>

                @can('emergency_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.emergency.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Medical Information--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Medical Information</h4>
                    <hr>
                    @forelse ($basicInfo->medical as $medical)
                        Blood type: {{$medical->bloodType->blood_type ? : 'Not specified'}}<br>
                        Height(m): {{$medical->height ? : 'Not specified'}}<br>
                        Weight(kg): {{$medical->weight ? : 'Not specified'}}<br>
                    @empty
                        <p class="text-center">No medical information</p>
                    @endforelse
                </div>

                @can('medical_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.medical.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

            {{--Skills--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Skill Set</h4>
                    <hr>
                    @forelse ($basicInfo->skill as $skill)
                        Technical skill: {{$skill->special_skill}}<br>
                        Hobbies: {{$skill->hobbies}}<br>
                        Organization: {{$skill->membership? : 'Not specified'}}
                    @empty
                        <p class="text-center">No skills</p>
                    @endforelse
                </div>

                @can('skill_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.skills.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>

        @endcan

        {{--Trainings--}}
        <div class="card mb-3">
            <div class="card-body">
                <h4>Trainings</h4>
                <hr>
                @forelse ($basicInfo->training as $training)
                    Title: {{$training->title}}<br>
                    Date from: {{$training->date_from === '0000-00-00' ? '':$training->date_from}}&nbsp;<br>
                    Date to: {{$training->date_to === '0000-00-00' ? '':$training->date_to}}&nbsp;<br>
                    Location: {{$training->place_seminar}}<br>
                @empty
                    <p class="text-center">No trainings attended</p>
                @endforelse
            </div>

            {{--login owner can update his/her profile--}}
            @can('training_view')
                @can('update', $basicInfo)
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.training.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            @endcan
        </div>

        {{--Owner can update and view the conviction--}}
        @can('update', $basicInfo)
            {{--Conviction--}}
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Conviction</h4>
                    <hr>
                    @forelse ($basicInfo->criminalInfo as $criminalInfo)
                        Crime committed: {{$criminalInfo->has_crime}}<br>
                        Remarks: {{$criminalInfo->comment? : 'Not specified'}}&nbsp;<br>
                    @empty
                        <p class="text-center">No crime committed</p>
                    @endforelse
                </div>

                @can('criminal_view')
                    <div class="card-footer text-muted">
                        <a href="{{route('profile.conviction.edit', ['first_name'=>$basicInfo->first_name])}}"
                           class="btn btn-secondary btn-sm float-right">Update</a>
                    </div>
                @endcan
            </div>
        @endcan
    @endforeach
@endsection