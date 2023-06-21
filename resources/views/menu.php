        <!-- <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-9">
                        <ul class="top-header-content">
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:info@mfc.com"><span class="__cf_email__" >info@mfc.com</span></a>
                            </li>

                            <li>
                                <i class='bx bx-support'></i>
                                <a href="tel:012345678">(305) 777-3592 (305) 777-3595</a>
                            </li>

                            <li>
                                <i class='bx bx-map'></i>
                                1300 Brickell Bay Drive, Suite 500 Miami, FL 33131 
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-md-3">
                        <ul class="top-header-optional">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                                <a href="https://twitter.com/?lang=en" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a>
                                <a href="https://www.google.com/" target="_blank">
                                    <i class='bx bxl-google'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="assets/images/logoSmlMFC.png" class="black-logo" alt="image">
                                <img src="assets/images/logoSmlMFC.png" class="white-logo" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="assets/images/logoSmlMFC.png" class="black-logo" alt="image">
                            <img src="assets/images/logoSmlMFC.png" class="white-logo" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link <?php if($page=='home'){echo 'active';}?>">
                                        Home 
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">About Us <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('team')}}" class="nav-link <?php if($page=='team'){echo 'active';}?>">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="about.php" class="nav-link <?php if($page=='about'){echo 'active';}?>">Office Features</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Our Spaces <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('privateOffice')}}" class="nav-link <?php if($page=='privateOffice'){echo 'active';}?>">Private Offices </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('virtualOffice')}}" class="nav-link <?php if($page=='virtualOffice'){echo 'active';}?>">Virtual Office </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('conferenceRoom')}}" class="nav-link <?php if($page=='conferenceRoom'){echo 'active';}?>">Conference Room </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('terrace')}}" class="nav-link <?php if($page=='terrace'){echo 'active';}?>">Terrace</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Meetings & Events <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                        <a href="{{route('conferenceRoom')}}" class="nav-link <?php if($page=='conferenceRoom'){echo 'active';}?>">Conference Room </a>
                                        </li>
                                        <li class="nav-item">
                                        <a href="{{route('terrace')}}" class="nav-link <?php if($page=='terrace'){echo 'active';}?>">Terrace  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('mfcEvents')}}" class="nav-link <?php if($page=='mfcEvents'){echo 'active';}?>">MFC Events  </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('directory')}}" class="nav-link <?php if($page=='directory'){echo 'active';}?>">Directory</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('schedule-tour')}}" class="nav-link-tour">Schedule a tour</a>
                                </li>
                                <li>
                                    <a href="{{route('inquireNow')}}" class="event-btn">Inquire Now</a>
                                </li>
                               
                               

                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">MFC Events</a>
                                </li> -->
                                
                                
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">Important Information</a>
                                </li> -->

                                

                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Events 
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="events.html" class="nav-link">Events</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="events-booking.html" class="nav-link">Events Booking</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="events-details.html" class="nav-link">Events Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages 
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">About</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Services 
                                                <i class="bx bx-chevron-right"></i>
                                            </a>
        
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="services.html" class="nav-link">Services</a>
                                                </li>
        
                                                <li class="nav-item">
                                                    <a href="services-details.html" class="nav-link">Services Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="features.html" class="nav-link">Features</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Team</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">Pricing</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="gallery.html" class="nav-link">Gallery</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Account 
                                                <i class='bx bx-chevron-right'></i>
                                            </a>
        
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="login.html" class="nav-link">Login</a>
                                                </li>
        
                                                <li class="nav-item">
                                                    <a href="register.html" class="nav-link">Register</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="error-404.html" class="nav-link">404 Error</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog 
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">Blog</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
    
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li> -->
                            </ul>

                            <!-- <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="workspaces.html" class="default-btn">Add Your Space <i class='bx bx-plus'></i><span></span></a>
                                </div>

                                <div class="option-item">
                                    <a href="login.html" class="optional-btn">Login <i class='bx bxs-user'></i><span></span></a>
                                </div>
                            </div> -->
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="workspaces.html" class="default-btn">Add Your Space <i class='bx bx-plus'></i><span></span></a>
                                </div>

                                <div class="option-item">
                                    <a href="login.html" class="optional-btn">Login <i class='bx bxs-user'></i><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Modal -->
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
                            <div class="mb-3">
                            <label for="exampleInputCompanyName" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="exampleInputCompanyName" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                    <label for="exampleInputCompanyName" class="form-label">Interested in:</label><br>
                                    <input type="checkbox" id="virtual" name="fav_language" value="Virtual">
                                    <label for="virtual">Virtual Office</label>
                                    
                                    <input type="checkbox" id="meetingRoom" name="fav_language" value="MeetingRoom">
                                    <label for="meetingRoom">Meeting Room</label>
                                    <input type="checkbox" id="terrace" name="fav_language" value="Terrace">
                                    <label for="terrace">Terrace</label>
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