@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">

<!--begin::Card-->

 <div class="card card-custom mt-5">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				Messages
			</h3>
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->
<div class="dropdown dropdown-inline mr-2">


	<!--begin::Dropdown Menu-->
	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
		<!--begin::Navigation-->
			
		<!--end::Navigation-->
	</div>
	<!--end::Dropdown Menu-->
</div>
<!--end::Dropdown-->

<!--begin::Button-->

<!--end::Button-->
		</div>
	
{{Form::hidden('',$increment=1)}}
</div>
</div>
<div class="card-body">
@if (Session::has('status'))
<div class="alert alert-success">
{{Session::get('status')}}
</div>
@endif
<!--begin: Search Form-->
<!--begin::Search Form-->


<!--begin: Datatable-->

<!--begin: Datatable-->
{{-- <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div> --}}
<div class="table-responsive">
	<table class="table table-striped table-sm">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Name</th>

		  <th scope="col">Email</th>
		  <th scope="col">Subject</th>
		  <th scope="col">Message</th>
		  <th scope="col" colspan="3">Actions</th>
		</tr>
	  </thead>
	  <tbody>
		@foreach ($messages as $message )
			  
		 
		<tr>
			<td>{{$increment}}</td>
			<td>{{$message->name}}</td>
			<td>{{$message->email}}</td>
			<td>{{$message->subject}}</td>
			<td>{{$message->message}}</td>
			<td>
			  <a href="{{url('/deletemessage/'.$message->id)}}" class="btn btn-danger font-weight-bold mr-2">
				  <i class="flaticon-delete-1 icon-sm"></i>
			  </a>

			</td>
		  </tr>
		  {{Form::hidden('',$increment=$increment + 1)}}
		  @endforeach
		  
		</tr>
			  </tbody>
			</table>
		  </div>
		<!--end: Datatable-->
	</div>
	</div>
</div>
<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
</div>
				</div>
				<!--end::Content-->
                

@endsection