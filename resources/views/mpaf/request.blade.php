@extends('layouts.app')
@section('content')
<form action="{{route('paf.store')}}" method="post">	
	@if(count($errors))
		<div class="alert alert-warning">
			@foreach($errors->all() as $err)
				<li>{!!$err!!}</li>
			@endforeach
		</div>
	@endif
	<div class="card">
		<div class="card-header">
			<h4>Personnel Action Form</h4>
		</div>
		<div class="card-body">
			{{csrf_field()}}
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="raj_id">Employee ID:</label>
						<input type="text" id="raj_id" name="raj_id" class="form-control-plaintext" title="raj_id" value="{{$value->company_id}}" readonly>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="name">Name of Employee:</label>
						<input type="text" id="name" name="name" class="form-control-plaintext" title="Name" value="{{$value->first_name}} {{$value->middle_name}} {{$value->last_name}}" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="date_hired">Date Hired</label>
						<input type="text" id="date_hired" name="date_hired" class="form-control-plaintext" title="Date_hired" readonly>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="team">Team</label>
						<input type="text" id="team" name="team" class="form-control-plaintext" title="Team" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="position">Position</label>
						<input type="text" id="position" name="position" class="form-control-plaintext" title="Position" readonly>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="department">Department</label>
						<input type="text" id="department" name="department" class="form-control-plaintext" title="Department" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="proposed_effective_date">Proposed Effective Date</label>
						<input type="text" id="proposed_effective_date" name="proposed_effective_date" class="form-control-plaintext" title="Proposed_effective_date" readonly>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<h4>Nature of Action</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="employment_status">Employment Status</label>
						<select name="employment_status" id="employment_status" class="form-control" required>
							<option value="" >--select--</option>
							@foreach ($employment_status as $employment)
								<option value="{{$employment->key}}">{{$employment->employment_status}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="remarks">Remarks</label>
						<input type="text" id="remarks" name="remarks" class="form-control" title="Remarks">
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('mpaf.include.job')
	@include('mpaf.include.schedule')
	@include('mpaf.include.compensation')
	
	<div class="card">
		<div class="card-body">
			<h4>Nature of Action</h4>
			<action-management 	
					:categories="{{ $get_status}}"
					:subcategories="{{$get_sub_status}}">
			</action-management>
			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Request to Human Resource</button>
			</div>
		</div>
	</div>
</form>
@endsection