<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\ImageCropperController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function() {
//     $exitCode = Artisan::call('cache:clear');
//     $exitCode = Artisan::call('route:clear');
//     $exitCode = Artisan::call('config:clear');
//      return 'what you want';
// });
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::view('/','home');
Route::view('/register','reg_form');
Route::view('/FAQ','questions');
Route::view('/discount_policy','discount_policy');
Route::view('/Privacy','privacy_policy');
Route::view('/typing_test','typing.typing_test');

Route::view('/works/ani1','students_works.ani1');
Route::view('/works/ani2','students_works.ani2');
Route::view('/works/karina','students_works.karina');
Route::view('/works/suren1','students_works.suren1');
Route::view('/works/suren2','students_works.suren2');
Route::view('/works/suren3','students_works.suren3');
Route::view('/works/vazgen2','students_works.vazgen2');
Route::view('/works/vazgen1','students_works.vazgen1');
Route::view('/works/areg1','students_works.areg1');
Route::view('/works/areg2','students_works.areg2');
Route::view('/works/areg3','students_works.areg3');

Route::post('/do_register', [MainController::class,'register']);
Route::post('/sendmail', [MainController::class,'sendmail']);

Route::post('/subscribe', [MainController::class,'subscribe']);

/////CV ROUTES

Route::post('/cv_register', [CVController::class,'register']);
Route::post('/cv_login', [CVController::class,'login']);

Route::get('/my_cv/{id}',[CVController::class,'show_cv']);
Route::get('/create',[CVController::class,'show_cv_form'])->middleware(Localization::class);
Route::post('/add_skill', [CVController::class,'add_skill']);
Route::post('/del_skill',[CVController::class,'del_skill']);
Route::post('/update_skill',[CVController::class,'update_skill']);

Route::post('/add_education',[CVController::class,'add_education']);
Route::post('/update_education', [CVController::class,'update_education']);
Route::post('/del_education',[CVController::class,'del_education']);

Route::post('/add_language',[CVController::class,'add_language']);
Route::post('/del_language', [CVController::class,'del_language']);
Route::post('/update_language', [CVController::class,'update_language']);

Route::post('/add_experiance', [CVController::class,'add_experiance']);
Route::post('/update_experiance',[CVController::class,'update_experiance']);
Route::post('/del_experience',[CVController::class,'del_experience']);

Route::post('/do_form',[CVController::class,'do_form']);

Route::post('/add_image',[ImageCropperController::class,'add_image']);




