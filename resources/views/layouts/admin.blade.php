<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</head>
<body class="light">
    <div class="admin-page">
        <div class="flex">
            <div class="left">
                <div class="logo">
                    <img src="public/assets/images/logo-sticky.png" alt="">
                </div>
                <ul> 
                    <li><a href="{{route('home')}}">Dashboard</a></li>
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
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Dark theme</label>
                          </div>
                          <button class="btn btn-primary" onclick="logout()">Logout</button>
                      </div>  
                    </a>                   
                </div>
                <div class="content">
                    @yield('content')
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
    <script>   document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("from_date").value="";
        let date = new Date();
        let month = date.getMonth()+1;
        let day = date.getDate();
        if(month.toString().length < 2){
            month = "0"+month;
        }
        if(day.toString().length < 2){
            day = "0"+day;
        }
        document.getElementById("from_date").setAttribute("min",date.getFullYear()+'-'+month+'-'+day);
        document.getElementById("to_date").setAttribute("min",date.getFullYear()+'-'+month+'-'+day);
        console.log(date.getFullYear()+'-'+month+'-'+day);
      });
      function date_change(){
          let from_date = document.getElementById("from_date").value;
          let to_date = document.getElementById("to_date").value;
          if(from_date == to_date){
              console.log("true");
              document.getElementById("day").classList.remove("d-none");
          }
          else{
            document.getElementById("day").classList.add("d-none");
          }
            // console.log("from_date",from_date);
            // console.log("to_date",to_date);
        }

       async function logout(){
            const url = 'http://localhost/crm-laravel/';
            try {
    const response = await fetch(url+'logout');
    // console.log("Download complete", response);
    location.reload();
  } catch (error) {
    console.error(`Download error: ${error.message}`);
  }
        }
</script>
</body>
</html>