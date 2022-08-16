@extends('layout.layout')
@section('content')
<head><title>E-book.CHS.RMUTI</title>
    <head> 
        <link id="pagestyle" href="./assets/css/singin.css" rel="stylesheet" />   </head>
        <style>
            .box {
              
                background: linear-gradient(100deg, #003677 0%, #00609F 35%, #008BB8 50% , #00B7C1 100%);
                border-radius: 8px;
            }
        </style>
</head>

<body>


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
               {{--  <h2 class="">ระบบจองครุภัณฑ์</h2> --}}
                <!--ตัวอักษรระบบจอง-->
                <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4 ">
                    <div class="container-fluid  ">
                        <h2 class=" font-weight-bolder text-center mb-0 u-custom-font u-font-montserrat u-text u-text-default u-text-1">
                            ระบบจองครุภัณฑ์ สาขาเคมีประยุกต์ คณะวิทยาศาสตร์และศิลปศาสตร์
                        </h2>    
                </nav>
             
            </div>
        </div>
    </div>
    
    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://static.thairath.co.th/media/dFQROr7oWzulq5Fa3y94LpuEliaJ3WaBZtKWlmA2j5Wu4GUCYiZZcgmVsdiifIgsJJR.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-8 col-12 mx-auto" >
                        <br><br><br><br>
                        <div class="card z-index-0 fadeIn3 fadeInBottom" style="background-color:#cce6ffc2;">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2" >
                                <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1 box" >
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0" >Sign in</h4>
                                    <div class="row mt-3"></div>
                                </div>
                            </div>
                            <div class="card-body" >
                                <form role="form" class="text-start">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Name</label>
                                        <input type="name" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <div class="text-center">
                                        <a href="/home" input type="button"
                                            class="btn bg-gradient-info w-100 my-4 mb-2 box">Sign in</a>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        Don't have an account?
                                        <a href="/singup" class="text-info text-gradient font-weight-bold">Sign
                                            up</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">

                            </div>
                        </div>

            </footer>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </main>


    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

    <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>



    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>
@endsection
