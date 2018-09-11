@extends('layouts.app')
@section('content')
<form action="{{route('paf.search')}}" method="post">
	{{csrf_field()}}	
	@if(session('error'))
		<div class="alert alert-danger">
			{{session('error')}}
		</div>
	@elseif(session('success'))
		<div class="alert alert-success">
			{{session('success')}}
		</div>
	@endif	
	<div class="card">
		<div class="card-header">
			<h4>Personnel Action Form</h4>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label for="raj_id">Enter employee ID</label>
				<input type="text" id="raj_id" name="raj_id" class="form-control " title="Id" required>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Search Employee</button>
			</div>
		</div>
	</div>
</form>
@endsection