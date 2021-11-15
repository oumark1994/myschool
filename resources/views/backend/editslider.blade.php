@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">
    <div class="col-10">
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                Edit Slider
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
        <form class="form" method="POST" action="{{url('/updateslider/'.$slider->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-body">
     
                <div class="form-group">
                    <label>Descrition1</label>
                    <input type="text" value="{{$slider->description1}}" class="form-control form-control-solid" name="description1" />
                </div>
                
                <div class="form-group">
                    <label for="exampleTextarea">Description2</label>
                    <input type="text" value="{{$slider->description2}}" class="form-control form-control-solid" name="description2" />
                </div>
                
                <div class="form-group">
                    <label>Course Image</label>
                    <div></div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="slider_image" />
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
               
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a type="reset" href="{{url('/listsliders')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    <!--end::Card-->
</div>

				</div>
				<!--end::Content-->
                

@endsection