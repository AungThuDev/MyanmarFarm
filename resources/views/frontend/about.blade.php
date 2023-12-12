@extends('frontend.template')
@section('about-active','active')
@section('content')
      <main>
         <!-- page__title -start -->
         <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-135" data-background="{{asset('assets/img/aboutus_cow.jpg')}}" style="background-repeat: no-repeat; background-size:cover;">
            <div class="container">
                  <div class="row" >
                     <div class="col-xl-12">
                        <div class="page__title-content text-center">
                            <div class="page_title__bread-crumb">
                              <nav aria-label="breadcrumb">
                                 <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul>
                                       <li>
                                          <a href="{{url('/',app()->getLocale())}}"><span>{{__('home')}}</span></a>
                                       </li>
                                       <li class="trail-item trail-end">
                                          <span style="color: #fdd062;">About Us</span>
                                       </li>
                                    </ul>
                                 </nav> 
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fdd062!important;">About Us</h3>
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
                        <span class="asub-title grace-span" style="color: #ecb41c;">- About Myanmar Farm </span>
                        <h3 class="tp-section-title" style="color: #9d6b34!important;"> About Myanmar Farm </h3>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="about-info">
                        <p style="color: #000!important;">Myanmar Farm Co., Ltd is a livestock farming company that operates three livestock farms in Myanmar - Magway Cattle Farm, 
                           Meiktila Cattle Farm, and Meiktila Goat Farm. The company's main business is to supply local meat demands and export to 
                           foreign countries such as China and Thailand.
                        </p>
                           <p style="color: #000!important;">In the case of beef cattle, Myanmar Farm Co., Ltd is focused on increasing the quantity and quality of their cattle in 
                              Magway and Meiktila farms. To achieve this, the company is putting emphasis on the reproduction and breeding of cows and 
                              maintaining them in good health to increase cattle numbers. The company uses high-genus European bulls to breed with cows 
                              to obtain good quality cattle.
                        </p>
                        <p style="color: #000!important;">
                           The cows are kept systematically in cowsheds and allowed to graze on pastures. The company also feeds fodder like dried hay/straw 
                           with managers in their farms to ensure the proper nutrition of their livestock.
                        </p>
                        <p style="color: #000!important;">On the other hand, Meiktila Goat Farm is a profitable commercial goat farming operation that focuses on raising and breeding domestic goats.
                           The farm rears goats to obtain specific weights with age for mainly meat and milk production.
                        </p>
                        <p style="color: #000!important;">
                           At Myanmar Farm Co., Ltd, we are committed to promoting sustainable and responsible farming practices in order to achieve our vision of being a 
                           leading provider of high-quality livestock products in local and international markets.
                        </p>
                        <div class="about-button mt-30">
                           <a href="contact.html" class="tp-btn-ab">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
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

         <!-- collaborative-area-start -->
         <div class="collaborative-area pt-120 pb-55">
            <h3 class="tp-section-title text-center" style="color: #9d6b34!important;">Business Summary</h3>
            <div class="container" style="margin-top: 100px;">
               
               <div class="row">
                  <div class="col-xl-6 col-lg-6">
                     <div class="cp-info-right mb-30">
                        <h4 class="cp-title mb-15">Breeding and Production</h4>
                        <p style="color: #000!important;">Our farm spans six acres and houses a thousand breeding cattle and two hundred dairy cows. We utilize both free grazing and
                            intensive breeding methods to ensure the best possible health and quality of our livestock. Our farm features four buildings: 
                            one for housing cattle breeding, one for dairy cows, one for veterinary care and quarantine, and one for staff housing and office.
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="cp-info-left">
                        <h4 class="cp-title mb-15">Sustainability and Responsibility</h4>
                        <p style="color: #000!important;">We are committed to providing high-quality and ethically sourced livestock, as well as promoting sustainable and environmentally responsible 
                           farming practices. We believe that our commitment to quality and sustainability will make us a leading player in the cattle breeding and farming 
                           industry. Our long-term partnership with locals who are interested in cattle farming aims to promote sustainability and charitable causes.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-6 col-lg-6">
                     <div class="cp-info-right mb-30">
                        <h4 class="cp-title mb-15">Recreational Activities</h4>
                        <p style="color: #000!important;">In addition to the core business activities of breeding and raising livestock, the company plans to expand into the recreational sector by creating 
                           a new area that is open to the public in the future. This will allow visitors to interact with the animals and learn about sustainable farming practices 
                           while providing a unique experience that sets the business apart from others in the industry.
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="cp-info-left">
                        <h4 class="cp-title mb-15">Expansion and Partnership</h4>
                        <p style="color: #000!important;">We aim to expand our market reach by entering new geographic markets and establishing part- nerships with contractors, distributors, and retail- ers in order 
                           to increase our market share. By prior- itizing diversity, equity, and inclusion, we will be able to attract and retain top talent and foster a more innovative 
                           and productive workplace.
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
                        <img src="{{asset('assets/img/features/award.png')}}" alt="" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7">
                     <div class="tp-section-wrap tp-section-wrap-6">
                        <span class="asub-title grace-span" style="color: #ecb41c;">- awards </span>
                        <h3 class="tp-section-title" style="color: #9d6b34!important;"> Get More Rewards </h3>
                        <p style="color: #000!important;">At agronix we are passionate about supporting the financial cooperative movement that currently
                           improves the lives of hundreds of millions of people worldwide.</p>
                     </div>
                     <div class="awards-lists mt-50">
                        <div class="row">
                           <div class="col-xl-3 col-lg-6 col-md-6">
                              <div class="award-item text-center mb-30">
                                 <i class="flaticon-trophy-1"></i>
                                 <h5 class="award-title mt-15">Quality Design 2021</h5>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-md-6">
                              <div class="award-item text-center mb-30">
                                 <i class="flaticon-medal-1"></i>
                                 <h5 class="award-title mt-15">Best Milk Award 2021</h5>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-md-6">
                              <div class="award-item text-center mb-30">
                                 <i class="flaticon-high-quality"></i>
                                 <h5 class="award-title mt-15">Best <br> Quality 2021</h5>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-md-6">
                              <div class="award-item text-center mb-30">
                                 <i class="flaticon-badge"></i>
                                 <h5 class="award-title mt-15">Top Class <br> In 2021 </h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- award-area-end -->

         <!-- latest-news-area-start -->
         <div class="latest-news-area latest-news-area-ab pt-120 mb-90">
            <div class="container">
               <div class="tp-section-wrap text-center">
                  <span class="asub-title grace-span" style="color: #ecb41c;"> - News - </span>
                  <h3 class="tp-section-title" style="color: #9d6b34!important;"> Blog Insights </h3>
               </div>
               <div class="row mt-50">
                     @foreach($aboutblogs as $blog)
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                              <div class="latest-blog-img">
                              <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="Blog Image" width="410" height="220">
                                    <div class="top-catagory">
                                       <a href="" class="postbox__meta">cattle farm</a>
                                    </div>    
                              </div>
                              <div class="latest-blog-content">
                                 <div class="latest-post-meta mb-15">
                                    <span class="blog-date">{{$blog->created_at}}</span>
                                 </div>
                                 <h3 class="latest-blog-title">
                                    <a href="news-details.html" style="color: #9d6b34!important;">{{$blog->title}}</a>
                                 </h3>
                                 <div class="blog-btn mt-20">
                                    <a href="#">Read More</a>
                                 </div>
                              </div>
                        </div>
                     </div>
                     @endforeach
                     <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                              <div class="latest-blog-img">
                                    <a href="news-details.html"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></a>
                                    <div class="top-catagory">
                                       <a href="shop-details.html" class="postbox__meta">cow farm</a>
                                    </div>    
                              </div>
                              <div class="latest-blog-content">
                                 <div class="latest-post-meta mb-15">
                                    <span class="blog-date"><a href="news-details.html">november 21, 2021</a></span>
                                 </div>
                                 <h3 class="latest-blog-title">
                                    <a href="news-details.html">Angus. Black Angus cattle, also called Aberdeen Angus</a>
                                 </h3>
                                 <div class="blog-btn mt-20">
                                    <a href="news-details.html">Read More</a>
                                 </div>
                              </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                              <div class="latest-blog-img">
                                    <a href="news-details.html"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></a>
                                    <div class="top-catagory">
                                       <a href="shop-details.html" class="postbox__meta">cow farm</a>
                                    </div>    
                              </div>
                              <div class="latest-blog-content">
                                 <div class="latest-post-meta mb-15">
                                    <span class="blog-date"><a href="news-details.html">november 21, 2021</a></span>
                                 </div>
                                 <h3 class="latest-blog-title">
                                    <a href="news-details.html">Are the most popular breed in the U.S., and thanks to some</a>
                                 </h3>
                                 <div class="blog-btn mt-20">
                                    <a href="news-details.html">Read More</a>
                                 </div>
                              </div>
                        </div>
                     </div> -->
               </div>
            </div>
         </div>
         <!-- latest-news-area-end -->

      </main>
@endsection