<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stagethree;
use Illuminate\Support\Carbon;

class StagesThreeController extends Controller
{
    public function StagesThree(){
        $stagesthree = Stagethree::all();
        return view('admin.approach.stages_three',compact('stagesthree'));
    }// End Method 

    public function EditStagesThree($id){
        $editstagethree = Stagethree::findOrFail($id);
            return view('admin.approach.edit_stages_three',compact('editstagethree'));
    }// end Method

    public function UpdateStageThree(Request $request){
        $stage_id = $request->id;

        Stagethree::findOrFail($stage_id)->update([
            'stagethree' => $request->stagethree,
            'article_1' => $request->article_1,
            'article_2' => $request->article_2,
            'article_3' => $request->article_3,
            
        ]);

        $notification = array(
            'message' => 'Three of Stages Data Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('stages.three')->with($notification);

         }// End Method

         public function DeleteStageThree($id){
            $stagesthree = Stagethree::findOrFail($id);
            $stagethree = $stagesthree->stagethree;
            $article_1 = $stagesthree->article_1;
            $article_2 = $stagesthree->article_2;
            $article_3 = $stagesthree->article_3;
    
            Stagethree::findOrFail($id)->delete();
    
            $notification = array(
                'message' => 'Stage Three Stage Data Deleted Successfully',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        
        }// End Method

        public function CreateStagesthree(){
            return view('admin.approach.stagethree_new');
        }// End Method

        public function StoreStageThree(Request $request){

            Stagethree::insert([
               
                'stagethree' => $request->stagethree, 
                'article_1' => $request->article_1,
                'article_2' => $request->article_2,              
                'article_3' => $request->article_3,
                'created_at' => Carbon::now()
            ]);
    
    
            $notification = array(
                'message' => 'Stage Three Data Inserted Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('stages.three')->with($notification);

        }// End Method
}
