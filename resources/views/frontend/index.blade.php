@extends('frontend.template')
@section('home-active','active')
@section('content')
<main>
         @if(app()->getLocale() == 'en')
         <div>
            <img src="{{asset('assets/img/cows4.png')}}" style="width: 100%;background-repeat: no-repeat; background-size: cover;" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth" class="img-fluid">
         </div>
         @elseif(app()->getLocale() == 'my')
         <div>
            <img src="{{asset('assets/img/cows_myanmar.png')}}" style="width: 100%;background-repeat: no-repeat; background-size: cover;" alt="Harmonious Livestock Grazing in Our Sustainable Farm" class="img-fluid">
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
                        <a href="#" class="client-img"><img src="{{asset('assets/img/client/author.jpg')}}" alt="Empowering Communities - Impactful Agricultural Programs"></a>
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
                        <img class="left-side-image" src="{{asset('assets/img/Cover.jpg')}}" alt="Cultivating Change - Myanmar Farm Initiatives">
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
            <img src="{{asset('assets/img/8.png')}}" style="width: 100%;background-repeat: no-repeat; background-size: cover;" alt="Empowering Communities - Impactful Agricultural Programs" class="img-fluid">
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
                                 <img src="{{asset('assets/img/icon/cow.png')}}" alt="Cultivating Change - Myanmar Farm Initiatives">
                              </div>
                              <h5 class="features-item-title-2">Selling Calves & Cattles:</h5>
                              
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
                                 <img src="{{asset('assets/img/icon/product.png')}}" alt="Cultivating Change - Myanmar Farm Initiatives">
                              </div>
                              <h4 class="features-item-title-2">Premium Dairy Products:</h4>
                             
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
                                 <img src="{{asset('assets/img/icon/shake.png')}}" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth">
                              </div>
                              <h4 class="features-item-title-2">Cattle Share Lease:</h4>
                             
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
                                 <img src="{{asset('assets/img/icon/children.png')}}" alt= "Harmonious Livestock Grazing in Our Sustainable Farm">
                              </div>
                              <h4 class="features-item-title-2">Farm Visits:</h4>
                              
                              <p class="mt-30" style="color: #000!important;text-align: justify;">Our Farm provides guided tours and educational visits for school groups and other interested parties,
                                 teaching them about sustainable farming practices and animal walfare.
                              </p>
                           </div>
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
                                 <img src="{{asset('assets/img/features/chosse-1.png')}}" alt="Empowering Communities - Impactful Agricultural Programs">
                                 <h5 class="chosse-list-title">Woodland Bunker</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/milkbottle.png')}}" alt="Cultivating Change - Myanmar Farm Initiatives">
                                 <h5 class="chosse-list-title">100% Guranty</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/chosse-3.png')}}" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth">
                                 <h5 class="chosse-list-title">Timely Delivery</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/cow.png')}}" alt="Harmonious Livestock Grazing in Our Sustainable Farm">
                                 <h5 class="chosse-list-title">Best Equipment</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/chosse-5.png')}}" alt="Empowering Communities - Impactful Agricultural Programs">
                                 <h5 class="chosse-list-title">Best Farmers</h5>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                              <div class="chosse-list bg-white text-center mb-30">
                                 <img src="{{asset('assets/img/features/chosse-6.png')}}" alt="Cultivating Change - Myanmar Farm Initiatives">
                                 <h5 class="chosse-list-title">24/7 Support</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="chosse-video">
                        <div class="chosse-video-bg position-relative">
                           <img src="{{asset('assets/img/C1.jpg')}}" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth">
                           <a href="{{asset('assets/img/video.mp4')}}" class="play-icon-3 play-icon popup-video"><i class="fas fa-play"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- chosse-us-area-end -->

         <div class="background">
            <img src="{{asset('assets/img/1.png')}}" alt="Harmonious Livestock Grazing in Our Sustainable Farm" class="img-fluid" style="width: 100%;background-repeat: no-repeat; background-size: cover;">
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
                              <img src="{{asset('assets/img/partner-logo/venue36.jpg')}}" width="150" height="200" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth">
                           </div>
                           <div class="tp-supporter__thumb">
                              <img src="{{asset('assets/img/partner-logo/mboss.png')}}" width="150" height="200" alt="Harmonious Livestock Grazing in Our Sustainable Farm">
                           </div>
                           <div class="tp-supporter__thumb">
                              <img src="{{asset('assets/img/partner-logo/british.png')}}" width="150" height="170" alt="Empowering Communities - Impactful Agricultural Programs">
                           </div>
                           <div class="tp-supporter__thumb">
                              <img src="{{asset('assets/img/partner-logo/golden.jpg')}}"  width="150" height="150" alt="Cultivating Change - Myanmar Farm Initiatives">
                           </div>
                           <div class="tp-supporter__thumb">
                              <img src="{{asset('assets/img/partner-logo/M.jpg')}}" style="margin-top: 40px;" width="50" height="50" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth">
                        </div>
                        <div class="tp-supporter__thumb">
                              <img src="{{asset('assets/img/partner-logo/magency.jpg')}}" width="150" height="150" alt="Harmonious Livestock Grazing in Our Sustainable Farm">
                        </div>
                        <div class="tp-supporter__thumb">
                              <img src="{{asset('assets/img/partner-logo/farm.jpg')}}" width="150" height="150" alt="Empowering Communities - Impactful Agricultural Programs">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- client area end -->

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
