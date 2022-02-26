 @extends('frontEnd.layout')
 @section('page')
       <div class="container">
             <div class="row mt-2">
                 <div class="col-4 col-sm-3 offset-2">
                     <div class="card bg-light border-primary" style="width:18rem">
                         <div class="card-header border-primary text-center fs-5">N0. of users</div>
                         <div class="card-body">
                             <p class="card-text text-center fs-4">{{$n_users}}</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-4 col-sm-3 offset-1">
                     <div class="card bg-light border-primary" style="width:18rem">
                         <div class="card-header border-primary text-center fs-5">N0. of Contacts</div>
                         <div class="card-body">
                             <p class="card-text text-center fs-4">{{$n_contacts}}</p>
                         </div>
                     </div>
                 </div>
            </div>

             <div class="row mt-3">
                 <form action="" >
                     <div class="mt-3">
                         <input type="search" name="search" placeholder="search by Name OR Email" class="form-control">
                     </div>
                     <div class="mt-1">
                         <button type="submit" class="btn btn-primary">search</button>
                     </div>
                      </form>
             </div>
            <div class="row mt-3">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col" colspan="1"><a href="{{route("export/csv")}}">Export</a></th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($users as $user)
                        <tr>
                            <td scope="row">{{$user->id}}</td>
                            <td scope="row">{{$user->name}}</td>
                            <td scope="row">{{$user->email}}</td>
                            <td scope="row">{{$user->created_at}}</td>
                            <td scope="row">{{$user->updated_at}}</td>
                            <td scope="row"></td>
                            <td scope="row"><a href="{{route("admin/edit",$user->id)}}">Edit</a></td>
                            <td scope="row"><a href="{{route("admin/delete",$user->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
              {{$users->links()}}
        </div>
 @endsection