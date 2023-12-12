@extends('frontend.template')
@section('vacancy-active','active')
@section('content')
<main>
         <!-- page__title -start -->
         <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-140" data-background="assets/img/aboutus_cow.jpg" style="background-repeat: no-repeat; background-size:cover;">
            <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="page__title-content text-center">
                            <div class="page_title__bread-crumb">
                              <nav aria-label="breadcrumb">
                                 <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                       <li>
                                          <a href="#"><span>Home</span></a>
                                       </li>
                                       <li class="trail-item trail-end">
                                          <span style="color: #fdd062;">Vacancy</span>
                                       </li>
                                    </ul>
                                 </nav> 
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fdd062!important;">Vacancy Announcement</h3>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <!-- page__title -end -->

         <!-- project-area-start -->
         <div class="project-area mt-120 mb-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 justify-content-center mb-60">
                     <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-6">
                           <form action="{{route('search-vacancies',app()->getLocale())}}" class="form">
                              <i class="fa fa-search"></i>
                              <input type="text" name="search" id="search" class="form-control form-input" placeholder="Search anything...">
                              <span class="left-pan"><i class="fa fa-microphone"></i></span>
                           </form>
  
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row grid">
                  @forelse($vacancies as $vacancy)
                  <div class="col-lg-4 col-md-6 c2 c3 c4 c5">
                      <div class="project-img mb-70">
                          <div class="inner-img"><a href="#"><img src="{{asset('assets/img/job.jpeg')}}" alt="" class="fluid"></a></div>
                          <div class="project-img-content">
                              <h4 class="project-sm-title"><a href="project-details.html">{{$vacancy->type}}</a></h4>
                          </div>
                      </div>
                  </div>
                  @empty
                     <div class="col-lg-12 col-lg-4 c2 c3 c4 c5">
                        <h3 style="color: #9d6b34!important;" class="d-flex justify-content-center">No Vacancy Announcement Found!...</h3>
                     </div>
                  @endforelse
                  
                  </div>
                  <!-- <div class="col-lg-4 col-md-6 c2 c3 c4 c5">
                     <div class="project-img mb-70">
                         <div class="inner-img"><a href="project-details.html"><img src="assets/img/project/project-5.jpg" alt="" class="fluid"></a></div>
                         <div class="project-img-content">
                             <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Strawberry</a></h4>
                         </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 c1 c5 c3">
                     <div class="project-img mb-70">
                         <div class="inner-img"><a href="project-details.html"><img src="assets/img/project/project-6.jpg" alt="" class="fluid"></a></div>
                         <div class="project-img-content">
                             <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Cabbage</a></h4>
                         </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 c4 c1 c3 c5">
                     <div class="project-img mb-70">
                         <div class="inner-img"><a href="project-details.html"><img src="assets/img/project/project-7.jpg" alt="" class="fluid"></a></div>
                         <div class="project-img-content">
                             <h4 class="project-sm-title"><a href="project-details.html">Pure Chili Pepper</a></h4>
                         </div>
                     </div>
                  </div> -->
                  <!-- <div class="col-lg-4 col-md-6 c2 c1 c5 c4">
                    <div class="project-img mb-70">
                        <div class="inner-img"><a href="project-details.html"><img src="assets/img/project/project-8.jpg" alt="" class="fluid"></a></div>
                        <div class="project-img-content">
                            <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Basil</a></h4>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 c2 c1 c3 c4">
                    <div class="project-img mb-70">
                        <div class="inner-img"><a href="project-details.html"><img src="assets/img/project/project-9.jpg" alt="" class="fluid"></a></div>
                        <div class="project-img-content">
                            <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Gardens</a></h4>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 c2 c1 c3 c4">
                     <div class="project-img mb-70">
                         <div class="inner-img"><a href="project-details.html"><img src="assets/img/project/project-10.jpg" alt="" class="fluid"></a></div>
                         <div class="project-img-content">
                             <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Corn</a></h4>
                         </div>
                     </div>
                  </div> -->
                  <!-- <div class="col-lg-4 col-md-6 c2 c3 c4 c5">
                     <div class="project-img mb-70">
                           <div class="inner-img"><a href="project-details.html"><img src="assets/img/project/project-12.jpg" alt="" class="fluid"></a></div>
                           <div class="project-img-content">
                              <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Asparagus</a></h4>
                           </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 c1 c5 c2">
                     <div class="project-img mb-70">
                           <div class="inner-img"><a href="project-details.html"><img src="assets/img/project/project-13.jpg" alt="" class="fluid"></a></div>
                           <div class="project-img-content">
                              <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Blueberry</a></h4>
                           </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 c4 c3 c1">
                     <div class="project-img mb-70">
                           <div class="inner-img"><a href="#"><img src="assets/img/project/project-14.jpg" alt="" class="fluid"></a></div>
                           <div class="project-img-content">
                              <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Grapes</a></h4>
                           </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 c2 c1 c5 c3">
                     <div class="project-img mb-70">
                        <div class="inner-img"><a href="#"><img src="assets/img/project/project-15.jpg" alt="" class="fluid"></a></div>
                        <div class="project-img-content">
                              <h4 class="project-sm-title"><a href="project-details.html">Pure Water-Melaon</a></h4>
                        </div>
                     </div>
                  </div> -->
                  <!-- <div class="col-lg-4 col-md-6 c2 c1 c4 c5">
                     <div class="project-img mb-30">
                        <div class="inner-img"><a href="#"><img src="assets/img/project/project-16.jpg" alt="" class="fluid"></a></div>
                        <div class="project-img-content">
                              <h4 class="project-sm-title"><a href="project-details.html">Pure Natural Orange</a></h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 text-center mt-10">
                  <div class="text-center">
                     <a href="project-details.html" class="load-more">Load More <i class="fal fa-plus"></i></a>
                  </div>
              </div> -->
            </div>  
         </div>
         <!-- project-area-end -->

      </main>

@endsection