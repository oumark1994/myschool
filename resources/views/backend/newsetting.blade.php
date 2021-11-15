@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">
    <div class="col-10">
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                New School
            </h3>
           
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
           <ul>
             @foreach ($errors->all() as $error)
             
             <li>{{$error}}</li>
             @endforeach
           </ul>
           </div>
        @endif
        <!--begin::Form-->
        <form class="form" method="POST" action="{{url('/newschool')}}" enctype="multipart/form-data">
           @csrf
            <div class="card-body">
     
                <div class="form-group">
                    <label>Logo</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="logo" />
                        <label class="custom-file-label" for="customFile">Choose Logo</label>
                    </div>                </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control form-control-solid" name="name" placeholder="Enter school name"/>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control form-control-solid" name="mobile" placeholder="Enter mobile number"/>
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control form-control-solid" name="telephone" placeholder="Enter telephone"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control form-control-solid" name="email" placeholder="Enter email"/>
                    </div>
                    <div class="form-group">
                        <label>Lotto1</label>
                        <input type="text" class="form-control form-control-solid" name="lotto1" placeholder="Enter lotto1"/>
                    </div>
                    <div class="form-group">
                        <label>Lotto2</label>
                        <input type="text" class="form-control form-control-solid" name="lotto2" placeholder="Enter lotto1"/>
                    </div>
                    <div class="form-group">
                        <label>Lotto3</label>
 <input type="text" class="form-control form-control-solid" name="lotto3" placeholder="Enter lotto3"/>

                    </div>
                    <div class="form-group">
                        <label>Facebook link</label>
                        <input type="text" class="form-control form-control-solid" name="f_link" placeholder="Enter Facebook link"/>
  
                                 </div>
                        <div class="form-group">
                            <label>Twitter link</label>
                            <input type="text" class="form-control form-control-solid" name="t_link" placeholder="Enter twitter link"/>
 
                                    </div>
                            <div class="form-group">
                                <label>Intagram linked</label>
                                <input type="text" class="form-control form-control-solid" name="i_link" placeholder="Enter instagram link"/>
                            </div>
                                <div class="form-group">
                                    <label>Founder Name</label>
                                    <input type="text" class="form-control form-control-solid" name="founder" placeholder="Enter founder name"/>
                                </div>
                                <div class="form-group">
                                    <label>Year of creation</label>
                                    <input type="date" class="form-control form-control-solid" name="year" placeholder="Enter founder name"/>
                                </div>
                    
         
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a type="reset" href="{{url('/setting')}}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    <!--end::Card-->
</div>

				</div>
				<!--end::Content-->
                

@endsection