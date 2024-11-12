@extends('frontend.layouts.master')
@section('title')
    Focus  Area
@endsection
@section('content')
<style>
  .one h2{
    font-family: Georgia, 'Times New Roman', Times, serif !important;
    color: #080808 !important;
 
  }

  .box-body h3{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important;
    color: rgb(26, 19, 7);

  }

  .box-body p{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important;
    color: rgb(26, 19, 7);
  }
</style>
<main id="main" class="site-main hfeed" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
    <div data-elementor-type="wp-page" data-elementor-id="161" class="elementor elementor-161" data-elementor-post-type="post">
      <div style="text-align: center; padding:10px 0px;    font-family: Georgia, 'Times New Roman', Times, serif !important;
    background: -webkit-linear-gradient(-35deg, #2575fc 0, #6a11cb 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;" class="one">
        <h2>Our Focus Area</h2>
        <hr>
      </div>
    
      @php
      $chunks = $focus->chunk(2); // Split the team members into chunks of 2
       @endphp
        @foreach ($chunks as $chunk)
        <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-f6e3761 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f6e3761" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
            <div class="elementor-container elementor-column-gap-default">
              @foreach ($chunk as $item)
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
                               <img src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" alt="" style="max-width: 64px;max-height:64px">
                            </div>
                          </div>
                          <div class="box-body" style="padding: 15px">
                            <h3 class="elementskit-info-box-title"> {{ $item->title }} </h3>
                            <p>{!! $item->desc !!}</p>
                          </div>
                          <div class="icon-hover">
                            <img src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" alt="" style="max-width: 128px;max-height:128px;opacity:.5;filter: grayscale(100%);">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            
         
          </section>           
          @endforeach
              
    </div>
  </main>
@endsection