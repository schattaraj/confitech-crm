@extends('component.layout')
@section('content')

<div class="preloader">
<div class="loader">
<div class="loader-box-1"></div>
<div class="loader-box-2"></div>
</div>
</div>


<?php $page ='directory';?>

@include("component.menu")

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
<h2 class="breadcrumb-title">Directory</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
<li class="active">Directory</li>
</ul>
</div>
</div>
</div>


    <div class="coworking-space-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-5 col-md-12">
                    <h2 class="site-title">Our Existing <span>Clients</span></h2>
                </div>
                <div class="col-lg-7 col-md-12 text-right">
                    <!-- Modal -->
                    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Our Policy</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p>The owner of this site (“Owner”) grants you a limited licence to display the contents of this site on your computer or other electronic device you use to access this site, and print, download and use the materials on this site solely for informational purposes or to transact with the Owner, provided that the contents of the site are not modified in any way and that all copyright and other notices are maintained. You agree not to, directly or indirectly, attempt or actually disrupt, impair or interfere with, alter or modify this site or any of its content.</p>
                                   
                                    <!-- <label class="custom-file-label" for="chooseFile">Select file</label> -->
                                   
                                
                                </div>
                                
                                <div class="modal-footer">
                                    @if(isset($clientPolicy) && $clientPolicy->status == "Pending")
                                    <div class="invalid-feedback" style="display: block">
                                       Signature Already Submitted. Status Pending
                                      </div>
                                    @elseif(isset($clientPolicy) && $clientPolicy->status == "Approved")
                                    <div class="valid-feedback" style="display: block">
                                        Signature Already Approved
                                       </div>
                                       @elseif(isset($clientPolicy) && $clientPolicy->status == "Reject")
                                       <div class="invalid-feedback" style="display: block">
                                        Your signature has been rejected. Please try again
                                       </div>
                                       <input type="file" name="file" class="custom-file-input btn btn-success" id="chooseFile">
                                    <button type="submit" class="btn btn-success">Upload</button>
                                    @else
                                    <input type="file" name="file" class="custom-file-input btn btn-success" id="chooseFile">
                                    <button type="submit" class="btn btn-success">Upload</button>
                                    @endif
                                    
                                    <a href="assets/img/sample.pdf"class="btn btn-primary" download>Download Notice</a>
                                    <button type= "button" class="btn btn-primary d-none" download>Status: Pending</button>
                                </div>
                                  
                                </div>
                            </form>
                            </div>
                        </div>
                        @if(isset($clientPolicy) && $clientPolicy->status == "Approved")
                        <div class="valid-feedback" style="display: block;font-size:24px;">
                          Now You are a partner.
                           </div>
                        @else
                        <a href="#" class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Be a Partner<i class="far fa-arrow-right"></i></a>
                        @endif                        
                        <p class="d-none">Thank You PartnerName</p>
                    </div>

                </div>
            </div>
                <div class="services-details-overview">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="services-details-image">
                               <a href="https://leftbrainwm.com/"  target="_blank"> <img src="assets/img/gallery/lbwm.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="services-details-desc">
                            <a href="https://leftbrainwm.com/"  target="_blank"><h3>Left Brain Wealth Management  </h3></a>
                                <p>
                                    Left Brain is dedicated to providing investment management and strategic wealth planning. Simply put, we strive to be our client’s trusted advisor. As an Investment advisory firm, our primary focus is to provide unbiased opinions that are designed to achieve long term investment results. 
                                </p>
                                <p>CEO- Noland Langford, MBA,CFP</p>
                                <p> URL - <a href="https://leftbrainwm.com/"  target="_blank">www.leftbrainwm.com</a> </p>
                            </div>
                        </div>

                        
                    </div>
                </div>

              
            </div>
    </div>

</main>

@endsection