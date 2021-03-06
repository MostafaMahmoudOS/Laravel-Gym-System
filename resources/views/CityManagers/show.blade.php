

@extends('admin')

@section('content')
<a href="{{route('CityManagers.index')}}" class="btn btn-danger">Back</a>

       <br>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 lead">User profile<hr></div>
          </div>
          <div class="row">
			<div class="col-md-4 text-center">
          <div class="col">
              {{-- <img src="{{Storage::url($cityManager->img)}}" style="width: 200px; height: 200px;" class="img-fluid" alt="Responsive image"> --}}
          </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="only-bottom-margin">User Info</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    @if(Storage::disk('public')->has($cityManager->name.'-'.$authUser->name.'.jpg'))
                    <img src="{{asset('storage/'.$cityManager->name.'-'.$authUser->name.'.jpg')}}" style="width: 200px; height: 200px;" class="img-fluid" alt="Responsive image">
                @endif
                  <span class="text-muted"><h2>National Id: {{$cityManager->role->national_id}}</h2></span><br>
                  <span class="text-muted">Name:</span> {{$cityManager->name}}<br>
                  <span class="text-muted">Email:</span> {{$cityManager->email}}<br>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <hr><button class="btn btn-default pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
