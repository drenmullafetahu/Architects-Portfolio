@extends('Public.partials.default')
@section('header')

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll fadeIn animated wow"style="animation-delay: 1s" href="#page-top">Edon <span style="color: #fde201">Mullafetahu</span></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll fadeInUp animated "style="animation-delay: 0.3s" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll fadeInUp animated "style="animation-delay: 0.4s" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll fadeInUp animated "style="animation-delay: 0.5s" href="#portfolio">Portfolio</a>
                    </li>                    
                    <li>
                        <a class="page-scroll fadeInUp animated "style="animation-delay: 0.6s" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <header id="myCarousel" class="carousel slide">
    
      <!--   <span class="show-work"> <a href="#"> Show Work </a></span>-->

        <!-- Indicators -->
        <ol class="carousel-indicators" >

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        
        <div class="carousel-inner" >

            <div class="item active" >
                <!--<span class="show-work"></span>
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url(/edonmullafetahu/styles/img/banner/ex3.jpg);"></div>
                <div class="carousel-caption">
                <div class="banner-title-placeholder">
                <span class="banner-title fadeInLeft animated" style="animation-delay: 0.4s wow">HI, I am a TITLE </span>
                <span class="inspiration-quote fadeInLeft animated">Inspirational quote ktu blla <span><a href="#3D-Modeling-and-Rendering" data-toggle="modal">#3D Modeling</a></span></span>
                </div>
                   
                </div>
            </div>
            
            <div class="item">
                 <!--<span class="show-work"></span>
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(/edonmullafetahu/styles/img/banner/ex2.jpg);"></div>
                <div class="carousel-caption">
                <div class="banner-title-placeholder">
                <span class="banner-title fadeInLeft animated" style="animation-delay: 0.4s wow">HI, I am a TITLE </span>
                <span class="inspiration-quote fadeInLeft animated">Inspirational quote ktu blla blla <span><a href="#" data-toggle="modal">#Architecture</a></span></span>
                </div>
                   
                </div>
            </div>
            <div class="item">
                 <!--<span class="show-work"></span>
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(/edonmullafetahu/styles/img/banner/ex1.jpg);"></div>
                <div class="carousel-caption">
                <div class="banner-title-placeholder">
                <span class="banner-title fadeInLeft animated" style="animation-delay: 0.4s wow">HI, I am a TITLE </span>  
                <span class="inspiration-quote fadeInLeft animated">Inspirational quote ktu blla bllablla <span><a href="#" data-toggle="modal">#Prototyping</a></span></span>
                </div>                    
                </div>
            </div>
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control " href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    

@stop














