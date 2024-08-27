<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HeaderService;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\HeaderController;
use App\Http\Controllers\Home\ApproachController;
use App\Http\Controllers\Home\StagesController;
use App\Http\Controllers\Home\StagesTwoController;
use App\Http\Controllers\Home\StagesThreeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|------------------- -------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });



 Route::controller(DemoController::class)->group(function(){
   Route::get('/', 'HomeMain')->name('home');

    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('contact.page');
 });

// admin all routers
 Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
 });


 // admin Home Slides
 Route::controller(HomeSliderController::class)->group(function(){
    Route::get('/home/slide/{id}', 'EditHomeSlider')->name('edit.home.slide');
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
    Route::get('/allhome/slide', 'AllhomeSlide')->name('allhome.slide');
    Route::get('/allhome/slide/new', 'AllhomeSlideNew')->name('allhome.slide.new');
    Route::post('/store/homeslider', 'StoreHomeSlide')->name('store.homeslider');
    Route::get('/delete/home/slide/{id}', 'DeleteHomeSlide')->name('delete.home.slide');
 });

  // admin Home Slides
  Route::controller(AboutController::class)->group(function(){
    Route::get('/about/page', 'AboutPage')->name('about.page');
   Route::post('/update/about', 'UpdateAbout')->name('update.about');
   Route::get('/about', 'HomeAbout')->name('home.about');
   Route::get('/about/chooseus', 'AboutChooseus')->name('about.chooseus');
   Route::post('/update/chooseus', 'UpdateChooseus')->name('update.chooseus');

   Route::get('/allourteam/page', 'AllOurTeam')->name('allourteam.page');
   Route::post('/store/ourteam', 'StoreOurteam')->name('store.ourteam');
   Route::get('/ourteam/about/page', 'OurteamAbout')->name('ourteam.about.page');
   Route::get('/edit/ourteam/page/{id}', 'EditOurTeam')->name('edit.ourteam.page');
   
   Route::post('/update/ourteam', 'UpdateOurteam')->name('update.ourteam');
   Route::get('/delete/ourteam/page/{id}', 'DeleteOurTeam')->name('delete.ourteam.page');

 });

   // admin Home header service
   Route::controller(HeaderService::class)->group(function(){
    Route::get('/header/page', 'HeaderPage')->name('header.service.page');
    Route::get('/header/page/new', 'HeaderPageNew')->name('header.service.new');
    Route::post('/store/headerservice', 'StoreHeaderService')->name('store.headerservice');
    Route::get('/edit/service/header/{id}', 'EditServiceHeader')->name('edit.service.header');
    Route::post('/update/headerservice', 'UpdatHeaderService')->name('update.headerservice');
    Route::get('/delete/service/header/{id}', 'DeleteHeaderService')->name('Delete.service.header');
    Route::get('/service', 'HomeService')->name('home.service');

    Route::get('/service/page', 'ServicePage')->name('our.service.page');
    Route::get('/our/service/new', 'ServicePageNew')->name('our.service.new');
    Route::post('/store/ourservice', 'StoreOurService')->name('store.ourservice');
    Route::get('/edit/our/service/{id}', 'EditOurService')->name('edit.our.service');
    Route::post('/update/ourservice', 'UpdateOurService')->name('update.ourservice');
    Route::get('/delete/our/service/{id}', 'DeleteOurService')->name('delete.our.service');

 });

    // contact routes
    Route::controller(ContactController::class)->group(function(){
      Route::get('/contact/page', 'ContactPage')->name('home.contact');
      Route::post('/store/message', 'StoreContact')->name('store.message');
      Route::get('/contact/message', 'ContactMessage')->name('contact.message');
      Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
  
   });

       // Footer routes
       Route::controller(FooterController::class)->group(function(){
         Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
         Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
     
      });

   // Footer routes
   Route::controller(HeaderController::class)->group(function(){
   Route::get('/header/setup', 'HeaderSetup')->name('header.setup');
   Route::post('/update/header', 'UpdateHeader')->name('update.header');

});

      // Approach routes
      Route::controller(ApproachController::class)->group(function(){
      Route::get('/approach/new', 'ApproachNew')->name('approach.new');
      Route::post('/store/newapproach', 'StoreNewApproach')->name('store.newapproach');
      Route::get('/all/approach', 'AllApproach')->name('all.approach');
      Route::get('/approach/data/{id}', 'EditApproachData')->name('edit.approach.data');
      Route::post('/update/approach', 'UpdateApproach')->name('update.approach');
      Route::get('/delete/approach/data/{id}', 'DeleteApproachData')->name('delete.approach.data');

   });

     // Stage two routes 
     Route::controller(StagesController::class)->group(function(){

      Route::get('/all/stages', 'AllStages')->name('all.stages');
      Route::get('/approach/stage/{id}', 'EditApproachStagesData')->name('edit.approach_stages.data');
      Route::post('/update/stage', 'UpdateStage')->name('update.stage');
      Route::get('/delete/stage/data/{id}', 'DeleteStageData')->name('delete.approach_stages.data');
     
   });


        // Stage two routes
        Route::controller(StagesTwoController::class)->group(function(){

         Route::get('/stages/two', 'StagesTwo')->name('stages.two');
         Route::get('/stage/two/{id}', 'EditStagesTwo')->name('edit.stages.two');
          Route::post('/update/stage', 'UpdateStageTwo')->name('update.stagetwo');
          Route::get('/delete/stage/two/{id}', 'DeleteStageTwo')->name('delete.stages.two');
          Route::get('/create/stagetwo', 'CreateStagestwo')->name('create.stagestwo');
          Route::post('/store/newstage', 'StoreNewStage')->name('store.newstage');
      });

            // Stage two routes
            Route::controller(StagesThreeController::class)->group(function(){

               Route::get('/stages/three', 'StagesThree')->name('stages.three');
               // Route::get('/stage/two/{id}', 'EditStagesTwo')->name('edit.stages.two');
               //  Route::post('/update/stage', 'UpdateStageTwo')->name('update.stagetwo');
               //  Route::get('/delete/stage/two/{id}', 'DeleteStageTwo')->name('delete.stages.two');
               //  Route::get('/create/stagetwo', 'CreateStagestwo')->name('create.stagestwo');
               //  Route::post('/store/newstage', 'StoreNewStage')->name('store.newstage');
            });

// Route::get('/about', function () {  delete.our.service 
//     return view('about');
// });


// Authentication 

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
