

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
              {{-- <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
              display:block; margin:auto;" src="{{asset('storage/'.$cityManager->name.'-'.$authUser->name.'.jpg')}}"> --}}
              @if(Storage::disk('public')->has($cityManager->name.'-'.$authUser->name.'.jpg'))
              <img src="{{asset('storage/'.$cityManager->name.'-'.$authUser->name.'.jpg')}}" style="width: 200px; height: 200px;" class="img-fluid" alt="Responsive image">
          @endif
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
                  <span class="text-muted">National Id: {{$cityManager->role->national_id}}</span><br>
                  <span class="text-muted">Name:</span> {{$cityManager->name}}<br>
                  <span class="text-muted">Email:</span> {{$cityManager->email}}<br><br>
                  <small class="text-muted">Created: 01.01.2015</small>
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
