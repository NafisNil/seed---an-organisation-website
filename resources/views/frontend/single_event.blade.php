@extends('frontend.layouts.master')
@section('title')
    {{ $event->title }}
@endsection
@section('content')
<main id="main" class="site-main hfeed" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
    <div data-elementor-type="wp-post" data-elementor-id="3096" class="elementor elementor-3096" data-elementor-post-type="post">

      <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-652dad2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="652dad2" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7eb5516" data-id="7eb5516" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-04ac5c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="04ac5c3" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7751c3c" data-id="7751c3c" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-33636c8 elementor-widget__width-initial elementor-widget elementor-widget-elementskit-heading" data-id="33636c8" data-element_type="widget" data-widget_type="elementskit-heading.default"><div class="elementor-widget-container"><div class="ekit-wid-con"><div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                              <h2 class="ekit-heading--title elementskit-section-title text_fill">
                                <span>{{ $event->title }}</span>
                              </h2>
                              <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider">
                                <div class="elementskit-border-divider"></div>
                              </div>
                              <div class='ekit-heading__description'>
                                <p>{!! $event->desc !!} </p>
                              </div>
                            </div></div></div></div><div class="elementor-element elementor-element-e244c41 elementor-widget elementor-widget-tp-info-box" data-id="e244c41" data-element_type="widget" data-widget_type="tp-info-box.default"><div class="elementor-widget-container"><div id="info_box672b2ad1526ee" class="pt_plus_info_box  info_box672b2ad1526ee info-box-style_1     " data-id="info_box672b2ad1526ee"><div class="post-inner-loop ">
                              <div class="info-box-inner content_hover_effect ">
                                <div class="info-box-bg-box   ">
                                  <div class="service-media text-left  ">
                                    <div class="m-r-16  service-img-border" style="border-color: #252525;">
                                      <div class="service-icon-wrap">
                                        <i class=" fa fa-calendar service-icon  icon-squre"></i>
                                      </div>
                                    </div>
                                    <div class="service-content ">
                                      <a>
                                        <div class="service-title "> Event Details: </div>
                                      </a>
                                      <div class="service-border"></div>
                                    </div>
                                  </div>
                                  <div class="infobox-overlay-color"></div>
                                </div>
                              </div>
                            </div></div></div></div><div class="elementor-element elementor-element-8d81034 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8d81034" data-element_type="widget" data-widget_type="icon-list.default"><div class="elementor-widget-container"><ul class="elementor-icon-list-items"><li class="elementor-icon-list-item">
                              <span class="elementor-icon-list-icon">
                                <i aria-hidden="true" class="far fa-calendar-alt"></i>
                              </span>
                              <span class="elementor-icon-list-text">Event Date: {{ @$event->date }}</span>
                            </li><li class="elementor-icon-list-item">
                              <span class="elementor-icon-list-icon">
                                <i aria-hidden="true" class="far fa-calendar-alt"></i>
                              </span>
                              <span class="elementor-icon-list-text">Event Time: {{ @$event->time }}</span>
                            </li><li class="elementor-icon-list-item">
                              <span class="elementor-icon-list-icon">
                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                              </span>
                              <span class="elementor-icon-list-text">{!! $event->location !!}</span>
                            </li></ul></div></div></div></div><div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ad6d01d" data-id="ad6d01d" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-49449ba elementor-align-center elementor-widget elementor-widget-lottie" data-id="49449ba" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/startupafrica.org\/wp-content\/uploads\/2023\/10\/animation_lnan0le1.json&quot;,&quot;id&quot;:810,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default"><div class="elementor-widget-container"><div class="e-lottie__container"><div class="e-lottie__animation"><img src="{{(!empty($event->photo))?URL::to('storage/'.$event->photo):URL::to('image/no_image.png')}}" alt="{{ $event->title }}"></div></div></div></div><div class="elementor-element elementor-element-af8ffac elementor-widget elementor-widget-tp-info-box" data-id="af8ffac" data-element_type="widget" data-widget_type="tp-info-box.default"><div class="elementor-widget-container"><div id="info_box672b2ad1568b1" class="pt_plus_info_box  info_box672b2ad1568b1 info-box-style_1     " data-id="info_box672b2ad1568b1"><div class="post-inner-loop ">
                              <div class="info-box-inner content_hover_effect ">
                                <div class="info-box-bg-box   ">
                                  <div class="service-media text-left  ">
                                    <div class="m-r-16  service-img-border" style="border-color: #252525;">
                                      <div class="service-icon-wrap">
                                        <i class=" fa fa-calendar service-icon  icon-squre"></i>
                                      </div>
                                    </div>
                                    <div class="service-content ">
                                      <a>
                                        <div class="service-title "> Get Started </div>
                                      </a>
                                      <div class="service-border"></div>
                                      <div class="service-desc">
                                        <p>Make your registrations today.</p>
                                      </div>
                                      <div class="pt-plus-button-wrapper">
                                        <div class="button_parallax">
                                          <div class="ts-button">
                                            <div class="pt_plus_button btn672b2ad156886 button-style-8 ">
                                              <div class="animted-content-inner">
                                                <a href="#" class="button-link-wrap " role="button">Register Today <i class="btn-icon button-after fa fa-chevron-right"></i>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="infobox-overlay-color"></div>
                                </div>
                              </div>
                            </div></div></div></div></div></div></div></section>
                
    </div>
  </main>
@endsection