<div class="card">

	<div class="card-header" id="compensation-heading">
		<div class="btn-toolbar justify-content-between">
			<a href="" data-toggle="collapse" data-target="#collapse-compensation" aria-controls="collapse-compensation" style="text-decoration:none;color:#000000">
				<h4><i class="fas fa-coins"></i> &nbsp; <strong>Change in Compensation and Benefit Details</strong></h4>			
			</a>
		</div>
	</div>

	@if(!empty($get_compensation_details->proposed_salary) || !empty($get_compensation_details->proposed_bonus_allowance) || !empty($get_compensation_details->proposed_benefits))
		<div class="card-body collapse show" id="collapse-compensation" aria-labledby="compensation-heading-heading">
	@else
		<div class="card-body collapse" id="collapse-compensation" aria-labledby="compensation-heading-heading">
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
					<label for="salary"><strong>Salary</strong></label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					{{--Placeholder--}}
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_salary" name="proposed_salary" class="form-control-plaintext" title="Proposed_salary" value="{{empty($get_compensation_details->proposed_salary) ? '' : $get_compensation_details->proposed_salary}}" readonly>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="bonus/allowance"><strong>Bonus/Allowance</strong></label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					{{--Placeholder--}}
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_bonus_allowance" name="proposed_bonus_allowance" class="form-control-plaintext" title="Proposed_bonus/allowance" value="{{empty($get_compensation_details->proposed_bonus_allowance) ? '' : $get_compensation_details->proposed_bonus_allowance}}" readonly>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="benefits"><strong>Benefits</strong></label>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					{{--Placeholder--}}
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" id="proposed_benefits" name="proposed_benefits" class="form-control-plaintext" title="Proposed_benefits" value="{{empty($get_compensation_details->proposed_benefits) ? '' : $get_compensation_details->proposed_benefits}}" readonly>
				</div>
			</div>
		</div>

		@if(!empty($get_compensation_details->proposed_remarks_hr))
			<div class="row alert alert-primary">
				<div class="col-2">
					<div class="form-group">
						<label for="proposed_remarks_compensation_hr">HR Remarks</label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" id="proposed_remarks_compensation_hr" name="proposed_remarks_compensation_hr" class="form-control-plaintext" title="proposed_remarks_compensation_hr" value="{{$get_compensation_details->proposed_remarks_hr}}" readonly>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-2">
					<div class="form-group">
						<label for="proposed_remarks_compensation_exec"><strong>Executive Remarks</strong></label>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" id="proposed_remarks_compensation_exec" name="proposed_remarks_compensation_exec" class="form-control" title="proposed_remarks_compensation_exec">
					</div>
				</div>
			</div>
		@endif

	</div>
</div>