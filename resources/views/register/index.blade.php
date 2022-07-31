@extends('login.layouts.main')

@section('konten')


<section class="">
   <div class="container-fluid col-md text-center">
      <div class="py-4">
         <a href="/">
            <img src="/image/logo/logo_login.png" class="img-fluid" style="width: 11rem" alt=""></div>
         </a>
   </div>
   <strong><h3 class="text-center py-3 fw-bold h2">Sign up for free to start listening.</h3></strong>
   <div class=" login_container">
         <a href="" class="btn_register btn btn-primary " style="background-color: #3b5998 !important; color:#fff !important"><i class="fa-brands fa-facebook-f px-2"></i>  CONTINUE WITH FACEBOOK</a>
         {{-- <a href="" class="btn_login btn btn-primary"  style="background-color: #000 !important; color:#fff !important"><i class="fa-brands fa-apple px-2"></i>  CONTINUE WITH APPLE</a> --}}
         <a href="" class="btn_register btn btn-primary"  style="background-color: #fff !important;"><i class="fa-brands fa-google px-2"></i>  CONTINUE WITH GOOGLE</a>
         {{-- <a href="" class="btn_login btn btn-primary"  style="background-color: #fff !important;">CONTINUE WITH PHONE NUMBER</a> --}}
         <div class="or mx-auto">
            <p class="text-center  ">OR</p>
         </div>
         <div class="divider_signUp"></div>   
   </div>
   <div class="form_container">

      <form action="/register" method="post" class="form">
         @csrf
         <div class="mb-1">
            <label for="email"><h6>What's your email?</h6></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email."> 
            <span><a href="">Use phone number instead.</a></span> <br>

            <label for="email2" class="pt-3"><h6>Confirm your email</h6></label>
            <input type="email" name="email2" id="email2" class="form-control  mb-2" placeholder="Enter your email again"> 

            <label for="password"><h6 class="pt-3">Create a password</h6></label> 
            <input type="password" name="password" id="password" class="form-control " placeholder="Create a password"> 

            <label for="username"><h6 class="pt-3">What should we call you?</h6></label> 
            <input type="text" name="username" id="username" class="form-control  " placeholder="Enter a profile name">
            <span>This appears on your profile.</span> <br>
            
            <label for="date"><h6 class="pt-3">What's your date of birth?</h6></label> <br>
            <input type="date" name="date" id="date" class="form-control" >

            <label for="username"><h6 class="pt-3">What's your gender?</h6></label> <br>
            <div class="d-flex flex-column">
               <div>
                  <input type="radio" class="me-2 " name="male" id="male">
                  <label for="" class="me-3">Male</label>
         
                  <input type="radio" class="me-2" name="female" id="female">
                  <label for="" class="me-3">Female</label>
           
                  <input type="radio" class="me-2" name="nonbinary" id="nonbinary">

                  <label for="" class="me-3">Non-binary</label>
               </div>
            </div>
            <div class=" mt-4">
               <div class="d-inline-flex align-items-start " style="">
                  <input type="checkbox"  class="me-2 mt-1"> 
                  <label for="username"  style="font-size: 1em;">I would prefer not to receive marketing messages from Spotify</label>
               </div>
               <div class="d-flex align-items-start mt-2" style="">
                  <input type="checkbox"  class="me-2 mt-1"> 
                  <label for="username"  style="font-size:1em;" >Share my registration data with Spotify's content providers for marketing purposes.</label>
               </div>
            </div>
         </div>
         <div class="mt-3">
            <p class="text-center" style="font-size: 0.8em">By clicking on sign-up, you agree to Spotify's Terms and Conditions of Use.</p>
            <p class="text-center" style="font-size: 0.8em">To learn more about how Spotify collects, uses, shares and protects your personal data, please see Spotify's Privacy Policy.</p>
         </div>
         <div class="d-flex justify-content-center mb-3" style="margin-top: -15px">
            <button type="submit" class="btn btn-success text-dark fw-bold" style="background-color: #1ed760 !important;width:150px;line-height:36px;border-radius:30px;border:none"><span>SIGN UP</span></button>
         </div>
         <p class="text-center">Have an account? <a href="/login">Log in</a></p>
   
      </form> 
   </div>
</section>




@endsection