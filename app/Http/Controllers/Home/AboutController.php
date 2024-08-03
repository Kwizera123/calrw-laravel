<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\ChooseUs;
use App\Models\OurTeam;
use Illuminate\Support\Carbon;
//use Image;
use Intervention\Image\ImageManagerStatic as Image;

class AboutController extends Controller
{
    public function AboutPage(){
        $aboutpage = About::find(1);
        //$homeslide = HomeSlide::all();
        return view('admin.about_page.about_page_all',compact('aboutpage'));
    }// End Method

    public function UpdateAbout(Request $request){
        $about_id = $request->id;
        if($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();//3454555.jpg
            Image::make($image)->resize(300,200)->save('upload/about_image/'.$name_gen);
            $save_url = 'upload/about_image/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_descreption' => $request->short_descreption,               
                'about_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'About Page Updated with Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
            
        }else{
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_descreption' => $request->short_descreption,
               
                
            ]);
            $notification = array(
                'message' => 'About Page Updated without Image Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        } //end else condition
    }// End Method

    public function HomeAbout(){
        return view('frontend.about_page');
    }// End Method

    public function AboutChooseus(){
        $choosepage = ChooseUs::find(1);
        return view('admin.about_page.chooseus_page',compact('choosepage'));
    }// End Method

    public function UpdateChooseus(Request $request){

        $chooseus_id = $request->id;
        if($request->file('image_one')) {
            $image = $request->file('image_one');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();//3454555.jpg
            Image::make($image)->resize(903,1034)->save('upload/choose_image/'.$name_gen);
            $save_url = 'upload/choose_image/'.$name_gen;

            ChooseUs::findOrFail($chooseus_id)->update([
                'title' => $request->title,
                'short_descreption' => $request->short_descreption, 
                'short_descreption_one' => $request->short_descreption_one,
                'descreption_one' => $request->descreption_one,   
                'short_descreption_two' => $request->short_descreption_two,
                'descreption_two' => $request->descreption_two,   
                'short_descreption_three' => $request->short_descreption_three,
                'descreption_three' => $request->descreption_three, 
                'short_descreption_four' => $request->short_descreption_four,  
                'descreption_four' => $request->descreption_four,  
                'short_descreption_five' => $request->short_descreption_five,
                'descreption_five' => $request->descreption_five,                
                'image_one' => $save_url,
            ]);
            $notification = array(
                'message' => 'Reason Choose us Page Updated with Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
            
        }else{
            ChooseUs::findOrFail($chooseus_id)->update([
                'title' => $request->title,
                'short_descreption' => $request->short_descreption,
                'short_descreption_one' => $request->short_descreption_one,
                'descreption_one' => $request->descreption_one,   
                'short_descreption_two' => $request->short_descreption_two,
                'descreption_two' => $request->descreption_two,   
                'short_descreption_three' => $request->short_descreption_three,
                'descreption_three' => $request->descreption_three, 
                'short_descreption_four' => $request->short_descreption_four,  
                'descreption_four' => $request->descreption_four,  
                'short_descreption_five' => $request->short_descreption_five,
                'descreption_five' => $request->descreption_five, 
                
            ]);
            $notification = array(
                'message' => 'Reason Choose us Page Updated without Image Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);

        } //end else condition
        

    }// End Method

   
    public function AllOurTeam(){
        $ourteam = OurTeam::find(1);
        return view('admin.about_page.ourteam',compact('ourteam'));
    }// End Method

    public function StoreOurteam(Request $request) {
        $image = $request->file('photo');

        foreach ($image as $photo) {

            $name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();//3454555.jpg
            Image::make($photo)->resize(800,800)->save('upload/ourteam_image/'.$name_gen);
            $save_url = 'upload/ourteam_image/'.$name_gen;

            OurTeam::insert([
               
                'name' => $request->name, 
                'role' => $request->role,
                'description' => $request->description,              
                'photo' => $save_url,
                'created_at' => Carbon::now()
            ]);

        }// End of foreach
            $notification = array(
                'message' => 'Ourteam Page Inserted with Image Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->back()->with($notification);
  
    }// End of Method

    public function OurteamAbout() {
        $allOurteamAbout = OurTeam::all();
        return view('admin.about_page.all_ourteam',compact('allOurteamAbout'));
    }// End of Method

    public function EditOurTeam($id){
        $ourteam = OurTeam::findOrFail($id);
        return view('admin.about_page.ourteam_page',compact('ourteam'));
    }// End Method

    public function UpdateOurteam(Request $request){

        $ourteam_id = $request->id;

        if($request->file('photo')) {
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();//3454555.jpg
            Image::make($image)->resize(800,800)->save('upload/ourteam_image/'.$name_gen);
            $save_url = 'upload/ourteam_image/'.$name_gen;

            OurTeam::findOrFail($ourteam_id)->update([
               
                'name' => $request->name, 
                'role' => $request->role,
                'description' => $request->description,              
                'photo' => $save_url,
            ]);
            $notification = array(
                'message' => 'Ourteam Page Updated with Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
            
        }else{
            OurTeam::findOrFail($ourteam_id)->update([
                
                'name' => $request->name,
                'role' => $request->role,
                'description' => $request->description,   
                
                
            ]);
            $notification = array(
                'message' => 'Ourteam Page Updated without Image Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('ourteam.about.page')->with($notification);

        } //end else condition
    }// End of Method

    public function DeleteOurTeam($id) {
            $ourteam = OurTeam::findOrFail($id);
            $name = $ourteam->name;
            $role = $ourteam->role;
            $description = $ourteam->description;
            $photo = $ourteam->photo;
            unlink($photo);

            OurTeam::findOrFail($id)->delete();

            $notification = array(
                'message' => 'Ourteam Page Deleted Successfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
    }
}
