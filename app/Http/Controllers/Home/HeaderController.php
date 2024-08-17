<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header;
use Intervention\Image\ImageManagerStatic as Image;

class HeaderController extends Controller
{
    public function HeaderSetup(){
        $allheader = Header::find(1);
        //$homeslide = HomeSlide::all();
        return view('admin.header.header_all',compact('allheader'));
    }// End of Method

    public function UpdateHeader(Request $request){

        $header_id = $request->id;
        if($request->file('photo')) {
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();//3454555.jpg
            Image::make($image)->resize(50,50)->save('upload/header_photo/'.$name_gen);
            $save_url = 'upload/header_photo/'.$name_gen;

            Header::findOrFail($header_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'photo' => $save_url,
            ]);
            $notification = array(
                'message' => 'Header Updated with Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
            
        }else{
            Header::findOrFail($header_id)->update([
                'title' => $request->title,
                'description' => $request->description,
               
                
            ]);
            $notification = array(
                'message' => 'Header Updated without Image Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);

     }
    }// End of Method
    
}