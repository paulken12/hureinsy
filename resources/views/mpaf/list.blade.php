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
		    	<div class="col">
                    <div class="container">
                    	Approved by
                    </div>
		        </div>
		    	<div class="col">
                    <div class="container">
                    	Confirmed by
                    </div>
		        </div>
		    </div>
			@foreach ($requestList->whereIn('master_key_request_status', 'pend') as $lists)
			@if(!empty($lists->assessed_by))
			@else
				<a href="{{route('paf.list.show', $lists->company_id)}}">
					<div class="row">
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->company_id}} 
		                    </div>
			           	</div>
				    	<div class="col-3">
		                    <div class="container">
		                    	{{$lists->employment_status}} 
		                    </div>
				        </div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->requested_by}} 
		                    </div>
				        </div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->assessed_by}} 
		                    </div>
				        </div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->approved_by}} 
		                    </div>
				        </div>
				    	<div class="col">
		                    <div class="container">
		                    	{{$lists->confirmed_by}} 
		                    </div>
				        </div>
				    </div>
			    </a>
			@endif
		    @endforeach
		    </div>
		    <div class="row mt-2">
		        <span class="mr-auto ml-auto">{{$requestList->links()}}</span>
		    </div>
        </div>
@endsection