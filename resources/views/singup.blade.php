@extends('layout.layout')
@section('content')

    <head>
        <title>Singup.CHS.RMUTI</title>
    </head>
    <style>
        .box {
          
            background: linear-gradient(200deg, #003677 0%, #00609F 35%, #008BB8 50% , #00B7C1 100%);
            border-radius: 8px;
        }
    </style>

    <body>

        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://static.thairath.co.th/media/dFQROr7oWzulq5Fa3y94LpuEliaJ3WaBZtKWlmA2j5Wu4GUCYiZZcgmVsdiifIgsJJR.jpg');">
            <div class="inner  box" >
                <form action="">
                    <h3>Register</h3>
                    <div class="form">
                        <div class="form-wrapper">
                            <label for="">ชื่อ - นามสกุล</label>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>

                    </div><br>
                    <div class="form-wrapper">
                        <label for="">คณะ</label>
                        <select name="" id="" class="form-control">
                            <option value="1">คณะวิทยาศาสตร์และศิลปศาสตร์</option>
                            <option value="2">คณะบริหารธุรกิจ</option>
                            <option value="3">คณะวิศวกรรมศาสตร์และเทคโนโลยี</option>
                            <option value="4">คณะสถาปัตยกรรมศาสตร์และศิลปกรรมสร้างสรรค์</option>
                            <option value="5">สถาบันสหสรรพศาสตร์</option>
                        </select>
                        <i class="zmdi zmdi-chevron-down"></i>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-8 mb-2">

                            <div class="form-wrapper">
                                <label for="">สาขาวิชา</label>
                                <input type="text" class="form-control" placeholder="field of study">
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-wrapper">
                                <label for="">ชั้นปีที่</label>
                                <select name="" id="" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="6">7</option>
                                    <option value="6">8</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    
                    <a href="/singin" input type="button" class="box btn bg-gradient-info w-100 my-4 mb-2">Sign in</a>
                    
                </form>

            </div>

        </div>
       

        {{-- <div class="checkbox">
                    <label>
                        <input type="checkbox" > ยินยอมและปฏิบัติตามข้อปฏิบัติและเงื่อนไขการใช้งาน
                        <span class="checkmark" ></span>
                    </label>
                </div> --}}




        <script src="js/jquery-3.3.1.min.js"></script>

        <!-- DATE-PICKER -->
        <script src="vendor/date-picker/js/datepicker.js"></script>
        <script src="vendor/date-picker/js/datepicker.en.js"></script>

        <script src="js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
@endsection
