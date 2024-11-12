@extends('frontend.layouts.master')
@section('title')
    All Blogs
@endsection
@section('content')
<main id="main" class="site-main hfeed">
    <div data-elementor-type="wp-page" data-elementor-id="1425" class="elementor elementor-1425" data-elementor-post-type="page">
      <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-73ef6cb elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="73ef6cb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5eb83f0" data-id="5eb83f0" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-44e5d72 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="44e5d72" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4dde40e" data-id="4dde40e" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-21692b4 elementor-widget elementor-widget-elementskit-heading" data-id="21692b4" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                          <div class="ekit-wid-con">
                            <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                              <h2 class="ekit-heading--title elementskit-section-title text_fill">Our <span>Blogs</span></h2>
                              <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider">
                                <div class="elementskit-border-divider"></div>
                              </div>
                              <div class='ekit-heading__description'>
                                <p>Step into the dynamic world of SEED's Blog, where innovation and empowerment converge. We extend a warm welcome to a space designed for exploration and inspiration. This blog isn't just a repository of articles; it's a vibrant hub dedicated to nurturing the entrepreneurial spirit and fostering innovation among youth.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e733d0c" data-id="e733d0c" data-element_type="column">
                    <div class="elementor-widget-wrap"></div>
                  </div>
                </div>
              </section>
              <div class="elementor-element elementor-element-fa9f2c3 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="fa9f2c3" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
                  <ul class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="fab fa-slack-hash"></i></span><b><span class="elementor-icon-list-text" style="outline-color: aqua">Fostering Innovation: Unleashing  Youth Potential for Economic Transformation</b></span></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <section data-particle_enable="false" data-particle-mobile-disabled="false" data-ha-partstyle="default" data-ha-partcolor="" data-ha-partopacity="" data-ha-partdirection="bottom" data-ha-partnum="20" data-ha-partsize="" data-ha-partspeed="" data-ha-interactive="no" class="elementor-section elementor-top-section elementor-element elementor-element-5df9270 elementor-section-full_width ha-particle-yes ha-particle-adv-yes elementor-section-height-default elementor-section-height-default" data-id="5df9270" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ca15d6c" data-id="ca15d6c" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-372b42b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="372b42b" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a79ebdb" data-id="a79ebdb" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-bfeb4cd elementor-grid-eael-col-3 elementor-grid-tablet-eael-col-2 elementor-grid-mobile-eael-col-1 elementor-widget elementor-widget-eael-post-grid" data-id="bfeb4cd" data-element_type="widget" data-settings="{&quot;eael_post_grid_columns&quot;:&quot;eael-col-3&quot;,&quot;eael_post_grid_columns_tablet&quot;:&quot;eael-col-2&quot;,&quot;eael_post_grid_columns_mobile&quot;:&quot;eael-col-1&quot;}" data-widget_type="eael-post-grid.default">
                        <div class="elementor-widget-container">
                          <div id="eael-post-grid-bfeb4cd" class="eael-post-grid-container">
                            <div class="eael-post-grid eael-post-appender eael-post-appender-bfeb4cd eael-post-grid-style-three" data-layout-mode="grid">
                            @foreach ($blogs as $item)
                            <article class="eael-grid-post eael-post-grid-column" data-id="3186">
                                <div class="eael-grid-post-holder" style="border-end-end-radius: 5px; box-shadow: 0 0 10px 5px #48abe0;">
                                  <div class="eael-grid-post-holder-inner">
                                    <div class="eael-entry-media" >
                                      <div class="eael-entry-overlay zoom-in"><i class="icon icon-frame-expand" aria-hidden="true"></i><a href="{{ route('blog_single', $item->id) }}"></a></div>
                                     <img fetchpriority="high" decoding="async" width="300" height="300" src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" class="attachment-medium size-medium wp-image-3140" alt="" sizes="(max-width: 300px) 100vw, 300px" style="padding:10px" />
                                    </div>
                                    <div class="eael-entry-wrapper">
                                      <header class="eael-entry-header">
                                        <h2 class="eael-entry-title"><a class="eael-grid-post-link" href="{{ route('blog_single', $item->id)}}" title="{{ $item->title }}">{{ $item->title }}</a></h2>
                                      </header>
                                      <div class="eael-entry-meta"></div>
                                      <div class="eael-entry-content">
                                        <div class="eael-grid-post-excerpt">
                                          <p>{!! $item->desc !!}</p><a href="{{ route('blog_single', $item->id) }}">Read More</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </article>
                            @endforeach
                             
                      
                            </div>
                            <div class="clearfix"></div>
                          </div>
             
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
   
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection