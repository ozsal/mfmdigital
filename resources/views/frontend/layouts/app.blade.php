<!DOCTYPE html>
<html>
   @include('frontend.layouts.head')
   <body class="home page-template page-template-elementor_canvas page page-id-18 wp-custom-logo elementor-default elementor-template-canvas elementor-kit-35 elementor-page elementor-page-18 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop" data-aos-easing="ease" data-aos-duration="600" data-aos-delay="0">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
         <defs>
            <filter id="wp-duotone-blue-orange">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
               <feComponentTransfer color-interpolation-filters="sRGB">
                  <feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR>
                  <feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG>
                  <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB>
                  <feFuncA type="table" tableValues="1 1"></feFuncA>
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
         </defs>
      </svg>
      <div data-elementor-type="wp-post" data-elementor-id="121" class="elementor elementor-121" style="position: sticky; top: 0px; bottom: auto; z-index: 10; width: 100%;">
         @include('frontend.layouts.navbar')
      </div>
      <div data-elementor-type="wp-page" data-elementor-id="18" class="elementor elementor-18">
         @yield('content')
      </div>
      <div data-elementor-type="wp-post" data-elementor-id="133" class="elementor elementor-133">
         @include('frontend.layouts.footer')
      </div>
      <link rel="stylesheet" id="wpr-animations-css-css" href="{{asset('frontend/assets/css/wpr-animations.min.css')}}" media="all">
      <link rel="stylesheet" id="wpr-loading-animations-css-css" href="{{asset('frontend/assets/css/loading-animations.min.css')}}" media="all">
      <link rel="stylesheet" id="wpr-aos-css-css" href="{{asset('frontend/assets/css/aos.min.css')}}" media="all">
      <link rel="stylesheet" id="dashicons-css" href="{{asset('frontend/assets/css/dashicons.min.css')}}" media="all">
      <link rel="stylesheet" id="nf-display-css" href="{{asset('frontend/assets/css/display-opinions-light.css')}}" media="all">
      <link rel="stylesheet" id="nf-font-awesome-css" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" media="all">
      <link rel="stylesheet" id="nf-font-awesome-css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/v4-font-face.min.css" media="all">
      <link rel="stylesheet" id="e-animations-css" href="{{asset('frontend/assets/css/animations.min.css')}}" media="all">
      <!-- <script id="eael-general-js-extra">
         var localize = {"ajaxurl":"https:\/\/mfmdigitalnepal.com\/wp-admin\/admin-ajax.php","nonce":"d821af7ff4","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/mfmdigitalnepal.com\/","cart_redirectition":"","cart_page_url":"","el_breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}};
      </script> -->
      <script src="{{asset('frontend/assets/js/general.min.js')}}" id="eael-general-js"></script>
      <!-- <script src="{{asset('frontend/assets/js/eael-18.js')}}" id="eael-18-js"></script> -->
      <!-- <script src="{{asset('frontend/assets/js/eael-121.js')}}" id="eael-121-js"></script> -->
      <!-- <script src="{{asset('frontend/assets/js/eael-133.js')}}" id="eael-133-js"></script> -->
      <script src="{{asset('frontend/assets/js/particles.js')}}" id="wpr-particles-js"></script>
      <script src="{{asset('frontend/assets/js/jarallax.min.js')}}" id="wpr-jarallax-js"></script>
      <script src="{{asset('frontend/assets/js/parallax.min.js')}}" id="wpr-parallax-hover-js"></script>
      <script src="{{asset('frontend/assets/js/aos.min.js')}}" id="wpr-aos-js-js"></script>
      <script src="{{asset('frontend/assets/js/infinite-scroll.min.js')}}" id="wpr-infinite-scroll-js"></script>
      <script src="{{asset('frontend/assets/js/underscore.min.js')}}" id="underscore-js"></script>
      <script src="{{asset('frontend/assets/js/backbone.min.js')}}" id="backbone-js"></script>
      <script src="{{asset('frontend/assets/js/front-end-deps.js')}}" id="nf-front-end-deps-js"></script>
      
      <!-- <script src="{{asset('frontend/assets/js/frontend.js')}}" id="nf-front-end-js"></script> -->
      <script src="{{asset('frontend/assets/js/webpack.runtime.min.js')}}" id="elementor-webpack-runtime-js"></script>
      <script src="{{asset('frontend/assets/js/frontend-modules.min.js')}}" id="elementor-frontend-modules-js"></script>
      <script src="{{asset('frontend/assets/js/waypoints.min.js')}}" id="elementor-waypoints-js"></script>
      <script src="{{asset('frontend/assets/js/core.min.js')}}" id="jquery-ui-core-js"></script>

      <script id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.14.1","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"e_swiper_latest":true,"hello-theme-header-footer":true,"landing-pages":true},"urls":{"assets":"https:\/\/mfmdigitalnepal.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"logo","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":23,"title":"Catalog%20%E2%80%93%20M.F.M%20Digital%20Nepal","excerpt":"","featuredImage":false}};
      </script>
      
      <script src="{{ asset('frontend/assets/js/front-end.min.js')}}" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
      
      <script data-cfasync="false" src="{{asset('frontend/assets/js/front-end-2.min.js')}}" id="wpr-addons-js-js"></script>
     @stack('scripts')
   </body>
</html>