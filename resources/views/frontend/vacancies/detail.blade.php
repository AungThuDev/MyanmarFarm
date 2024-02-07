@extends('frontend.template')
@section('vacancy-active','active')
@section('content')
<main>
        <!-- page__title -start -->
         <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-140" data-background="{{asset('assets/img/images/beefcattle3-min.webp')}}" style="background-repeat: no-repeat; background-size:cover;">
            <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="page__title-content text-center">
                            <div class="page_title__bread-crumb">
                              <nav aria-label="breadcrumb">
                                 <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                       <li>
                                          <a href="{{url('/',app()->getLocale())}}"><span style="color: #fff;">{{__('home')}}</span></a>
                                       </li>
                                       <li class="trail-item trail-end">
                                          <span style="color: #fff;">{{__('vacancy')}}</span>
                                       </li>
                                    </ul>
                                 </nav> 
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fff!important;">{{__('vacancy-announcement')}}</h3>
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
                        <img src="{{asset('assets/img/images/job-min.jpeg')}}" width="1105" height="570" alt="Joyful Farmers at Myanmar Farm - Nurturing Growth" class="img-fluid">
                     </div>
                  </div>
               </div>

               <div class="project-icon-boxs mt-60">
                  <div class="row">
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                           <i class="fas fa-briefcase"></i>
                           <h6 class="icon-box-title" style="font-size: 18px;">Job Title <br> <span style="font-size: 15px;">{{$vacancy->title}}</span></h6>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                        <i class="fas fa-tractor"></i>
                           <h6 class="icon-box-title" style="font-size: 18px;">Job Type <br><span style="font-size: 15px;">{{$vacancy->type}}</span></h6>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                        <i class="far fa-clock" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title" style="font-size: 18px;">Working Hours <br><span style="font-size: 15px;">{{$vacancy->working_hours}}</span></h6>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="project-d-descriptiopn mt-70">
                  <h4 style="font-size: 30px;color:#9d6b34!important;">Description</h4><hr style="width: 170px;border-bottom:2px solid #9d6b34;">
                  <!-- <p class="pl-110 pt-25" style="color: #000!important;font-size:20px;">escription</p><br><br> -->
                  <p class="pt-15" style="color: #000!important;">{{$vacancy->description}}</p>
               </div>
               
               <div class="project-d-descriptiopn mt-70">
               <h4 style="font-size: 30px;color:#9d6b34!important;">Requirements</h4><hr style="width: 200px;border-bottom:2px solid #9d6b34;">
                  <!-- <p class="pl-110 pt-25" style="color: #000!important;font-size:20px;">escription</p><br><br> -->
                  <p class="pt-15" style="color: #000!important;">{{$vacancy->requirements}}</p>
               </div>
               <div class="project-d-descriptiopn mt-70">
               <h4 style="font-size: 30px;color:#9d6b34!important;">Benifits</h4><hr style="width: 120px;border-bottom:2px solid #9d6b34;">
                  <!-- <p class="pl-110 pt-25" style="color: #000!important;font-size:20px;">escription</p><br><br> -->
                  <p class="pt-15" style="color: #000!important;">{{$vacancy->benefits}}</p>
               </div>
               <div class="project-icon-boxs mt-60">
                  <div class="row">
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                        <i class="fas fa-phone-alt" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title" style="font-size: 18px;">Phone No. <br> <span style="font-size: 15px;">{{$vacancy->phone}}</span></h6>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                           <i class="far fa-envelope-open" style="color: #9d6b34;"></i>
                           
                           <h6 class="icon-box-title" style="font-size: 18px;">Email<br> <a href="mailto:{{$vacancy->email}}"><span style="font-size: 15px;">{{$vacancy->email}}</span></a></h6>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <div class="single-box mb-30">
                           <i class="fas fa-map-marker-alt" style="color: #9d6b34;"></i>
                           <h6 class="icon-box-title" style="font-size: 18px;"> Address <br><span style="font-size: 15px;">{{$vacancy->address}}</span></h6>
                        </div>
                     </div>
                  </div>
               </div>
               
               <a href="{{ url(app()->getLocale() . '/vacancies') }}" class="read-btn mb-10" style="margin-left:3px;">
                  <i class="fas fa-arrow-circle-left"></i> Back
               </a>
               <div class="services-nevigation services-nevigation-2">
                  
               </div>
            </div>
         </div>
          <!-- project-details-area-end -->

      </main>
@endsection