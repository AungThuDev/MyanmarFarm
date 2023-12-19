@extends('frontend.template')
@section('about-active','active')
@section('content')
      <main>
         <!-- page__title -start -->
         <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-135" data-background="{{asset('assets/img/beefcattle3.jpg')}}" class="img-fluid" style="width:100%;background-repeat: no-repeat; background-size:cover;">
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
                        <p style="color: #000!important;">{{__('para1')}}
                        </p>
                           <p style="color: #000!important;">{{__('para2')}}
                        </p>
                        <p style="color: #000!important;">
                           {{__('para3')}}
                        </p>
                        <p style="color: #000!important;">
                           {{__('para4')}}
                        </p>
                        <p style="color: #000!important;">
                           {{(__('para5'))}}
                        </p>
                        <div class="about-button mt-30">
                           <a href="{{route('contact',app()->getLocale())}}" class="tp-btn-ab">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
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
               <span class="tp-supporter-sub-title tp-supporter-sub-title-ab mb-25" style="color: #ecb41c;">Happy Users</span>
               <div class="row no-gutters">
                  <div class="col-xl-12">
                     <div class="tp-supporter__slider tp-supporter__slider-ab tp-supporter__slider-active owl-carousel text-center">
                           <div class="tp-supporter__thumb">
                              <a href="#"><img src="{{asset('assets/img/supporters/user-1.png')}}" alt="client-1"></a>
                           </div>
                           <div class="tp-supporter__thumb">
                              <a href="#"><img src="{{asset('assets/img/supporters/user-2.png')}}" alt="client-1"></a>
                           </div>
                           <div class="tp-supporter__thumb">
                              <a href="#"><img src="{{asset('assets/img/supporters/user-3.png')}}" alt="client-1"></a>
                           </div>
                           <div class="tp-supporter__thumb">
                              <a href="#"><img src="{{asset('assets/img/supporters/user-4.png')}}" alt="client-1"></a>
                           </div>
                           <div class="tp-supporter__thumb">
                              <a href="#"><img src="{{asset('assets/img/supporters/user-5.png')}}" alt="client-1"></a>
                           </div>
                           <div class="tp-supporter__thumb">
                           <a href="#"><img src="{{asset('assets/img/supporters/user-6.png')}}" alt="client-1"></a>
                        </div>
                        <div class="tp-supporter__thumb">
                           <a href="#"><img src="{{asset('assets/img/supporters/user-1.png')}}" alt="client-1"></a>
                        </div>
                        <div class="tp-supporter__thumb">
                           <a href="#"><img src="assets/img/supporters/user-2.png" alt="client-1"></a>
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
                        <p style="color: #000!important;">{{__('our-farm')}}
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="cp-info-left">
                        <h4 class="cp-title mb-15">{{__('sustainability')}}</h4>
                        <p style="color: #000!important;">
                           {{__('commited')}}
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-6 col-lg-6">
                     <div class="cp-info-right mb-30">
                        <h4 class="cp-title mb-15">{{__('recreational')}}</h4>
                        <p style="color: #000!important;">
                           {{__('addition')}}
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="cp-info-left">
                        <h4 class="cp-title mb-15">{{__('expansion')}}</h4>
                        <p style="color: #000!important;">
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
            <h3 class="tp-section-title text-center" style="color: #9d6b34!important;">Company History</h3>
            <div class="container" style="margin-top: 100px;">
               
               <div class="row">
                  <div class="col-xl-6 col-lg-6">
                     <div class="cp-info-right mb-30">
                        
                        <p style="color: #000!important;text-align:justify;">Myanmar Farm Co., Ltd was established in 2005 and has been operating livestock farms since then. The company started with one farm in Magway and gradually expanded to include Meiktila Cattle Farm and Meiktila Goat Farm, all located in Myanmar.
                        Initially, the company focused on breeding and raising goats for commercial purposes, with a focus on meeting local demand for meat and milk. However, over time, the company recognized the potential in the beef cattle market and began to shift its focus to cattle breed- ing and production.
                        </p>
                        <p style="color: #000!important;text-align:justify;">
                        Today, Myanmar Farm Co., Ltd operates three livestock farms and is a major player in the local meat and dairy industry. The company has a strong commitment to quality and animal welfare, which is reflected in its breeding and production practices.
                        The company is constantly seeking to improve and expand its operations, with a particular focus on increasing the quantity and quality of its beef cattle. This has involved investing in high-genus European bulls and implementing best practices in cattle breeding and care.
                     </p>
                     <p style="color: #000!important;">The company's current status is one of growth and expansion. With a strong track record of success in the livestock industry, Myanmar Farm Co., Ltd is well positioned to capitalize on the growing demand for high-quality meat and dairy products both locally and internationally. The company is committed to sustainability and responsible farm- ing practices, which will help to ensure its long-term success in the industry.</p>
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
            <h3 class="tp-section-title text-center" style="color: #9d6b34!important;">Corporate Governace Structure</h3>
            <div class="container" style="margin-top: 100px;">
               
               <div class="row">
                  <div class="col-xl-12 col-lg-12">
                     <div class="cp-info-right mb-30">
                        <h4 class="cp-title mb-15">Board of Directors:</h4>
                        <p style="color: #000!important;">Our strategic
                           compass is led by a dynamic Board of
                           Directors, comprising three adept
                           individuals. This visionary team is
                           committed to steering the corporate
                           ship, ensuring sound decision-making,
                           and charting a course for sustained
                           success. In their deliberations, they are
                           fortified by the insights and support of
                           our esteemed Advisory Board, a two-
                           member body of seasoned
                           professionals.
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-12 col-lg-12">
                     <div class="cp-info-right mb-30">
                        <h4 class="cp-title mb-15">Executive Committee:</h4>
                        <p style="color: #000!important;">
                           Driving operational efficacy, our Executive
                           Committee stands as the operational
                           backbone of the organization.
                           Comprised of representatives from key
                           businesses and units within the
                           Myanmar Farm Business Group, this
                           committee is the heartbeat of our day-
                           to-day activities. It orchestrates the
                           execution of strategies, ensuring the
                           seamless integration of diverse
                           business units. Notably, Venue 36
                           Business Group, as Myanmar Farm's
                           primary investee, plays a significant
                           role in this comprehensive governance
                           framework.
                        </p>
                        <p style="color: #000!important;">
                           Through this intricate yet streamlined
                           governance architecture, we fortify our
                           commitment to excellence,
                           transparency, and prudent decision-
                           making at every level of the Myanmar
                           Farm Business Group.
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
                        <img src="{{asset('assets/img/location1.jpg')}}" style="width:750px;height: 420px;"  alt="" class="img-fluid mb-2">
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                  <div class="text-center">
                        <img src="{{asset('assets/img/location2.jpg')}}" style="width:750px;height: 418px;"  alt="" class="img-fluid">
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