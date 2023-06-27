<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScheduleTourController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\FileUploadController;

use App\Http\Controllers\InquiryFormController;



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



Route::get('/adminLogin', function () {

    return view('auth.login');

})->name('adminLogin');

Route::group(['middleware'=>['protectedAdminPage']],function(){ 

    Route::get('/admin', function () {

        return view('backend.admin');

    })->name('admin');

    Route::get('/schedule-list', function () {

        return view('backend.schedule.schedule-list');

    })->name('schedule-list');

    Route::get('/client-policy',[FileUploadController::class,'clientPolicy'])->name('client-policy');
    Route::get('/edit-client-policy/{id}',[FileUploadController::class,'editClientPolicy'])->name('edit-client-policy');
    Route::post('/update-client-policy/{id}',[FileUploadController::class,'updateClientPolicy'])->name('update-client-policy');

});



Route::get('/login', function () {

    return view('login');

})->name('login');

Route::get('/logout',[LoginController::class,"logout"])->name('logout');

Route::post('/loginSubmit',[LoginController::class,"index"])->name('loginSubmit');

Route::get('/register', function () {

    return view('register');

})->name('register');
Route::post('/registerSubmit',[LoginController::class,"registration"])->name('registerSubmit');

Route::get('/', function () {

    return view('index');

})->name('home');

Route::get('/team', function () {

    return view('team');

})->name('team');

// Route::get('/about', function () {

//     return view('about');

// })->name('about');

Route::get('/features', function () {

    return view('features');

})->name('features');

// Route::get('/privateOffice', function () {

//     return view('privateOffice');

// })->name('privateOffice');

Route::get('/private-office', function () {

    return view('private-office');

})->name('private-office');

Route::get('/virtual-office', function () {

    return view('virtual-office');

})->name('virtual-office');  

Route::get('/conference-room', function () {

    return view('conference-room');

})->name('conference-room');

Route::get('/terrace', function () {

    return view('terrace');

})->name('terrace');

Route::get('/mfc-events', function () {

    return view('mfc-events');

})->name('mfc-events');

Route::get('/agreement-length', function () {

    return view('agreement-length');

})->name('agreement-length');

Route::get('/directory', [FileUploadController::class,'directory'])->name('directory');


Route::get('/schedule-tour', [ScheduleTourController::class,"index"])->name('schedule-tour');

Route::post('/schedule-tour', [ScheduleTourController::class,"checkSchedule"])->name('schedule-check');
Route::post('/schedule-add', [ScheduleTourController::class,"addSchedule"])->name('schedule-add');

Route::get('/choose-room', [ScheduleTourController::class,"chooseRoom"])->name('choose-room');
Route::get('/thank-you', [ScheduleTourController::class,"thankYou"])->name('thank-you');

Route::get('/inquireNow', function () {return view('contact');})->name('inquire-now');
Route::post('/inquireForm',[InquiryFormController::class,"storeInquiryForm"])->name('inquireForm');

Route::post('/fileUpload', [FileUploadController::class,"fUpload"])->name('fileUpload');