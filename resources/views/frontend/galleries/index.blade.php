@extends('frontend.template')
@section('gallery-active','active')
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
                                    <ul>
                                       <li>
                                          <a href="#"><span >Home</span></a>
                                       </li>
                                       <li class="trail-item trail-end">
                                          <span style="color: #fdd062;">Showcast</span>
                                       </li>
                                    </ul>
                                 </nav> 
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fdd062!important;">Photo Gallary</h3>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <!-- page__title -end -->
         
         <!-- gallery-area-start -->
         <div class="gallery-area pt-120 pb-90">
            <div class="container">
               <div class="row">

                  @forelse($galleries as $gallery)
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                     <div class="gallery-item mb-30">
                        <img src="{{ asset('storage/gallery/' . $gallery->image) }}" alt="" class="img-fluid">
                        
                     </div>
                  </div>
                  @empty
                  <div class="col-lg-12 col-md-12">
                     <h3 style="color: #9d6b34!important;" class="d-flex justify-content-center">No Photo Here.......</h3>
                  </div>
                  @endforelse 
                  
               </div>
                <div class="d-flex justify-content-center">
                    {{$galleries->links()}}
                </div>
                    
              
            </div>
         </div>
         <!-- gallery-area-end -->
      </main>
      
@endsection