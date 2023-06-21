<header class="header">
    <div class="main-navigation">
    <nav class="navbar navbar-expand-lg">
    <div class="container custom-nav">
    <a class="navbar-brand" href="{{route('home')}}">
    <img src="assets/img/logo/logoSmlMFC.png" alt="logo">
    </a>
    <div class="mobile-menu-right">
    <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
    </button>
    </div>
    <div class="collapse navbar-collapse" id="main_nav">
    <ul class="navbar-nav ms-auto">
    <li class="nav-item ">
    <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="{{route('home')}}" >Home</a>
    
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if($page=='team'){echo 'active';}?>" href="#" data-bs-toggle="dropdown">About Us</a>
            <ul class="dropdown-menu fade-up">
                <li><a class="dropdown-item " href="{{route('team')}}">Team</a></li>
                <li><a class="dropdown-item" href="{{route('features')}}">Office Features</a></li>
            </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Our Spaces </a>
        <ul class="dropdown-menu fade-up">
            <li><a class="dropdown-item" href="{{route('private-office')}}">Private Offices</a></li>
            <li><a class="dropdown-item" href="{{route('virtual-office')}}">Virtual Office</a></li>
            <li><a class="dropdown-item" href="{{route('conference-room')}}">Conference Room</a></li>
            <li><a class="dropdown-item" href="{{route('terrace')}}">Terrace</a></li>
            
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Meetings & Events</a>
            <ul class="dropdown-menu fade-up">
            <li><a class="dropdown-item" href="{{route('conference-room')}}">Conference Room</a></li>
            <li><a class="dropdown-item" href="{{route('terrace')}}">Terrace</a></li>
            <li><a class="dropdown-item" href="{{route('mfc-events')}}">MFC Events</a></li>
        </ul>
    </li>
    <li class="nav-item <?php if($page=='home'){echo 'active';}?>"><a class="nav-link" href="{{route('directory')}}">Directory</a></li>
    
    
    
    <!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
    <ul class="dropdown-menu fade-up">
    <li><a class="dropdown-item" href="blog.html">Blog</a></li>
    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
    </ul>
    </li> -->
    <li class="nav-item"><a class="nav-link" href="{{route('inquire-now')}}">Inquire Now</a></li>
    </ul>
    <div class="header-nav-right">
    <!-- <div class="header-nav-search">
    <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
    </div> -->
    <div class="header-btn">
    <a href="{{route('schedule-tour')}}" class="theme-btn">Schedule a tour<i class="far fa-arrow-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    </nav>
    </div>
    </header>