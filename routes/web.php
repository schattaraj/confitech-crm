<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimeTracker;

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

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/registerSubmit',[RegisterController::class,"registration"])->name('registerSubmit');
Route::post('/loginSubmit',[LoginController::class,"index"])->name('loginSubmit');

Route::group(['middleware'=>['protectedAdminPage']],function(){ 
Route::get('/admin-dashboard',[LeaveController::class,'adminDashboard'])->name('admin-dashboard');
Route::get('/view-leave/{id}',[LeaveController::class,'viewLeave'])->name('view-leave');
Route::post('/update-leave',[LeaveController::class,'updateLeave'])->name('update-leave');
Route::get('/cancel-requests',[LeaveController::class,'cancelRequestsView'])->name('cancel-requests');
Route::get('/view-cancel-request/{id}',[LeaveController::class,'cancelRequestSingleView'])->name('view-cancel-request');
Route::post('/update-cancel-request',[LeaveController::class,'updateCancelRequest'])->name('update-cancel-request');
Route::get('/employee-leaves',[LeaveController::class,'employeeLeaves'])->name('employee-leaves');
Route::get('/add-employee-leave',[LeaveController::class,'addEmployeeLeave'])->name('add-employee-leave');
Route::post('/save-employee-leave',[LeaveController::class,'saveEmployeeLeave'])->name('save-employee-leave');
Route::get('/edit-employee-leave/{id}',[LeaveController::class,'editEmployeeLeave'])->name('edit-employee-leave');
Route::post('/update-employee-leave',[LeaveController::class,'updateEmployeeLeave'])->name('update-employee-leave');

Route::get('/employees',[LoginController::class,'EmployeeList'])->name('employees');
Route::get('/edit-employee/{id}',[LoginController::class,'EditEmployee'])->name('edit-employee');
Route::post('/update-employee',[LoginController::class,'UpdateEmployee'])->name('update-employee');

Route::get('/clients',[ClientController::class,'index'])->name('clients');
Route::get('/add-client',[ClientController::class,'addClient'])->name('add-client');
Route::get('/edit-client/{id}',[ClientController::class,'editClient'])->name('edit-client');
Route::post('/save-client',[ClientController::class,'saveClient'])->name('save-client');
Route::post('/update-client',[ClientController::class,'updateClient'])->name('update-client');

Route::get('/state-code',[ClientController::class,'stateCode'])->name('state-code');

Route::get('/projects',[ProjectController::class,'index'])->name('projects');
Route::get('/add-project',[ProjectController::class,'addProject'])->name('add-project');
Route::post('/save-project',[ProjectController::class,'saveProject'])->name('save-project');
Route::get('/edit-project/{id}',[ProjectController::class,'editProject'])->name('edit-project');
Route::post('/update-project',[ProjectController::class,'updateProject'])->name('update-project');

Route::get('/time-tracker',[TimeTracker::class,'index'])->name('time-tracker');
Route::post('/save-time-tracker',[TimeTracker::class,'saveTimeTracker'])->name('save-time-tracker');
});

Route::get('/login', function () {
    return view('backend.login');
});



Route::group(['middleware'=>['protectedUserPage']],function(){
    Route::get('/dashboard',[PageController::class,'index'])->name('admin');
Route::post('/leave-request',[LeaveController::class,'leaveRequest'])->name('leave-request');
Route::get('/apply-leave',[LeaveController::class,"index"])->name('apply-leave');
Route::post('/cancel-leave',[LeaveController::class,"cancelRequest"])->name('cancel-leave');
Route::get('/time-tracker',[TimeTracker::class,'index'])->name('time-tracker');
Route::post('/save-time-tracker',[TimeTracker::class,'saveTimeTracker'])->name('save-time-tracker');

});

Route::get('/logout',[LoginController::class,"logout"])->name('logout');
Route::get('/date',[LoginController::class,"date"]);

Route::get('update-database',function(){
$con = mysqli_connect('127.0.0.1','confitechhruser','confitechhruser','confitechhr');
$sql = "CREATE TABLE `time_trackers` (
    `id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `project_id` int(11) NOT NULL,
    `job_name` varchar(255) NOT NULL,
    `working_date` date NOT NULL,
    `start_time` time DEFAULT NULL,
    `end_time` time NOT NULL,
    `job_description` varchar(400) NOT NULL,
    `billable_status` varchar(255) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
     PRIMARY KEY (id)
  )";
// $sql = "INSERT INTO `projects` (`project_name`, `client_id`, `commercial`, `resources`, `description`, `document`, `created_at`, `updated_at`) VALUES
// ('Project1', 1, 'test1', 'test1', 'test1', 'http://localhost/crm-laravel/public/files/page1.png', '2023-10-13 08:12:57', '2023-10-13 08:12:57')";
$run = mysqli_query($con,$sql);
if($run){
    echo "success";
}
});