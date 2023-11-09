{{-- @extends('layouts.app')

@section('content') --}}
<!doctype html>

<html lang="zxx">

<body>



    <!-- Mirrored from templates.envytheme.com/MFC/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 04:57:27 GMT -->

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    

    <link rel="stylesheet" href="{{asset('assets/css/all-fontawesome.min.css')}}">



    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">

    

    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

    

    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}"> --}}

     

    <!-- Nice Select CSS -->

     {{-- <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}"> --}}



    {{-- <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> --}}

    {{-- <!-- Bootstrap CSS --> 

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Animate CSS --> 

    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

    <!-- Meanmenu CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

    <!-- Boxicons CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">

    <!-- Flaticon CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">

    <!-- Odometer CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">

    <!-- Nice Select CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">

    <!-- Carousel CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <!-- Carousel Default CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <!-- Magnific Popup CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">

    <!-- Style CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Dark CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}">

    <!-- Responsive CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"> --}}



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">



     <!-- jQuery UI datepicker -->

     <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

     <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/assets/css/custom.css">

    <title>Confitech - Registration</title>



    <link rel="icon" type="image/png" href="assets/images/favicon.png">
<style>
    .otherPage .form-area .card-body label{
        margin-bottom:10px;
        text-transform: capitalize
    }
.required label:after {
  content:"*";color:red;
  margin-left: 4px;
  vertical-align: middle;
  font-size: 20px;
}
</style>
</head>
<body class="form">
    <div class="form-area" style="background-color: #fff">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="merge">
                <div class="logo">
                    <img src="public/assets/images/logo-white.png" alt="">
                </div>
            </div> -->
            <div class="card">
                <div class="card-header"><h4>{{ __('Registration') }}</h4></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('registerSubmit') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        @if(Session('error'))
                        <div class="alert alert-danger" role="alert">
                         {{Session('error')}}
                       </div>                          
                       @endif
                       <div class="row">
                        <div class="col-md-4">
                        <div class="row required mb-3">
                            <label for="name" class="">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="row required mb-3">
                            <label for="email" class="">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="invalid-feedback">
                                    Please enter your email address
                                  </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                                <label for="dob" class="" title="Date of Birth">{{ __('D.O.B') }}</label>
    
                                <div class="">
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required>
    
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                                <label for="mobile_number" class="" title="Phone Number">{{ __('Phone Number') }}</label>
    
                                <div class="col-md-12">
                                    <input id="mobile_number" type="number" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required>
    
                                    @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                                <label for="aadhaar_card" class="" title="Aadhaar Number">{{ __('Aadhaar Number') }}</label>
    
                                <div class="col-md-12">
                                    <input id="aadhaar_card" type="text" class="form-control @error('aadhaar_card') is-invalid @enderror" name="aadhaar_card" value="{{ old('aadhaar_card') }}" required>
    
                                    @error('aadhaar_card')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                                <label for="aadhaar_card_photo" class="" title="Upload Both side">{{ __('Aadhaar Card') }} <small>(Files allowed: png,jpg,jpeg,pdf)</small></label>
    
                                <div class="col-md-12">
                                    <input type="file" id="aadhaar_card_photo" class="form-control" name="aadhaar_card_photo[]" multiple required>
    
                                    @error('aadhaar_card_photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                                <label for="pan_number" class="" title="PAN Card">{{ __('PAN Card') }}</label>
    
                                <div class="col-md-12">
                                    <input id="pan_number" type="text" class="form-control @error('pan_number') is-invalid @enderror" name="pan_number" value="{{ old('pan_number') }}" required>
    
                                    @error('pan_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                                <label for="pan_photo" class="" title="PAN Card Photo">{{ __('PAN Card Photo') }} <small>(Files allowed: png,jpg,jpeg,pdf)</small></label>
    
                                <div class="col-md-12">
                                    <input type="file" class="form-control" name="pan_photo" required>
    
                                    @error('pan_photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                                <label for="photo" class="" title="Photo">{{ __('Profile Photo') }} <small>(Files allowed: png,jpg,jpeg)</small></label>
    
                                <div class="col-md-12">
                                    <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" required>
    
                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                                <label for="permanent_address" class="" title="Permanent address">{{ __('Permanent Address') }}</label>
    
                                <div class="col-md-12">
                                    <textarea id="permanent_address" type="text" class="form-control @error('permanent_address') is-invalid @enderror" name="permanent_address" value="{{ old('permanent_address') }}" required>{{ old('permanent_address') }}</textarea>
                                    @error('permanent_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row required mb-3">
                               <div class="d-flex">
                                <label for="residential_address" class="me-2" title="Residential address">{{ __('Residential Address') }}</label>
                                <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault" onchange="copyPermanentAddress(this)">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Same as Permanent address
                                </label>
                            </div>
                                <div class="col-md-12">
                                    <textarea id="residential_address" type="text" class="form-control @error('residential_address') is-invalid @enderror" name="residential_address" value="{{ old('residential_address') }}" required>{{ old('residential_address') }}</textarea>
                                    @error('residential_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="blood_group" class="" title="Blood Group">{{ __('Blood Group') }}</label>
    
                                <div class="col-md-12">
                                    <input id="blood_group" type="text" class="form-control @error('blood_group') is-invalid @enderror" name="blood_group" value="{{ old('blood_group') }}" required/>
                                    
                                    @error('blood_group')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="emergency_contact" class="" title="Emergency Contact Number">{{ __('Emergency Contact') }}</label>
    
                                <div class="col-md-12">
                                    <input id="emergency_contact" type="text" class="form-control @error('emergency_contact') is-invalid @enderror" name="emergency_contact" value="{{ old('emergency_contact') }}" required>
    
                                    @error('emergency_contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="emergency_contact_person" class="" title="Emergency Contact Person Name">{{ __('Emergency Contact Person') }}</label>
    
                                <div class="col-md-12">
                                    <input id="emergency_contact_person" type="text" class="form-control @error('emergency_contact_person') is-invalid @enderror" name="emergency_contact_person" value="{{ old('emergency_contact_person') }}" required>
    
                                    @error('emergency_contact_person')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="emergency_contact_person_relationship" class="" title="Emergency Contact relationship with that person">{{ __('Emergency Contact Person relationship with that person') }}</label>
    
                                <div class="col-md-12">
                                    <input id="emergency_contact_person_relationship" type="text" class="form-control @error('emergency_contact_person_relationship') is-invalid @enderror" name="emergency_contact_person_relationship" value="{{ old('emergency_contact_person_relationship') }}" required>
    
                                    @error('emergency_contact_person_relationship')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="marital_status" class="" title="Marital Status">{{ __('Marital Status') }}</label>
    
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="married" value="married">
                                        <label class="form-check-label" for="married">
                                            Married
                                        </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="unmarried" value="unmarried">
                                        <label class="form-check-label" for="unmarried">
                                            Unmarried
                                        </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="others" value="others">
                                        <label class="form-check-label" for="others">
                                            Others
                                        </label>
                                      </div>
                                    {{-- <input id="marital_status" type="text" class="form-control @error('marital_status') is-invalid @enderror" name="marital_status" value="{{ old('marital_status') }}" required> --}}
    
                                    @error('marital_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="gender" class="" title="Gender">{{ __('Gender') }}</label>
    
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="others" value="others">
                                        <label class="form-check-label" for="others">
                                            Others
                                        </label>
                                      </div>
                                    {{-- <input id="marital_status" type="text" class="form-control @error('marital_status') is-invalid @enderror" name="marital_status" value="{{ old('marital_status') }}" required> --}}
    
                                    @error('marital_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="password" class="">{{ __('Password') }}</label>
    
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                       </div>
                     
                       

                   

                        <div class="row mb-0">
                            <div class="col-md-3 offset-md-9">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="mt-4 flex link d-flex justify-content-center">Already have an account? <a href="login" class="link ms-2"><b>Sign In</b></a></div>
            
        </div>
    </div>
</div>
    </div>
{{-- @endsection --}}

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('public/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('public/assets/js/authentication/form-1.js')}}"></script>
<script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
function copyPermanentAddress(e){
    let permanent_address = document.getElementById("permanent_address");
    let residential_address = document.getElementById("residential_address");
    if(e.checked){
        residential_address.value=permanent_address.value;
    }
}
</script>
</body>
</html>
