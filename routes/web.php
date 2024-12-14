<?php

use App\Http\Controllers\BackEnd\adminsController;
use App\Http\Controllers\BackEnd\dashboardController;
use App\Http\Controllers\BackEnd\hospitalsController;
use App\Http\Controllers\BackEnd\RequstingsController;
use App\Http\Controllers\BackEnd\settingsController;
use App\Http\Controllers\BackEnd\userProfileController;
use App\Http\Controllers\FrontEnd\donateController;
use App\Http\Controllers\FrontEnd\frontController;
use App\Http\Controllers\FrontEnd\homeController;
use App\Http\Controllers\FrontEnd\requstingController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\isAdminMeddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//front end routes
Route::get('/',[frontController::class,'homePage'])->name('homePage');

Route::middleware('auth')->group(function(){
    //navbar routes
    Route::get('/about',[frontController::class,'aboutPage'])->name('aboutPage');
    Route::get('/process',[frontController::class,'processPage'])->name('processPage');

    //donate routes
    Route::get('/donate/information',[donateController::class,'donateInfo'])->name('donateInfo');
    Route::post('/donate/information/store',[donateController::class,'storeDonate'])->name('storeDonate');
    

    //requesting routes
    Route::get('/requesting/information',[requstingController::class,'requestingPage'])->name('requestingPage');
    Route::post('/requste/information/store',[requstingController::class,'storeRequest'])->name('storeRequest');


    //route seccess page 
    Route::get('/seccess/information',[frontController::class,'seccessPage'])->name('seccessPage');

        //back end route

    Route::group(['middleware' => 'admin'],function(){
        // dashboard routes
        Route::get('dashboard',[dashboardController::class,'dashboard'])->name('dashboard');
        // settings routes
        Route::resource('settings',settingsController::class);
        // admins routes
        Route::resource('admins',adminsController::class);
        // hospitals routes
        Route::resource('hospitals',hospitalsController::class);

        //user profile 
        Route::get('/profile',[userProfileController::class,'profile_page'])->name('profile_page');
        Route::post('/profile/update/{id}',[userProfileController::class,'update_profile'])->name('update_profile');
        Route::post('/profile/update_password',[userProfileController::class,'update_password'])->name('update_password');

        // requstings route
        Route::get('/donate/request',[RequstingsController::class,'Donaterequstings'])->name('Donaterequstings');
        Route::get('/donate/reques/show/{id}',[RequstingsController::class,'showDonate'])->name('showDonate');

        Route::get('/blood/reques',[RequstingsController::class,'requstings'])->name('requstings');
        Route::get('/blood/reques/show/{id}',[RequstingsController::class,'showRequstings'])->name('showRequstings');


    });

     
});
 


require __DIR__.'/auth.php'; 
