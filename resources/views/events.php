<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/spurf/default/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 04:57:58 GMT -->
    <?php include "head.php" ?>

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
            
        <?php $page ='events'; include "menu.php" ?>
        
        <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Meetings & Events</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Meetings & Events</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        
        <!-- Start Events Area -->
        <div class="events-area pt-50 pb-100">
            <div class="container">
                <div class="section-title">
                    <!-- <span>Events</span> -->
                    <!-- <h2>Events & Meeting</h2> -->
                </div>

                <div class="row justify-content-center ">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="icon">
                                <i class="flaticon-university"></i>
                            </div>
                            <h3>
                                Conference room
                            </h3>
                            <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod incididunt incididunt labore dolore.</p>
                            <button id="cr-tab" onclick="openEvent(event, 'cr')" class="btn btn-link services-btn tablinks">Read More <i class='bx bx-chevron-right'></i></button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="icon">
                                <i class="flaticon-work"></i>
                            </div>
                            <h3>
                                Terrace
                            </h3>
                            <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod incididunt incididunt labore dolore.</p>
                            <button  id="terrace-tab" class="btn btn-link tablinks services-btn" onclick="openEvent(event, 'terrace1')">Read More <i class='bx bx-chevron-right'></i></button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="icon">
                                <i class="flaticon-hotel"></i>
                            </div>
                            <h3>
                                MFC Events
                            </h3>
                            <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod incididunt incididunt labore dolore.</p>
                            <button id="mfce-tab" class="btn btn-link tablinks services-btn" onclick="openEvent(event, 'mfce')">Read More <i class='bx bx-chevron-right'></i></button>
                        </div>
                    </div>
                </div>
                <div class="MainContent">
                    <div id="cr" class="tabcontent">
                        <div class="row">
                            <div class="col-lg-9 col-md-12">
                                <h3>Conference Rooms</h3>
                                <img src="assets/images/solution/Workstation 1 -b.jpg" alt="image">
                                <img src="assets/images/solution/Workstation 1 -c.jpg" alt="image">
                                <img src="assets/images/solution/Workstation 1 -e.jpg" alt="image">
                                <img src="assets/images/solution/Advisor4-d.jpg" alt="image">
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="eventText">
                                    <button class="event-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Book online</button>
                                    <button class="event-btn">Online Tour</button>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <div id="terrace1" class="tabcontent">
                        <div class="row">
                            <div class="col-lg-9 col-md-12">
                                <h3>Terrace</h3>
                                
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <button class="event-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Book online</button>
                                <!-- <button class="btn btn-primary">Online Tour</button> -->
                            </div>
                        </div> 
                    </div>

                    <div id="mfce" class="tabcontent">
                        <div class="row">
                            <div class="col-lg-9 col-md-12">
                                <h3>MFC Events</h3>
                                
                            </div>
                            
                        </div> 
                    </div>
                            
                </div>
                
            </div>
                
        </div>
        <!-- End Events Area -->
        <!-- Modal Area -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Book a Tour</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                               
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNumber" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleInputName" aria-describedby="numberHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">

                                <div class="form-group">
                                <label for="exampleFormControlDate">Date:</label>
                                <input type="date" class="form-control" id="exampleFormControlDate">
                                </div>
                            </div>
                           
                            <!-- <button type="submit" class="btn event-btn">Submit</button> -->
                        
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        <button type="button" class="btn event-btn">Save changes</button>
                    </form>
                    </div>
                    </div>
                </div>
            </div>


        <!-- Start Footer Area -->
      <?php include "footer.php" ?>
      <script>
      function openEvent(evt, eventName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }
        document.getElementById(eventName).style.display = "block";
        document.getElementById(eventName + "-tab").classList.add("active");
        // evt.currentTarget.className += " active";
        }

// Get the element with id="defaultOpen" and click on it
/* document.getElementById("London-tab").click(); */
</script>
    </body>

<!-- Mirrored from templates.envytheme.com/spurf/default/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 04:58:01 GMT -->
</html>