<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScheduleTourController;

use App\Http\Controllers\LoginController;



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

});



Route::get('/login', function () {

    return view('login');

})->name('login');



Route::post('/loginSubmit',[LoginController::class,"index"])->name('loginSubmit');



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

Route::get('/directory', function () {

    return view('directory');

})->name('directory');

Route::get('/schedule-tour', [ScheduleTourController::class,"index"])->name('schedule-tour');

Route::post('/schedule-tour', [ScheduleTourController::class,"checkSchedule"])->name('schedule-check');
Route::post('/schedule-add', [ScheduleTourController::class,"addSchedule"])->name('schedule-add');

Route::get('/choose-room', [ScheduleTourController::class,"chooseRoom"])->name('choose-room');
Route::get('/thank-you', [ScheduleTourController::class,"thankYou"])->name('thank-you');

Route::get('/inquireNow', function () {

    return view('contact');

})->name('inquire-now');