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
					<input type="text" id="current_department" name="current_department" class="form-control-plaintext" title="Current_department" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_department" name="proposed_department" class="form-control-plaintext" title="Proposed_department" value="{{empty($get_job_details->masterDepartment->department) ? '' : $get_job_details->masterDepartment->department}}" readonly>
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
					<input type="text" id="current_reportto" name="current_reportto" class="form-control-plaintext" title="Current_reportto" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_reportto" name="proposed_reportto" class="form-control-plaintext" title="Proposed_reportto" value="{{empty($get_job_details->user->name) ? '' : $get_job_details->user->name}}" readonly>
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
					<input type="text" id="current_position/title" name="current_position/title" class="form-control-plaintext" title="Current_reportto" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_position_title" name="proposed_position_title" class="form-control-plaintext" title="Proposed_position_title" value="{{empty($get_job_details->masterJobTitle->job_titles) ? '' : $get_job_details->masterJobTitle->job_titles}}" readonly>
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
					<input type="text" id="current_project_assignment" name="current_project_assignment" class="form-control-plaintext" title="Current_project_assignmento" readonly>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_project_assignment" name="proposed_project_assignment" class="form-control-plaintext" title="Proposed_project_assignment" value="{{empty($get_job_details->masterCompany->name) ? '' : $get_job_details->masterCompany->name}}" readonly>
				</div>
			</div>
		</div>

		@if(!empty($get_job_details->proposed_remarks_hr))
			<div class="row alert alert-primary">
				<div class="col-2">
					<div class="form-group">
						<label for="proposed_remarks_job_hr">HR Remarks</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" id="proposed_remarks_job_hr" name="proposed_remarks_job_hr" class="form-control-plaintext" title="proposed_remarks_job_hr" value="{{$get_job_details->proposed_remarks_hr}}" readonly>
					</div>
				</div>
			</div>
		@endif

		@if(!empty($get_job_details->proposed_remarks_exec))
			<div class="row alert alert-primary">
				<div class="col-2">
					<div class="form-group">
						<label for="proposed_remarks_job_exec">Executive Remarks</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" id="proposed_remarks_job" name="proposed_remarks_job" class="form-control-plaintext" title="proposed_remarks_job_exec" value="{{$get_job_details->proposed_remarks_exec}}" readonly>
					</div>
				</div>
			</div>
		@endif
	</div>
</div>
