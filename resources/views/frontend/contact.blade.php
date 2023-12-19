@extends('frontend.template')
@section('contact-active','active')
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
                                          <a href="{{url('/',app()->getLocale())}}"><span style="color: #fff;">Home</span></a>
                                       </li>
                                       <li class="trail-item trail-end">
                                          <span style="color: #fff;">{{__('contact')}}</span>
                                       </li>
                                    </ul>
                                 </nav> 
                              </nav>
                            </div>
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30" style="color: #fff!important;">{{__('contact')}}</h3>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <!-- page__title -end -->

         <!-- tp-contact-area-start -->
         <div class="tp-contact-area pt-115">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-10">
                        <div class="tp-section-wrap">
                           <span><i class="flaticon-grass" style="color: #9d6b34;"></i></span>
                           <h3 class="tp-section-title" style="color: #9d6b34!important;">{{__('contact-title')}}</h3>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-40">
                     <div class="col-lg-4">
                           <div class="row custom-mar-20">
                              <div class="col-lg-12 col-md-4 col-sm-6">
                                 <div class="tp-contact-info mb-40">
                                       <div class="tp-contact-info-icon">
                                          <i class="fas fa-map-marker-alt" style="color: #9d6b34;"></i>
                                       </div>
                                       <div class="tp-contact-info-text">
                                          <h4 class="tp-contact-info-title mb-15">{{__('address')}}</h4>
                                          <p><a href="#" class="text-dark">{{__('address-no')}} <br>{{__('township')}}<br>{{__('region')}}</a></p>
                                       </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-4 col-sm-6">
                                 <div class="tp-contact-info mb-40">
                                    <div class="tp-contact-info-icon">
                                       <i class="fas fa-phone-alt" style="color: #9d6b34;"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                       <h4 class="tp-contact-info-title mb-15">{{__('phone')}}</h4>
                                       <p><a href="tel:09-888828181" class="text-dark">{{__('no')}}</a>
                                      
                                    </div>
                              </div>
                              </div>
                              <div class="col-lg-12 col-md-4 col-sm-6">
                                 <div class="tp-contact-info mb-40">
                                    <div class="tp-contact-info-icon">
                                       <i class="fas fa-envelope-open" style="color: #9d6b34;"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                       <h4 class="tp-contact-info-title mb-15">{{__('mail-address')}}</h4>
                                       <p><a href="mailto:info@themepure.com" class="text-dark">info@venue36group.com</a>
                                       <br> <a href="mailto:info@themepure.com" class="text-dark">aungmyatkhaing@venue36group.com</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-lg-8">
                           <div class="tp-contact-form">
                              <div class="row custom-mar-20">
                                 <div class="col-md-6 custom-pad-20">
                                       <div class="tp-contact-form-field mb-20">
                                          <input type="text" placeholder="{{__('full-name')}}">
                                       </div>
                                 </div>
                                 <div class="col-md-6 custom-pad-20">
                                       <div class="tp-contact-form-field mb-20">
                                          <input type="email" placeholder="{{__('email-address')}}">
                                       </div>
                                 </div>
                                 <div class="col-md-6 custom-pad-20">
                                       <div class="tp-contact-form-field mb-20">
                                          <input type="text" placeholder="{{__('phone')}}">
                                       </div>
                                 </div>
                                 <div class="col-md-6 custom-pad-20">
                                       <div class="tp-contact-form-field select-field-arrow mb-20">
                                          <select>
                                             <option value="">{{__('choose')}}</option>
                                             <option value="">Organic Food</option>
                                             <option value="">Cow Meat</option>
                                             <option value="">Cow Milk</option>
                                             <option value="">Cow Feed</option>
                                          </select>
                                       </div>
                                 </div>
                                 <div class="col-md-12 custom-pad-20">
                                       <div class="tp-contact-form-field mb-20">
                                          <textarea placeholder="{{__('message')}}"></textarea>
                                       </div>
                                 </div>
                                 <div class="col-md-12 custom-pad-20">
                                       <div class="tp-contact-form-field">
                                          <button type="submit" class="read-btn sumit-btn"><i class="flaticon-enter"></i>{{__('send')}}</button>
                                       </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
         <!-- tp-contact-area-end -->

         <!-- tp-map-area-start -->
         <div class="tp-map-area pt-115 pb-110">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                           <div class="tp-contact-map">
                              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830894612!2d-74.11976383964465!3d40.69766374865766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1636888514620!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.85204436746!2d96.1562828113382!3d16.7840351198382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed933b34c801%3A0x38a4de5f667ee716!2sVenue%2036%20Co.%2C%20Ltd.!5e0!3m2!1sen!2smm!4v1694771853071!5m2!1sen!2smm" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
         <!-- tp-map-area-end -->

      </main>
@endsection