@extends('Public.partials.AboutMe')
@section('portfolio')


<style>
        
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('/edonmullafetahu/styles/slider/js/img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }

        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01 .p            (normal)
        .jssort01 .p:hover      (normal mouseover)
        .jssort01 .p.pav        (active)
        .jssort01 .p.pdn        (mousedown)
        */
        .jssort01 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 72px;
            height: 72px;
        }
        
        .jssort01 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('/edonmullafetahu/styles/slider/js/img/t01.png') -800px -800px no-repeat;
            _background: none;
        }
        
        .jssort01 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 68px;
            height: 68px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 70px;
            height: 70px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p.pdn .c {
            background-position: 50% 50%;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
        }
        
        * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 72px;
            height /**/: 72px;
        }
        
    </style>
<!-- CATEGORITE -->
<section id="portfolio" class="bg-light-gray" >

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4 col-sm-6 portfolio-item fadeInUp animated wow   ">
               
                    <a href="/#3D-Modeling-and-Rendering" class="portfolio-link" data-toggle="modal" aria-hidden="false">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{$category->thumbnail_image}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$category->name}}</h4>
                        <p class="text-muted bounce animated" style="visibility: visible;animation-delay: 0.3s;animation-name: bounceIn;">Modeling</p>
                    </div>
                </div>
                @endforeach                   
            </div>
        </div>
    </section><!-- /CATEGORITE -->

    <div class="portfolio-modal modal fadeInDown animated" id="3D-Modeling-and-Rendering" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-content" style="background-color: #222">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr" style="background-color: #fff;">
                    <div class="rl" style="background-color: #fff;">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <!-- Page Header -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="color: #fed136;border-bottom: 1px solid #fed136; font-family: Ailerons;">3D Modeling and Rendering
                                <small style="color:#e0e0e0;font-family: futura;">Secondary Text</small>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                 
                 <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#portfolioModal23" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/360x300" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    
     <div class="portfolio-modal modal fade" id="portfolioModal23" tabindex="-2" role="dialog" aria-hidden="false">
        <div class="modal-content" style="background-color: #222;">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr" style="background-color:#fff">
                    <div class="rl" style="background-color:#fff">
                    </div>
                </div>
            </div>
            <div class="container" style="width:90%">
                <div class="row">
                <!-- Page Header -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="color: #ebd305; font-family:Ailerons; border-bottom: 1px solid #ebd305">Page Heading
                                <small style="    color: #e0e0e0;font-family: futura;">Secondary Text</small>
                            </h1>
                        </div>
                    </div>

                         <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; float:left; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #222;">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('/edonmullafetahu/styles/js/slider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/01.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-01.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/02.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-02.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/03.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-03.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/04.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-04.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/05.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-05.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/06.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-06.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/07.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-07.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/08.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-08.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/09.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-09.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/10.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-10.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/11.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-11.jpg" />
                            </div>
                            <div data-p="144.50" style="display: none;">
                                <img data-u="image" src="/edonmullafetahu/styles/js/slider/img/12.jpg" />
                                <img data-u="thumb" src="/edonmullafetahu/styles/js/slider/img/thumb-12.jpg" />
                            </div>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
                            <!-- Thumbnail Item Skin Begin -->
                            <div data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div class="w">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                    </div>
                                    <div class="c"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
                        
                    </div>
                     <div class="row">

           
            <div class="col-md-4" style="margin-left: 130px;margin-top: 5%;">
                <h3 style="color: #fff; font-family: Ailerons; border-bottom: 2px solid #e0e0e0; text-align: left;">Project Description</h3>
                <p style="color:#fff; text-align: left;" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3 style="color: #fff; font-family: Ailerons; border-bottom: 2px solid #e0e0e0; text-align: left;">Project Details</h3>
                <ul style="color: white; font-family: futura; list-style-type: none; text-align:left;">
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

                     <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header" style="color: #e0e0e0;font-family: Ailerons; font-size: 35px;">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

       <script type="text/javascript" src="/edonmullafetahu/styles/js/slider/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/edonmullafetahu/styles/js/slider/js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <script>
            $(document).ready(function() {

              if(window.location.href.indexOf('#3D-Modeling-and-Rendering') != -1) {
                $('#3D-Modeling-and-Rendering').modal('show');             
            }
            });
     </script>   
         
     
     </script>                 
@stop
