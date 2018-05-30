<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{--fontawesome--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #fe_pro_detailpro_h {
            font-size: 16px;
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif


    <div class="container-fluid">

        <div class="container text-center">
            <div class="title m-b-md">
                Laravel
            </div>
        </div>

        @include('navbar1')


        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4" id="fe_pro_detailpro">
                    <div class="card one-product h-100 shadow-sm bg-white rounded">
                        <a href="sanpham-chitiet.html">
                            <img src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/resize/E3-270x270.jpg"
                                 alt="" style="width: 100%;height: auto;">
                        </a>
                        <div class="card-body text-center m-0 p-0">
                            <h5 class="title card-title m-1" id="fe_pro_detailpro_h">
                                <a href="sanpham-chitiet.html" class="text-dark">SAN PHAM </a>
                            </h5>
                            <span style="font-size: 16px;color: #f28300;"><b>Sale : $ 30.000đ</b></span><br>
                            <span style="font-size: 12px;color: #aaa7a7;text-decoration-line: line-through;"> $ 50.000 đ</span>


                        </div>
                        <div class="info card-footer bg-transparent border-0">
                            <p class="card-text mt-2" id="pbtn_add">
                                <button class="add-modal" value="">
                                    <i class="fas fa-shopping-cart"></i><b> ADD TO CART</b></button>

                                <a href="#">
                                    <i class="fab fa-buysellads"></i><b> BUY NOW</b></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4" id="fe_pro_detailpro">
                    <div class="card one-product h-100 shadow-sm bg-white rounded">
                        <a href="sanpham-chitiet.html">
                            <img src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/resize/E3-270x270.jpg"
                                 alt="" style="width: 100%;height: auto;">
                        </a>
                        <div class="card-body text-center m-0 p-0">
                            <h5 class="title card-title m-1" id="fe_pro_detailpro_h">
                                <a href="sanpham-chitiet.html" class="text-dark">SAN PHAM <br> 213213211</a>
                            </h5>
                            <span style="font-size: 16px;color: #f28300;"><b>Sale : $ 30.000đ</b></span><br>
                            <span style="font-size: 12px;color: #aaa7a7;text-decoration-line: line-through;"> $ 50.000 đ</span>


                        </div>
                        <div class="info card-footer bg-transparent border-0">
                            <p class="card-text mt-2" id="pbtn_add">
                                <button class="add-modal" value="">
                                    <i class="fas fa-shopping-cart"></i><b> ADD TO CART</b></button>

                                <a href="#">
                                    <i class="fab fa-buysellads"></i><b> BUY NOW</b></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4" id="fe_pro_detailpro">
                    <div class="card one-product h-100 shadow-sm bg-white rounded">
                        <a href="sanpham-chitiet.html">
                            <img src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/resize/E3-270x270.jpg"
                                 alt="" style="width: 100%;height: auto;">
                        </a>
                        <div class="card-body text-center m-0 p-0">
                            <h5 class="title card-title m-1" id="fe_pro_detailpro_h">
                                <a href="sanpham-chitiet.html" class="text-dark">SAN PHAM 213213211</a>
                            </h5>
                            <span style="font-size: 16px;color: #f28300;"><b>Sale : $ 30.000đ</b></span><br>
                            <span style="font-size: 12px;color: #aaa7a7;text-decoration-line: line-through;"> $ 50.000 đ</span>


                        </div>
                        <div class="info card-footer bg-transparent border-0">
                            <p class="card-text mt-2" id="pbtn_add">
                                <button class="add-modal" value="">
                                    <i class="fas fa-shopping-cart"></i><b> ADD TO CART</b></button>

                                <a href="#">
                                    <i class="fab fa-buysellads"></i><b> BUY NOW</b></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4" id="fe_pro_detailpro">
                    <div class="card one-product h-100 shadow-sm bg-white rounded">
                        <a href="sanpham-chitiet.html">
                            <img src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/resize/E3-270x270.jpg"
                                 alt="" style="width: 100%;height: auto;">
                        </a>
                        <div class="card-body text-center m-0 p-0">
                            <h5 class="title card-title m-1" id="fe_pro_detailpro_h">
                                <a href="sanpham-chitiet.html" class="text-dark">SAN PHAM 213213211</a>
                            </h5>
                            <span style="font-size: 16px;color: #f28300;"><b>Sale : $ 30.000đ</b></span><br>
                            <span style="font-size: 12px;color: #aaa7a7;text-decoration-line: line-through;"> $ 50.000 đ</span>


                        </div>
                        <div class="info card-footer bg-transparent border-0">
                            <p class="card-text mt-2" id="pbtn_add">
                                <button class="add-modal" value="">
                                    <i class="fas fa-shopping-cart"></i><b> ADD TO CART</b></button>

                                <a href="#">
                                    <i class="fab fa-buysellads"></i><b> BUY NOW</b></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
