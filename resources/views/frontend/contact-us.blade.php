@extends('frontend.layouts.master')
@section('title')
    All Blogs
@endsection
@section('content')
<main id="main" class="site-main hfeed">
    <div data-elementor-type="wp-page" data-elementor-id="149" class="elementor elementor-149" data-elementor-post-type="page">
      <section data-particle_enable="false" data-particle-mobile-disabled="false" data-ha-partstyle="nasa" data-ha-partcolor="#FF7B0C" data-ha-partopacity="" data-ha-partdirection="bottom" class="elementor-section elementor-top-section elementor-element elementor-element-a08eec9 ha-particle-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default ha-particle-adv-no elementor-invisible" data-id="a08eec9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInDown&quot;,&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-51fa7bb" data-id="51fa7bb" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-37fc118 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-heading" data-id="37fc118" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
                <br>
                <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default" style="font-family: Georgia, 'Times New Roman', Times, serif !important;
    background: -webkit-linear-gradient(-35deg, #2575fc 0, #6a11cb 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">Let's Connect</h2>
                </div>
              </div>
              <div class="elementor-element elementor-element-db47540 elementor-widget elementor-widget-spacer" data-id="db47540" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-398e94f elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-text-editor" data-id="398e94f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
             
                  <p>We&#8217;re here to assist you with any questions, inquiries, or feedback you may have. Feel free to reach out to us through the following channels</p>
                </div>
              </div>
            </div>
          </div>
          <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-70f0164" data-id="70f0164" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-9bb6fc0 elementor-widget elementor-widget-spacer" data-id="9bb6fc0" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-d8a59aa elementor-widget elementor-widget-heading" data-id="d8a59aa" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <br>
                  <h4 class="elementor-heading-title elementor-size-default">Contact us</h4>
                </div>
              </div>
              <div class="elementor-element elementor-element-8c3f012 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8c3f012" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
                  <ul class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item"><a href=""><span class="elementor-icon-list-icon"><i aria-hidden="true" class="icon icon-phone1"></i></span><span class="elementor-icon-list-text"><a href="tel:+{{ $general->phone }}">{{ $general->phone }}</a></span></a></li>
          
                    <li class="elementor-icon-list-item"><a href="mailto:info@startupafrica.org"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-envelope-open"></i></span><span class="elementor-icon-list-text">Email : <a href="mailto:{{ $general->email }}">{{ $general->email }}</a></span></a></li>
                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-map-marker-alt"></i></span><span class="elementor-icon-list-text"><b>Address : </b>{!! $general->address !!}</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-610785e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="610785e" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8622dcf" data-id="8622dcf" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-b4ea73b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b4ea73b" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-18e7ff0" data-id="18e7ff0" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-d364725 elementor-widget__width-initial elementor-widget elementor-widget-elementskit-heading" data-id="d364725" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                          <div class="ekit-wid-con">
                          
                          </div>
                        </div>
                      </div>
                
                    </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7f52a6a" data-id="7f52a6a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-60d26af elementor-align-center elementor-widget elementor-widget-lottie" data-id="60d26af" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/startupafrica.org\/wp-content\/uploads\/2023\/10\/animation_lnaimmi9.json&quot;,&quot;id&quot;:656,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
                        <div class="elementor-widget-container">
                          <div class="e-lottie__container">
                            <div class="e-lottie__animation"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div class="elementor-element elementor-element-8b0b437 elementor-widget elementor-widget-spacer" data-id="8b0b437" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-ff45f04 elementor-invisible elementor-widget elementor-widget-google_maps" data-id="ff45f04" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="google_maps.default">
                <div class="elementor-widget-container">
                  <div class="elementor-custom-embed"><iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4031.44526048346!2d90.37189267573365!3d23.77872857865118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0b3340c1c91%3A0xfec009b60808d80a!2sICT%20Tower!5e1!3m2!1sen!2sbd!4v1730973280098!5m2!1sen!2sbd" title="{!! $general->address !!}" aria-label="{!! $general->address !!}"></iframe></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection

