@extends('frontend.template')
@section('about-active','active')
@section('content')
<!-- page__title -start -->
<div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-135" data-background="{{asset('assets/img/beefcattle3.jpg')}}" class="img-fluid" style="background-repeat: no-repeat; background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__title-content text-center">
                    <div class="page_title__bread-crumb">
                        <nav aria-label="breadcrumb">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul>
                                    <li>
                                        <a href="{{url('/',app()->getLocale())}}"><span style="color: #fff;">{{__('home')}}</span></a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span style="color: #fff;">{{__('partnership')}}</span>
                                    </li>
                                </ul>
                            </nav>
                        </nav>
                    </div>
                    <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fff!important;">{{__('partnership')}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page__title -end -->

<!-- team-area-start -->
<div class="team-area pt-110 pb-90">
    <div class="container">
        <div class="tp-section-wrap tp-section-wrap-h3 text-center">
            <span class="asub-title">- {{__('partner')}} -</span>
            <h3 class="tp-section-title tp-section-title-h3-d" style="color:#9d6b34!important;">{{__('empower')}}</h3>
        </div>
        <div class="row mt-65">
            <h3 class="text-dark mb-3">{{__('partner-subtitle')}}</h3>
            <p class="text-dark" style="text-align: justify;">{{__('partner-body')}}</p>
        </div>
    </div>
</div>
<!-- team-area-end -->
<!-- video-area-start -->
<div class="video-area-ab pb-0">
    <div class="container">
        <div class="chosse-video">
            <div class="chosse-video-bg position-relative">
                <img src="{{asset('assets/img/20.png')}}" alt="Cultivating Change - Myanmar Farm Initiatives">
                
                <!-- <a href="https://www.youtube.com/watch?v=L4CpMr5BNls" class="play-icon play-icon-ab popup-video"><i class="fas fa-play"></i></a> -->
            </div>
        </div>
    </div>
</div>
<!-- video-area-end -->

<!-- faq-area-start -->
<div class="faq-area pt-0 pb-60" style="margin-top: 0px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 mb-3">
                <div class="tp-section-wrap" style="margin-top: 140px;">

                    <h3 class="tp-section-title" style="font-size:30px;color: #9d6b34!important;">{{__('objective')}}</h3>
                </div>
                <h3 style="color: #9d6b34!important;">{{__('utilizing')}}</h3>
                <div class="row">

                    <h6 style="color: #9d6b34!important;" class="mt-3"></h6>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('harnessing')}}</span></li>
                        </ul>
                    </div>
                </div>

                <h3 style="color: #9d6b34!important;" class="mt-3">{{__('community-involvment')}}</h3>
                <div class="row">

                    <h6 style="color: #9d6b34!important;" class="mt-3"></h6>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('encouraging')}}</span></li>

                        </ul>
                    </div>
                </div>
                
                <h3 style="color: #9d6b34!important;" class="mt-3">{{__('shared-Growth')}}</h3>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('cultivating')}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
        <div class="col-xl-12 col-lg-12 mb-3">
                <div class="tp-section-wrap">
                    <h3 class="tp-section-title" style="font-size:30px;color: #9d6b34!important;">{{__('program-structure')}}</h3>
                </div>

                <div class="row">

                    <h3 style="color: #9d6b34!important;" class="mt-3">{{__('joint-animal')}}</h3>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('drawing')}}</span></li>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('conducting')}}</span></li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <h3 style="color: #9d6b34!important;" class="mt-3">{{__('collaborative')}}</h3>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('facilitating')}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">

                    <h3 style="color: #9d6b34!important;" class="mt-3">{{__('empowering')}}</h3>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('local')}}</span></li>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('providing')}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">

                    <h3 style="color: #9d6b34!important;" class="mt-3">{{__('sustainable')}}</h3>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('enhancing')}}</span></li>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('program')}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">

                    <h3 style="color: #9d6b34!important;" class="mt-3">{{__('market')}}</h3>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('facilitating-market')}}</span></li>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('generated')}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-xl-6 col-lg-6">
                <div class="tp-section-wrap" style="margin-top: 10px;">

                    <h3 class="tp-section-title" style="font-size:30px;color: #9d6b34!important;">{{__('benifit')}}</h3>
                </div>
                <h3 style="color: #9d6b34!important;">{{__('finicial-growth')}}</h3>
                <div class="row">

                    <h6 style="color: #9d6b34!important;" class="mt-3"></h6>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('stakeholder')}}</span></li>
                        </ul>
                    </div>
                </div>

                <h3 style="color: #9d6b34!important;" class="mt-3">{{__('skill')}}</h3>
                <div class="row">

                    <h6 style="color: #9d6b34!important;" class="mt-3"></h6>
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('participants')}}</span></li>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('enhanced-skill')}}</span></li>

                        </ul>
                    </div>
                </div>
                
                <h3 style="color: #9d6b34!important;" class="mt-3">{{__('community')}}</h3>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-start">
                        <ul>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('fostering')}}</span></li>
                            <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('strengthening')}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-area pt-10 pb-30">
    <div class="container">
        <div class="tp-section-wrap tp-section-wrap-h3 text-start">
            <h5 class="tp-section-title tp-section-title-h3-d" style="font-weight:900;font-size:20px;color:#9d6b34!important;">{{__('conclusion')}}</h5>
        </div>
        <div class="row mt-10">
            <p class="text-dark" style="text-align: justify;">{{__('conclusion-body')}}</p>
        </div>
    </div>
</div>
</div>
<!-- faq-area-end -->
@endsection

   
    
    
    
   
   
   
    
    




