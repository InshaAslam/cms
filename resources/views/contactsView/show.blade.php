@extends('frontEnd.layout')
@section("title","Contact Details")
@section("page")
    <div class="container bg-white">
       <div class=" row mt-2 justify-content-center">
          <div class="col-md-6 ">
             <div class="card bg-success" style="width: 30rem;">
                <img src="{{asset('uploads/image/'.$contacts->image)}}" class="card-img-top" width="200px" height="200px" alt="...">
                <li class="list-group-item bg-success  bg-gradient"> 
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light">   Name  </div>
                      <div class="col-md-2 fs-2 text-light">   :   </div>
                      <div class="col-md-5 fs-5 text-light"> {{$contacts->first_name}} {{$contacts->last_name}} </div>
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> Number </div>
                      <div class="col-md-2 fs-2 text-light"> : </div>
                      @foreach($numbers as $number)
                         <div class="col-md-5 fs-5 text-light"> {{$number->number}} </div>
                      @endforeach
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> D-O-B </div>
                      <div class="col-md-2 fs-2 text-light"> :</div>
                      <div class="col-md-5 fs-5 text-light"> {{$contacts->dob}} </div>
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> Address </div>
                      <div class="col-md-2 fs-2 text-light"> : </div>
                      <div class="col-md-5 fs-5 text-light">  {{$contacts->address}} </div>  
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> City </div>
                      <div class="col-md-2 fs-2 text-light">  : </div>
                      <div class="col-md-5 fs-5 text-light"> {{$contacts->city}} </div>
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> State   </div>
                      <div class="col-md-2 fs-2 text-light"> :    </div>
                      <div class="col-md-5 fs-5 text-light"> {{$contacts->state}} </div>
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> Country </div>
                      <div class="col-md-2 fs-2 text-light"> : </div>
                      <div class="col-md-5 fs-5 text-light"> {{$contacts->country}} </div>
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> Facebook Name </div>
                      <div class="col-md-2 fs-2 text-light"> : </div>
                      <div class="col-md-5 fs-5 text-light"> {{$contacts->facebook_id}} </div>
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> Instagram Name </div>
                      <div class="col-md-2 fs-2 text-light"> : </div>
                      <div class="col-md-5 fs-5 text-light"> {{$contacts->instagram_id}} </div>
                   </div>
                </li>

                <li class="list-group-item bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> Youtube Channel </div>
                      <div class="col-md-2 fs-2 text-light"> : </div>
                      <div class="col-md-5 fs-5 text-light"> {{$contacts->youtube_id}} </div>
                   </div>
                </li>

                <li class="list-group-item  fs-5 bg-success  bg-gradient">
                   <div class="row">
                      <div class="col-md-5 fs-5 text-light"> Action </div>
                      <div class="col-md-1 fs-2 text-light"> : </div>
                      <div class="col-md-3 ">
                         <a class="nav-link btn btn-primary " href="{{route("edit",$contacts->id)}}"> Edit </a>
                      </div>

                      <div class="col-md-3 fs-5 bg-success  bg-gradient">
                         <a class="nav-link btn btn-primary" href="{{route("delete",$contacts->id)}}"> Delete </a>
                       </div>
                   </div>
                </li>
             </div>
          </div>
       </div>
    </div>
@endsection           


