@extends('layouts.app')

@section('content')
	@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			{{session('error')}}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@elseif(session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{session('success')}}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif	
    <div class="card">
        <div class="card-header">
            <h4>Paf request for approval</h4>
        </div>
        <div class="card-body">
			<table class="table table-striped table-md">
				<thead>
					<tr>
						<th scope="col">Request no.</th>
						<th scope="col">Employee id</th>
						<th scope="col">Purpose</th>
						<th scope="col">Requested by</th>
						<th scope="col">Assessed by</th>
						<th scope="col">Status</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($requestList as $lists)
						<tr>
							<th scope="row">{{$lists->id}}</th>
							<td>{{$lists->employee_company_id}}</td>
							<td>{{$lists->employmentStatus->employment_status}}</td>
							<td>{{empty($lists->requested_by_company_id) ? '' : $lists->requested_by_company_id}}</td>
							<td>{{empty($lists->assessed_by_company_id) ? '' : $lists->assessed_by_company_id}}</td>
							<td>{{$lists->masterPafStatus->request_status}} - {{$lists->masterPafSubStatus->sub_request_status}}</td>
							<td class="form-group text-center"><a class="btn btn-secondary btn-sm" href="{{route('paf.list.approval.show', $lists->id)}}">View</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
	    </div>
	    <div class="row mt-2">
	        <span class="mr-auto ml-auto">{{$requestList->links()}}</span>
	    </div>
    </div>
@endsection
