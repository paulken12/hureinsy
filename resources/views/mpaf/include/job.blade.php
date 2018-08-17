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
					<input type="text" id="current_department" name="current_department" class="form-control-plaintext" title="Current_department" value="{{$value->company_id}}" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_department" id="proposed_department" class="form-control">
						<option value="" selected>--select--</option>
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
					<input type="text" id="current_reportto" name="current_reportto" class="form-control-plaintext" title="Current_reportto" value="{{$value->company_id}}" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_reportto" id="proposed_reportto" class="form-control">
						<option value="" selected>--select--</option>
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
					<input type="text" id="current_position/title" name="current_position/title" class="form-control-plaintext" title="Current_reportto" value="{{$value->company_id}}" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_position/title" id="proposed_position/title" class="form-control">
						<option value="" selected>--select--</option>
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
					<input type="text" id="current_project_assignment" name="current_project_assignment" class="form-control-plaintext" title="Current_project_assignmento" value="{{$value->company_id}}" disabled>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<select name="proposed_project_assignment" id="proposed_project_assignment" class="form-control">
						<option value="" selected>--select--</option>
						@foreach ($project_assignment as $assignment)
							<option value="{{$assignment->key}}">{{$assignment->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
	