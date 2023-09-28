
<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Material Dashboard 2 by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="g-sidenav-show bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        @extends('layout.admin_main')
    </aside>
    <div class="main-content position-relative max-height-vh-100 h-100">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Profile</h6>
          </nav>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid px-2 px-md-4">
        <div
          class="page-header min-height-300 border-radius-xl mt-4"
          style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')"
        >
          <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="row gx-4 mb-2">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                @if ($user->profile_photo)
                <img src="{{ asset('storage/'. $user->profile_photo) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />
                @else
                <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />
                @endif
               
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">{{ $user->username }}</h5>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="row">
              <div class="col-12 col-xl-6">
                <div class="card card-plain h-100">
                  <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Akun</h6>
                  </div>
                  <div class="card-body p-3">

                    {{-- <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6> --}}
                    <ul class="list-group">
                      <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nama Lengkap :</strong> &nbsp; {{ $user->name }}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Username :</strong> &nbsp; {{ $user->username }}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email :</strong> &nbsp; {{ $user->email }}</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">No HP :</strong> &nbsp; {{ $user->contact_phone }} </li>
                      <!-- <li class="list-group-item border-0 ps-0 pb-0">
                        <strong class="text-dark text-sm">Social:</strong> &nbsp;
                        <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                          <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                          <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                          <i class="fab fa-instagram fa-lg"></i>
                        </a>
                      </li> -->
                    </ul>
                   
                    {{-- ini form buat Profile User --}}
                    @section('content')

                    {{-- <form action="/profile/update" method="POST">
                            @csrf --}}
                            {{-- <input type="hidden" name="id" value="{{$user->id}}"> <br>

                            <label>Nama : </label>
                            <input type="text" name="name" value="{{$user->name}}"> <br>

                            <label>Username : </label>
                            <input type="text" name="username" value="{{$user->username}}"> <br>

                            <label>Email : </label>
                            <input type="text" name="email" value="{{$user->email}}"> <br>

                            <label>Password baru : </label>
                            <input type="text" name="password_baru" value=""> <br>

                            <label>Nomor HP : </label>
                            <input type="text" name="contact_phone" value="{{$user->contact_phone}}"> <br>

                            <label>Deskripsi : </label>
                            <textarea type="text" name="Deskripsi">{{$user->descript}}</textarea><br>

                            <label>Foto : </label>
                            <input  name="foto" value="{{$user->profile_photo_path}}"> <br>

                            <button type="submit" name="simpan" >Simpan</button> --}}
                            
{{-- 
                        </form> --}}
                            {{-- <div class="text-end">
                                <h4 class="mt-5"> Nama : {{ auth()->user()->name }}</h4>
                                <h4> Username : {{ auth()->user()->username }}</h4>
                                <h4> email : {{ auth()->user()->email }}</h4>
                                <h4> Nomer HP : {{ auth()->user()->contact_phone }}</h4>
                                <h4> Deskripsi : {{ auth()->user()->descript }}</h4>
                                <h4> Foto : {{ auth()->user()->profile_photo_path }}</h4>
                            </div> --}}
                        @endsection

{{-- <form action="/profile/update" method="POST">
    @csrf
    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Nama :</h6>
    <div class="input-group input-group-outline my-3">
      <label class="form-label"></label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>
    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Username</h6>
    <div class="input-group input-group-outline my-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" name="username" value="{{$user->username}}">
    </div>
    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Email : </h6>
    <div class="input-group input-group-outline my-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" name="email" value="{{$user->email}}">
    </div>
    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Password baru : </h6>
    <div class="input-group input-group-outline my-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" name="password_baru" value="">
    </div>
    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Deskripsi : </h6>
    <div class="input-group input-group-outline my-3">
        <label class="form-label"></label>
        <textarea type="text" name="Deskripsi" class="form-control">{{$user->descript}}</textarea>
        <input type="text" class="form-control" name="foto" value="{{$user->profile_photo_path}}">
    </div>
    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Foto : </h6>
    <div class="input-group input-group-outline my-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" name="foto" value="{{$user->profile_photo_path}}">
    </div>
    
    <button type="submit" name="simpan" >Simpan</button>
    <button  type="submit" name="simpan" class="btn btn-info">Simpan</button>
</form>  --}}

                    {{-- End Form buat profile user --}}
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-6">
                <div class="card card-plain h-100">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                      <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">Deskripsi</h6>
                      </div>
                      
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <p class="text-sm">
                        {{ auth()->user()->descript }}
                    </p>
                    <hr class="horizontal gray-light my-4" />
                  </div>
                  <div class="col-md-4 ">
                    {{-- <a href="javascript:;">
                      <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                    </a> --}}
                        <button type="button" class="btn btn-block btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Edit Profile</button>
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0">
                                    <h5 class="">Edit Profile</h5>
                                  </div>
                                  <div class="card-body">
                                    <form action="/profile/update" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" class="form-control" name="id" value="{{$user->id}}">
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Nama :</h6>
                                        <div class="input-group input-group-outline my-3">
                                          <label class="form-label"></label>
                                          <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                        </div>
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Username</h6>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label"></label>
                                            <input type="text" class="form-control" name="username" value="{{$user->username}}">
                                        </div>
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Email : </h6>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label"></label>
                                            <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                        </div>
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Password baru : </h6>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label"></label>
                                            <input type="text" class="form-control" name="password_baru" value="">
                                        </div>
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Deskripsi : </h6>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label"></label>
                                            <textarea type="text" name="deskripsi" class="form-control">{{$user->descript}}</textarea>
                                            
                                        </div>
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Foto : </h6>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label"></label>
                                            <input type="file" class="form-control" name="profile_photo" value="{{$user->profile_photo_path}}">
                                        </div>
                                        
                                        {{-- <button type="submit" name="simpan" >Simpan</button> --}}
                                        <button  type="submit" name="simpan" class="btn btn-info">Simpan</button>
                                    </form> 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between"></div>
        </div>
      </footer>
    </div>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5',
        };
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  </body>
</html>

