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
                                          <a href="#"><span style="color: #fff;">Home</span></a>
                                       </li>
                                       <li class="trail-item trail-end">
                                          <span style="color: #fff;">News</span>
                                       </li>
                                    </ul>
                                 </nav> 
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fff!important;">News</h3>
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
                  
                  <div class="col-xl-8 col-lg-8">
                  
                  @forelse($blogs as $blog)
                    
                     <div class="single-news mb-55">
                        <div class="news-thumb">
                           <a href=""><img src="{{ asset('storage/blogs/' . $blog->image) }}" width="850" height="450" alt="blog" class="img-fluid"></a>
                        </div>
                        <div class="news-detalis-content news-detalis-content-2">
                           <ul class="blog-meta mb-20">
                              <li><a href="#"><i class="fal fa-calendar-alt"></i>{{$blog->created_at}}</a></li>
                           </ul>
                           <h4 class="news-title mt-20 mb-20" style="color: #9d6b34;">
                              <a href="news-details.html">{{$blog->title}}</a>
                           </h4>
                           <p style="color: #000!important;">
                                {{ substr($blog->body, 0, 300) }}...
                           </p>
                           <div class="read-button mt-30">
                           <a href="{{ url(app()->getLocale() . '/news/' . $blog->id . '/detail') }}" class="read-btn">
                              <i class="fal fa-arrow-circle-right"></i> Read More
                           </a>
                           </div>    
                        </div>
                     </div>
                     @empty
                        <div class="single-news mb-55">
                           <h3 class="d-flex justify-content-center" style="color: #9d6b34!important;">No Posts Here.....</h3>
                        </div>
                     @endforelse
                     
                     
                     {{$blogs->links()}}
                  </div>
                  
                  <div class="col-xl-4 col-lg-4">
                     <div class="news-sidebar pl-10">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="widget">
                                    <h6 class="sidebar-title" style="color: #9d6b34;"> Search Here</h6>
                                    <div class="n-sidebar-search">
                                       <form action="{{route('search-news',app()->getLocale())}}">
                                       <div class="row">
                                          <div class="col-10">
                                             <input type="text" name="search" placeholder="Search your keyword...">
                                          </div>
                                          <div class="col-2" style="margin-left: -22px; ">
                                             <button class="btn btn-success" style="padding: 17px; background-color: #9d6b34!important;border-color: #9d6b34;"><i class="fal fa-search"></i></button>
                                          </div>
                                       </div>
                                       
                                        
                                       </form>
                                        
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                              <div class="widget">
                                 <h6 class="sidebar-title" style="color: #9d6b34;">Popular Feeds</h6>
                                 <div class="n-sidebar-feed">
                                       <ul>
                                          @if(count($blogs)>0)
                                          @foreach($popularblogs as $blog)
                                          <li>
                                             <div class="feed-number">
                                                   <a href="{{route('news.detail',['id'=>$blog->id,'language'=>app()->getLocale()])}}"><img src="{{ asset('storage/blogs/' . $blog->image) }}" width="288" height="" alt=""></a>
                                             </div>
                                             <div class="feed-content">
                                                   <h6><a href="news-details.html">{{$blog->title}}</a></h6>
                                                   <span class="feed-date">
                                                      <i class="fal fa-calendar-alt"></i> {{$blog->created_at}}
                                                   </span>
                                             </div>
                                             @endforeach
                                             @else
                                             <h6 class="d-flex justify-content-center" style="color: #9d6b34!important;">No Popular Feeds.....</h6>
                                             @endif
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
