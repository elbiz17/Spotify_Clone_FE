@extends('login.layouts.main')


@section('konten')


<section class="">
   <div class="container-fluid col-md border-bottom text-center">
      <div class="py-4">
         <a href="/">
            <img src="/image/logo/logo_login.png" class="img-fluid" style="width: 11rem" alt=""></div>
         </a>
      </div>
   </div>
   <p class="text-center pt-5"><strong>To continue, log in to Spotify.</strong></p>
   @if (session('loginError'))
      <div class="container_alert">
         <div class="alert alert-danger alert-dismissible fade show loginError" >
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
  
   @endif
   <div class=" login_container">
         <a href="" class="btn_login btn btn-primary " style="background-color: #3b5998 !important; color:#fff !important"><i class="fa-brands fa-facebook-f px-2"></i>  CONTINUE WITH FACEBOOK</a>
         <a href="" class="btn_login btn btn-primary"  style="background-color: #000 !important; color:#fff !important"><i class="fa-brands fa-apple px-2"></i>  CONTINUE WITH APPLE</a>
         <a href="" class="btn_login btn btn-primary"  style="background-color: #fff !important;"><i class="fa-brands fa-google px-2"></i>  CONTINUE WITH GOOGLE</a>
         <a href="" class="btn_login btn btn-primary"  style="background-color: #fff !important;">CONTINUE WITH PHONE NUMBER</a>
         <div class="or mx-auto">
            <p class="text-center  ">OR</p>
         </div>
         <div class="divider_signIn"></div>   
         
   </div>
   <div class="form_container">
      <form action="/login" method="post" class="form">
         @csrf
         <div class="mb-1">
            <label for="username"><strong>Email address or username</strong></label>
            <input type="text" name="username" id="username" class="form-control mt-2 mb-2 @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Email address or username" autofocus required> 
            @error('username')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
            @enderror
         {{-- </div>
         <div> --}}
            <label for="password"><strong>Password</strong></label> 
            <input type="password" name="password" id="password" class="form-control mt-2 @error('password') is-invalid @enderror" placeholder="Password" required> 
            @error('password')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>
         <h6>Forgot your password?</h6>
         <div class="row align-items-center">
            <div class="col-md mt-2">
               <input type="checkbox" name="" id=""> remember me
            </div>
            <div class="col-md-3 d-flex justify-content-end mt-2">
               <button type="submit" class="btn btn-success sign_in"><span>LOG IN</span></button>
            </div>
         </div>
         <div class="divider_login"></div>   
         <div class="py-2">
            <h4 class="text-center fw-bold">Don't have an account?</h4>
         </div>
         <div class="d-flex justify-content-center ">
            <a href="/register" class="btn   flex-fill sign_up">SIGN UP FOR SPOTIFY</a>
         </div>
   
      </form> 
   </div>
</section>


@endsection