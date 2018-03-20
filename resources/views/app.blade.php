<!DOCTYPE html>
<html lang="es" >
  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title>
      Faces Community
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
    </script>
    <!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
    <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/demo/demo2/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="assets/demo/demo2/media/img/logo/favicon.ico" />
  </head>
  <!-- end::Head -->
    <!-- end::Body -->
  <body class="m-page--fluid m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
      <!-- begin::Header -->
      <header class="m-grid__item   m-header "  data-minimize="minimize" data-minimize-offset="200" data-minimize-mobile-offset="200" >
        <div class="m-header__top">
          <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--ver m-stack--desktop">
              <!-- begin::Brand -->
              <div class="m-stack__item m-brand">
                <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                  <div class="m-stack__item m-stack__item--middle m-brand__logo">
                    <a href="/" class="m-brand__logo-wrapper">
                      <img alt="" src="assets/demo/demo2/media/img/logo/krisalyde.png"/>
                    </a>
                  </div>
                  <div class="m-stack__item m-stack__item--middle m-brand__tools">
                    <!-- begin::Responsive Header Menu Toggler-->
                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                      <span></span>
                    </a>
                    <!-- end::Responsive Header Menu Toggler-->
      <!-- begin::Topbar Toggler-->
                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                      <i class="flaticon-more"></i>
                    </a>
                    <!--end::Topbar Toggler-->
                  </div>
                </div>
              </div>
              <!-- end::Brand -->
            </div>
          </div>
        </div>
      </header>
      <!-- end::Header -->    
    <!-- begin::Body -->
      <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop  m-body m-page__container">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <div class="m-content">
            <!--Begin::Section-->
            @yield("content")
            <!--End::Section-->
          </div>
        </div>
        <!--
      </div>
      -->
    </div>
    <!-- end::Body -->
  </div>
  <!-- end:: Page -->       
      <!-- begin::Scroll Top -->
  <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
  </div>
  <!-- end::Scroll Top -->  
      <!--begin::Base Scripts -->
  <script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
  <script src="assets/demo/demo2/base/scripts.bundle.js" type="text/javascript"></script>
  <!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
  <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
  <!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
  <script src="assets/app/js/dashboard.js" type="text/javascript"></script>
  <script src="assets/app/js/custom.js" type="text/javascript"></script>
  <!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
