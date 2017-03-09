<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	@if( ! empty($seo) )
	<title>{{ $seo['title'] }}</title>
	<meta name="description" content="{{ $seo['description'] }}">
	@else
    <title>As-An - </title>
	<meta name="description" content="Window Fashion - изготовление, монтаж ролл-штор и жалюзи">
    @endif

	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/assets/css/fonts.css">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/media.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/slick.css">
  
    <link rel="stylesheet" href="/assets/swiper/css/swiper.min.css">

	<link rel="stylesheet" href="/css/laravel.css">

	<!-- Demo styles -->
    <style>
        
    .swiper-container {
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        height: 100%;
    }
    @media only screen and (max-width : 2400px) {
        .swiper-container {
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            height: 100%;
        }
    }
    @media only screen and (max-width : 2000px) {
        .swiper-container {
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
            height: 100%;
        }
    } 
    @media only screen and (max-width : 1700px) {
        .swiper-container {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            height: 100%;
        }
    } 
    @media only screen and (max-width : 1500px) {
        .swiper-container {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            height: 100%;
        }
    } 
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-button-prev{
        left: 0px; 
        background: url(/assets/img/swipe-left.png) center center no-repeat;
        background-size: cover;
    }
    .swiper-button-next{
        right: 0px; 
        background: url(/assets/img/swipe-right.png) center center no-repeat;
        background-size: cover;
    }
    </style>
	
  
</head>
<body>   

<div class="navigation">
        
        <a href="/about"><div class="nav"><p>О компании</p></div></a>
        <a href="/contacts"><div class="nav"><p>Контакты</p></div></a>
        <a href="/recipes"><div class="nav"><p>Рецепты</p></div></a>
        <a href="/"><div class="nav-logo"><img src="/assets/img/nav-logo.png" alt=""></div></a>
        <a href="/partners"><div class="nav"><p>Наши партнеры</p></div></a>
        <a href="/catalog"><div class="nav nav-fix"><p>Ассортимент товаров</p></div></a>
        
        <div class="burger">
            <div class="brg-1"></div>
            <div class="brg-2"></div>
            <div class="brg-3"></div>
            
            <div class="menu-mob">
                <a href="/"><div class="navi-mob"><p>Главная</p></div></a>
                <a href="/about"><div class="navi-mob"><p>О компании</p></div></a>
                <a href="/contacts"><div class="navi-mob"><p>Контакты</p></div></a>
                <a href="/recipes"><div class="navi-mob"><p>Рецепты</p></div></a>
                <a href="/partners"><div class="navi-mob"><p>Наши партнеры</p></div></a>
                <a href="/catalog"><div class="navi-mob"><p>Ассортимент товаров</p></div></a>
            </div>
        </div>
        
        <div class="mob-logo"><img src="/assets/img/nav-logo.png" alt=""></div>
        
        <div class="nav-mob">
            <p>п.Боралдай, ул Бостанова 2</p>
            <p>+7(727)387-65-60</p>
        </div>
    </div> 