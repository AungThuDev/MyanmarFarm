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
                                          <a href="{{url('/',app()->getLocale())}}" ><span style="color: #fff;">{{__('home')}}</span></a>
                                       </li>
                                       <li>
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
         <div class="news-detalis-area mt-120 mb-70">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-8">
                     <div class="news-detalis-content mb-50">
                        <ul class="blog-meta mb-20">
                           
                           <li><i class="fal fa-calendar-alt"></i>{{$blog->created_at}}</li>
                        </ul>
                        <div class="news-thumb mt-40">
                           <img src="{{ asset('storage/blogs/' . $blog->image) }}" width="850" height="450" alt="blog" class="img-fluid">
                        </div>
                        <h4 class="news-title mt-60" style="color: #9d6b34;">
                           {{$blog->title}}
                        </h4>
                        <p class="mt-25 mb-50" style="color: #000!important;text-align:justify;">{!! nl2br($blog->body) !!}</p>
                        <a href="{{ url(app()->getLocale() . '/news') }}" class="read-btn">
                              <i class="fal fa-arrow-circle-left"></i> Back
                        </a>
                        
                        
                        
                        
                        
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4">
                     <div class="news-sidebar pl-10">
                        <div class="row">
                            
                            <div class="col-lg-12 col-md-12">
                              <div class="widget">
                                 <h6 class="sidebar-title">Popular Feeds</h6>
                                 <div class="n-sidebar-feed">
                                 <ul>
                                          
                                          @foreach($popularblogs as $blog)
                                          <li>
                                             <div class="feed-number">
                                                   <a href="{{ url(app()->getLocale() . '/news/' . $blog->id . '/detail') }}"><img src="{{ asset('storage/blogs/' . $blog->image) }}" width="288" height="" alt=""></a>
                                             </div>
                                             <div class="feed-content">
                                                   <h6><a href="{{ url(app()->getLocale() . '/news/' . $blog->id . '/detail') }}">{{$blog->title}}</a></h6>
                                                   <span class="feed-date">
                                                      <i class="fal fa-calendar-alt"></i> {{$blog->created_at}}
                                                   </span>
                                             </div>
                                             @endforeach
                                            
                                          </li>
                                          
                                          
                                       </ul>
                                 </div>
                              </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- news-detalis-area-end  -->
      </main>
@endsection