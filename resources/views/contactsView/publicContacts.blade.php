 @extends('frontEnd.layout')
 @section('title','Public Contact')
 @section('page')
     <div class="container">
         <div class="row mt-1 justify-content-center">
             <div class="col-md-6">
                 @foreach($contacts as $contact)
                      @foreach($numbers as $number)
                         @if($number->contact_id == $contact->id)   
                         <div class="card bg-dark" style="width: 35rem;">
                             <ul class="list-group list-group-flush fs-3">
                                 <li class="list-group-item bg-dark bg-gradient text-white">{{$contact->first_name}} {{$contact->last_name}} 
                                     <img src="{{asset('uploads/image/'.$contact->image)}}" width="90px" height="90px" class="float-end" style="border-radius:45px!important"  alt="image">

                                     <div class="card-body">
                                         <a class=" btn btn-primary card-link" href="tel:{{$number->number}}">call</a> 
                                         <a class=" btn btn-primary card-link" href="{{route('view/details',$contact->id)}}">view</a>
                                     </div>
                                 </li>
                             </ul>
                         </div>
                           @endif 
                     @endforeach
                 @endforeach
             </div>
         </div>
     </div>
 @endsection

 <!--<div class="row-md-4 border py-3">
                                 <div class="col-md-4 fs-4">
                                     {{$contact->first_name}} {{$contact->last_name}}
                                 </div>
                                 <div class="col-md-1 border mr-2">
                                     call
                                 </div>
                             </div>
                            
                            
                             <ul class="list-group d-flex">
                             @if($number->contact_id == $contact->id)
                                 <li  class="list-group-item "> {{$contact->first_name}} {{$contact->last_name}} 
                                     <img src="{{asset('uploads/image/'.$contact->image)}}"  class="img-circle float-end " alt="image">
                                     <div class="col-md-2 border me-3 mt-5">
                                         <a class="nav-link" href="tel:{{$number->number}}">call</a>
                                     </div>
                                </li>
                              @endif
                         </ul>

                         <div class="row border bg-yellow ">
                                 <div class="col-md-6 fs-5">
                                       {{$contact->first_name}} {{$contact->last_name}} 
                                 </div>

                                 <div class="col-md-6 ">
                                        <img src="{{asset('uploads/image/'.$contact->image)}}" width="100px" height="100px" class="float-end img-circle" alt="image">
                                 </div>
                                 <div class="col-ms-2">
                                      <a class="nav-link" href="tel:{{$number->number}}">call</a>
                                      <div class="col-md-2">
                                         <a class="nav-link" href="{{route('view/details',$contact->id)}}">View</a>
                                      </div>
                                  </div>   
                             </div>
                            -->