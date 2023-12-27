@extends('frontend.template')
@section('home-active','active')
@section('content')
<main>
         @if(app()->getLocale() == 'en')
         <div>
            <img src="{{asset('assets/img/cows4.png')}}" style="width: 100%;background-repeat: no-repeat; background-size: cover;" alt="" class="img-fluid">
         </div>
         @elseif(app()->getLocale() == 'my')
         <div>
            <img src="{{asset('assets/img/cows_myanmar.png')}}" style="width: 100%;background-repeat: no-repeat; background-size: cover;" alt="" class="img-fluid">
         </div>
         @endif
         <!-- banner-area-end -->

         <!-- serivces-cta-start -->
         <div class="serivces-cta pt-75 pb-75 theme-bg-primary-h3">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-8 col-lg-8">
                     <div class="tp-section-wrap tp-section-wrap-h3">
                        <span class="service-catagory">Myanmar Farm</span>
                        <h3 class="tp-section-title-h3 tp-section-title">Nourishment Made Beatutiful For Generations</h3>
                     </div>
                     <div class="serivces-cta-info">
                        <a href="#" class="client-img"><img src="{{asset('assets/img/client/author.jpg')}}" alt=""></a>
                        <p><a href="mailto:info@myanmarfarm.com.mm"> info@myanmarfarm.com.mm </a> - Yangon/Myanmar</p>
                     </div>
                  </div>
                  
                  </div>
               </div>
            </div>
         </div>
         <!-- serivces-cta-end -->

         <!-- about-area-start -->
         <div class="tp-about-area pt-120 pb-120">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-5 col-xl-5 col-lg-5">
                     <div class="tp-about-image pr-30">
                        <img class="left-side-image" src="{{asset('assets/img/Cover.jpg')}}" alt="">
                     </div>
                  </div> 
                  <div class="col-xxl-7 col-xl-7 col-lg-7">
                     <div class="tp-about-content tp-about-content-h3">
                        <div class="tp-section-wrap tp-section-wrap-h3">
                           <span class="asub-title">- About Myanmar Farm -</span>
                           <h3 class="tp-section-title tp-section-title-h3-d tp-section-title-ab-3" style="color: #9d6b34!important;text-align:justify;">{{__('business-summery')}}</h3>
                           <p class="description mb-2" style="color: #000!important;font-size:18px;text-align:justify;">{{__('summery-body')}}</p>
                           <a href="{{asset('assets/img/MyanmarFarm.pdf')}}" class="tp-btn-ab" download="MyanmarFarm">About MyanmarFarm</a>
                        </div>
                        <div class="row no-gutters mt-50">
                           <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                              <div class="tp-about-list tp-about-list-2 mt-20">
                                 <div class="tp-about-list-text">
                                    <h5 class="ab-list-title ab-list-title-2">{{__('mission')}}</h5>
                                    <p class="description" style="color: #000!important;font-size:18px;text-align:justify;">{{__('our-mission')}}</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                              <div class="tp-about-list  tp-about-list-2 mt-20">
                                 <div class="tp-about-list-text">
                                    <h5 class="ab-list-title ab-list-title-2">{{__('vision')}}</h5>
                                    <p class="description" style="color: #000!important;font-size:18px;text-align:justify;">{{__('our-vision')}}</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- about-area-end -->
         <!--photo section -->
         <div>
            <img src="{{asset('assets/img/8.png')}}" style="width: 100%;background-repeat: no-repeat; background-size: cover;" alt="" class="img-fluid">
         </div>
            
         </div>
         <!-- Partnership Summary -->
         <div class="team-area pt-110 pb-90">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-center">
                  <span class="asub-title">- {{__('partner')}} -</span>
                  <h3 class="tp-section-title tp-section-title-h3-d"  style="color:#9d6b34!important;">{{__('empower')}}</h3>
               </div>
               <div class="row mt-65">
                  <h3 class="text-dark">{{__('partner-subtitle')}}</h3>
                  <p class="text-dark" style="text-align: justify;">{{__('partner-body')}}</p>
                  <span class="asub-title"><a href="{{route('partner',app()->getLocale())}}">{{__('read')}}&rarr;</a></span>
               </div>
            </div>
         </div>
         <!-- partnership summary end -->
         <!-- company-features-start -->
         <div class="company-features company-features-2 pt-110 pb-90" data-background="{{asset('assets/img/service/services-bg.png')}}">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3">
                  <span class="asub-title">- Our Services</span>
                  <h3 class="tp-section-title tp-section-title-h3-d"></h3>
               </div>
               <div class="company-features-list mt-100">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                        <div class="company-features-item company-features-item-2 mb-50">
                           <div class="features-item features-item-2 text-center" id="service-sell" style="height: 35vh;">
                              <div class="features-icon-2">
                                 <img src="{{asset('assets/img/icon/cow.png')}}" alt="">
                              </div>
                              <h5 class="features-item-title-2"><a href="services-details.html">Selling Calves & Cattles:</a></h5>
                              
                              <p class="mt-30" style="color: #000!important;text-align: justify;">We sell calves and dairy cows to the local market and also export
                                 cattles to China and Thiland through border trade, providing our customers healthy
                                 and well-bred animals.
                              </p>
                           </div>
                           <!-- <div class="features-item-btton features-item-btton-2">
                              <a href="services-details.html" class="features-btn features-btn-h3">Read More <i class="fal fa-arrow-right"></i></a>
                           </div> -->
                        </div>
                     </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="company-features-item company-features-item-2 mb-50">
                           <div class="features-item features-item-2 text-center" id="service-dairy" style="height: 35vh;">
                              <div class="features-icon-2">
                                 <img src="{{asset('assets/img/icon/product.png')}}" alt="">
                              </div>
                              <h4 class="features-item-title-2"><a href="services-details.html">Premium Dairy Products:</a></h4>
                             
                              <p class="mt-30" style="color: #000!important;text-align: justify;">Our Farm produces high-quality milk and plan to introduce other dairy products such as yogurt and
                                 cheese in the future.
                              </p>
                           </div>
                           <!-- <div class="features-item-btton features-item-btton-2">
                              <a href="services-details.html" class="features-btn features-btn-h3">Read More <i class="fal fa-arrow-right"></i></a>
                           </div> -->
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="company-features-item company-features-item-2 mb-50">
                           <div class="features-item features-item-2 text-center" id="service" style="height: 35vh;">
                              <div class="features-icon-2">
                                 <img src="{{asset('assets/img/icon/shake.png')}}" alt="">
                              </div>
                              <h4 class="features-item-title-2"><a href="services-details.html">Cattle Share Lease:</a></h4>
                             
                              <p class="mt-30" style="color: #000!important;text-align: justify;">We offer a revenue-sharing model to operators and businesses looking to improve the quality of
                                 their cattles stock. Our breeding services cater to clients looking for over a hundred calves. A cattle shares Lease
                                 is one way to reduce an operator's capital needs.
                              </p>
                           </div>
                           <!-- <div class="features-item-btton features-item-btton-2">
                              <a href="services-details.html" class="features-btn features-btn-h3">Read More <i class="fal fa-arrow-right"></i></a>
                           </div> -->
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="company-features-item company-features-item-2 mb-50">
                           <div class="features-item features-item-2 text-center" id="service" style="height: 35vh;">
                              <div class="features-icon-2">
                                 <img src="{{asset('assets/img/icon/children.png')}}" alt="">
                              </div>
                              <h4 class="features-item-title-2"><a href="services-details.html">Farm Visits:</a></h4>
                              
                              <p class="mt-30" style="color: #000!important;text-align: justify;">Our Farm provides guided tours and educational visits for school groups and other interested parties,
                                 teaching them about sustainable farming practices and animal walfare.
                              </p>
                           </div>
                           <!-- <div class="features-item-btton features-item-btton-2">
                              <a href="services-details.html" class="features-btn features-btn-h3">Read More <i class="fal fa-arrow-right"></i></a>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- company-features-end -->

         <!-- CSR Summary -->
         <div class="team-area pt-110 pb-90">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-center">
                  <span class="asub-title">- {{__('csr')}} -</span>
                  <h3 class="tp-section-title tp-section-title-h3-d"  style="color:#9d6b34!important;">{{__('csr')}}</h3>
               </div>
               <div class="row mt-65">
                  <p class="text-dark" style="text-align: justify;">{{__('csr-body')}}</p>
                  <span class="asub-title"><a href="{{route('csr',app()->getLocale())}}">{{__('read')}}&rarr;</a></span>
               </div>
            </div>
         </div>
         <!-- CSR summary end -->

         <!-- chosse-us-area-start -->
         <div class="chosse-us-area h3-gray-bg pt-120 pb-90">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6">
                     <div class="chosse-main-info">
                        <div class="tp-section-wrap tp-section-wrap-h3 text-center">
                           <span class="asub-title">- Core Features -</span>
                           <h3 class="tp-section-title tp-section-title-h3-d"  style="color:#9d6b34!important;">Why Chosse Us</h3>
                        </div>
                        <div class="row mt-80">
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/chosse-1.png')}}" alt="">
                                 <h5 class="chosse-list-title">Woodland Bunker</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/milkbottle.png')}}" alt="">
                                 <h5 class="chosse-list-title">100% Guranty</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/chosse-3.png')}}" alt="">
                                 <h5 class="chosse-list-title">Timely Delivery</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/cow.png')}}" alt="">
                                 <h5 class="chosse-list-title">Best Equipment</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/chosse-5.png')}}" alt="">
                                 <h5 class="chosse-list-title">Best Farmers</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/chosse-6.png')}}" alt="">
                                 <h5 class="chosse-list-title">24/7 Support</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="chosse-video">
                        <div class="chosse-video-bg position-relative">
                           <img src="{{asset('assets/img/C1.jpg')}}" alt="">
                           <a href="{{asset('assets/img/video.mp4')}}" class="play-icon-3 play-icon popup-video"><i class="fas fa-play"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- chosse-us-area-end -->

         <!-- news-letter-area-start -->
         <!-- <div class="news-letter-area pt-120 pb-120" data-background="#" style="height: 100vh;background-repeat: no-repeat;background-size: cover;">
            <div class="container">
               <div class="row justify-content-center">
                  
               </div>
            </div>
         </div> -->
         <div class="background">
            <img src="{{asset('assets/img/1.png')}}" alt="" class="img-fluid" style="width: 100%;background-repeat: no-repeat; background-size: cover;">
         </div>
         <!-- news-letter-area-end -->

         <!-- client area start -->
         <div class="tp-supporter__area tp-supporter__area-2 pt-110 pb-90">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3">
                  <span class="asub-title">- Partners</span>
                  <h3 class="tp-section-title tp-section-title-h3-d"  style="color:#9d6b34!important;">Happy Partners</h3>
               </div>
               <div class="row no-gutters mt-50">
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
                              <a href=""><img src="{{asset('assets/img/partner-logo/golden.jpg')}}"  width="150" height="150" alt="client-1"></a>
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
         
         <!-- client area end -->

         <!-- faq-area-start -->
         <!-- <div class="faq-area mt-120 mb-120">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-3 d-none d-xl-block">
                     <div class="faq-image">
                        <img src="assets/img/supporters/faq-3.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6">
                     <div class="faq-image faq-col-2">
                        <img src="assets/img/supporters/faq-4.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="faq-main-info">
                        <div class="tp-section-wrap tp-section-wrap-h3">
                           <span class="asub-title">- faq</span>
                           <h3 class="tp-section-title tp-section-title-h3-d">Get Your Answers</h3>
                        </div>
                        <div class="faq-content mt-60">
                           <div class="accordion" id="accordionExample">
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                       <button class="accordion-button accordion-button-h3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                          <span>01</span>  How can i get this kind theme in free?
                                       </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                       <div class="accordion-body">
                                          <img src="assets/img/supporters/faq-6.png" alt="" class="img-fluid mt-10">
                                          <h4 class="accordion-body-title">How can i customize this kind theme easily</h4>
                                          <p>Our core values guide us in how weed conduct ourselves—personally &professionally. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                       <button class="accordion-button accordion-button-h3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                          <span>02</span>  Our core values guide us in??
                                       </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <img src="assets/img/supporters/faq-6.png" alt="" class="img-fluid mt-10">
                                          <h4 class="accordion-body-title">How can i customize this kind theme easily</h4>
                                          <p>Our core values guide us in how weed conduct ourselves—personally &professionally. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                       <button class="accordion-button collapsed accordion-button-h3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       <span>03</span>  How we conduct ourselves?
                                       </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <img src="assets/img/supporters/faq-6.png" alt="" class="img-fluid mt-10">
                                          <h4 class="accordion-body-title">How can i customize this kind theme easily</h4>
                                          <p>Our core values guide us in how weed conduct ourselves—personally &professionally. </p>
                                       </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- faq-area-end -->

         <!-- testiominal-2-area-start -->
         <!-- <div class="testimonial-review">
            <div class="container">
               <div class="testiominal-2-area pt-120 pb-120" data-background="assets/img/bg/testimonial-bg.jpg">
                  <div class="testimonial-slider-2-active owl-carousel">
                     <div class="single-slider">
                        <div class="row justify-content-center">
                           <div class="col-xl-6">
                              <div class="testimonial-content-2" data-background="assets/img/client/testimonial-icon.png"> 
                                 <p>“ This farm has exceeded my expectations with their
                                    attention to detail and the outstanding quality! Great
                                    selection of fruits, vegetables.</p>
                                 <div class="rivew-info mt-30">
                                    <a href="#"><img src="assets/img/client/client-10.png" alt=""></a>
                                    <div class="client-content">
                                       <h5 class="client-name"><a href="#">Rosalina D. William</a></h5>
                                       <div class="client-designation"><p>Founder Of <a href="#">Family Mart Co.</a> </p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="single-slider">
                        <div class="row justify-content-center">
                           <div class="col-xl-6">
                              <div class="testimonial-content-2" data-background="assets/img/client/testimonial-icon.png"> 
                                 <p>“ The outstanding quality! Great selection of fruits, vegetables. This farm has exceeded my expectations with their attention to detail and</p>
                                 <div class="rivew-info mt-30">
                                    <a href="#"><img src="assets/img/client/client-10.png" alt=""></a>
                                    <div class="client-content">
                                       <h5 class="client-name"><a href="#">Rosalina D. William</a></h5>
                                       <div class="client-designation"><p>Founder Of <a href="#">Family Mart Co.</a> </p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="single-slider">
                        <div class="row justify-content-center">
                           <div class="col-xl-6">
                              <div class="testimonial-content-2" data-background="assets/img/client/testimonial-icon.png"> 
                                 <p>“ This farm has exceeded my expectations with their
                                    attention to detail and the outstanding quality! Great
                                    selection of fruits, vegetables.</p>
                                 <div class="rivew-info mt-30">
                                    <a href="#"><img src="assets/img/client/client-10.png" alt=""></a>
                                    <div class="client-content">
                                       <h5 class="client-name"><a href="#">Rosalina D. William</a></h5>
                                       <div class="client-designation"><p>Founder Of <a href="#">Family Mart Co.</a> </p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- testiominal-2-area-end -->

         <!-- latest-news-area-start -->
         <!-- <div class="latest-news-area latest-news-area-h3 h3-gray-bg pt-120 pb-80">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-center">
                  <span class="asub-title">- news -</span>
                  <h3 class="tp-section-title tp-section-title-h3-d">Blog Insights</h3>
               </div>
               <div class="row mt-50">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                     <div class="latest-blog latest-blog-xs mb-30">
                        <div class="latest-blog-img">
                              <a href="news-details.html"><img src="assets/img/blog/blog-5.jpg" class="img-fluid" alt=""></a>   
                        </div>
                        <div class="top-catagory-2">
                           <a href="shop-details.html" class="postbox__meta-2 postbox__meta">Agriculture</a>
                        </div> 
                        <div class="latest-blog-content-top latest-blog-content-2 latest-blog-content">
                           <div class="latest-post-meta mb-10">
                              <span class="blog-date-h3 blog-date"><a href="news-details.html">november 21, 2021,</a></span>
                           </div>
                           <h3 class="latest-blog-title latest-blog-title-h3">
                              <a href="news-details.html">Keep them a Green Out in this in Potato house in here.</a>
                           </h3>
                           <div class="blog-btn blog-btn-2 mt-15">
                              <a href="news-details.html">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6">
                     <div class="latest-blog mb-30">
                           <div class="latest-blog-img">
                                 <a href="news-details.html"><img src="assets/img/blog/blog-12.jpg" class="img-fluid" alt=""></a>   
                           </div>
                           <div class="top-catagory-2">
                              <a href="shop-details.html" class="postbox__meta-2 postbox__meta">Agriculture</a>
                           </div> 
                           <div class="latest-blog-content-3 latest-blog-content-2 latest-blog-content">
                              <div class="latest-post-meta mb-10">
                                 <span class="blog-date-h3 blog-date"><a href="news-details.html">november 21, 2021</a></span>
                              </div>
                              <h3 class="latest-blog-title latest-blog-title-h3">
                                 <a href="news-details.html">Subsistence agriculture occur when farmers grow food</a>
                              </h3>
                              <div class="blog-btn blog-btn-2 mt-15">
                                 <a href="news-details.html">Read More</a>
                              </div>
                           </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6">
                     <div class="latest-blog mb-30">
                           <div class="latest-blog-img">
                                 <a href="news-details.html"><img src="assets/img/blog/blog-11.png" class="img-fluid" alt=""></a>   
                           </div>
                           <div class="top-catagory-2">
                              <a href="shop-details.html" class="postbox__meta-2 postbox__meta">Agriculture</a>
                           </div> 
                           <div class="latest-blog-content-3 latest-blog-content-2 latest-blog-content">
                              <div class="latest-post-meta mb-10">
                                 <span class="blog-date-h3 blog-date"><a href="news-details.html">november 21, 2021</a></span>
                              </div>
                              <h3 class="latest-blog-title latest-blog-title-h3">
                                 <a href="news-details.html">Crops to meet the needs of themselves and their families</a>
                              </h3>
                              <div class="blog-btn blog-btn-2 mt-15">
                                 <a href="news-details.html">Read More</a>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- latest-news-area-end -->
 
         <!-- modal-search-start -->
         <!-- <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <form>
                        <input type="text" placeholder="Search here...">
                        <button>
                           <i class="fa fa-search"></i>
                        </button>
                  </form>
               </div>
            </div>
         </div> -->
         <!-- modal-search-end -->
         <!-- to find a job -->
         <!-- CSR Summary -->
         <div class="team-area pt-110 pb-90">
            <div class="container">
               <div class="tp-section-wrap tp-section-wrap-h3 text-center">
                  <h3 class="tp-section-title tp-section-title-h3-d"  style="color:#9d6b34!important;">{{__('search')}}</h3>
               </div>
               <div class="row mt-65">
                  <p class="text-dark" style="text-align: justify;">{{__('agriculture')}}</p>
                  <span class="asub-title"><a href="{{route('vacancies',app()->getLocale())}}">{{__('job')}}&rarr;</a></span>
               </div>
            </div>
         </div>
         <!-- CSR summary end -->

      </main>
@endsection
