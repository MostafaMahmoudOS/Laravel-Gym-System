@extends('admin')


@section('content')

<a href="{{route('CityManagers.index')}}" class="btn btn-danger">Back</a>

 <form action="{{route('CityManagers.update',$cityManager->user[0]->id)}}" method="POST">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="national_id">National_ID</label>
        <input name="national_id" value="{{$cityManager->national_id}}" type="text" class="form-control" id="national_id" aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="name">name</label>
        <input name="name" class="form-control" value="{{$cityManager->user[0]->name}}">
    </div>
    
    <div class="form-group">
         <label for="email">email</label>
         <input name="email" class="form-control" value="{{$cityManager->user[0]->email}}">
     </div>

      
    <div class="form-group">
     <label for="password">password</label>
     <input name="password" type="password" class="form-control" value="{{$cityManager->user[0]->password}}">
 </div>

 <div class="form-group">
     <label for="exampleInputPassword1">image</label>
     <img src="{{$cityManager->user[0]->image}}">
 </div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
    
@endsection





