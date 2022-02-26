@extends('frontEnd.layout')
@section("title","update")
@section('page')
     <div class="container">
         <div class="row mt-1 justify-content-center">
             <div class="col-md-6 border bg-success py-3 text-white fs-5">
                 <form action="{{route("update",$contacts->id)}}" method="POST" enctype="multipart/form-data">
                     @method('PUT')
                     @csrf()
                     <div class="mb-3">
                         <label for="first name" value="first_name">First Name</label>
                         <input  type="text" name="first_name" class="form-control" value="{{$contacts->first_name}}">
                     </div>

                     <div class="mb-3">
                         <label for="last name" value="last_name">Last Name</label>
                         <input  type="text" name="last_name" class="form-control" value="{{$contacts->last_name}}">
                     </div>

                     @foreach($numbers as $number)
                     <div class="mb-3">
                         <label for="number" value="number">Number</label>
                         <input  type="number" name="number" class="form-control" value="{{$number->number}}">
                     </div>
                     @endforeach

                     <div class="mb-3">
                         <label for="dob" value="dob">Date Of Birth</label>
                         <input  type="text" name="dob" class="form-control" value="{{$contacts->dob}}">
                     </div>
                     <div class="mb-3">
                         <label for="address" value="address">Address</label>
                         <input  type="text"  name="address" class="form-control" value="{{$contacts->address}}">
                     </div>

                     <div class="mb-3">
                         <label for="city" value="city">City</label>
                         <input  type="text" name="city" class="form-control" value="{{$contacts->city}}">
                     </div>

                     <div class="mb-3">
                         <label for="state" value="state">State</label>
                         <input  type="text" name="state" class="form-control" value="{{$contacts->state}}">
                     </div>

                     <div class="mb-3">
                         <label for="country" value="country">Country</label>
                         <input  type="text" name="country" class="form-control" value="{{$contacts->country}}">
                     </div>

                     <div class="mb-3">
                         <label for="facebook id" value="facebook_id">Facebook name</label>
                         <input  type="text" name="fb_id" class="form-control" value="{{$contacts->facebook_id}}">
                     </div>

                     <div class="mb-3">
                         <label for="instagram id" value="instagram_id">Instagram name</label>
                         <input  type="text" name="insta_id" class="form-control" value="{{$contacts->instagram_id}}">
                     </div>

                     <div class="mb-3">
                         <label for="youtube id" value="youtube_id">Youtube channel</label>
                         <input type="text" name="youtube_id" class="form-control" value="{{$contacts->youtube_id}}">
                     </div>

                     <div class="row">
                         <div class="col-md-10 mb-5">
                              <label for="Upload image" value="">update image</label>
                              <input type="file" name="image" class="form-control" />
                         </div>
                         <div class="col-md-2 mt-4">
                             <img src="{{asset('uploads/image/'.$contacts->image)}}" class="img-circle" width="100%" height="40px" alt="...">
                         </div>
                     </div>

                     <input type="submit" class="btn btn-dark " value="update">
                 </form>
             </div>
         </div>
     </div>
@endsection