@extends('Public.partials.header')
@section('AboutMe')
 <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                @foreach($about_me as $aboutme)
                    <h2 class="section-heading fadeInUp animated wow">{{$aboutme->title}}</h2>
                    @endforeach
                    <hr class="primary">
                </div>
            </div>
        </div>
         <div class="container">
            <div class="row">
            
            @foreach($about_me as $aboutme)
                <p>{{$aboutme->description}}</p>
                @endforeach
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-quote-right wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3 style="font-family: futura;">Edon Mullafetahu</h3>
                        <p class="text-muted">Architect</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop