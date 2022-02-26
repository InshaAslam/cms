 @extends('frontEnd.layout')
 @section('title','edit')
 @section('page')
     <div class="container">
         <div class="row">
             <form action="{{route("admin/update",$users->id)}}" method="POST">
                 @method('PUT')
                 @csrf()
                 <div class="mt-3">
                     <input type="text" name="name" class="form-control" value="{{$users->name}}">
                 </div>

                 <div class="mt-3">
                     <input type="email" name="email" class="form-control" value="{{$users->email}}">
                 </div>
                 
                 <div class="mt-3">
                     <input type="text" name="created_at" class="form-control" value="{{$users->created_at}}">
                 </div>

                 <div class="mt-3">
                     <input type="text" name="updated_at" class="form-control" value="{{$users->updated_at}}">
                 </div>
                 <div class="mt-3">
                     <button type="submit" class="btn btn-primary">Update</button>
                 </div>
             </form>
         </div>
     </div>
 @endsection