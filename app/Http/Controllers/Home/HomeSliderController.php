<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
//use Image;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;

class HomeSliderController extends Controller
{
    public function EditHomeSlider($id){
        $edithomeslide = HomeSlide::findOrFail($id);
        //$homeslide = HomeSlide::all();
        return view('admin.home_slide.home_slide_all',compact('edithomeslide'));
    }// End Method

    public function UpdateSlider(Request $request){
        $slide_id = $request->id;
        if($request->file('home_slider')) {
            $image = $request->file('home_slider');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();//3454555.jpg
            Image::make($image)->resize(600,600)->save('upload/home_slide/'.$name_gen);
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
    
            return redirect()->route('allhome.slide')->with($notification);
            
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
            return redirect()->route('allhome.slide')->with($notification);
        } //end else condition
    }//End Method

    public function AllhomeSlide(){
        $homeslide = HomeSlide::all();
        return view('admin.home_slide.allhome_slide',compact('homeslide'));
    }//End Method

    public function AllhomeSlideNew(){
        $slidehomenew = HomeSlide::find(1);
        return view('admin.home_slide.allhome_slide_new',compact('slidehomenew'));
        
    }//End Method
    public function StoreHomeSlide(Request $request){
        $image = $request->file('home_slider');

        foreach ($image as $home_slider) {

            $name_gen = hexdec(uniqid()).'.'.$home_slider->getClientOriginalExtension();//3454555.jpg
            Image::make($home_slider)->resize(800,800)->save('upload/home_slide/'.$name_gen);
            $save_url = 'upload/home_slide/'.$name_gen;

            HomeSlide::insert([
               
                'title' => $request->title, 
                'descreption' => $request->descreption,
                'name' => $request->name,
                'short_title' => $request->short_title,              
                'home_slider' => $save_url,
                'created_at' => Carbon::now()
            ]);

        }// End of foreach
            $notification = array(
                'message' => 'New Home Slider Data Inserted with Image Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('allhome.slide')->with($notification);
    }// End of Method

    public function DeleteHomeSlide($id){
        $homeslide = HomeSlide::findOrFail($id);
            $title = $homeslide->title;
            $descreption = $homeslide->descreption;
            $name = $homeslide->name;
            $short_title = $homeslide->short_title;
            $home_slider = $homeslide->home_slider;
            unlink($home_slider);

            HomeSlide::findOrFail($id)->delete();

            $notification = array(
                'message' => 'Home Slide Data Deleted Successfully',
                'alert-type' => 'danger'
            );
            return redirect()->route('allhome.slide')->with($notification);
    }

    
}
