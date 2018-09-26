@extends('layouts.app')
@section('content')

<div class="card">
	<div class="card-header">
		<h4><strong>Personnel Action Form</strong></h4>
	</div>

	<div class="card-body">
		{{csrf_field()}}

		<h4><strong>Employee Information</strong></h4>
		<hr>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="raj_id"><strong>Employee ID:</strong></label>
					<input type="text" id="raj_id" name="raj_id" class="form-control-plaintext" title="raj_id" value="{{$employee_name->company_id}}" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="name"><strong>Name of Employee:</strong></label>
					<input type="text" id="name" name="name" class="form-control-plaintext" title="Name" value="{{$employee_name->first_name}} {{$employee_name->middle_name}} {{$employee_name->last_name}}" readonly>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="date_hired"><strong>Date Hired</strong></label>
					<input type="text" id="date_hired" name="date_hired" class="form-control-plaintext" title="Date_hired" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="team"><strong>Team</strong></label>
					<input type="text" id="team" name="team" class="form-control-plaintext" title="Team" readonly>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="position"><strong>Position</strong></label>
					<input type="text" id="position" name="position" class="form-control-plaintext" title="Position" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="department"><strong>Department</strong></label>
					<input type="text" id="department" name="department" class="form-control-plaintext" title="Department" readonly>
				</div>
			</div>
		</div>

		<hr>
		<h4><strong>Nature of Action</strong></h4>
		<hr>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="employment_status"><strong>Employment Status</strong></label>
					<input type="text" id="employment_status" name="employment_status" class="form-control-plaintext" title="Employment_status" value="{{empty($get_paf_details->employmentStatus->employment_status) ? '' : $get_paf_details->employmentStatus->employment_status}}" readonly>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="remarks"><strong>Remarks</strong></label>
					<input type="text" id="remarks" name="remarks" class="form-control-plaintext" title="Remarks" value="{{empty($get_paf_details->remarks) ? '' : $get_paf_details->remarks}}" readonly>
				</div>
			</div>
		</div>	

		<div id="accordion">
			@include('mpaf.include.readjob')
			@include('mpaf.include.readschedule')
			@include('mpaf.include.readcompensation')
		</div>
		<hr>

		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="assessed_by">Assessed By</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="assessed_by" name="assessed_by" class="form-control-plaintext" title="assessed_by" value="{{empty($hr_name->company_id) ? '' : $hr_name->company_id}} - {{empty($hr_name->last_name) ? '' : $hr_name->last_name}} {{empty($hr_name->first_name) ? '' : $hr_name->first_name}} {{empty($hr_name->middle_name) ? '' : $hr_name->middle_name}}" disabled>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="approved_by">Approved By</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="approved_by" name="approved_by" class="form-control-plaintext" title="approved_by" value="{{empty($exec_name->company_id) ? '' : $exec_name->company_id}} - {{empty($exec_name->last_name) ? '' : $exec_name->last_name}} {{empty($exec_name->first_name) ? '' : $exec_name->first_name}} {{empty($exec_name->middle_name) ? '' : $exec_name->middle_name}}" disabled>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="reportto">Date Effective</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_effective_date" name="proposed_effective_date" class="form-control-plaintext" title="proposed_effective_date" value="{{empty($get_paf_details->date_effective) ? '' : $get_paf_details->date_effective}}" disabled>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
