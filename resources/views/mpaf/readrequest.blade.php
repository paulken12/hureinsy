@extends('layouts.app')
@section('content')
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
					<input type="text" id="raj_id" name="raj_id" class="form-control-plaintext" title="raj_id" value="{{$employee_name->company_id}}" readonly>
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
@include('mpaf.include.readjob')
@include('mpaf.include.readschedule')
@include('mpaf.include.readcompensation')
<div class="card">
	<div class="card-body">
		<div class="form-group">
			<div class="row">
				<div class="col-2">
					<div class="form-group">
						<label for="reportto">Assessed By</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						@if(!empty($get_paf_details->assessed_by_company_id))
							<input type="text" id="current_reportto" name="current_reportto" class="form-control-plaintext" title="Current_reportto" value="{{$hr_name->company_id}} - {{$hr_name->last_name}} {{$hr_name->first_name}} {{$hr_name->middle_name}}" readonly>
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<div class="form-group">
						<label for="reportto">Approved By</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						@if(!empty($get_paf_details->approved_by_company_id))
							<input type="text" id="current_reportto" name="current_reportto" class="form-control-plaintext" title="Current_reportto" value="{{$hr_name->company_id}} - {{$exec_name->last_name}} {{$exec_name->first_name}} {{$exec_name->middle_name}}" readonly>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection