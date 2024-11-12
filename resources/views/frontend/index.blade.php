@extends('frontend.layouts.master')
@section('title')
    Index
@endsection
@section('content')
<main id="main" class="site-main hfeed">
    <div data-elementor-type="wp-page" data-elementor-id="6" class="elementor elementor-6" data-elementor-post-type="page">
      <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-f1dce11 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f1dce11" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-container elementor-column-gap-no">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a55b2d" data-id="1a55b2d" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-a0d7c3e elementor-invisible elementor-widget elementor-widget-prime-slider-general" data-id="a0d7c3e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounce&quot;}" data-widget_type="prime-slider-general.default">
                <div class="elementor-widget-container">
                  <div class="bdt-prime-slider">
                    <div class="bdt-prime-slider-skin-general">
                      <div class="bdt-position-relative bdt-visible-toggle" bdt-slideshow="{&quot;animation&quot;:&quot;scale&quot;,&quot;ratio&quot;:&quot;16:7&quot;,&quot;min-height&quot;:300,&quot;autoplay&quot;:true,&quot;autoplay-interval&quot;:7000,&quot;pause-on-hover&quot;:false,&quot;draggable&quot;:true,&quot;velocity&quot;:1,&quot;finite&quot;:false}" data-settings="{&quot;id&quot;:&quot;#bdt-a0d7c3e&quot;,&quot;animation_status&quot;:&quot;no&quot;}" id="bdt-a0d7c3e">
                        <ul class="bdt-slideshow-items">
                          @foreach ($hero as $item)
                              
                         
                          <li class="bdt-slideshow-item bdt-flex bdt-flex-middle bdt-flex-center elementor-repeater-item-17cb136">
                            <div class="bdt-ps-slide-img" style="background-image: url('{{ asset("storage/".$item->photo ) }}')"></div>
                            <div class="bdt-overlay-default bdt-position-cover"></div>
                            <div class="bdt-position-z-index bdt-position-large">
                              <div class="bdt-prime-slider-wrapper">
                                <div class="bdt-prime-slider-content">
                                  <div class="bdt-prime-slider-desc">
                                    <div data-bdt-slideshow-parallax="x: 150,0,-30; opacity: 1,1,0">
                                      <div class="bdt-btn-wrapper"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          @endforeach

                        </ul>
                        <div class="reveal-muted"><a class="bdt-position-bottom-right bdt-prime-slider-previous" href="#" bdt-slidenav-previous bdt-slideshow-item="previous"></a><a class="bdt-position-bottom-right bdt-prime-slider-next" href="#" bdt-slidenav-next bdt-slideshow-item="next"></a></div>
                        <div>
                          <ul class="bdt-slideshow-nav bdt-dotnav bdt-margin-large bdt-position-bottom-left bdt-text-center reveal-muted"></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-1b6f9b5 ct-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="1b6f9b5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;mountains&quot;,&quot;animation&quot;:&quot;fadeInDown&quot;,&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-shape elementor-shape-top" data-negative="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z" />
            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z" />
            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z" />
          </svg></div>
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-602f281" data-id="602f281" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-f6e3761 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f6e3761" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f8ef256" data-id="f8ef256" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-94c5361 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="94c5361" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                        <div class="elementor-widget-container">
                          <div class="ekit-wid-con">
                            <!-- link opening -->
                            <!-- end link opening -->
                            <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-pulse-grow media  ">
                              <div class="elementskit-box-header elementor-animation-">
                                <div class="elementskit-info-box-icon  text-center">
                                  <i aria-hidden="true" class="elementkit-infobox-icon fas fa-chess"></i>
                                </div>
                              </div>
                              <div class="box-body">
                                <h3 class="elementskit-info-box-title"> Our Mission </h3>
                                <p>{!! $mission->desc !!}</p>
                              </div>
                              <div class="icon-hover">
                                <i aria-hidden="true" class="icon icon-communication"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b709dab" data-id="b709dab" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-6f1d822 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="6f1d822" data-element_type="widget" data-widget_type="elementskit-icon-box.default"><div class="elementor-widget-container"><div class="ekit-wid-con">
                            <!-- link opening -->
                            <!-- end link opening -->
                            <div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation-pulse-grow media  ">
                              <div class="elementskit-box-header elementor-animation-">
                                <div class="elementskit-info-box-icon  text-center">
                                  <i aria-hidden="true" class="elementkit-infobox-icon far fa-eye"></i>
                                </div>
                              </div>
                              <div class="box-body">
                                <h3 class="elementskit-info-box-title"> Our Vision </h3>
                                <p>{!! $vision->desc !!}</p>
                              </div>
                              <div class="icon-hover">
                                <i aria-hidden="true" class="icon icon-idea_generate"></i>
                              </div>
                            </div>
                          </div></div></div></div></div>
                </div>
              </section><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-74be7e0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="74be7e0" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1b4ec31" data-id="1b4ec31" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-a8037dd elementor-widget elementor-widget-ha-animated-text happy-addon ha-animated-text happy-addon-pro" data-id="a8037dd" data-element_type="widget" data-settings="{&quot;animation_delay&quot;:2500}" data-widget_type="ha-animated-text.default"><div class="elementor-widget-container"><h2 class="ha-animated-text-wrap cd-headline letters rotate-2" data-animation-delay="2500">
                            <span class="ha-animated-text cd-words-wrapper">
                              <b class="elementor-repeater-item-a92ec88 is-visible">Empowering Innovation</b>
                              <b class="elementor-repeater-item-831038d">Igniting Entrepreneurship</b>
          
                            </span>
                          </h2></div></div><div class="elementor-element elementor-element-fb2de8a elementor-widget__width-initial elementor-widget elementor-widget-elementskit-heading" data-id="fb2de8a" data-element_type="widget" data-widget_type="elementskit-heading.default"><div class="elementor-widget-container"><div class="ekit-wid-con">
                            <div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                              <h2 class="ekit-heading--title elementskit-section-title ">Our <span>Programs</span>
                              </h2>
                              <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider">
                                <div class="elementskit-border-divider"></div>
                              </div>
            
                            </div>
                          </div></div></div></div></div></div></section><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-e9fdded elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e9fdded" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-59b3b04" data-id="59b3b04" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-59e14be elementor-invisible elementor-widget elementor-widget-eael-post-carousel" data-id="59e14be" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;items&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;items_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;items_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="eael-post-carousel.default"><div class="elementor-widget-container"><div class="swiper-container-wrap eael-logo-carousel-wrap eael-post-grid-container eael-post-carousel-wrap eael-post-carousel-style-three swiper-container-wrap-dots-outside" id="eael-post-grid-59e14be">
                            <div class="swiper-container eael-post-carousel eael-post-grid swiper-container-59e14be eael-post-appender-59e14be show-read-more-button" data-pagination=".swiper-pagination-59e14be" data-arrow-next=".swiper-button-next-59e14be" data-arrow-prev=".swiper-button-prev-59e14be" data-items-mobile="1" data-items-tablet="2" data-items="3" data-margin="10" data-effect="coverflow" data-speed="300" data-autoplay="2000" data-loop="1" data-arrows="1" data-dots="1">
                              <div class="swiper-wrapper">
                                @foreach ($events as $item)
                                <div class="swiper-slide">
                                  <article class="eael-grid-post eael-post-grid-column">
                                    <div class="eael-grid-post-holder">
                                      <div class="eael-grid-post-holder-inner">
                                        <div class="eael-entry-thumbnail ">
                                          <img decoding="async" src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" alt="{{ $item->title }}">
                                          <a href="calling-all-tvet-youths.html"></a>
                                        </div>
                                        <div class="eael-entry-wrapper">
                                          <header class="eael-entry-header">
                                            <h2 class="eael-entry-title">
                                              <a class="eael-grid-post-link" href="sponserships.html" title="{{ $item->title }}">{{ $item->title }}</a>
                                            </h2>
                                          </header>
                                        </div>
                                        <div class="eael-entry-content">
                                          <div class="eael-grid-post-excerpt">
                                            <p></p>
                                            <div class="eael-post-elements-readmore-wrap">
                                              <a href="sponserships.html" class="eael-post-elements-readmore-btn">Read More</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </article>
                                </div>
                                @endforeach
         
                         
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination swiper-pagination-59e14be"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-next-59e14be">
                              <i class="fa fa-angle-right"></i>
                            </div>
                            <div class="swiper-button-prev swiper-button-prev-59e14be">
                              <i class="fa fa-angle-left"></i>
                            </div>
                          </div>
                        </div></div></div></div></div></section>
            </div>
          </div>
        </div>
      </section>
      <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-9be5b61 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="9be5b61" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-background-overlay"></div><div class="elementor-container elementor-column-gap-no"><div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7ea679d" data-id="7ea679d" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-73ea331 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="73ea331" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-14566ca" data-id="14566ca" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-5908698 elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5908698" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                          <ul class="elementor-icon-list-items">
                            <li class="elementor-icon-list-item">
                              <span class="elementor-icon-list-icon">
                                <i aria-hidden="true" class="far fa-newspaper"></i>
                              </span>
                              <span class="elementor-icon-list-text">News updates</span>
                            </li>
                          </ul>
                        </div>
                      </div></div></div></div></section><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-faaaeeb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="faaaeeb" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c147ba8" data-id="c147ba8" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-bba1a10 elementor-widget elementor-widget-spacer" data-id="bba1a10" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                          </div>
                        </div>
                      </div><div class="elementor-element elementor-element-3aee4c8 ha-card--left ha-card--tablet-top ha-card--mobile-top elementor-widget elementor-widget-ha-card happy-addon ha-card" data-id="3aee4c8" data-element_type="widget" data-widget_type="ha-card.default">
                        <div class="elementor-widget-container">
                          <figure class="ha-card-figure">
                            <img fetchpriority="high" decoding="async" width="819" height="1024" src="{{ asset('storage/'. $blogFirst->photo) }}" class="attachment-large size-large wp-image-2340" alt=""  sizes="(max-width: 819px) 100vw, 819px" />
                          </figure>
                          <div class="ha-card-body">
                            <h2 class="ha-card-title">{{ $blogFirst->title }}</h2>
                            <div class="ha-card-text">
                              <p>{!! $blogFirst->desc !!}</p>
                            </div>
                            <a class="ha-btn ha-btn--icon-before" href="giving-tuesday.html">
                              <i class="ha-btn-icon fas fa-handshake" aria-hidden="true"></i>
                              <span class="ha-btn-text">Get All News and Blogs</span>
                            </a>
                          </div>
                        </div>
                      </div></div></div></div></section><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-ec73c94 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec73c94" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-24b9e0a" data-id="24b9e0a" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-3e900bb elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline" data-id="3e900bb" data-element_type="widget" data-settings="{&quot;marker&quot;:&quot;curly&quot;,&quot;highlighted_text&quot;:&quot;Testimonials&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}" data-widget_type="animated-headline.default">
                        <div class="elementor-widget-container">
                          <h3 class="elementor-headline">
                            <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                              <span class="elementor-headline-dynamic-text elementor-headline-text-active">Testimonials</span>
                            </span>
                          </h3>
                        </div>
                      </div><div class="elementor-element elementor-element-9b4375e elementor-testimonial--skin-bubble elementor-testimonial--layout-image_inline elementor-testimonial--align-center elementor-arrows-yes elementor-pagination-type-bullets elementor-widget elementor-widget-testimonial-carousel" data-id="9b4375e" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;2&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="testimonial-carousel.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-swiper">
                            <div class="elementor-main-swiper swiper">
                              <div class="swiper-wrapper">
                                @foreach ($testimonial as $item)
                                <div class="swiper-slide">
                                  <div class="elementor-testimonial">
                                    <div class="elementor-testimonial__content">
                                      <div class="elementor-testimonial__text"> {!! $item->desc !!} </div>
                                    </div>
                                    <div class="elementor-testimonial__footer">
                                      <div class="elementor-testimonial__image">
                                        <img decoding="async" src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" alt="Immaculate Matete">
                                      </div>
                                      <cite class="elementor-testimonial__cite">
                                        <span class="elementor-testimonial__name">{{ $item->name }}</span>
                                      </cite>
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                               
                             
                              </div>
                              <div class="swiper-pagination"></div>
                              <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0">
                                <i aria-hidden="true" class="eicon-chevron-left"></i>
                                <span class="elementor-screen-only">Previous</span>
                              </div>
                              <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0">
                                <i aria-hidden="true" class="eicon-chevron-right"></i>
                                <span class="elementor-screen-only">Next</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-ed469af elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie" data-id="ed469af" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/startupafrica.org\/wp-content\/uploads\/2023\/10\/animation_lnaokfqs.json&quot;,&quot;id&quot;:923,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                        <div class="elementor-widget-container">
                          <div class="e-lottie__container">
                            <div class="e-lottie__animation"></div>
                          </div>
                        </div>
                      </div>
          
                    </div></div></div></section><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-e74dc1f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e74dc1f" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-89941e8" data-id="89941e8" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-a2f309d elementor-headline--style-rotate elementor-widget elementor-widget-animated-headline" data-id="a2f309d" data-element_type="widget" data-settings="{&quot;headline_style&quot;:&quot;rotate&quot;,&quot;animation_type&quot;:&quot;clip&quot;,&quot;rotating_text&quot;:&quot;Partnerships&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;rotate_iteration_delay&quot;:2500}" data-widget_type="animated-headline.default">
                        <div class="elementor-widget-container">
                          <h3 class="elementor-headline elementor-headline-animation-type-clip">
                            <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                              <span class="elementor-headline-dynamic-text elementor-headline-text-active"> Partnerships </span>
                            </span>
                          </h3>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-dafdf12 elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel" data-id="dafdf12" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_scroll&quot;:&quot;5&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                            <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                              @foreach ($partner as $item)
                              <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="1 of 11">
                                <figure class="swiper-slide-inner " title="{{ $item->title }}">
                                  <a href="{{ $item->link }}"><img  decoding="async" class="swiper-slide-image " src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" alt=""  style="padding:2px 4px" /></a>
                                  
                                </figure>
                              </div>
                              @endforeach


                            </div>
                            <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0">
                              <i aria-hidden="true" class="eicon-chevron-left"></i>
                            </div>
                            <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0">
                              <i aria-hidden="true" class="eicon-chevron-right"></i>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></div></section></div></div></div></section>
                 {{-- <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-e4ea864 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="e4ea864" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-background-overlay"></div><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6605da4" data-id="6605da4" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-dbd3974 elementor-widget elementor-widget-heading" data-id="dbd3974" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Achievements</h2></div></div><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-2aa64d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2aa64d8" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-aa8cca4" data-id="aa8cca4" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-f474499 elementor-widget elementor-widget-counter" data-id="f474499" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-counter">
                            <div class="elementor-counter-title">Programs</div>
                            <div class="elementor-counter-number-wrapper">
                              <span class="elementor-counter-number-prefix"></span>
                              <span class="elementor-counter-number" data-duration="2000" data-to-value="6" data-from-value="0" data-delimiter=",">0</span>
                              <span class="elementor-counter-number-suffix"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-8f1a563" data-id="8f1a563" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-25efff1 elementor-widget elementor-widget-counter" data-id="25efff1" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-counter">
                            <div class="elementor-counter-title">Countries</div>
                            <div class="elementor-counter-number-wrapper">
                              <span class="elementor-counter-number-prefix"></span>
                              <span class="elementor-counter-number" data-duration="2000" data-to-value="26" data-from-value="0" data-delimiter=",">0</span>
                              <span class="elementor-counter-number-suffix"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-331c094" data-id="331c094" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-7746a2d elementor-widget elementor-widget-counter" data-id="7746a2d" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-counter">
                            <div class="elementor-counter-title">Students</div>
                            <div class="elementor-counter-number-wrapper">
                              <span class="elementor-counter-number-prefix"></span>
                              <span class="elementor-counter-number" data-duration="2000" data-to-value="30000" data-from-value="0" data-delimiter=",">0</span>
                              <span class="elementor-counter-number-suffix">+</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-59512ee" data-id="59512ee" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-8e3c991 elementor-widget elementor-widget-counter" data-id="8e3c991" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-counter">
                            <div class="elementor-counter-title">Mentors</div>
                            <div class="elementor-counter-number-wrapper">
                              <span class="elementor-counter-number-prefix"></span>
                              <span class="elementor-counter-number" data-duration="2000" data-to-value="2000" data-from-value="0" data-delimiter=",">0</span>
                              <span class="elementor-counter-number-suffix">+</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-4668f1c" data-id="4668f1c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-d6a49a6 elementor-widget elementor-widget-counter" data-id="d6a49a6" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-counter">
                            <div class="elementor-counter-title">Educators</div>
                            <div class="elementor-counter-number-wrapper">
                              <span class="elementor-counter-number-prefix"></span>
                              <span class="elementor-counter-number" data-duration="2000" data-to-value="3000" data-from-value="0" data-delimiter=",">0</span>
                              <span class="elementor-counter-number-suffix">+</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></div></section> --}}
                  <div class="elementor-element elementor-element-9851061 elementor-widget elementor-widget-spacer" data-id="9851061" data-element_type="widget" data-widget_type="spacer.default"><div class="elementor-widget-container"><div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div></div></div></div></div></div></section><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-a50d8f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a50d8f6" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-74c05e2" data-id="74c05e2" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated">
                     <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-498ce3e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="498ce3e" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-eda9208" data-id="eda9208" data-element_type="column">
                 {{--    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-915b2bd ha-card--left ha-card--tablet-left ha-card--mobile-top ha-has-bg-overlay elementor-widget elementor-widget-ha-card happy-addon ha-card" data-id="915b2bd" data-element_type="widget" data-settings="{&quot;ha_floating_fx&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;ha_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;ha_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;ha_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="ha-card.default">
                        <div class="elementor-widget-container">
                          <figure class="ha-card-figure">
                            <img decoding="async" width="1024" height="682" src="wp-content/uploads/2023/10/startup-7-1024x682.jpg" class="attachment-large size-large wp-image-999" alt="" srcset="wp-content/uploads/2023/10/startup-7-1024x682.jpg 1024w, wp-content/uploads/2023/10/startup-7-300x200.jpg 300w, wp-content/uploads/2023/10/startup-7-768x512.jpg 768w, wp-content/uploads/2023/10/startup-7-1536x1023.jpg 1536w, wp-content/uploads/2023/10/startup-7-650x433.jpg 650w, wp-content/uploads/2023/10/startup-7.jpg 1600w" sizes="(max-width: 1024px) 100vw, 1024px" />
                          </figure>
                          <div class="ha-card-body">
                            <h2 class="ha-card-title">Unlock Opportunities with StartUpAfrica!</h2>
                            <div class="ha-card-text">
                              <p>Join us in making a difference. Download our company profile now and be a part of the StartUpAfrica community.</p>
                            </div>
                            <a class="ha-btn ha-btn--icon-before" href="wp-content/uploads/2023/10/Profile.pdf">
                              <i class="ha-btn-icon fas fa-cloud-download-alt" aria-hidden="true"></i>
                              <span class="ha-btn-text">Download Profile</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>--}}
                  </div></div></section></div></div></div></section>
    </div>
  </main>
@endsection