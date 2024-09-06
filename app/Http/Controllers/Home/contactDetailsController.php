<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactdetail;
use Illuminate\Support\Carbon;

class contactDetailsController extends Controller
{
    public function ContactDetail(){
        $contactaddr = Contactdetail::all();
        return view('admin.contactdetails.index_contact',compact('contactaddr'));
    }// End Method

    public function CreateContAddress(){
        return view('admin.contactdetails.new_contact');
    }// End Method

    public function StoreAddress(Request $request){
        Contactdetail::insert([
               
            'title' => $request->title, 
            'subtitle' => $request->subtitle,
            'location' => $request->location,              
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'New Contact Address Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('contact.detail')->with($notification);
    }// End Method

    public function EditContactAddress($id){
        $editaddress = Contactdetail::findOrFail($id);
            return view('admin.contactdetails.edit_contact',compact('editaddress'));
    }// End Method

    public function UpdateContactAddress(Request $request){
        $address_id = $request->id;

        Contactdetail::findOrFail($address_id)->update([
            'title' => $request->title,
            'email' => $request->email,
            'location' => $request->location,
            'phone' => $request->phone,
            'subtitle' => $request->subtitle,
            
        ]);

        $notification = array(
            'message' => 'Contact Address Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('contact.detail')->with($notification);
    }// End Method

    public function DeleteContactAddress($id){
        $address = Contactdetail::findOrFail($id);
        $title = $address->title;
        $subtile = $address->subtitle;
        $email = $address->email;
        $location = $address->location;
        $phone = $address->phone;

        Contactdetail::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Address Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }// End Method
}
