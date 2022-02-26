@extends("frontEnd.layout")
@section("title","Your  contacts")
@section("page")
 <div class="container">
     <div class="row mt-1 justify-content-center">
         <div class="col-md-6">
             @foreach($contacts as $contact)
              <div class="card bg-light" style="width: 30rem;">
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item fs-3 bg-light bg-gradient">
                         <a class="nav-link" href="{{route("show",$contact->id)}}">
                             <div class="row">
                                 <div class="col-md-8">
                                     {{$contact->first_name}} {{$contact->last_name}}
                                 </div>
                                 <div class="col-md-4">
                                     <img src="{{asset('uploads/image/'.$contact->image)}}" class="float-end" width="90px" height="90px"  alt="..." style="border-radius:43px!important">
                                 </div>
                            </div>
                        </a>
                     </li>
                 </ul>
             </div>
             @endforeach
            </div>
        </div>
    </div>
@endsection

