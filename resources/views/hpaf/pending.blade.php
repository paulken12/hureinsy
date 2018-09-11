@extends('layouts.app')
@section('content')
<form action="{{route('paf.hrassessment')}}" method="post">
	{{csrf_field()}}	
	<div class="card">
		<div class="card-header">
			<h4>Personnel Action Form</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="raj_id">Employee ID:</label>
						<input type="text" id="raj_id" name="raj_id" class="form-control-plaintext" title="raj_id" value="{{$employee_name->company_id}}" readonly>
						<input type="text" id="req_id" name="req_id" class="form-control-plaintext" title="req_id" value="{{$get_paf_details->id}}" readonly hidden>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="name">Name of Employee:</label>
						<input type="text" id="name" name="name" class="form-control-plaintext" title="Name" value="{{$employee_name->first_name}} {{$employee_name->middle_name}} {{$employee_name->last_name}}" readonly>
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
						<input type="text" id="employment_status" name="employment_status" class="form-control-plaintext" title="Employment_status" value="{{$get_paf_details->employmentStatus->employment_status}}" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="remarks">Remarks</label>
						<input type="text" id="remarks" name="remarks" class="form-control-plaintext" title="Remarks" value="{{$get_paf_details->remarks}}" readonly>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('hpaf.include.job')
	@include('hpaf.include.schedule')
	@include('hpaf.include.compensation')
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="request_status">Action</label>
						<action-management 	
											:categories="{{ $request_status}}"
											:subcategories="{{$sub_request_status}}">
						</action-management>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group text-center">
						<button class="btn btn-success" type="submit">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection