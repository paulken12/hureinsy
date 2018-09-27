<div class="card">

	<div class="card-header" id="job-heading">
		<div class="btn-toolbar justify-content-between">
			<a href="" data-toggle="collapse" data-target="#collapse-job" aria-controls="collapse-job" style="text-decoration:none;color:#000000">
				<h4><i class="fas fa-briefcase"></i> &nbsp; <strong>Change in Job Title, Duties, and Responsibilities Details</strong></h4>
			</a>
		</div>
	</div>

	@if(!empty($get_job_details->proposed_key_department) || !empty($get_job_details->proposed_reports_to) || !empty($get_job_details->proposed_key_position_title) || !empty($get_job_details->proposed_key_project_assignment))
		<div class="card-body collapse show" id="collapse-job" aria-labledby="job-heading">
	@else
		<div class="card-body collapse" id="collapse-job" aria-labledby="job-heading">
	@endif

		<div class="row">
			<div class="col-2">
				<div class="form-group">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="current"><strong>Current</strong></label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="proposed"><strong>Proposed</strong></label>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="department"><strong>Department</strong></label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					{{--placeholder here--}}
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_department" id="proposed_department" class="form-control">
						<option style="display:none" value="{{empty($get_job_details->masterDepartment->key) ? '' : $get_job_details->masterDepartment->key}}" selected>{{empty($get_job_details->masterDepartment->department) ? '--select--' : $get_job_details->masterDepartment->department}}</option>
						<option value="">--select--</option>
						@foreach ($department as $departments)
							<option value="{{$departments->key}}">{{$departments->department}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="reportto"><strong>Report To</strong></label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					{{--placeholder here--}}
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_reportto" id="proposed_reportto" class="form-control">
						<option style="display:none" value="{{empty($get_job_details->proposed_reports_to) ? '' : $get_job_details->proposed_reports_to}}" selected>{{empty($get_job_details->user->name) ? '--select--' : $get_job_details->user->name}}</option>
						<option value="">--select--</option>
						@foreach($reportTo as $report)
							@foreach ($report->roles->whereNotIn('id', '6') as $reports)
								<option value="{{$report->id}}">{{$report->name}}</option>
							@endforeach
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="position_title"><strong>Position/Title</strong></label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					{{--placeholder here--}}
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_position_title" id="proposed_position_title" class="form-control">
						<option style="display:none" value="{{empty($get_job_details->proposed_key_position_title) ? '' : $get_job_details->user->name}}" selected>{{empty($get_job_details->masterJobTitle->job_titles) ? '--select--' : $get_job_details->masterJobTitle->job_titles}}</option>
						<option value="">--select--</option>
						@foreach ($jobTitles as $titles)
							<option value="{{$titles->key}}">{{$titles->job_titles}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="project_assignment"><strong>Project Assignment</strong></label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					{{--placeholder here--}}
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_project_assignment" id="proposed_project_assignment" class="form-control">
						<option style="display:none" value="{{empty($get_job_details->proposed_key_project_assignment) ? '' : $get_job_details->proposed_key_project_assignment}}" selected>{{empty($get_job_details->masterCompany->name) ? '--select--' : $get_job_details->masterCompany->name}}</option>
						<option value="">--select--</option>
						@foreach ($project_assignment as $assignment)
							<option value="{{$assignment->key}}">{{$assignment->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>

		@if(!empty($get_job_details->proposed_remarks_hr))
			<div class="row alert alert-warning">
				<div class="col-2">
					<div class="form-group">
						<label for="proposed_remarks_job">HR Remarks</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" id="proposed_remarks_job" name="proposed_remarks_job" class="form-control-plaintext " title="proposed_remarks_job" value="{{$get_job_details->proposed_remarks_hr}}" readonly>
					</div>
				</div>
			</div>
		@endif

	</div>
</div>
	