<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/cospace/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 05:00:17 GMT -->
<?php include "header.php" ?>
<body>

<div class="preloader">
<div class="loader">
<div class="loader-box-1"></div>
<div class="loader-box-2"></div>
</div>
</div>


<?php include "menu.php" ?>


<div class="search-popup">
<button class="close-search"><span class="far fa-times"></span></button>
<form action="#">
<div class="form-group">
<input type="search" name="search-field" placeholder="Search Here..." required>
<button type="submit"><i class="far fa-search"></i></button>
</div>
</form>
</div>

<main class="main">

    <div class="site-breadcrumb">
        <div class="site-breadcrumb-wrapper" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Agreement Length</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">Agreement Length</li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="agreement-area-two pt-100 pb-70">
        <div class="container">
            <div class="agreement-money">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <!-- <input type="radio" name="month" id="month" onclick="dateShow()"> -->
                        <label for="month">
                            <div class="single-box agreement">
                            
                                <h4>
                                    MONTHLY
                                </h4>
                                <ul>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $153 </li>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $306 </li>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $430 </li>
                                </ul>
                                <!-- <p> $150 </p> -->
                            </div>
                        </label>

                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <!-- <input type="radio" name="month" id="month6" onclick="dateShow()"> -->
                       <label for="month6">
                            <div class="single-box agreement">
                            
                                <h4>
                                    6 MONTHS
                                </h4>
                                <ul>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $153 </li>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $306 </li>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $430 </li>
                                </ul>
                                <!-- <p> $140 </p> -->
                            </div>
                        </label>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <!-- <input type="radio" name="month" id="month12" onclick="dateShow()"> -->
                        <label for="month12">
                            <div class="single-box agreement">
                            
                                <h4>
                                    12 MONTHS
                                </h4>
                                <ul>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $153 </li>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $306 </li>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $430 </li>
                                </ul>
                                <!-- <p> $130 </p> -->
                            </div>
                        </label>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <!-- <input type="radio" name="month" id="month24" onclick="dateShow()"> -->
                        <label for="month24">
                            <div class="single-box agreement">
                            
                                <h4>
                                    24 MONTHS
                                </h4>
                                <ul>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $153 </li>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $306 </li>
                                   <li><input type="radio" name="month" id="month" onclick="dateShow()"> $430 </li>
                                </ul>
                                <!-- <p> $120 </p> -->
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="date-area"><input type="text" id="datepicker" style="opacity:0;" onchange="dateChange()" onfocusout="removeHeight()"></div>
        </div>
    </div>
  



</main>




<?php include "footer.php" ?>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );

function dateShow(){
    document.getElementById('datepicker').focus();
    document.querySelector(".date-area").style.height="190px";
}
function removeHeight(){
    document.querySelector(".date-area").style.height="auto";
}
function dateChange(){
   document.getElementById("form-section").classList.remove("d-none");
}
</script>
</body>

<!-- Mirrored from live.themewild.com/cospace/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 05:00:17 GMT -->
</html>