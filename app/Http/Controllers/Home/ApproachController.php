<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Approach;
use Illuminate\Support\Carbon;

class ApproachController extends Controller
{
    public function ApproachNew(){
        $approach = Approach::find(1);
        return view('admin.approach.approach_new',compact('approach'));

    }// End Method 

    public function StoreNewApproach(Request $request){
        Approach::insert([
               
            'title' => $request->title, 
            'subtitle' => $request->subtitle,
            'stage' => $request->stage,
            'article' => $request->article,  
            'article_one' => $request->article_one, 
            'article_two' => $request->article_two,             
            'created_at' => Carbon::now()
        ]);

    
        $notification = array(
            'message' => 'New Approach Data Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }// End Method

    public function AllApproach(){
        $allapproach = Approach::all();
        return view('admin.approach.allapproach',compact('allapproach'));
        
    }// End Method

    public function EditApproachData($id){
        $editapproach = Approach::findOrFail($id);
        return view('admin.approach.editapproachdata',compact('editapproach'));
    }// End Method

    public function UpdateApproach(Request $request){
        $approach_id = $request->id;

        Approach::findOrFail($approach_id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
           
            
        ]);
        $notification = array(
            'message' => 'Approach Data Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('all.approach')->with($notification);

    }// End Method

    public function DeleteApproachData($id) {
        $approachdata = Approach::findOrFail($id);
        $title = $approachdata->title;
        $subtitle = $approachdata->subtitle;
       

        Approach::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Approach DataDeleted Successfully',
            'alert-type' => 'danger'
        );
        return redirect()->back()->with($notification);
    }// End Method
   
}
