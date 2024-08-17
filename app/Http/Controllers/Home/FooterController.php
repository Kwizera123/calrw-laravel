<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Carbon;

class FooterController extends Controller
{
    public function FooterSetup(){
        $allfooter = Footer::find(1);
        return view('admin.footer.footer_all',compact('allfooter'));
    }// End Method

    public function UpdateFooter(Request $request){
        $footer_id = $request->id;


        Footer::findOrFail($footer_id)->update([
            'contact_title' => $request->contact_title,
            'contact' => $request->contact,
            'email' => $request->email,
            'address_title' => $request->address_title,
            'address' => $request->address,
            'follow_title' => $request->follow_title,
            'facebbok' => $request->facebbok,
            'tweeter' => $request->tweeter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'copyright' => $request->copyright,
            'terms_conditions' => $request->terms_conditions,               
            
        ]);
        $notification = array(
            'message' => 'Footer Details Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method
}
