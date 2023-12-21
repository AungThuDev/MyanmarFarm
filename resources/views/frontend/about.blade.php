@extends('frontend.template')
@section('about-active','active')
@section('content')
<main>
   <!-- page__title -start -->
   <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-135" data-background="{{asset('assets/img/beefcattle3.jpg')}}" class="img-fluid" style="width:100%;background-repeat: no-repeat; background-size:cover;">
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
                                 <span style="color: #fff;">{{__('about-us')}}</span>
                              </li>
                           </ul>
                        </nav>
                     </nav>
                  </div>
                  <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fff!important;">{{__('about-us')}}</h3>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- page__title -end -->

   <!-- about-area-start -->
   <div class="about-area pt-120 pb-110">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6">
               <div class="tp-section-wrap">
                  <span class="asub-title grace-span" style="color: #ecb41c;">- {{__('AboutMyanmarFarm')}} - </span>
                  <h3 class="tp-section-title" style="color: #9d6b34!important;"> {{__('AboutMyanmarFarm')}} </h3>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="about-info">
                  <p style="color: #000!important;text-align:justify;">{{__('para1')}}
                  </p>
                  <p style="color: #000!important;text-align:justify;">{{__('para2')}}
                  </p>
                  <p style="color: #000!important;text-align:justify;">
                     {{__('para3')}}
                  </p>
                  <p style="color: #000!important;text-align:justify;">
                     {{__('para4')}}
                  </p>
                  <p style="color: #000!important;text-align:justify;">
                     {{(__('para5'))}}
                  </p>
                  <div class="about-button mt-30">
                     <a href="{{route('contact',app()->getLocale())}}" class="tp-btn-ab">{{__('get')}} <i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about-area-end -->

   <!-- tp-supporter__areastart -->
   <div class="tp-supporter__area">
      <div class="container">
         <span class="tp-supporter-sub-title tp-supporter-sub-title-ab mb-25" style="color: #ecb41c;">Happy Partners</span>
         <div class="row no-gutters">
            <div class="col-xl-12">
               <div class="tp-supporter__slider tp-supporter__slider-2 tp-supporter__slider-active owl-carousel text-center">
                  <div class="tp-supporter__thumb">
                     <a href=""><img src="{{asset('assets/img/partner-logo/venue36.jpg')}}" width="150" height="150" alt="client-1"></a>
                  </div>
                  <div class="tp-supporter__thumb">
                     <a href=""><img src="{{asset('assets/img/partner-logo/mboss.png')}}" width="150" height="150" alt="client-1"></a>
                  </div>
                  <div class="tp-supporter__thumb">
                     <a href=""><img src="{{asset('assets/img/partner-logo/british.png')}}" width="150" height="150" alt="client-1"></a>
                  </div>
                  <div class="tp-supporter__thumb">
                     <a href=""><img src="{{asset('assets/img/partner-logo/golden.jpg')}}" width="150" height="150" alt="client-1"></a>
                  </div>
                  <div class="tp-supporter__thumb">
                     <a href=""><img src="{{asset('assets/img/partner-logo/M.jpg')}}" style="margin-top: 40px;" width="50" height="50" alt="client-1"></a>
                  </div>
                  <div class="tp-supporter__thumb">
                     <a href=""><img src="{{asset('assets/img/partner-logo/magency.jpg')}}" width="150" height="150" alt="client-1"></a>
                  </div>
                  <div class="tp-supporter__thumb">
                     <a href=""><img src="{{asset('assets/img/partner-logo/farm.jpg')}}" width="150" height="150" alt="client-1"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-supporter__area end -->
   <div class="background">
      <img src="{{asset('assets/img/25.png')}}" alt="" class="img-fluid" style="width: 100%;background-repeat: no-repeat; background-size: cover;">
   </div>
   <!-- collaborative-area-start -->
   <div class="collaborative-area pt-120 pb-55">
      <h3 class="tp-section-title text-center" style="color: #9d6b34!important;">{{__('business-summery')}}</h3>
      <div class="container" style="margin-top: 100px;">

         <div class="row">
            <div class="col-xl-6 col-lg-6">
               <div class="cp-info-right mb-30">
                  <h4 class="cp-title mb-15">{{__('breeding')}}</h4>
                  <p style="color: #000!important;text-align:justify;">{{__('our-farm')}}
                  </p>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="cp-info-left">
                  <h4 class="cp-title mb-15">{{__('sustainability')}}</h4>
                  <p style="color: #000!important;text-align:justify;">
                     {{__('commited')}}
                  </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-6 col-lg-6">
               <div class="cp-info-right mb-30">
                  <h4 class="cp-title mb-15">{{__('recreational')}}</h4>
                  <p style="color: #000!important;text-align:justify;">
                     {{__('addition')}}
                  </p>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="cp-info-left">
                  <h4 class="cp-title mb-15">{{__('expansion')}}</h4>
                  <p style="color: #000!important;text-align:justify;">
                     {{__('we-aim')}}
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- collaborative-area-end -->
   <!-- video-area-start -->
   <div class="video-area-ab">
      <div class="container">
         <div class="chosse-video">
            <div class="chosse-video-bg position-relative">
               <img src="{{asset('assets/img/C3.jpg')}}" alt="">
               <a href="https://www.youtube.com/watch?v=L4CpMr5BNls" class="play-icon play-icon-ab popup-video"><i class="fas fa-play"></i></a>
            </div>
         </div>
      </div>
   </div>
   <!-- video-area-end -->



   <!-- award-area-start -->
   <div class="award-area pt-120 pb-120">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5">
               <div class="award-image text-center">
                  <img src="{{asset('assets/img/C1.jpg')}}" alt="" class="img-fluid">
               </div>
            </div>
            <div class="col-xl-7 col-lg-7">
               <div class="tp-section-wrap tp-section-wrap-6">
                  <span class="asub-title grace-span" style="color: #ecb41c;">- Beef Production </span>
                  <h3 class="tp-section-title" style="color: #9d6b34!important;"> Sustainable Beef Production </h3>

                  <div class="awards-lists mt-50">
                     <div class="row">
                        <div class="col-lg-6 d-flex justify-content-center">
                           <ul>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size:13px!important;color:#000!important;">Helps prevent local conversion</span></li>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp<span style="font-size:13px!important;color:#000!important;">Support or restores navtive vegation and wildlife habitat</span></li>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size:13px!important;color:#000!important;">Support clean and aboundant water resources</span></li>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size:13px!important;color:#000!important;">Emits the fewest possible GHGs</span></li>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size:13px!important;color:#000!important;">Protects or enhance soil health</span></li>
                           </ul>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                           <ul>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size:13px!important;color:#000!important;">Efficiently uses resources along the value chain</span></li>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp<span style="font-size:13px!important;color:#000!important;">Prioritizes animal health and well-being</span></li>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size:12px!important;color:#000!important;">Supports economic livehoods and helps communities thrive</span></li>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size:13px!important;color:#000!important;">Uses antibiotics judiciously</span></li>
                              <li><i class="fas fa-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size:13px!important;color:#000!important;">Provides unprocessed source of protein in consumers</span></li>
                           </ul>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- award-area-end -->
      <!-- collaborative-area-start -->
      <div class="collaborative-area pt-120 pb-55" style="background-color: whitesmoke;">
         <h3 class="tp-section-title text-center" style="color: #9d6b34!important;">{{__('company')}}</h3>
         <div class="container" style="margin-top: 100px;">

            <div class="row">
               <div class="col-xl-6 col-lg-6">
                  <div class="cp-info-right mb-30">

                     <p style="color: #000!important;text-align:justify;">{{__('his-para3')}}</p>
                     <p style="color: #000!important;text-align:justify;">{{__('his-para2')}}</p>
                     <p style="color: #000!important;text-align:justify;">{{__('his-para3')}}</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="text-center">
                     <img src="{{asset('assets/img/Cover-F.jpg')}}" style="width:500px;height: 700px;" alt="" class="img-fluid">
                  </div>
               </div>

            </div>

         </div>
      </div>
      <!-- company-history-end -->

      <!-- corporate gaovernance structure -->
      <div class="collaborative-area pt-120 pb-55">
         <h3 class="tp-section-title text-center" style="color: #9d6b34!important;">{{__('corporate')}}</h3>
         <div class="container" style="margin-top: 100px;">

            <div class="row">
               <div class="col-xl-12 col-lg-12">
                  <div class="cp-info-right mb-30">
                     <h4 class="cp-title mb-15">{{__('board')}}:</h4>
                     <p style="color: #000!important;text-align:justify;">{{__('b-para')}}</p>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12">
                  <div class="cp-info-right mb-30">
                     <h4 class="cp-title mb-15">{{__('exe')}}:</h4>
                     <p style="color: #000!important;text-align:justify;">
                        {{__('e-para')}}
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- corporate-area-end -->
      <!-- video-area-start -->
      <div class="video-area-ab">
         <div class="container">
            <div class="chosse-video">
               <div class="chosse-video-bg position-relative">
                  <img src="{{asset('assets/img/C3.jpg')}}" alt="">
               </div>
            </div>
         </div>
      </div>
      <!-- video-area-end -->

      <!--project-location-->
      <div class="collaborative-area pt-120 pb-55" style="background-color: whitesmoke;">
         <span class="asub-title grace-span" style="color: #ecb41c;text-align:center;">- {{__('location')}} </span>
         <h3 class="tp-section-title text-center" style="color: #9d6b34!important;">{{__('project-location')}}</h3>
         <div class="container" style="margin-top: 100px;">

            <div class="row">
               <div class="col-xl-6 col-lg-6">
                  <div class="text-center">
                     <img src="{{asset('assets/img/location1.jpg')}}" style="width:750px;height: 420px;" alt="" class="img-fluid mb-2">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="text-center">
                     <img src="{{asset('assets/img/location2.jpg')}}" style="width:750px;height: 418px;" alt="" class="img-fluid">
                  </div>
               </div>
            </div>


         </div>

      </div>
   </div>
   <!--end-project-location-->

   <!-- latest-news-area-start -->
   <div class="latest-news-area latest-news-area-ab pt-120 mb-90">
      <div class="container">
         <div class="tp-section-wrap text-center">
            <span class="asub-title grace-span" style="color: #ecb41c;"> - {{__('news')}} - </span>
            <h3 class="tp-section-title" style="color: #9d6b34!important;"> {{__('blog')}} </h3>
         </div>
         <div class="row mt-50">
            @foreach($aboutblogs as $blog)
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="latest-blog mb-30">
                  <div class="latest-blog-img">
                     <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="Blog Image" width="410" height="220">
                     <div class="top-catagory">
                        <a href="{{ url(app()->getLocale() . '/news/' . $blog->id . '/detail') }}" class="postbox__meta">cattle farm</a>
                     </div>
                  </div>
                  <div class="latest-blog-content">
                     <div class="latest-post-meta mb-15">
                        <span class="blog-date">{{$blog->created_at}}</span>
                     </div>
                     <h3 class="latest-blog-title">
                        <a href="{{ url(app()->getLocale() . '/news/' . $blog->id . '/detail') }}" style="color: #9d6b34!important;">{{$blog->title}}</a>
                     </h3>
                     <div class="blog-btn mt-20">
                        <a href="{{ url(app()->getLocale() . '/news/' . $blog->id . '/detail') }}">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <!-- latest-news-area-end -->

</main>
@endsection