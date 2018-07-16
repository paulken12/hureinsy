@extends('layouts.app')

@section('content')
    @foreach ($profile->basicInfo as $basicInfo)
        @foreach ($basicInfo->contact as $contact)
            <div class="row">
                <div class="container-fluid">
                    <div class="card mt-1">
                        <div class="card-header">
                            Address
                        </div>
                        <div class="card-body ">

                            <form action="{{route('profile.contact.update', ['id'=>$profile->id])}}" METHOD="POST">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="telephone_num">Telephone No.</label>
                                    <input type="text" id="telephone_num" name="telephone_num" class="form-control {{$errors->has('telephone_num') ? ' is-invalid' : ''}}" title="Telephone no." value="{{$contact->telephone_num}}">
                                </div>

                                <div class="form-group">
                                    <label for="mobile_num">Mobile No.</label>
                                    <input type="text" id="mobile_num" name="mobile_num" class="form-control {{$errors->has('mobile_num') ? ' is-invalid' : ''}}" title="Mobile no." value="{{$contact->mobile_num}}">
                                </div>

                                <div class="form-group">
                                    <label for="other_mobile">Other No.</label>
                                    <input type="text" id="other_mobile" name="other_mobile" class="form-control {{$errors->has('other_mobile') ? ' is-invalid' : ''}}" title="Other no." value="{{$contact->other_mobile}}">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
@endsection