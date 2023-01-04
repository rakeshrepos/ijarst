<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>
    <meta name="google-site-verification" content="ox5lpFR6fiBdaSUtZHn_Tx8ehIeug6nY17mJzB0JOkM" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IJARST Is An International Journal Intended Providing Researchers For Best Journal For PHD Thesis M Tech Paper Publication Journal and Scopus Elsevier Indexing Journal.">
    <meta name="author" content="">

    <title>IJARST | Best PHD & M.Tech Paper Publication Journal For PHD Thesis</title>

        <meta name="author" content="Ram Reddy">
	<meta name="city" content="Hyderabad">
	<meta name="country" content="India">
	<meta name="state" content="Hyderabad">
	<meta name="zip code" content="500032"> 
        <meta name="subject" content="Best Journal and Paper Publication">

<meta property="og:title" content="Best Journal For PHD Thesis & M Tech Paper Publication Journal| PHD Paper Publication Journal" />
        <meta property="og:description" content="IJARST Is An International Journal Intended For Researchers Providing Best Journal For PHD Thesis M Tech Paper Publication Journal and Scopus Elsevier Indexing Journal." />


    <!-- Bootstrap Core CSS -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon-social.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
<link rel="shortcut icon" href="{{asset('frontend/img/logo.png')}}" type="image/x-icon">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109686315-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109686315-2');
</script>

	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('frontend/img/logo1.jpg')}}" style="
        width: 100px;
        /* height: 84px; */
        margin: -43px 0px 0px -6px;
        "></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li 
                        @if (Request::segment(1) == 'review-process')
                        class="active"
                        @endif><a href="{{url('/review-process')}}">Review Process</a></li>
                        
                        <li @if (Request::segment(1) == 'paper-submission')
                        class="active"
                        @endif><a href="{{url('/paper-submission')}}">Submission</a></li>
                        
                        <li @if (Request::segment(1) == 'eboard')
                        class="active"
                        @endif><a href="{{url('/eboard')}}">E Board</a></li>
                        <li  @if (Request::segment(1) == 'join-e-board')
                        class="active"
                        @endif><a href="{{url('/join-e-board')}}">Join E-Board</a></li>
                         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Archives
                           <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                            @php
                            $volume =  DB::table('volumes')->Orderby('id','asc')->get();
                            @endphp
                            @foreach ( $volume as $item )
                           <li><a href="{{url('/downloads/'.$item->name)}}">{{$item->name}}</a></li>
                            @endforeach
                         </ul>
                       </li>
                       
                        <li @if (Request::segment(1) == 'contact')
                        class="active"
                        @endif><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header><!--/header-->

    


	