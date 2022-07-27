@extends('login.layouts.main')

@section('konten')


<section class="">
   <div class="container-fluid col-md border-bottom text-center">
      <div class="py-4"><img src="/image/logo/logo_login.png" class="img-fluid" style="width: 11rem" alt=""></div>
   </div>
   <p class="text-center pt-5"><strong>To continue, log in to Spotify.</strong></p>
   <div class=" login_container">
         <a href="" class="btn_login btn btn-primary " style="background-color: #3b5998 !important; color:#fff !important"><i class="fa-brands fa-facebook-f px-2"></i>  CONTINUE WITH FACEBOOK</a>
         <a href="" class="btn_login btn btn-primary"  style="background-color: #000 !important; color:#fff !important"><i class="fa-brands fa-apple px-2"></i>  CONTINUE WITH APPLE</a>
         <a href="" class="btn_login btn btn-primary"  style="background-color: #fff !important;"><i class="fa-brands fa-google px-2"></i>  CONTINUE WITH GOOGLE</a>
         <a href="" class="btn_login btn btn-primary"  style="background-color: #fff !important;">CONTINUE WITH PHONE NUMBER</a>
         <div class="or mx-auto">
            <p class="text-center  ">OR</p>
         </div>
         <div class="divider"></div>   
   </div>
   <div class="form_container">

      <form action="" class="form">
         <div class="mb-1">
            <label for="username"><strong>What's your email?</strong></label>
            <input type="text" name="username" id="username" class="form-control mt-2 mb-2" placeholder="Email address or username"> 

            <label for="username"><strong>Confirm your email</strong></label>
            <input type="text" name="username" id="username" class="form-control mt-2 mb-2" placeholder="Email address or username"> 

            <label for="username"><strong>Create a password</strong></label> 
            <input type="text" name="username" id="username" class="form-control mt-2 " placeholder="Password"> 

            <label for="username"><strong>What should we call you?</strong></label> 
            <input type="text" name="username" id="username" class="form-control mt-2 " placeholder="Password"> 
         </div>
         <h6>Forgot your password?</h6>
         <div class="row align-items-center">
            <div class="col-md mt-2">
               <input type="checkbox" name="" id=""> remember me
            </div>
            <div class="col-md-3 d-flex justify-content-end mt-2">
               <a href="" class="btn btn-success sign_in"><span>LOG IN</span></a>
            </div>
         </div>
         <div class="divider_login"></div>   
         <div class="py-2">
            <h4 class="text-center fw-bold">Don't have an account?</h4>
         </div>
         <div class="d-flex justify-content-center ">
            <a href="" class="btn   flex-fill sign_up">LOG IN UP FOR SPOTIFY</a>
         </div>
   
      </form> 
   </div>
</section>




@endsection