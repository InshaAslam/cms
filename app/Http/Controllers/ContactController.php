<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Models\Contactnumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contacts = contact::select('first_name', 'last_name','id','image')->where('user_id',Auth::id())->get();
       $data['contacts'] = $contacts;

      /* $numbers = contactNumber::all();
       $data['numbers'] = $numbers;*/

       return view('contactsView.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('contactsView.addContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $user = user::find(Auth::id());
        /* Storing contact fields in Contacts table */
        $contact = new contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->dob = $request->dob;
        $contact->address = $request->address;
        $contact->city = $request->city;
        $contact->state = $request->state;
        $contact->country = $request->country;
        $contact->facebook_id = $request->facebook_id;
        $contact->instagram_id = $request->instagram_id;
        $contact->youtube_id = $request->youtube_id;

        if($request->hasfile('image'))
        {
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename = time().'.'.$extension;
              $file->move('uploads/image/', $filename);
              $contact->image = $filename;
        }
        $user->contacts()->save($contact);

        /* Storing Number fields in Contactnumbers table */
        $connum = contact::find($contact->id);
        //dd($connum);
        $cnumber = new contactnumber;
        $cnumber -> contact_id = $connum;
        $cnumber->number = $request->number;
        $cnumber->visibility = $request->visible;
        $cnumber->type = $request->type;

        $connum->contactnumber()->save($cnumber);
        return redirect(route('list'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $contacts = contact::find($id);

         $data['contacts'] = $contacts;
         
          $numbers = Contactnumber::select('number' ,'id')->where('contact_id', $contacts->id)->get(); 
         // $cnumber['numbers'] = $numbers;

         return view('contactsView.show',$data,compact('numbers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = contact::find($id);
        $details['contacts'] = $contacts;

        $numbers = DB::table('contactnumbers')->where('contact_id',$contacts->id)->get();
        $number['numbers'] = $numbers;

        return  view('contactsView.edit',$details,compact('numbers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = contact::find($id);
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->dob = $request->input('dob');
        $contact->address = $request->input('address');
        $contact->city = $request->input('city');
        $contact->state = $request->input('state');
        $contact->country = $request->input('country');
        $contact->facebook_id = $request->input('fb_id');
        $contact->instagram_id = $request->input('insta_id');
        $contact->youtube_id = $request->input('youtube_id');
         
        if($request->hasfile('image'))
        {
          $destination = 'uploads/image/'.$contact->image;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename = time().'.'.$extension;
          $file->move('uploads/image/', $filename);
          $contact->image = $filename;
        }
         
        $number = contactnumber::find($contact->id);
        $number->number = $request->input('number');

        $contact->update();
        $number->update();
        

        return redirect(route('list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = contact::find($id);
       // return $contact;

       $number = contact::find($id)->contactnumber;
        $contact->delete();
        $number->delete();

        return redirect(route('list'));

    }

    public function logout(Request $request)
    {
         Auth::logout();
         return redirect(route('login'));
    }

    public function getPublicContacts()
    {
        $numbers = Contactnumber::all()->where('visibility','public');
        $number['numbers'] = $numbers;
       
        $contacts = DB::table('contacts')->select('first_name' , 'last_name','id','image')->get();
        $data['contacts'] = $contacts; 
        return view('contactsView.publicContacts',$data,compact('numbers'));
    }
     
    public function getContactDetails($id)
    {
        $details = contact::find($id);
        $data['details'] = $details;
        
        $numbers = contact::find($id)->contactnumber;
        $number['numbers'] = $numbers;

        return view('contactsView.publicContactDetails',$number,compact('details'));
    }
}