@extends('frontend.template')
@section('about-active','active')
@section('content')
    <!-- page__title -start -->
    <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-135" data-background="{{asset('assets/img/images/beefcattle3-min.webp')}}" class="img-fluid" style="background-repeat: no-repeat; background-size:cover;">
            <div class="container">
                  <div class="row" >
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
                                          <span style="color: #fff;">{{__('csr')}}</span>
                                       </li>
                                    </ul>
                                 </nav> 
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fff!important;font-size:40px;">{{__('csr')}}</h3>
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
                  <span class="asub-title">- {{__('business')}} -</span>
                  <h3 class="tp-section-title tp-section-title-h3-d"  style="color:#9d6b34!important;">{{__('csr')}}</h3>
               </div>
               <div class="row mt-65">
                  <p class="text-dark" style="text-align: justify;">{{__('csr-body')}}</p>
               </div>
            </div>
         </div>
         <!-- team-area-end -->
         <!-- video-area-start -->
         <div class="video-area-ab pb-30">
            <div class="container">
               <div class="chosse-video">
                  <div class="chosse-video-bg position-relative">
                     <img src="{{asset('assets/img/images/C3-min.webp')}}" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth">
                     <!-- <a href="https://www.youtube.com/watch?v=L4CpMr5BNls" class="play-icon play-icon-ab popup-video"><i class="fas fa-play"></i></a> -->
                  </div>
               </div>
            </div>
         </div>
         <!-- video-area-end -->

         <!-- faq-area-start -->
         <div class="faq-area pt-0 pb-80" style="margin-top: 0px;">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6">
                     <div class="tp-section-wrap" style="margin-top: 140px;">
                        
                        <h3 class="tp-section-title" style="font-size:30px;color: #9d6b34!important;">{{__('principle')}}</h3>
                     </div>
                     <h3 style="color: #9d6b34!important;">{{__('Sustainable Agriculture1')}}</h3>
                     <div class="row">
                     
                     <h6 style="color: #9d6b34!important;" class="mt-3">{{__('Eco-Friendly Farming Practices')}}</h6>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Implementing sustainable')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Reducing the ecological')}}</span></li>
                                 
                              </ul>
                           </div>
                        </div>
                        <div class="row">
                        <h6 style="color: #9d6b34!important;" class="mt-3">{{__('Animal Walfare')}}</h6>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Ensuring the health')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Regular veterinary')}}</span></li>
                                 
                              </ul>
                           </div>
                        </div>
                        <h3 style="color: #9d6b34!important;" class="mt-3">{{__('Community Empowerment1')}}</h3>
                        <div class="row">
                     
                     <h6 style="color: #9d6b34!important;" class="mt-3">{{__('Local Employment')}}</h6>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Prioritizing the')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Providing training')}}</span></li>
                                 
                              </ul>
                           </div>
                        </div>
                        <div class="row">
                        <h6 style="color: #9d6b34!important;" class="mt-3">{{__('Women Empowerment')}}</h6>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Actively promoting')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Creating avenues')}}</span></li>
                                 
                              </ul>
                           </div>
                        </div>
                        <h3 style="color: #9d6b34!important;" class="mt-3">{{__('Environmental Stewardship1')}}</h3>
                        <div class="row">
                     
                     <h6 style="color: #9d6b34!important;" class="mt-3">{{__('Land Conservation:')}}</h6>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Implementing')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Exploring')}}</span></li>
                                 
                              </ul>
                           </div>
                        </div>
                        <div class="row">
                        <h6 style="color: #9d6b34!important;" class="mt-3">{{__('Water Conservation')}}</h6>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Adopting')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Participating')}}</span></li>
                                 
                              </ul>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                     <div  class="tp-section-wrap">
                        <h3 class="tp-section-title" style="font-size:30px;color: #9d6b34!important;">{{__('focus')}}</h3>
                     </div>
                     
                     <div class="row">
                     
                     <h3 style="color: #9d6b34!important;" class="mt-3">{{__('Sustainable Agriculture2')}}</h3>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Focus Area1')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Strategy1')}}</span></li>
                                 
                              </ul>
                           </div>
                        </div>
                        <div class="row">
                        <h3 style="color: #9d6b34!important;" class="mt-3">{{__('Community Empowerment2')}}</h3>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Focus Area2')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Strategy2')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Focus Area3')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Strategy3')}}</span></li>

                              </ul>
                           </div>
                        </div>
                        
                        <div class="row">
                     
                     <h3 style="color: #9d6b34!important;" class="mt-3">{{__('Environmental Stewardship2')}}</h3>
                           <div class="col-lg-12 d-flex justify-content-start"> 
                              <ul>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Focus Area4')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Strategy4')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Focus Area5')}}</span></li>
                                 <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;<span style="font-size:14px!important;color:#000!important;">{{__('Strategy5')}}</span></li>
                              </ul>
                           </div>
                        </div>
                        </div>     
                  </div>
               </div>
            </div>
            <div class="team-area pt-20 pb-30">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-start">
                  <h5 class="tp-section-title tp-section-title-h3-d"  style="font-weight:900;font-size:20px;color:#9d6b34!important;">{{__('MONITORING')}}</h5>
               </div>
               <div class="row mt-10">
                  <p class="text-dark" style="text-align: justify;">{{__('Regular')}}</p>
               </div>
            </div>
         </div>
         <div class="team-area pt-0 pb-90">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-start">
                  <h5 class="tp-section-title tp-section-title-h3-d"  style="font-weight:900;font-size:20px;color:#9d6b34!important;">{{__('COLLABORATION')}}</h5>
               </div>
               <div class="row mt-10">
                  <p class="text-dark" style="text-align: justify;">{{__('we')}}</p>
               </div>
            </div>
         </div>
         </div>
         <!-- faq-area-end -->
@endsection