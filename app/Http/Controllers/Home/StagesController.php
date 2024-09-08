<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stageone;
use Illuminate\Support\Carbon;

class StagesController extends Controller
{
     //for stages   
     public function AllStages(){
        $stages = Stageone::find(1);
        $stages = Stageone::all();
        return view('admin.approach.all_stages',compact('stages'));
    }// End Method 

    public function EditApproachStagesData($id){
        $editstageone = Stageone::findOrFail($id);
        return view('admin.approach.editapproach_stages',compact('editstageone'));
    }// End Method
     public function UpdateStageone(Request $request){
         $stage_id = $request->id;

         Stageone::findOrFail($stage_id)->update([
             'stageone' => $request->stageone,
             'article' => $request->article,
             'article_one' => $request->article_one,
             'article_two' => $request->article_two, 
         ]);
         $notification = array(
             'message' => 'One of Stages or All Stages Data Updated Successfully',
             'alert-type' => 'info'
         );
         return redirect()->route('all.stages')->with($notification);

     }// End Method

    public function DeleteStageData($id){
        $stagedata = Stageone::findOrFail($id);
        $stageone = $stagedata->stageone;
        $article = $stagedata->article;
        $article_one = $stagedata->article_one;
        $article_two = $stagedata->article_two;

        Stageone::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Stage One Approach DataDeleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    
    }// End Method

}
