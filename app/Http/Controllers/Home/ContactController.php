<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function ContactPage(){
        return view('frontend.contact_page');
    }// End Method

    public function StoreContact(Request $request){
        Contact::insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Your Message has sent Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method

    public function ContactMessage(){
        $contact = Contact::latest()->get();

        return view('admin.contact.allcontact',compact('contact'));
    }// End Method

    public function DeleteMessage($id){
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Message has deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

}
