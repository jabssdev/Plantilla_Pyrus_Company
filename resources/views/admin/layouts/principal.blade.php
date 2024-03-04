<!DOCTYPE html>
<html lang="en" data-bs-theme-mode="light">

<head>
  <title>Administrador | Pyrus Company</title>
  <!--Meta Tags -->
  <meta charset="utf-8" />
  <meta name="description" content="Acceso al portal administrativo de Pyrus Company: Expertos en desarrollo web y aplicaciones móviles, diseñadores publicitarios creativos, 
       especialistas en hosting y dominios, además de servicios de impresión de alta calidad." />
  <meta name="keywords" content="Pyrus Company, desarrollo web, aplicaciones móviles, diseñadores publicitarios, hosting, dominios, impresión, innovación digital, portal 
       de acceso, administrador, servicios web, desarrollo de aplicaciones, diseño gráfico, soluciones de hosting, impresión de calidad" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:locale" content="es_PE" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Pyrus Company - Expertos en desarrollo web y aplicaciones móviles, diseñadores publicitarios creativos, especialistas en hosting y dominios, 
       además de servicios de impresión de alta calidad." />
  <meta property="og:site_name" content="Pyrus Company" />
  <link rel="shortcut icon" href="{{ asset('admin/assets/media/logos/favicon.ico') }}" />
  <!--Meta Tags -->
  <!--all pages-->
  <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
  <style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    input[type="number"] {
      -moz-appearance: textfield;
    }
  </style>  
  <!--all pages-->
  <!-- only pages::css -->
  @yield('styles')
  <!-- only pages::css  -->
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
      @include('admin.layouts.menu')

      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        @include('admin.layouts.header')
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" style="padding-bottom: 10px;" id="kt_content">
          <!--begin::Container-->
          <div class="container-xxl" id="kt_content_container">
            @yield('content')
          </div>
          <!--end::Container-->
        </div>
        <!--end::Content-->
        @include('admin.layouts.footer')
      </div>
    </div>
  </div>
  <!--end::Main-->

  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-outline ki-arrow-up"></i>
  </div>
  <!--end::Scrolltop-->

  <!--begin::Javascript-->

  <!--begin::Global Javascript Bundle(mandatory for all pages)-->
  <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
  <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
  <!--end::Global Javascript Bundle-->
  <!-- only pages::css -->
  @yield('scripts')
  <!-- only pages::css  -->
  <!--end::Javascript-->
</body>

<!--end::Body-->

</html>