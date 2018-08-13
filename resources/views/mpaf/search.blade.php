@extends('layouts.app')

@section('content')
	<div class="card">
	    {{$errors}}
	    <div class="card-header">
	        <h4>Personnel Action Form</h4>
	    </div>
	    <div class="card-body">
	    	@if(empty($value))

				<form action="{{route('paf.search')}}" method="post">
		            {{csrf_field()}}
		            <div class="form-group">
		                <label for="raj_id">Enter employee ID</label>
		                <input type="text" id="raj_id" name="raj_id"
		                       class="form-control " title="Id" required>
		            </div>

		            <div class="form-group text-center">
		                <button class="btn btn-success" type="submit">Search Employee</button>
		            </div>
				</form>
			
	        @endif

@endsection