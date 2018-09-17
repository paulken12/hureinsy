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
            <h4>Reassessment List</h4>
        </div>
        <div class="card-body">
		    <div class="row">
		    	<div class="col">
                    <div class="container">
                    	Request no 
                    </div>
	           	</div>
		    	<div class="col">
                    <div class="container">
                    	Employee id
                    </div>
		        </div>
		    	<div class="col">
                    <div class="container">
                    	purpose
                    </div>
		        </div>
		    	<div class="col">
                    <div class="container">
                    	Assessed by
                    </div>
		        </div>
		    	<div class="col-5">
                    <div class="container">
                    	Status
                    </div>
		        </div>
		    </div>
			@foreach($request_list as $lists)
				<a href="{{route('paf.list.reassess.show', $lists->id)}}">
					<div class="row">
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->id}} 
		                    </div>
			           	</div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->employee_company_id}}
		                    </div>
				        </div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->employmentStatus->employment_status}} 
		                    </div>
				        </div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->assessed_by_company_id}} 
		                    </div>
				        </div>
				    	<div class="col-5">
		                    <div class="container">
		    					{{$lists->masterPafStatus->request_status}} - {{$lists->masterPafSubStatus->sub_request_status}}
		                    </div>
				        </div>
				    </div>
			    </a>
		    @endforeach
	    </div>
	    <div class="row mt-2">
	        <span class="mr-auto ml-auto">{{$request_list->links()}}</span>
	    </div>
    </div>
@endsection