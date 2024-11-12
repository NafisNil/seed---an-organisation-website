@extends('frontend.layouts.master')
@section('title')
    Advisory Panel
@endsection
@section('content')
<style>

    .elementor-147  {
    border-radius: 300px 300px 300px 300px;
    box-shadow: 0px 0px 10px 0px #9ffcff;
    font-family: "Monaco", Sans-serif !important;
    font-size: 14px;
    font-weight: 300;
    line-height: 1.5em;
}

.ha-card-figure{
    border-radius:30px;
    box-shadow: 2px 2px 1px 1px #9ff9ff;
}


.elementor-widget-container{
    border-radius: 50px 60px !important;
    font-family: "Monaco", Sans-serif !important;
    font-size: 14px;
    font-weight: 300;
    line-height: 1.5em;
}

  .ekit-heading h2{
    font-family: Georgia, 'Times New Roman', Times, serif !important;
    background: -webkit-linear-gradient(-35deg, #2575fc 0, #6a11cb 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  }
  .ekit-heading__description p{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important;
    color: rgb(26, 19, 7);
  }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<main id="main" class="site-main hfeed">
    <div data-elementor-type="wp-page" data-elementor-id="147" class="elementor elementor-147" data-elementor-post-type="page">
      <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-855cd99 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="855cd99" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-17b1e4c" data-id="17b1e4c" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-95f82c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="95f82c4" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a50c8d3" data-id="a50c8d3" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-ecc9987 elementor-widget__width-initial elementor-widget elementor-widget-elementskit-heading" data-id="ecc9987" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container" >
                          <div class="ekit-wid-con">
                            <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                              <h2 class="ekit-heading--title elementskit-section-title ">Advisory Board</h2>
                              <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider">
                                <div class="elementskit-border-divider"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              @php
            $chunks = $team->chunk(2); // Split the team members into chunks of 2
             @endphp
                    @foreach ($chunks as $chunk)
              <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-c6f2d1b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c6f2d1b" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">

                <div class="elementor-container elementor-column-gap-default">
                @foreach ($chunk as $item)
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-70dd891" data-id="70dd891" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div class="elementor-element elementor-element-0317390 ha-card--left ha-card--tablet-left ha-card--mobile-top elementor-invisible elementor-widget elementor-widget-ha-card happy-addon ha-card" data-id="0317390" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInDown&quot;}" data-widget_type="ha-card.default">
                            <div class="elementor-widget-container">
                              <figure class="ha-card-figure"><img fetchpriority="high" decoding="async" width="1024" height="781" src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" class="attachment-large size-large wp-image-688" alt="" sizes="(max-width: 1024px) 100vw, 1024px"  style="border-radius: 190px ;padding:25px"/></figure>
                              <div class="ha-card-body">
                                <h6 class="ha-card-title">{{ $item->name }}</h6>
                                <div class="ha-card-text">
                                  <p>{!! $item->designation !!}</p>
                                  <br>
                                 <a href="{{ $item->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a> 
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     @endforeach
                </div>
              </section>
              @endforeach
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>
@endsection