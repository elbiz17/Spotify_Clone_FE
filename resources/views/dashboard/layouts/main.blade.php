<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/Circular/*">

   <script src="https://kit.fontawesome.com/5c2c5b6638.js" crossorigin="anonymous"></script>

    {{-- font spotify --}}
    <link href="//db.onlinewebfonts.com/c/1ccdd11fd9d1d81756c40d7acb17d0aa?family=Circular+Spotify+Tx+T+Light" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
    {{-- font spotify --}}

    {{-- aos animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- aos animation --}}

    {{-- icon fontawesome google --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- icon fontawesome google --}}


    {{-- bs 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Spotify Clone | {{ $title }}</title>
</head>
<body>

    <div class="wrapper_container d-flex">
        <!-- Sidebar-->
        <div class="sidebar d-none d-lg-block">
            <a href="/dashboard" class="navbar-brand px-3 mt-3  d-flex">
                <img src="/image/logo/logo.png" alt="" style="width: 8em">
            </a>
            <div class="list-group list-group-flush">
                <ul class="nav flex-column mt-3 ">
                    <li class="nav-item">
                        <a href="" class="nav-link align-items-center d-flex justify-content-start"><span class="material-symbols-outlined  me-2" style="font-size:1.8rem">
                            Home
                            </span>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start"><span class="material-symbols-outlined me-2" style="font-size:1.8rem">
                            Search
                            </span>Search</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start"><span class="material-symbols-outlined me-2" style="font-size:1.8rem">
                            library_music
                            </span>Your Library</a>
                    </li>
                </ul>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start"><span class="material-symbols-outlined me-2" style="font-size:1.8rem">
                            add_box
                            </span>Create Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link d-flex align-items-center justify-content-start"><span class="material-symbols-outlined me-2" style="font-size:1.8rem">
                            favorite
                            </span>Like Songs</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- sidebar --}}

        {{-- offcanvas --}}

        <aside>
            <div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color: #101010">
                <div class="offcanvas-header">
                    <button type="button" class=" ms-auto border-0" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: #101010">
                        <span class="material-symbols-outlined text-white" style="font-size:2.5rem">
                            close
                        </span>
                    </button>
                </div>
                <div class="offcanvas-body" style="margin-top: -35px" >
                    <ul class="navbar-nav px-3 py-0 mb-2 mb-lg-0 ms-auto text-white">
                        <li class="nav-item"><a class="nav-link fs-1" aria-current="page" href="/login" >Login</a></li>
                        <li class="nav-item"><a class="nav-link fs-1" href="/register">Sign Up</a></li>
                        <li class="nav-item"><span class="material-symbols-outlined mt-3">maximize</span></li>
                        <li class="nav-item li_canvas"><a class="nav-link fs-5">Premium</a></li>
                        <li class="nav-item li_canvas"><a href="" class="nav-link fs-5">Bantuan</a></li>
                        <li class="nav-item li_canvas"><a href="" class="nav-link fs-5">Download</a></li>
                        <li class="nav-item li_canvas"><a href="" class="nav-link fs-5">Privasi</a></li>
                        <li class="nav-item li_canvas" data-aos="fade-left"><a href="" class="nav-link fs-5">Persyaratan</a></li>
    
                    </ul>
                </div>
                </div>
            </aside>

        {{-- offcanvas --}}


        <!-- Page content wrapper-->
        <div class="page_wrapper" >
            <!-- Top navigation-->
            @auth
            <div class="header"> 
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#202020;height:70px!important">
                    <div class="container-fluid">
                        <a class="navbar-brand  text-white" href="#">
                            <img src="/image/logo/icon_sp4.png" class="d-lg-none d-md-block" alt="" class="img-fluid" style="width: 2em;">
                        </a>
                        <button class="navbar-toggle border-0  ms-auto  d-lg-none collapsed   collapsed" type="submit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"  style="background-color: #202020">
                        <div class="container" >
                            <span class="material-symbols-outlined text-white" style="font-size:2.5rem">
                                menu
                            </span>
                        </div>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto" >
                            <li class="nav-item align-items-center d-flex">
                                <a href="" class="nav-link btn btn-dark align-items-center d-flex  rounded-circle p-1 disabled" style="background: #000">
                                    <span class="material-symbols-outlined" style="font-size: 1.2em;margin-left:3px">
                                        arrow_back_ios
                                        </span>
                                </a>
                            </li>
                            <li class="nav-item align-items-center d-flex">
                                <a href="" class="nav-link btn btn-dark align-items-center d-flex rounded-circle p-1 disabled" style="background: #000">
                                    <span class="material-symbols-outlined " style="font-size: 1.2em">
                                        arrow_forward_ios
                                        </span></a>
                            </li>
                        </ul>
                        <ul class="dropdown navbar-nav  mb-2 mb-lg-0 ms-auto  text-white">
                            <li class="nav-item d-flex align-items-center">
                                <a href="" class="nav-link upgrade">Upgrade</a>
                            </li>
                            <li class="nav-item dropdown d-flex align-items-center">
                                <a class="nav-link dropdown-toggle text-white user_container " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-user fa-xl me-1"></i> {{ auth()->user()->username }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-md-end dropdown-menu-md-start" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="/dashboard">
                                      <i class="fa-solid fa-pager"></i> Dashboard </a>
                                   </li>
                                   <li><hr class="dropdown-divider"></li>
                                   <li>
                                      <form action="/logout" method="post">
                                         @csrf
                                         <button type="submit" class="dropdown-item"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
                                      </form>
                                   </li>   
                                </ul>
                              </li>    
                         
                        </ul>
                        
                        </div>
                    </div>
                </nav>
            </div>
            @else

            <div class="header"> 
                <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#101010">
                    <div class="container-fluid">
                        <a class="navbar-brand  text-white" href="#">
                            <img src="/image/logo/icon_sp4.png" class="d-lg-none d-md-block" alt="" class="img-fluid" style="width: 2em;">
                        </a>
                        <button class="navbar-toggle border-0  ms-auto  d-lg-none collapsed   collapsed" type="submit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"  style="background-color: #101010">
                        <div class="container" >
                            <span class="material-symbols-outlined text-white" style="font-size:2.5rem">
                                menu
                            </span>
                        </div>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto" >
                            <li class="nav-item align-items-center d-flex">
                                <a href="" class="nav-link btn btn-dark align-items-center d-flex  rounded-circle p-1 disabled">
                                    <span class="material-symbols-outlined" style="font-size: 1.2em;margin-left:3px">
                                        arrow_back_ios
                                        </span>
                                </a>
                            </li>
                            <li class="nav-item align-items-center d-flex">
                                <a href="" class="nav-link btn btn-dark align-items-center d-flex rounded-circle p-1 disabled">
                                    <span class="material-symbols-outlined " style="font-size: 1.2em">
                                        arrow_forward_ios
                                        </span></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto  text-white">
                         
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Premium</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">Support</a>
                           </li>
                   
                           <li class="nav-item">
                               <a class="nav-link ">Download</a>
                           </li>
                           <li class="nav-item">
                                <a href="" class=" nav-link disabled text-white">|</a>
                           </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Sign Up</a>
                            </li>

                            <li class="nav-item">
                                <a href="/login" class="nav-link btn btn-dark login">Log in</a>
                            </li>
                        
                        </ul>
                        
                        </div>
                    </div>
                </nav>
            </div>
            @endauth

            <main class="main" style="background-color:#202020">
                <!-- Page content-->
                    @yield('konten')
                
            </main>
            
        </div>
    </div>
    

    <script>
        function myFunction(x) {
          x.classList.toggle("change");
        }
        </script>
    {{-- aos animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            // once:true,
            duration:1200,
        });
    </script>
    {{-- aos animation --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>