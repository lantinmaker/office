<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lantinmaker 兰亭梅客</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loaders.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body class="home-page">

<!-- HEADER start-->
@include('layouts._header')
<!-- HEADER end-->

<!-- CONTENT start-->
@yield('content')
<!-- CONTENT end-->

<!-- FOOTER start-->
@include('layouts._footer')
<!-- FOOTER end-->

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).ready(function(){

        $(window).scroll(function(){
            if($(window).scrollTop() > 0){
                $(".navbar-default").removeClass('navbar-bg-out').addClass('navbar-bg-in'); // 开始淡入
            } else{
                $(".navbar-default").removeClass('navbar-bg-in').addClass('navbar-bg-out'); // 开始淡出
            }


        });
    });
</script>
</body>
</html>