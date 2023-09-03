<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\leaveController;

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
Route::get('/', function () {
if(session()->get('admin-user')){
    return redirect('admin-dashboard');
}
elseif(session()->get('user')){
    return redirect('dashboard');
}
    return redirect('login');

})->name('home');

Route::post('/loginSubmit',[LoginController::class,"index"])->name('loginSubmit');

Route::group(['middleware'=>['protectedAdminPage']],function(){ 
Route::get('/admin-dashboard',[leaveController::class,'adminDashboard'])->name('admin-dashboard');
Route::get('/view-leave/{id}',[leaveController::class,'viewLeave'])->name('view-leave');
Route::post('/update-leave',[leaveController::class,'updateLeave'])->name('update-leave');
});

Route::get('/login', function () {
    return view('backend.login');
});


Route::post('/leave-request',[leaveController::class,'leaveRequest'])->name('leave-request');
Route::group(['middleware'=>['protectedUserPage']],function(){
    Route::get('/dashboard', function () {

        return view('backend.admin');
    
    })->name('admin');
Route::get('/apply-leave',[leaveController::class,"index"])->name('apply-leave');

});

Route::get('/logout',[LoginController::class,"logout"])->name('logout');