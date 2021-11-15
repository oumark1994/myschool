@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">

<!--begin::Card-->

 <div class="card card-custom mt-5">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				School Details
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
<a href="{{url('/newsetting')}}" class="btn btn-primary font-weight-bolder">
	<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>Create School
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
		@foreach ($settings as $setting )
		 <!--begin::Form-->
		 <form class="form" action="{{url('/editsetting'.$setting->id)}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			 <div class="card-body">
			
	  
				 <div class="form-group">
					 <div class="form-group">
						<label>Logo</label>

						<input type="text" disabled="true" class="form-control form-control-solid" name="logo" value="{{$setting->logo}}"/>
					</div>
					 <div class="form-group">
						 <label>Name</label>
						 <input type="text" disabled="true" class="form-control form-control-solid" name="name"  value="{{$setting->name}}"/>
					 </div>
					 <div class="form-group">
						 <label>Mobile</label>
						 <input type="text" disabled="true" class="form-control form-control-solid" name="mobile"  value="{{$setting->mobile}}"/>
					 </div>
					 <div class="form-group">
						 <label>Telephone</label>
						 <input type="text" disabled="true" class="form-control form-control-solid" name="telephone"  value="{{$setting->telephone}}"/>
					 </div>
					 <div class="form-group">
						 <label>Anthem1</label>
						 <input type="text" disabled="true" class="form-control form-control-solid" name="logo1"  value="{{$setting->lotto1}}"/>
					 </div>
					 <div class="form-group">
						<label>Anthem2</label>
						<input type="text" disabled="true" class="form-control form-control-solid" name="logo2"  value="{{$setting->lotto2}}"/>
					</div>
					<div class="form-group">
						<label>Anthem3</label>
						<input type="text" disabled="true" class="form-control form-control-solid" name="logo3"  value="{{$setting->lotto3}}"/>
					</div>
					<div class="form-group">
						<label>Facebook Link</label>
						<input type="text" disabled="true" class="form-control form-control-solid" name="f_link"  value="{{$setting->facebook_link}}"/>
					</div>
					<div class="form-group">
						<label>Intagram Link</label>
						<input type="text" disabled="true" class="form-control form-control-solid" name="i_link" value="{{$setting->instagram_link}}"/>
					</div>
					<div class="form-group">
						<label>Twitter Link</label>
						<input type="text" disabled="true" class="form-control form-control-solid" name="t_link"  value="{{$setting->twitter_link}}"/>
					</div>              
								 <div class="form-group">
									 <label>Founder Name</label>
									 <input type="text" disabled="true" class="form-control form-control-solid" name="founder"  value="{{$setting->founder}}"/>
								 </div>
								 <div class="form-group">
									 <label>Year of creation</label>
									 <input type="text" disabled class="form-control form-control-solid" name="year"  value="{{$setting->year}}"/>
								 </div>
					 
		  
			 </div>
			 <div class="card-footer">
				<a href="{{url('/editsetting/'.$setting->id)}}" class="btn btn-success font-weight-bold mr-2">Edit
					<i class="flaticon2-pen icon-sm"></i>
				</a>			 </div>
		 </form>
		  </div>
		  {{Form::hidden('',$increment=$increment + 1)}}
		  @endforeach

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