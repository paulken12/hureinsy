@extends('layouts.app')

@section('content')
	<div class="card">
	    {{$errors}}
	    <div class="card-header">
	        Personnel Action Form
	    </div>
	    <div class="card-body">

	        <form action="{{route('paf.store')}}" method="post">

	            {{csrf_field()}}

	            @if(empty($value))
		            <div class="form-group">
		                <label for="raj_id">Enter employee ID</label>
		                <input type="text" id="raj_id" name="raj_id"
		                       class="form-control " title="Id" required>
		            </div>

		            <div class="form-group text-center">
		                <button class="btn btn-success" type="submit">Search Employee</button>
		            </div>

	            @else
		            <div class="form-group">
		                <label for="raj_id">Enter employee ID</label>
		                <input type="text" id="raj_id" name="raj_id"
		                       class="form-control " title="Id" value="{{$value->company_id}}" disabled>
		            </div>
	 	            <div class="form-group">
		                <label for="name">Name of Employee</label>
			            <input type="text" id="name" name="name"
			                   class="form-control" title="Name" value="{{$value->first_name}} {{$value->middle_name}} {{$value->last_name}}" disabled>
					</div> 


	 	            <div class="form-group">
		                <label for="name">Date Hired</label>
	            		@foreach($value->address as $values)
			            <input type="text" id="name" name="name"
			                   class="form-control" title="Name" value="{{$values->unit_num}}" disabled>
					@endforeach
					</div> 

	 	            <div class="form-group">
		                <label for="name">Team</label>
			            <input type="text" id="name" name="name"
			                   class="form-control" title="Name" value="" disabled>
					</div> 

	 	            <div class="form-group">
		                <label for="name">Department</label>
			            <input type="text" id="name" name="name"
			                   class="form-control" title="Name" value="" disabled>
					</div> 

		            <div class="form-group text-center">
		                <button class="btn btn-success" type="submit">Request to Human Resource</button>
		            </div>

				@endif


	            {{--
	            <div class="form-group">
	                <label for="name">Name of Employee</label>
	                <input type="text" id="name" name="name"
	                       class="form-control" title="Name" value="{{$value->last_name}}" required>

	                
	                @if ($errors->has('name'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>
	                            {{ $errors->first('name') }}
	                        </strong>
	                    </span>
	                @endif
	            </div>					

	            <div class="form-group text-center">
	                <button class="btn btn-success" type="submit">Get info</button>
	            </div>
	            --}}


	        </form>

	    </div>
	</div>
@endsection