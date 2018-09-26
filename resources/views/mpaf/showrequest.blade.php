@extends('layouts.app')
@section('content')
@if(count($errors))
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		@foreach($errors->all() as $err)
			<li>{!!$err!!}</li>
		@endforeach
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif

<div class="card">
	<div class="card-header">
		<h4><strong>Personnel Action Form (For Reassessment)</strong></h4>
	</div>

	<form action="{{route('paf.list.reassess.store', $get_paf_details->id)}}" method="post">
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
						<select name="employment_status" id="employment_status" class="form-control" required>
							<option style="display:none" value="{{empty($get_paf_details->master_key_employment_status) ? '' : $get_paf_details->master_key_employment_status}}" selected>{{empty($get_paf_details->employmentStatus->employment_status) ? '--select--' : $get_paf_details->employmentStatus->employment_status}}</option>
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
						<label for="remarks"><strong>Remarks</strong></label>
						<input type="text" id="remarks" name="remarks" class="form-control" title="Remarks" value="{{empty($get_paf_details->remarks) ? '' : $get_paf_details->remarks}}">
					</div>
				</div>
			</div>	

			<div id="accordion">
				@include('mpaf.include.showjob')
				@include('mpaf.include.showschedule')
				@include('mpaf.include.showcompensation')
			</div>
			<hr>

			<h4><strong>Action</strong></h4>

			<action-management 	
					:categories="{{ $get_status}}"
					:subcategories="{{$get_sub_status}}">
			</action-management>

			<div class="row">
				<div class="col">
					<div class="form-group text-center">
						<button class="btn btn-success" type="submit">Update</button>
					</div>
				</div>
			</div>
		</div>
	</form>

</div>
@endsection