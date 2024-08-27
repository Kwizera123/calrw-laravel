<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stagethree;
use Illuminate\Support\Carbon;

class StagesThreeController extends Controller
{
    public function StagesThree(){
        $stastagesthreeges = Stagethree::all();
        return view('admin.approach.stages_three',compact('stagesthree'));
    }// End Method 





    public function UpdateStage(Request $request){
        $stage_id = $request->id;

        Stagethree::findOrFail($stage_id)->update([
            'stagethree' => $request->stagethree,
            'article_1' => $request->article_1,
            'article_2' => $request->article_2,
            'article_3' => $request->article_3,
            
        ]);



        $notification = array(
            'message' => 'One of Stages or All Stages Data Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('all.stages')->with($notification);

         }// End Method
}
