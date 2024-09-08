<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stagetwo;
use Illuminate\Support\Carbon;

class StagesTwoController extends Controller
{
         //for stages   
         public function StagesTwo(){
            $sttwo = Stagetwo::find(1);
            $sttwo = Stagetwo::all();
            return view('admin.approach.stages_two',compact('sttwo'));
        }// End Method 

        public function EditStagesTwo($id){
            $editstagetwo = Stagetwo::findOrFail($id);
            return view('admin.approach.edit_stages_two',compact('editstagetwo'));
        }// End Method
    
    public function UpdateStageTwo(Request $request){
        $stagetwo_id = $request->id;

        Stagetwo::findOrFail($stagetwo_id)->update([

            'stagetwo' => $request->stagetwo,
            'article1' => $request->article1,
            'article2' => $request->article2,
            'article3' => $request->article3,
            
        ]);

        $notification = array(
            'message' => 'Stages two Data Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('stages.two')->with($notification);

    }// End Method

    public function DeleteStageTwo($id){
        $stagestwo = Stagetwo::findOrFail($id);
        $stagetwo = $stagestwo->stagetwo;
        $article1 = $stagestwo->article1;
        $article2 = $stagestwo->article2;
        $article3 = $stagestwo->article3;

        Stagetwo::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Stage Two From Approach Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    
    }// End Method

    public function CreateStagestwo(){
        return view('admin.approach.stagetwo_new');
    }// End Method

    public function StoreNewStage(Request $request){

        Stagetwo::insert([
               
            'stagetwo' => $request->stagetwo, 
            'article1' => $request->article1,
            'article2' => $request->article2,              
            'article3' => $request->article3,
            'created_at' => Carbon::now()
        ]);


        $notification = array(
            'message' => 'Stage Two From Approach Data Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('stages.two')->with($notification);

    }// End Method
}
