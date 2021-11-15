@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">
    <div class="col-10">
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                New Facility
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
        
        <form class="form" method="POST" action="{{url('/addfacility')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
     
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control form-control-solid" name="title" placeholder="Enter course name"/>
                </div>
                
                <div class="form-group">
                    <label for="exampleTextarea">Facility Description</label>
                    <textarea class="form-control form-control-solid" name="description" rows="3"></textarea>
                </div>
                
               
              
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a type="reset" href="{{url('/listfacilities')}}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    <!--end::Card-->
</div>

				</div>
				<!--end::Content-->
                

@endsection