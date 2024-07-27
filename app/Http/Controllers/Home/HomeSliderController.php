<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
//use Image;
use Intervention\Image\ImageManagerStatic as Image;

class HomeSliderController extends Controller
{
    public function HomeSlider(){
        $homeslide = HomeSlide::find(2);
        //$homeslide = HomeSlide::all();
        return view('admin.home_slide.home_slide_all',compact('homeslide'));
    }// End Method

    public function UpdateSlider(Request $request){
        $slide_id = $request->id;
        if($request->file('home_slider')) {
            $image = $request->file('home_slider');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();//3454555.jpg
            Image::make($image)->resize(400,400)->save('upload/home_slide/'.$name_gen);
            $save_url = 'upload/home_slide/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'descreption' => $request->descreption,
                'name' => $request->name,
                'short_title' => $request->short_title,
                'home_slider' => $save_url,
            ]);
            $notification = array(
                'message' => 'Home Slide Updated with Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
            
        }else{
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'descreption' => $request->descreption,
                'name' => $request->name,
                'short_title' => $request->short_title,
                
            ]);
            $notification = array(
                'message' => 'Home Slide Updated without Image Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        } //end else condition
    }//End Method
}
