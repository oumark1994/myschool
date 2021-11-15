@extends('./backend/template')
@section('contenu')

		    		

<div class="d-flex flex-column flex-row-fluid wrapper mt-10" id="kt_wrapper">
    <div class="col-10">
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                Edit Menu
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
        <form class="form" method="POST" action="{{url('/updatemenu/'.$menu->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-body">
     
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{$menu->title}}" class="form-control form-control-solid" name="title" />
                </div>
                
              
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a type="reset" href="{{url('/listsmenus')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    <!--end::Card-->
</div>

				</div>
				<!--end::Content-->
                

@endsection