@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Personnel Action Form Pendings</h4>
        </div>
        <div class="card-body">
		    <div class="row">
		    	<div class="col">
                    <div class="container">
                    	Employee 
                    </div>
	           	</div>
		    	<div class="col-3">
                    <div class="container">
                    	Purpose
                    </div>
		        </div>
		    	<div class="col">
                    <div class="container">
                    	Requested by
                    </div>
		        </div>
		    	<div class="col">
                    <div class="container">
                    	Assessed by
                    </div>
		        </div>
		    	<div class="col-3">
                    <div class="container">
                    	Status
                    </div>
		        </div>
		    </div>
			@foreach ($requestList as $lists)
				<a href="{{route('paf.list.show', $lists->employee_company_id)}}">
					<div class="row">
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->employee_company_id}} 
		                    </div>
			           	</div>
				    	<div class="col-3">
		                    <div class="container">
								{{$lists->employmentStatus->employment_status}}
		                    </div>
				        </div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->requested_by_company_id}} 
		                    </div>
				        </div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->assessed_by_company_id}} 
		                    </div>
				        </div>
				    	<div class="col-3">
		                    <div class="container">
		    						{{$lists->masterPafStatus->request_status}} - {{$lists->masterPafSubStatus->sub_request_status}}
		                    </div>
				        </div>
				    </div>
			    </a>
		    @endforeach
		    </div>
		    <div class="row mt-2">
		        <span class="mr-auto ml-auto">{{$requestList->links()}}</span>
		    </div>
        </div>
@endsection