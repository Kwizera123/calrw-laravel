<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeaderService as Header;
use Illuminate\Support\Carbon;
use App\Models\OurService;

class HeaderService extends Controller
{
    public function HeaderPage(){
        $headerservice = Header::all();
        return view('admin.service_page.header_page_service',compact('headerservice'));
    }// End of Method

    public function HeaderPageNew(){
        return view('admin.service_page.header_service_new');
    }// End Method

    public function StoreHeaderService(Request $request){
 {
            Header::insert([
                'service_header' => $request->service_header, 
                'service_description' => $request->service_description,   
                'created_at' => Carbon::now()
            ]);

        }// End of foreach
            $notification = array(
                'message' => 'Header Service Detail Inserted Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('header.service.page')->with($notification);
    }// End of Method

    public function EditServiceHeader($id) {
        $headerservice = Header::findOrFail($id);
        return view('admin.service_page.headerservice_page',compact('headerservice'));
    }// End of Method

    public function UpdatHeaderService(Request $request){
        $headerservice_id = $request->id;

        Header::findOrFail($headerservice_id)->update([
               
                'service_header' => $request->service_header, 
                'service_description' => $request->service_description,
                
            ]);
            $notification = array(
                'message' => 'Header Service Detail Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('header.service.page')->with($notification);
            
        
    }// End of Method

    public function DeleteHeaderService($id){
        $headerservice = Header::findOrFail($id);
            $service_header = $headerservice->service_header;
            $service_description = $headerservice->service_description;
            
            Header::findOrFail($id)->delete();

            $notification = array(
                'message' => 'Ourteam Page Deleted Successfully',
                'alert-type' => 'danger'
            );
            return redirect()->route('header.service.page')->with($notification);
    }//End of Method

    public function HomeService(){
        $servicepage = Header::find(1);
        $servicepage = Header::all();
        return view('frontend.service',compact('servicepage'));
    }//End of Method

    public function ServicePage(){
        $ourservice = OurService::all();
        return view('admin.service_page.our_service_page',compact('ourservice'));
    }//End of Method

    public function ServicePageNew(){
        return view('admin.service_page.our_service_new');
    }//End of Method

    public function StoreOurService(Request $request) {
        {
            OurService::insert([
                'service_title' => $request->service_title, 
                'service_description' => $request->service_description,   
                'created_at' => Carbon::now()
            ]);

        }// End of foreach
            $notification = array(
                'message' => 'Service Detail Inserted Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('our.service.page')->with($notification);
    }//End of Method

    public function EditOurService($id){
        $ourservice = OurService::findOrFail($id);
        return view('admin.service_page.editservice_page',compact('ourservice'));
    }//End of Method

    public function UpdateOurService(Request $request){
        $ourservice_id = $request->id;
        OurService::findOrFail($ourservice_id)->update([
               
            'service_title' => $request->service_title, 
            'service_description' => $request->service_description,
            
        ]);
        $notification = array(
            'message' => 'Our Service Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('our.service.page')->with($notification);

    }//End of Method

    public function DeleteOurService($id){
         OurService::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Ourteam Page Deleted Successfully',
            'alert-type' => 'danger'
        );
        return redirect()->route('our.service.page')->with($notification);

    }//End of Method
}
