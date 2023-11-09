<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRM - login</title>
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/assets/css/custom.css">
    
</head>
<body>
    <div class="form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 mx-auto login" id="formsection">
                  <div class="merge">
                    <div class="logo">
                        <img src="public/assets/images/logo-white.png" alt="">
                    </div>
                    {{-- <h3>
                        <a href="#" onclick="login(this)" class="lg">Login</a>
                        <a href="#" class="rg" onclick="register(this)">Register</a>
                    </h3> --}}
                    <div class="form login">
                        <form action="{{route('loginSubmit')}}" method="post">
                          @csrf
                          @if(Session('error'))
                          <div class="alert alert-danger" role="alert">
                           {{Session('error')}}
                         </div>                          
                         @endif
                         @if(Session('success'))
                         <div class="alert alert-success" role="alert">
                          {{Session('success')}}
                        </div>                          
                        @endif
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
                              @error('email')
                              <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="*****************">
                              @error('password')
                              <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                            <div class="form-group form-check">
                              <label class="form-check-label" for="exampleCheck1">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <span class="checkmark"></span>
                              Remember Me</label>
                              <a href="javascript:;" onclick="showForgotForm()">Forgot password ?</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <h5 class="text-white">Or</h5>
             <div class="flex link d-flex justify-content-center">Don't have an account? <a href="register" class="link ms-2"><b>Sign Up</b></a></div>
                            {{-- <a href="#" onclick="register()" class="link">Do not have an account ?</a> --}}
                
                        </form>
                    </div>
                    <div class="form register">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputname">Name</label>
                                  <input type="text" class="form-control" placeholder="Morger">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputname">Last Name</label>
                                  <input type="text" class="form-control" placeholder="Dior">
                                </div>
                              </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
                              
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*****************">
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2">
                              <label class="form-check-label mb-0" for="exampleCheck2">By registering you are agree to the <a href="#">Terms of Service</a> and <a href="">Privacy Poloicy</a></label>
                              <span class="checkmark"></span>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <h5>Or</h5>
                            <a href="#" onclick="login()" class="link">Already have an account ?</a>
                        </form>
                    </div>
                  </div>
              
        <div class="form forgot">
          <h3>Forgot Password</h3>
          <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
              </div>
              <button type="submit" class="btn btn-primary">Forgot Password</button>
              <h5>Or</h5>
              <a href="#" onclick="login()" class="link">Back to Login</a>
            </form>
      </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>