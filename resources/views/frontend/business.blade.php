@extends('frontend.template')
@section('business','active')
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
                                          <span style="color: #fff;">{{__('our-business')}}</span>
                                       </li>
                                    </ul>
                                 </nav> 
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fff!important;font-size:40px;">{{__('our-business')}}</h3>
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
                  <h3 class="tp-section-title tp-section-title-h3-d"  style="color:#9d6b34!important;">{{__('cultivate')}}</h3>
               </div>
               <div class="row mt-65">
                  <p class="text-dark" style="text-align:justify;">{{__('cultivate-body')}}</p>
               </div>
            </div>
         </div>
         <!-- team-area-end -->
         <!-- video-area-start -->
         <div class="video-area-ab pb-30">
            <div class="container">
               <div class="chosse-video">
                  <div class="chosse-video-bg position-relative">
                     <img src="{{asset('assets/img/images/4-min.webp')}}" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth">
                     <!-- <a href="https://www.youtube.com/watch?v=L4CpMr5BNls" class="play-icon play-icon-ab popup-video"><i class="fas fa-play"></i></a> -->
                  </div>
               </div>
            </div>
         </div>
         <!-- video-area-end -->

         <!-- faq-area-start -->
            <div class="team-area pt-20 pb-30">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-start">
                  <h5 class="tp-section-title tp-section-title-h3-d"  style="font-weight:900;font-size:20px;color:#9d6b34!important;">{{__('startup')}}</h5>
               </div>
               <div class="row mt-10">
                  <p class="text-dark" style="text-align: justify;">{{__('startup-body')}}</p>
               </div>
            </div>
         </div>
         <div class="team-area pt-0 pb-30">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-start">
                  <h5 class="tp-section-title tp-section-title-h3-d"  style="font-weight:900;font-size:20px;color:#9d6b34!important;">{{__('embrassing')}}</h5>
               </div>
               <div class="row mt-10">
                  <p class="text-dark" style="text-align: justify;">{{__('embrassing-body')}}</p>
               </div>
            </div>
         </div>

         <div class="team-area pt-0 pb-30">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-start">
                  <h5 class="tp-section-title tp-section-title-h3-d"  style="font-weight:900;font-size:20px;color:#9d6b34!important;">{{__('innovation')}}</h5>
               </div>
               <div class="row mt-10">
                  <p class="text-dark" style="text-align: justify;">{{__('innovation-body')}}</p>
               </div>
            </div>
         </div>
         <div class="video-area-ab pb-30">
            <div class="container">
               <div class="chosse-video">
                  <div class="chosse-video-bg position-relative">
                     <img src="{{asset('assets/img/images/9-min.png')}}" alt= "Harmonious Livestock Grazing in Our Sustainable Farm">
                     <!-- <a href="https://www.youtube.com/watch?v=L4CpMr5BNls" class="play-icon play-icon-ab popup-video"><i class="fas fa-play"></i></a> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="team-area pt-0 pb-30">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-start">
                  <h5 class="tp-section-title tp-section-title-h3-d"  style="font-weight:900;font-size:20px;color:#9d6b34!important;">{{__('future')}}</h5>
               </div>
               <div class="row mt-10">
                  <p class="text-dark" style="text-align: justify;">{{__('future-body')}}</p>
               </div>
            </div>
         </div>
         <div class="team-area pt-0 pb-30">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-start">
                  <h5 class="tp-section-title tp-section-title-h3-d"  style="font-weight:900;font-size:20px;color:#9d6b34!important;">{{__('strategic')}}</h5>
               </div>
               <div class="row mt-10">
                  <p class="text-dark" style="text-align: justify;">{{__('strategic-body')}}</p>
               </div>
            </div>
         </div>
         
         <!-- faq-area-end -->
         <div class="collaborative-area pt-55 pb-30" style="background-color: whitesmoke;">
         <span class="asub-title grace-span" style="color: #ecb41c;text-align:center;">- {{__('location')}} </span>
         <h3 class="tp-section-title text-center" style="color: #9d6b34!important;">{{__('project-location')}}</h3>
         <div class="container" style="margin-top: 100px;">

            <div class="row">
               <div class="col-xl-6 col-lg-6">
                  <div class="text-center">
                     <img src="{{asset('assets/img/images/location1-min.webp')}}" style="width:750px;height: 420px;" alt="Empowering Communities - Impactful Agricultural Programs" class="img-fluid mb-2">
                     <h6 style="font-weight: 900;">Location : Latitude:20.697663,Longitude: 95.792921</h6>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="text-center">
                     <img src="{{asset('assets/img/images/location2-min.webp')}}" style="width:750px;height: 418px;" alt="Cultivating Change - Myanmar Farm Initiatives" class="img-fluid mb-2">
                     <h6 style="font-weight: 900;">Location : Latitude:20.728874,Longitude: 95.781719</h6>
                  </div>
               </div>
            </div>


         </div>

      </div>
@endsection