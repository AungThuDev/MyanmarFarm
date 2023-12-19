<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>MyanmarFarm</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href={{asset("assets/img/logo/MyanmarFarm.png")}}>
      <!-- CSS here -->
      <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/backToTop.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
      <link rel="stylesheet" href="{{asset('assets/flaticon/flaticon.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/fontAwesome5Pro.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
      <style>
         select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-color: transparent;
    border: none;
    padding: 5px;
    font-size: 16px;
    cursor: pointer;
    color: black;
}

.language-select {
    display: flex;
    align-items: center;
}



.en-icon {
    background-color: #007bff;
    color: black;
}







/* Style for select dropdown arrow */
select::-ms-expand {
    display: none;
}

/* Style for the custom select */
select {
    border: 1px solid black;
    border-radius: 5px;
}

/* Style for the selected option */
select option:checked {
    background-color: black;
    color: black;
}

/* Style for the dropdown menu */
select option {
    background-color: white;
    color: #fff;
}

        h3 {
            color: #fff !important;
        }

        h3:hover {
            color: #FFCA33 !important;
        }

        .phone-no:hover {
            color: #FFCA33 !important;
        }

        .text-orange:hover {
            color: #FFCA33 !important;
        }

        .menu-list li a:hover {
            color: #FFCA33 !important;
        }

        #languageSelector {
            position: fixed;
            bottom: 10px; /* Adjust this value to control the distance from the bottom */
            right: 10px; /* Adjust this value to control the distance from the right */
            color: #ecb41c;
            border-color: #ecb41c;
        }
        p{
            color: #fff!important;
        }
        #icon{
            font-size: 40px!important;
            color: #fff!important;
        }
        #icon:hover{
            color: #FFCA33!important;
        }
        



.form{

position: relative;
}

.form .fa-search{

position: absolute;
top:20px;
left: 20px;
color: #9ca3af;

}

.form span{

    position: absolute;
right: 17px;
top: 13px;
padding: 2px;
border-left: 1px solid #d1d5db;

}

.left-pan{
padding-left: 7px;
}

.left-pan i{

padding-left: 10px;
}

.form-input{

height: 55px;
text-indent: 33px;
border-radius: 10px;
}

