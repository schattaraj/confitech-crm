<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CRM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
{{-- <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.8/index.global.min.js'></script> --}}
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('/public')}}/admintheme/custom/custom.css" />
    <link rel="stylesheet" href="public/assets/css/custom.css">
    <style>
      .input-switch{
	display: none;
}

.label-switch{
	display: inline-block;
	position: relative;
}

.label-switch::before, .label-switch::after{
	content: "";
	display: inline-block;
	cursor: pointer;
	transition: all 0.5s;
}

.label-switch::before {
    width: 3em;
    height: 1em;
    border: 1px solid #757575;
    border-radius: 4em;
    background: #888888;
}

.label-switch::after {
    position: absolute;
    left: 0;
    top: -12%;
    width: 1.5em;
    height: 1.5em;
    border: 1px solid #757575;
    border-radius: 4em;
    background: #ffffff;
}

.input-switch:checked ~ .label-switch::before {
    background: #00a900;
    border-color: #008e00;
}

.input-switch:checked ~ .label-switch::after {
    left: unset;
    right: 0;
    background: #00ce00;
    border-color: #009a00;
}

.info-text {
	display: inline-block;
}

.info-text::before{
	content: "Not active";
}

.input-switch:checked ~ .info-text::before{
	content: "Active";
}
.content{
  position: relative;
}
.content .loader{
  position:absolute;
  top:0;
  left:0;
  background-color:rgba(0,0,0,0.2);
  height:100%;
  width:100%;
  display:block;
  z-index: 9999;
  display:none;
  justify-content:center;
  align-items:center;
  color:green;
}
    </style>
</head>
<body class="light">
    <div class="admin-page">
        <div class="flex">
            <div class="left">
                <div class="logo">
                    <img src="public/assets/images/logo-sticky.png" alt="">
                </div>
                <ul>
                    <li class="nav-item @if($_SERVER['REQUEST_URI'] == route('admin-dashboard')) active @endif"><a href="{{route('home')}}"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                    @if(Session::get('admin-user'))
                    <li class="nav-item @if(url()->full() == route('cancel-requests')) active @endif"><a href="{{route('cancel-requests')}}"><i class="fa-solid fa-clock-rotate-left"></i> Cancel Requests</a></li>
                    <li class="nav-item @if(url()->full() == route('employee-leaves')) active @endif"><a href="{{route('employee-leaves')}}"><i class="fa-solid fa-clipboard"></i> Employee Leaves</a></li>
                    <li class="nav-item @if(url()->full() == route('employees')) active @endif"><a href="{{route('employees')}}"><i class="fa-regular fa-rectangle-list"></i> Employee List</a></li>
                    <li class="nav-item @if(url()->full() == route('clients')) active @endif"><a href="{{route('clients')}}"><i class="fa-solid fa-user"></i> Clients</a></li>
                    <li class="nav-item @if(url()->full() == route('projects')) active @endif"><a href="{{route('projects')}}"><i class="fa-brands fa-product-hunt"></i> Projects</a></li>
                    @else
                    <li class="nav-item  @if(url()->full() == route('apply-leave')) active @endif"><a href="{{route('apply-leave')}}"><i class="fa-solid fa-person-walking-arrow-right"></i> Current Leave</a></li>
                    <li class="nav-item @if(url()->full() == route('time-tracker')) active @endif"><a href="{{route('time-tracker')}}"><i class="fa-solid fa-clock-rotate-left"></i> Time Tracker</a></li>
                    @endif
                </ul>
            </div>
            <div class="right">
                <div class="head">
                    <a href="#">
                        <i class="fa-solid fa-bell"></i>
                        <div class="dropdown notification">
                           <div class="heading"><h5>Notifications</h5></div> 
                           <ul>
                            <li>Lorem ipsum dolor sit, amet consectetur </li>
                            <li>Lorem ipsum dolor sit, amet consectetur </li>
                            <li>Lorem ipsum dolor sit, amet consectetur </li>
                        </ul>
                        </div>
                        </a>
                    <a href="javascript:;">
                      <div class="user">                          
                          <img src="public/assets/images/avatar.png" alt="">
                          <div class="name">
                          <span>{{Session::get('name')}}</span>
                          <span>{{Session::get('email')}}</span>
                          {{-- <span>012121322</span> --}}
                        </div>
                      </div>
                      <div class="dropdown">
                        <!-- <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Dark theme</label>
                          </div> -->
                          <button class="btn btn-primary" onclick="logout()">Logout</button>
                      </div>  
                    </a>                   
                </div>
                <div class="content">
                    @yield('content')
                <div class="loader">Please Wait...</div>
            </div>
            </div>
        </div>
    </div>
    <div class="get_page">
        <div class="container">
          <button onclick="hideModal()" class="cross">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
  </button>
        <iframe src="" frameborder="0" width="100%" height="100%" style="margin: 0 auto"></iframe>
      </div>
      </div>
      <script src="{{url('/')}}/public/assets/js/jquery-3.6.0.js"></script>
      <script src="{{url('/')}}/public/bootstrap/js/bootstrap.js"></script>

      <script src="{{url('/')}}/public/assets/js/custom.js"></script>
      @stack('custom-scripts')
    <script> 
      function date_change(){
          let from_date = document.getElementById("from_date").value;
          let to_date = document.getElementById("to_date").value;
          let to_day = document.getElementById("to_day");
          if(from_date == to_date){ 
              to_day.setAttribute("disabled","true");
              to_day.value = "full"; 
              to_day.removeAttribute("required"); 
          }
          else{
            to_day.removeAttribute("disabled"); 
            to_day.setAttribute("required","");
          } 
        }
  
       async function logout(){
            const url = '{{url('logout')}}';
            try {
    const response = await fetch(url);
    // console.log("Download complete", response);
    location.reload();
  } catch (error) {
    console.error(`Download error: ${error.message}`);
  }
        }
  function updateStatus(){
    document.getElementById("status-form").submit();
  }
</script>
</body>
</html>