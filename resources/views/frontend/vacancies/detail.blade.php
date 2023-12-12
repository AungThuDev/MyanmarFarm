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

         <!-- project-details-area-start -->
         <div class="project-details-area pt-120 pb-90">
            <div class="container">
               <div class="row">
                  <div class="col-xl-10 col-lg-10 col-md-10">
                     <div class="project-details-image">
                        <img src="{{asset('assets/img/project/job.jpeg')}}" width="1105" height="570" alt="" class="img-fluid">
                        
                     </div>
                  </div>
               </div>
               
               <div class="project-icon-boxs mt-60">
                  <div class="row">
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                           <i class="flaticon-price-tag" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title">Job Title <br> {{$vacancy->title}}</h6>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                           <i class="flaticon-farmer-2" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title">Job Type <br>{{$vacancy->type}}</h6>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                        <i class="far fa-clock" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title">Working Hours <br>{{$vacancy->working_hours}}</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="project-icon-boxs mt-60">
                  <div class="row">
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                        <i class="fas fa-phone-alt" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title">Job Title <br> {{$vacancy->phone}}</h6>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                           <i class="far fa-envelope-open" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title" style="font-size: 20px;">Job Type <br>{{$vacancy->email}}</h6>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                           <i class="fas fa-map-marker-alt" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title">Working Hours <br>{{$vacancy->working_hours}}</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="project-dt mt-60 ">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 mt-200">
                        <div class="project-img project-img-d mb-70">
                           <div class="inner-img"><a href="#"><img src="assets/img/project/project-d-2.jpg" alt="" class="fluid"></a></div>
                           <div class="project-img-content project-img-content-d">
                               <h4 class="project-sm-title project-title-d"><a href="project.html">Description</a></h4>
                               <p style="color:#000!important;">{{$vacancy->description}}</p>
                                 <div class="bg-shape">
                                    <span>01</span>
                                 </div>
                           </div>
                       </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 mt-200">
                        <div class="project-img project-img-d mb-70">
                           <div class="inner-img"><a href="project.html"><img src="assets/img/project/project-d-3.jpg" alt="" class="fluid"></a></div>
                           <div class="project-img-content project-img-content-d">
                               <h4 class="project-sm-title project-title-d"><a href="project.html">Requirements</a></h4>
                               <p style="color:#000!important;">{{$vacancy->requirements}}</p>
                                 <div class="bg-shape">
                                    <span>02</span>
                                 </div>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
               
               <div class="services-nevigation services-nevigation-2">
                  
               </div>
            </div>
         </div>
          <!-- project-details-area-end -->

      </main>
@endsection