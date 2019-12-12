<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--========= Basic Page Needs =========-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--========== Specific Meta ==========-->
    <meta name="description" content="REMA">

    <!--======== Page Title===========-->
    <title>REMA - Result Management and Analysis</title>
    
    <!--========== Favicons =========-->
    <link rel="shortcut icon" href="{{url('public/images/favicon.ico')}}">
    
    <!--======== Font icon Css ============-->
    <link href="{{url('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('public/css/themify-icons.css')}}" rel="stylesheet">
    
    <!--======= Bootstrap Main Css =============-->
    <link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!--====== Plugins Css ================-->
    <link href="{{url('public/css/plugins.css')}}" rel="stylesheet">

    <!--====== Custom CSS for themes =======-->
    <link href="{{url('public/css/style.css')}}" rel="stylesheet">
    
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <script src="{{url('public/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
    
      
            @yield('content')
        
</body>
</html>