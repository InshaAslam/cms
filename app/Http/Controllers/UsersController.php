<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;



class UsersController extends Controller
{
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    } 

  /*  public function show()
    {
        $n_users = DB::table('users')->count();

        $n_contacts = DB::table('contacts')->count();

        $users = DB::table('users')->select('id','name','email')->get();

       $data = compact('n_users', 'n_contacts' , 'users');
        return view('adminView.adminDashboard',$data);
    }*/

    public function show(Request $request){
        $n_users = DB::table('users')->count();

        $n_contacts = DB::table('contacts')->count();

        $search = $request['search'] ?? "";
        if($search != "")
        {
            $users = user::where('name','=',$search)->orWhere('email','=',$search)->Paginate(10);
        }
        else{
            $users = user::Paginate(10);
        }
        $data = compact('users','search' ,'n_users','n_contacts');
       // return $data;
       return view('adminView.adminDashboard')->with($data);

    }

    public function edit($id){
        $users = user::find($id);
        return view('adminView.edit',compact('users'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->created_at = $request->input('created_at');
        $user->updated_at = $request->input('updated_at');
        $user->update();
        return redirect(route('admin-dashboard'));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin-dashboard'));
    }
   
}
