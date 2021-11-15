@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">

<!--begin::Card-->

 <div class="card card-custom mt-5">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				Courses
			</h3>
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->
<div class="dropdown dropdown-inline mr-2">


	<!--begin::Dropdown Menu-->
	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
		<!--begin::Navigation-->
		<ul class="navi flex-column navi-hover py-2">
			<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
		        Choose an option:
		    </li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-print"></i></span>
					<span class="navi-text">Print</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-copy"></i></span>
					<span class="navi-text">Copy</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-excel-o"></i></span>
					<span class="navi-text">Excel</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-text-o"></i></span>
					<span class="navi-text">CSV</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
					<span class="navi-text">PDF</span>
				</a>
			</li>
		</ul>
		<!--end::Navigation-->
	</div>
	<!--end::Dropdown Menu-->
</div>
<!--end::Dropdown-->

<!--begin::Button-->
<a href="{{url('/newcourse')}}" class="btn btn-primary font-weight-bolder">
	<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>	New course
</a>
<!--end::Button-->
		</div>
	</div>
	@if (Session::has('status'))
	<div class="alert alert-success">
	  {{Session::get('status')}}
</div>
   @endif
   {{Form::hidden('',$increment=1)}}
	<div class="card-body">
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
				  <th scope="col">Image</th>

				  <th scope="col">Course Name</th>
				  <th scope="col">Description</th>
				  <th scope="col" colspan="3">Actions</th>
				</tr>
			  </thead>
			  <tbody>
				  @foreach ($courses as $course )
					  
				 
				<tr>
				  <td>{{$increment}}</td>
				  <td><img width="50px" height="40px" src="/storage/course_images/{{$course->image}}"/></td>
				  <td>{{$course->name}}</td>
				  <td>{{$course->description}}</td>
				  <td>
					<a href="{{url('/editcourse/'.$course->id)}}" class="btn btn-success font-weight-bold mr-2">
						<i class="flaticon2-pen icon-sm"></i>
					</a>
					
					<a href="{{url('/deletecourse/'.$course->id)}}" class="btn btn-danger font-weight-bold mr-2">
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