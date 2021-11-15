@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">
    <div class="col-10">
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                Update School
            </h3>
           
        </div>
        @if (Session::has('status'))
	<div class="alert alert-success">
	  {{Session::get('status')}}
</div>
   @endif
        <!--begin::Form-->
        <form class="form" method="POST" action="{{url('/updatesetting/'.$setting->id)}}" enctype="multipart/form-data">
           {{ csrf_field() }}
            <div class="card-body">
     
                <div class="form-group">
                    <label>Logo</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="logo" />
                        <label class="custom-file-label" for="customFile">Choose Logo</label>
                    </div>                </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control form-control-solid" name="name" value="{{$setting->name}}"/>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control form-control-solid" name="mobile" value="{{$setting->mobile}}"/>
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control form-control-solid" name="telephone" value="{{$setting->telephone}}"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control form-control-solid" name="email" value="{{$setting->email}}"/>
                    </div>
                    <div class="form-group">
                        <label>Lotto1</label>
                        <input type="text" class="form-control form-control-solid" name="lotto1" value="{{$setting->lotto1}}"/>
                    </div>
                    <div class="form-group">
                        <label>Lotto2</label>
                        <input type="text" class="form-control form-control-solid" name="lotto2" value="{{$setting->lotto2}}"/>
                    </div>
                    <div class="form-group">
                        <label>Lotto3</label>
                        <input type="text" class="form-control form-control-solid" name="lotto3" value="{{$setting->lotto3}}"/>
                    </div>
                    <div class="form-group">
                        <label>Facebook Link</label>
                        <input type="text" class="form-control form-control-solid" name="f_link" value="{{$setting->facebook_link}}"/>
                    </div>  
                    <div class="form-group">
                        <label>Intagram Link</label>
                        <input type="text" class="form-control form-control-solid" name="i_link" value="{{$setting->instagram_link}}"/>
                    </div>
                    <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="text" class="form-control form-control-solid" name="t_link" value="{{$setting->twitter_link}}"/>
                    </div>             
                                <div class="form-group">
                                    <label>Founder Name</label>
                                    <input type="text" class="form-control form-control-solid" name="founder" value="{{$setting->founder}}"/>
                                </div>
                                <div class="form-group">
                                    <label>Year of creation</label>
                                    <input type="text" class="form-control form-control-solid" name="year" value="{{$setting->year}}"/>
                                </div>
                    
         
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <a type="reset" href="{{url('/setting')}}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    <!--end::Card-->
</div>

				</div>
				<!--end::Content-->
                

@endsection