.form-input:focus{

box-shadow: none;
border:none;
}

  
        
    </style>
      </style>
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Add your site or application content here -->

      <!-- pre loader area start -->
      <!-- <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="loading-icon text-center d-sm-flex align-items-center justify-content-center">
                  <img class="loading-logo mr-10" src="{{asset('assets/img/favicon.png')}}" alt="">
                  <img src="assets/img/logo/MyanmarFarm.png" alt="">
               </div>
            </div>
         </div>  
      </div> -->
      <!-- pre loader area end -->

      <!-- back to top start -->
      <!-- <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102" style="color: #9d6b34;">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
         
      </div> -->
      
      <!-- back to top end -->
      
      <!-- header -->
      <header>
         <div class="header__area">
            <div class="header__area-top-bar theme-bg-primary-h3">
               <div class="container-fluid custome-container">
                  <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-6 col-md-8 col-sm-6">
                        <div class="headerinfo">
                           <ul>
                              <li><a href="mailto:info@webmail.com"><i class="fal fa-envelope"></i>info@venue36group.com</a></li>
                              <li class="d-none d-md-inline-block"><a href="#"><i class="fal fa-map-marker-alt"></i>No.(36), Alanpya Pagoda Road, Yangon, Myanmar</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
                        <div class="soical__icon">
                           <ul>
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-behance"></i></a></li>
                              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>  
               </div>
            </div>
            <div class="header__area__menu bg-white" id="header-sticky">
               <div class="container-fluid" style="margin-left: 30px;">
                  <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-6">
                        <div class="main-menu-h3 main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li><a href="{{url('/',app()->getLocale())}}" class="@yield('home-active')">{{__('home')}}</a></li>
                                 <li><a href="{{route('about',app()->getLocale())}}" class="@yield('about-active')">{{__('about')}}</a>
                                    <ul class="sub-menu-h1 sub-menu">
                                       <li><a href="{{route('csr',app()->getLocale())}}">{{__('csr-stretegy')}}</a></li>
                                       <li><a href="{{route('partner',app()->getLocale())}}">{{__('partnership')}}</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="{{route('gallery',app()->getLocale())}}" class="@yield('gallery-active')">{{__('gallery')}}</a></li>
                                 
                                 <li><a href="{{route('vacancies',app()->getLocale())}}" class="@yield('vacancy-active')">{{__('vacancy')}}</a></li>
                                 <li><a href="{{route('news',app()->getLocale())}}" class="@yield('blog-active')">{{__('news')}}</a></li>
                                 <li><a href="{{route('contact',app()->getLocale())}}" class="@yield('contact-active')">{{__('contact')}}</a></li>  
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xl-1 col-lg-1 col-6">
                        <div class="logo">
                           <a href=""><img src="{{asset('assets/img/logo/MyanmarFarm.png')}}" alt=""></a>
                        </div>
                     </div>
                     <div class="col-xl-5 col-lg-5 col-6">
                        
                        
                        <div class="row">
                           <div class="col-lg-9">
                           <div class="side-menu-icon d-lg-none text-end" style="margin-right: 40px;">
                           <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn" ><i class="fal fa-bars" style="color: #9d6b34!important;"></i></a>
                        </div>
                        <div class="header-cta" style="margin-right: 40px;">
                           <a href="#"><i class="fas fa-phone-alt"></i></a>
                           <div class="phone-number">
                              <span>{{__('phone')}}</span>
                              <p><a href="tel:09-888828181" style="color: #9d6b34;">{{__('no')}}</a></p>
                           </div>
                        </div>
                           </div>
                           <div class="col-lg-3">
                           </div>
                        </div>
                  </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <!-- <div class="sidebar__close">
               <button class="sidebar__close-btn sidebar__close-btn-3" id="sidebar__close-btn">
                  <i class="fal fa-times"></i>
               </button>
            </div> -->
            <div class="sidebar__content">
               <div class="sidebar__logo mb-40">
                  <a href="index.html">
                  <img src="{{asset('assets/img/logo/MyanmarFarm.png')}}" alt="logo">
                  </a>
               </div>
               <!-- <div class="sidebar__search sidebar__search-3 mb-25">
                  <form action="#">
                     <input type="text" placeholder="What are you searching for?">
                     <button type="submit" ><i class="far fa-search"></i></button>
                  </form>
               </div> -->
               <div class="mobile-menu fix"></div>
               <!-- <div class="sidebar__text d-none d-lg-block">
                  <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore</p>
               </div> -->
               <!-- <div class="sidebar__img d-none d-lg-block mb-20">
                  <div class="row gx-2">
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="image-popups" href="assets/img/project/project-7.jpg">
                              <img src="{{asset('assets/img/project/project-7.jpg')}}" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="image-popups" href="assets/img/project/project-8.jpg">
                              <img src="{{asset('assets/img/project/project-8.jpg')}}" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="image-popups" href="assets/img/project/project-9.jpg">
                              <img src="{{asset('assets/img/project/project-9.jpg')}}" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="image-popups" href="assets/img/project/project-10.jpg">
                              <img src="{{asset('assets/img/project/project-10.jpg')}}" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="image-popups" href="assets/img/project/project-13.jpg">
                              <img src="{{asset('assets/img/project/project-13.jpg')}}" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="image-popups" href="assets/img/project/project-12.jpg">
                              <img src="{{asset('assets/img/project/project-12.jpg')}}" alt="">
                           </a>
                        </div>
                     </div>
                  </div>
               </div> -->
               <!-- <div class="sidebar__map d-none d-lg-block mb-15">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
               </div> -->
               <div class="sidebar__contact sidebar__contact-3 mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">{{__('address-no')}} <br>{{__('township')}}</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="tel:09-888828181">{{__('no')}}</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="mailto:@info@venue36group.com">@info@venue36group.com</a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="sidebar__social sidebar__social-3">
                  <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      @yield('content')

      <!-- footer -->
      <footer class="footer mt-5">
         <div class="footer-top footer-top-3 pt-80 pb-40">
            <div class="container">
               <div class="footer-features h3-gray-bg mb-70">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-3 col-md-4 col-12">
                           <div class="footer-logo mb-20">
                              <a href="#"><img src="{{asset('assets/img/logo/MyanmarFarm.png')}}" alt=""></a>
                           </div>
                        </div> 
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                           <div class="footer-features-item-h3 footer-features-item mb-20">
                              <i class="flaticon-fields"></i>
                              <h5 class="footer-features-title-h3 footer-features-title">We Use <br> New Technology</h5>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                           <div class="footer-features-item-h3 footer-features-item mb-20">
                              <i class="flaticon-sapling"></i>
                              <h5 class="footer-features-title-h3 footer-features-title">Some of the partners
                                <br> & clients</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4">
                      <div class="footer-widget footer-widget-2 footer-col-1 mb-40">
                        <h5 class="footer-title-white footer-title mb-35">About Us</h5>
                        <p >Our experts introduce the six major areas to address when becoming Business Anywhere &amp; why these matter in our white paper.</p>
                        <div class="footer-social-icon-3 footer-social-icon mt-35">
                           <h4 class="social-icon-title">Social Connect</h4>
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                           <a href="#"><i class="fab fa-twitter"></i></a>
                           <a href="#"><i class="fab fa-behance"></i></a>
                           <a href="#"><i class="fab fa-youtube"></i></a>
                           <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-6 footer-col-5 mb-40">
                        <h5 class="footer-sm-title footer-title-h3 footer-title mb-30">{{__('service')}}</h5>
                        <div class="footer-menu footer-menu-3">
                           <ul>
                               <li><a href="">Selling Calves & Cattles</a></li>
                               <li><a href="">Premium Dairy Products</a></li>
                               <li><a href="">Cattle Share Lease</a></li>
                               <li><a href="">Farm Visits</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-5 mb-40">
                        <h5 class="footer-sm-title footer-title-h3 footer-title mb-30">{{__('page')}}</h5>
                           <ul class="footer-menu footer-menu-3 footer-menu-c"> 
                                 <li><a href="{{url('/',app()->getLocale())}}" class="@yield('home-active')">{{__('home')}}</a></li>
                                 <li><a href="{{route('about',app()->getLocale())}}" class="@yield('about-active')">{{__('about')}}</a>
                                    <!-- <ul class="sub-menu-h1 sub-menu">
                                       <li><a href="{{route('csr',app()->getLocale())}}">{{__('csr-stretegy')}}</a></li>
                                       <li><a href="{{route('partner',app()->getLocale())}}">{{__('partnership')}}</a></li>
                                    </ul> -->
                                 </li>
                                 <li><a href="{{route('gallery',app()->getLocale())}}" class="@yield('gallery-active')">{{__('gallery')}}</a></li>
                                 <li><a href="{{route('vacancies',app()->getLocale())}}" class="@yield('vacancy-active')">{{__('vacancy')}}</a></li>
                                 <li><a href="{{route('news',app()->getLocale())}}" class="@yield('blog-active')">{{__('news')}}</a></li>
                                 <li><a href="{{route('contact',app()->getLocale())}}" class="@yield('contact-active')">{{__('contact')}}</a></li>  
                           </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copy-right-area h3-deep-bg pt-30">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <p class="mb-30 copy-right-text-2 copy-right-text-1">design & copyright by <a href="#">@BigTech International</a> - 2023</p>
                  </div>
                  <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="payment-img mb-30 f-right">
                          <a href="#"><img src="assets/img/service/payment-icon-2.png" alt=""></a>
                      </div>
                  </div> -->
               </div>
            </div>
         </div>
          
      </footer>
      
         
      
      
      <!-- footer -->
      
      <!-- JS here -->
      <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
      
      

      <script src="{{asset('assets/js/vendor/waypoints.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/meanmenu.js')}}"></script>
      <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
      <script src="{{asset('assets/js/parallax.min.js')}}"></script>
      <!-- <script src="{{asset('assets/js/backToTop.js')}}"></script> -->
      <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
      <script src="{{asset('assets/js/counterup.min.js')}}"></script>
      <script src="{{asset('assets/js/ajax-form.js')}}"></script>
      <script src="{{asset('assets/js/wow.min.js')}}"></script>
      <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/js/main.js')}}"></script>

      
      @yield('extra-js')

      <script>
         
            var currentLanguage = window.location.pathname.split('/')[1];
            console.log(currentLanguage);

            // Set the selected option in the language selector
            document.getElementById('languageSelector').value = currentLanguage;

            function changeLanguage(lang) {
        // Get all URL segments after the language segment
        var pathSegments = window.location.pathname.split('/');
        var languageIndex = pathSegments.indexOf(currentLanguage);

        if (languageIndex !== -1) {
            // Replace the language with the new language
            pathSegments[languageIndex] = lang;

            // Construct the new URL with the updated language and original URL segments
            var newUrl = pathSegments.join('/');
            console.log(newUrl);

            // Append the existing query parameters
            var queryParams = window.location.search;
            newUrl += queryParams;

            // Redirect to the new URL
            window.location.href = newUrl;
        } else {
            console.error('Language segment not found in URL.');
        }
    }
    

            
        
      </script>
   </body>
   <select id="languageSelector" onchange="changeLanguage(this.value)">
                              <option value="en" {{ $language === 'en' ? 'selected' : '' }}>English 🇺🇸</option>
                              <option value="my" {{ $language === 'my' ? 'selected' : '' }}>Myanmar 🇲🇲</option>
                           </select>
</html>
