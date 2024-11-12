@extends('frontend.layouts.master')
@section('title')
    About Us
@endsection
@section('content')
<style>
  .ekit-heading h2{
    font-family: Georgia, 'Times New Roman', Times, serif !important;
    color: #080808 !important;
  }
  .ekit-heading__description p{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important;
    color: rgb(26, 19, 7);
  }
</style>

<main id="main" class="site-main hfeed">
    <div data-elementor-type="wp-page" data-elementor-id="152" class="elementor elementor-152" data-elementor-post-type="page">
      <div data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-7a98f26 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7a98f26" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-96cb375" data-id="96cb375" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-9527896 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9527896" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5b6f251" data-id="5b6f251" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-54c11bd elementor-widget elementor-widget-elementskit-heading" data-id="54c11bd" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                          <div class="ekit-wid-con">
                            <div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                              <h2 class="ekit-heading--title elementskit-section-title text_fill"><span>About us</span></h2>
                              <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider">
                                <div class="elementskit-border-divider"></div>
                              </div>
                              <div class='ekit-heading__description'>
                                <p>{!! $about->desc !!}</p>
                              </div>
                            </div>
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
      </div>
    </div>
  </main>
@endsection