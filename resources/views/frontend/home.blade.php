<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('') }}" />
    <meta name="description" content="Welcome to the most extraordinary Hotel In Colombia">
    <meta name="keywords" content="Hotel, Colombia, Hotel in Colombia, New Colombia Hotel">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="stylesheet" href="frontend/css/style2.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="frontend/css/mobile.css">
    <title>Web MU</title>
</head>

<body>
    <section class="page-one">
        <div id="wrapper">
            <div id="header">
                <div id="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <nav id="navbar">

                    <div class="" id="right">
                        <ul id="main-menu">
                            <li><a class="home" href="{{url('/')}}"><span style="font-size: 13px;">T</span>RANG CHỦ</a>
                            </li>
                            <li><a class="card" href="{{url('/')}}">NẠP THẺ</a></li>
                            <li><a class="downloadgame" href="{{url('/')}}">TẢI GAME</a></li>
                            <li><a class="fanpage" href="{{url('/')}}">FANPAGE</a></li>
                            <li><a class="register" href="{{url('/')}}"><span style="font-size: 13px;">Đ</span>ĂNG
                                    KÝ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </section>
    <section class="page-two">
        {{-- <div class="two-header">
            <div class="header-text-p2"> <span style="font-size: 2vw;">T</span>HÔNG TIN SERVER</div>
            <div>
                <img class="headerp1" src="frontend/img/shadow.png" alt="">
            </div>
            <div>
                <img class="headerp2" src="frontend/img/headerp2.png" alt="">
            </div>

        </div> --}}
        <div class="two-body">

            <img class="img-contain" src="frontend/img/test2.png" alt="">

        </div>
    </section>
    <section class="page-three">
        <div class="three1">
            <center><img class="img-three1" src="frontend/img/variant1.png"></center>
            <center><img class="infor-serve" src="frontend/img/inforserve.png"></center>

            <center><div class="row first-second">
                <div class="column">
                  <img src="frontend/img/first.png" style="width:20%;height:80%">
                </div>
                <div class="column">
                  <img src="frontend/img/second.png" style="width:20%;height:80%">
                </div>

              </div></center>
        </div>
        <center><img class="headerp3" style="width:90%; top:10vw;position: relative;" src="frontend/img/headerp3.png"></center>
        <div class="three2">
            <center><img class="img-three2" src="frontend/img/three2.png"></center>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="frontend/main.js"></script>

</html>
