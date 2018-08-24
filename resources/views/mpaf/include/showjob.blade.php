<div class="card">
	<div class="card-header">
		<h4>Change in Job Title, Duties, and Responsibilities Details</h4>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-2">
				<div class="form-group">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="current">Current</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="proposed">Proposed</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="department">Department</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_department" name="current_department" class="form-control-plaintext" title="Current_department" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_department" id="proposed_department" class="form-control">
						@if(!empty($get_job_details->proposed_key_department))
							<option style="display:none" value="{{$get_job_details->masterDepartment->key}}" selected>{{$get_job_details->masterDepartment->department}}</option>
						@endif
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
					<label for="reportto">Report To</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_reportto" name="current_reportto" class="form-control-plaintext" title="Current_reportto" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_reportto" id="proposed_reportto" class="form-control">
						@if(!empty($get_job_details->proposed_reports_to))
							<option style="display:none" value="{{$get_job_details->proposed_reports_to}}" selected>{{$get_job_details->user->name}}</option>
						@endif
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
					<label for="position/title">Position/Title</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_position/title" name="current_position/title" class="form-control-plaintext" title="Current_reportto" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_position_title" id="proposed_position_title" class="form-control">
						@if(!empty($get_job_details->proposed_key_position_title))
							<option style="display:none" value="{{$get_job_details->proposed_key_position_title}}" selected>{{$get_job_details->masterJobTitle->job_titles}}</option>
						@endif
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
					<label for="project_assignment">Project Assignment</label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="current_project_assignment" name="current_project_assignment" class="form-control-plaintext" title="Current_project_assignmento" value="" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_project_assignment" id="proposed_project_assignment" class="form-control">
						@if(!empty($get_job_details->proposed_key_project_assignment))
							<option style="display:none" value="{{$get_job_details->proposed_key_project_assignment}}" selected>{{$get_job_details->masterCompany->name}}</option>
						@endif
						<option value="">--select--</option>
						@foreach ($project_assignment as $assignment)
							<option value="{{$assignment->key}}">{{$assignment->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
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
	</div>
</div>
	