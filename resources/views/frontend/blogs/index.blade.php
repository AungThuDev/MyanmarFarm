@extends('frontend.template')
@section('blog-active','active')
@section('content')
<main>
         <!-- page__title -start -->
         <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-140" data-background="{{asset('assets/img/beefcattle3.jpg')}}" style="background-repeat: no-repeat; background-size:cover;">
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
                                          <span style="color: #fff;">{{__('news')}}</span>
                                       </li>
                                    </ul>
                                 </nav>
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fff!important;">{{__('news')}}</h3>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <!-- page__title -end -->

         <!-- news-detalis-area-start -->
         <div class="news-detalis-area mt-120 mb-65">
            <div class="container">
            <div class="row">
                  <div class="col-lg-12 justify-content-center mb-60">
                     <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-6">
                           <form action="{{route('search-news',['language'=>app()->getLocale()])}}" class="form" method="GET">
                              <i class="fa fa-search"></i>
                              <input type="text" name="search" id="search" class="form-control form-input" placeholder="Search anything...">
                              <span class="left-pan"><i class="fa fa-microphone"></i></span>
                           </form>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="row grid">
                  @forelse($blogs as $blog)
                  <div class="col-lg-4 col-md-6 c2 c3 c4 c5">
                      <div class="project-img mb-70">
                          <div class="inner-img"><a href="{{ url(app()->getLocale() . '/news/' . $blog->id . '/detail') }}"><img src="{{ '/storage/blogs/' . $blog->image }}" style="width:420px;height:270px;" alt="Empowering Communities - Impactful Agricultural Programs" class="fluid"></a></div>
                          <div class="project-img-content">
                              <h4 class="project-sm-title" style="color:#9d6b34;font-size: 15px!important;font-weight:900;"><a href="{{ url(app()->getLocale() . '/news/' . $blog->id . '/detail') }}">{{$blog->title}}</a></h4>
                          </div>
                      </div>
                  </div>
                  
                  @empty
                  <div class="col-lg-12 col-md-12 c2 c3 c4 c5">
                      <h3 style="color: #9d6b34!important;" class="d-flex justify-content-center">No Blogs here....</h3>
                  </div>
                  @endforelse
                  <div class="d-flex justify-content-center">
                  {{$blogs->links()}}
                  </div>
                  
            </div>
            </div>
         </div>
         <!-- news-detalis-area-end  -->

      </main>

@endsection

