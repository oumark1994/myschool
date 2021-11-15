@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">
    <div class="col-10">
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                Edit Facility
            </h3>
           
        </div>
        <!--begin::Form-->
        <form class="form" method="POST" action="{{url('/updatefacility/'.$facility->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
     
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control form-control-solid" name="title" value="{{$facility->title}}"  />
                </div>
                
                <div class="form-group">
                    <label for="exampleTextarea">Facility Details</label>
                    <textarea class="form-control form-control-solid" name="description" rows="3">{{$facility->description}}</textarea>
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