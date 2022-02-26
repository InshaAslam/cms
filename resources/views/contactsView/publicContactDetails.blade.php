@extends('frontEnd.layout')
@section('title','details')
@section('page')
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6 mt-2">
                 <div class="card bg-success" style="width: 30rem;">
                     <img src="{{asset('uploads/image/'.$details->image)}}" class="card-img-top rounded" width="200%" height="200px" alt="...">
                     <ul class="list-group list-group-flush fs-5">
                          <li class="list-group-item bg-success bg-gradient">
                              <div class="row">
                                  <div class="col-md-5 text-white">Name</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->first_name}}  {{$details->last_name}}</div>
                              </div>
                          </li>
                          <li class="list-group-item bg-success bg-gradient"> 
                              <div class="row">
                                  <div class="col-md-5 text-white">Number</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$numbers->number}}</div>
                              </div>
                          </li>
                
                          <li class="list-group-item bg-success bg-gradient">
                             <div class="row">
                                  <div class="col-md-5 text-white">Date of birth</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->dob}}</div>
                              </div>
                          </li>
                          <li class="list-group-item bg-success bg-gradient">
                             <div class="row">
                                  <div class="col-md-5 text-white">Address</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->address}}</div>
                              </div>
                          </li>
                          <li class="list-group-item bg-success bg-gradient">
                             <div class="row">
                                  <div class="col-md-5 text-white">City</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->city}}</div>
                              </div>
                          </li>
                          <li class="list-group-item bg-success bg-gradient">
                             <div class="row">
                                  <div class="col-md-5 text-white">State</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->state}}</div>
                              </div>
                          </li>
                          <li class="list-group-item bg-success bg-gradient">
                             <div class="row">
                                  <div class="col-md-5 text-white">Country</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->country}}</div>
                              </div>
                          </li>
                          <li class="list-group-item bg-success bg-gradient">
                             <div class="row">
                                  <div class="col-md-5 text-white">Facebook Name</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->facebook_id}}</div>
                              </div>
                          </li>
                          <li class="list-group-item bg-success bg-gradient">
                             <div class="row">
                                  <div class="col-md-5 text-white">Instagram Name</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->instagram_id}}</div>
                              </div>
                          </li>
                          <li class="list-group-item bg-success bg-gradient">
                             <div class="row">
                                  <div class="col-md-5 text-white">Youtube Channel</div>
                                  <div class="col-md-2">:</div>
                                  <div class="col-md-5 text-white">{{$details->youtube_id}}</div>
                              </div>
                          </li>
                     </ul>
                 </div>
             </div>
          </div>
      </div>
@endsection

 <!--<img src="{{asset('uploads/image/'.$details->image)}}" width="100%" class="img-fluid" alt="image">

<li class="list-group-item"> ph no : {{$numbers->number}}</li>
                          <li class="list-group-item">Type : </li>
                          <li class="list-group-item"></li>
                          <li class="list-group-item">Address : </li>
                          <li class="list-group-item">City : </li>
                          <li class="list-group-item">State : </li>
                          <li class="list-group-item">Country : }</li>
                          <li class="list-group-item">Facebook Id : </li>
                          <li class="list-group-item">Instagram Id : </li>
                          <li class="list-group-item">Youtube id : </li>-->