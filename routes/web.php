<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimeTracker;
use App\Http\Controllers\CustomMailController;
use App\Http\Controllers\WorkingHourController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TerraceInquiry;

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
Route::post('/client-status',[ClientController::class,'clientStatus'])->name('client-status');

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
Route::get('state-codes',function(){
    $con = mysqli_connect('127.0.0.1','confitechhruser','confitechhruser','confitechhr');
    $sql = "INSERT INTO `state_codes` (`id`, `state_name`, `state_code`) VALUES
    (1, 'JAMMU AND KASHMIR', 1),
    (2, 'HIMACHAL PRADESH', 2),
    (3, 'PUNJAB', 3),
    (4, 'CHANDIGARH', 4),
    (5, 'UTTARAKHAND', 5),
    (6, 'HARYANA', 6),
    (7, 'DELHI', 7),
    (8, 'RAJASTHAN', 8),
    (9, 'UTTAR PRADESH', 9),
    (10, 'BIHAR', 10),
    (11, 'SIKKIM', 11),
    (12, 'ARUNACHAL PRADESH', 12),
    (13, 'NAGALAND', 13),
    (14, 'MANIPUR', 14),
    (15, 'MIZORAM', 15),
    (16, 'TRIPURA', 16),
    (17, 'MEGHALAYA', 17),
    (18, 'ASSAM', 18),
    (19, 'WEST BENGAL', 19),
    (20, 'JHARKHAND', 20),
    (21, 'ODISHA', 21),
    (22, 'CHATTISGARH', 22),
    (23, 'MADHYA PRADESH', 23),
    (24, 'GUJARAT', 24),
    (25, 'DADRA AND NAGAR HAVELI AND DAMAN AND DIU (NEWLY MERGED UT)', 26),
    (26, 'MAHARASHTRA', 27),
    (27, 'ANDHRA PRADESH(BEFORE DIVISION)', 28),
    (28, 'KARNATAKA', 29),
    (29, 'GOA', 30),
    (30, 'LAKSHADWEEP', 31),
    (31, 'KERALA', 32),
    (32, 'TAMIL NADU', 33),
    (33, 'PUDUCHERRY', 34),
    (34, 'ANDAMAN AND NICOBAR ISLANDS', 35),
    (35, 'TELANGANA', 36),
    (36, 'ANDHRA PRADESH (NEWLY ADDED)', 37),
    (37, 'LADAKH (NEWLY ADDED)', 38),
    (38, 'OTHER TERRITORY', 97),
    (39, 'CENTRE JURISDICTION', 99)";
    $run = mysqli_query($con,$sql);
    if($run){
        echo "success";
    }
    });

    Route::get('/mail',function(){
Mail::send(new TerraceInquiry('subrata', 'schattaraj200@gmail.com', '9412345678', 'hello', 'C:\xampp\htdocs\crm-laravel\public\files\16219.png'));

return $success = "Thanks for the Inquiry, we will contact you soon";
        // Mail::send('emails.terraceInquiry', array(
        //     'name' => 'subrata',
        //     "email"=>'schattaraj200@gmail.com',
        //     "phone"=>'9412345678',
        //     "message"=>'hello' 
        // ), function($message){
        //     $message->from('subhankar@confitechsol.com','MFC');
        //     $message->to("schattaraj200@gmail.com", 'User')->subject('Your Tour Details');
        //     // $message->cc('geetimoy@confitechsol.com');
        // });
        //     // Inquiry::create($input);
        //     return $success = "Thanks for the Inquiry, we will contact you soon";
        //     // return redirect('/inquireNow')->with('success',$success);
       
    });

Route::get('/work',[WorkingHourController::class,'getTotalHours']);
Route::post('/validate-leave-form',[LeaveController::class,'validateLeaveForm'])->name('validate-leave-form');