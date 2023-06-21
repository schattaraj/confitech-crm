<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/spurf/default/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 04:58:04 GMT -->
    <?php include "head.php"?>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
        <div class="header-information">Header Information</div>
        <?php $page ='ourSpaces'; include "menu.php" ?>
            <!-- Start Page Banner -->
            <div class="page-banner-area">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Virtual Office</h2>
                        
                        <ul class="pages-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Virtual Office</li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- End Page Banner -->
         <!-- Agreement Area -->
         <div class="features-area-two pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                    <input type="radio" name="month" id="month" onclick="dateShow()">
                        <label for="month">
                            <div class="single-box agreement">
                            
                                <h3>
                                    MONTHLY
                                </h3>
                                <!-- <p>
                                    $153<br>
                                    $306<br>
                                    $430
                                </p> -->
                                <p> $150 </p>
                            </div>
</label>

                    </div>

                    <div class="col-lg-3 col-sm-6">
                    <input type="radio" name="month" id="month6" onclick="dateShow()">
                       <label for="month6">
                            <div class="single-box agreement">
                            
                                <h3>
                                    6 MONTHS
                                </h3>
                                <!-- <p>
                                    $144<br>
                                    $289<br>
                                    $408

                                </p> -->
                                <p> $140 </p>
                            </div>
                        </label>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                    <input type="radio" name="month" id="month12" onclick="dateShow()">
                        <label for="month12">
                            <div class="single-box agreement">
                            
                                <h3>
                                    12 MONTHS
                                </h3>
                                <!-- <p>
                                    $137<br>
                                    $274<br>
                                    $386

                                </p> -->
                                <p> $130 </p>
                            </div>
                        </label>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                    <input type="radio" name="month" id="month24" onclick="dateShow()">
                        <label for="month24">
                            <div class="single-box agreement">
                            
                                <h3>
                                    24 MONTHS
                                </h3>
                                <!-- <p>
                                    $137<br>
                                    $274<br>
                                    $386

                                </p> -->
                                <p> $120 </p>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="date-area"><input type="text" id="datepicker" style="opacity:0;" onchange="dateChange()" onfocusout="removeHeight()"></div>
                <div id="form-section" class="d-none">
                <div class="row">
  <div class="col-md-6 mb-3">
    <input type="text" class="form-control" placeholder="Full Name" aria-label="Full Name">
  </div>
  <div class="col-md-6 mb-3">
    <input type="text" class="form-control" placeholder="Company Name" aria-label="Company Name">
  </div>
  <div class="col-md-6 mb-3">
    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
  </div>
  <div class="col-md-6 mb-3">
    <input type="text" class="form-control" placeholder="Number" aria-label="Number">
  </div>
  <div class="col-12 text-center">
<button class="event-btn">Submit</button>
  </div>
</div>
</div>
            </div>
        </div>
        <!-- Agreement Area -->

        <!-- Start Footer Area -->
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

<!-- Mirrored from templates.envytheme.com/spurf/default/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 04:58:04 GMT -->
</html>