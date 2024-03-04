<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | Pyrus Company</title>
    <!--Meta Tags -->
    <meta charset="utf-8" />
    <meta
      name="description"
      content="Acceso al portal administrativo de Pyrus Company: Expertos en desarrollo web y aplicaciones móviles, diseñadores publicitarios creativos, 
      especialistas en hosting y dominios, además de servicios de impresión de alta calidad."
    />
    <meta
      name="keywords"
      content="Pyrus Company, desarrollo web, aplicaciones móviles, diseñadores publicitarios, hosting, dominios, impresión, innovación digital, portal 
      de acceso, administrador, servicios web, desarrollo de aplicaciones, diseño gráfico, soluciones de hosting, impresión de calidad"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="es_PE" />
    <meta property="og:type" content="website" />
    <meta
      property="og:title"
      content="Pyrus Company - Expertos en desarrollo web y aplicaciones móviles, diseñadores publicitarios creativos, especialistas en hosting y dominios, 
      además de servicios de impresión de alta calidad."
    />
    <meta property="og:site_name" content="Pyrus Company" />
    <link
      rel="shortcut icon"
      href="{{ asset('admin/assets/media/logos/favicon.ico') }}"
    />
    <!--Meta Tags -->

    <!-- Link Tags -->
    <!--All Pages-->
    <link
      href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{ asset('admin/assets/css/style.bundle.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <!--All Pages-->
  </head>
  <body id="kt_body" class="auth-bg">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div
          class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1"
        >
          <!--begin::Form-->
          <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <div class="w-lg-500px p-10">
              <form
                class="form w-100"
                id="kt_sign_in_form"
                method="post"
                action="{{ route('admin.login') }}"
                data-kt-redirect-url="{{ route('home.index') }}"
              >
                {{ csrf_field() }}
                <!--begin::Heading-->
                <div class="text-center">
                  <a href="#" class="mb-0 mb-lg-12">
                    <img
                      alt="Logo"
                      src="{{ asset('admin/assets/media/logos/custom-1.png') }}"
                      class="h-60px h-lg-145px"
                    />
                  </a>
                </div>
                <!--begin::Heading-->

                <!--begin::title-->
                <div class="separator separator-content my-14">
                  <span class="w-300px text-dark fw-semibold fs-1"
                    >Inicio de Sesión</span
                  >
                </div>
                <!--end::title-->

                <!--begin::Input group-->
                <div class="fv-row mb-8">
                  <!--begin::Email-->
                  <input
                    type="text"
                    placeholder="Email"
                    name="email"
                    autocomplete="on"
                    class="form-control bg-transparent"
                  />
                  <!--end::Email-->
                </div>

                <!--end::Input group-->
                <div class="fv-row mb-3">
                  <!--begin::Password-->
                  <input
                    type="password"
                    placeholder="Password"
                    name="password"
                    autocomplete="off"
                    class="form-control bg-transparent"
                  />
                  <!--end::Password-->
                </div>
                <!--end::Input group-->

                <!--begin::Submit button-->
                <div class="d-grid mb-10 mt-14">
                  <button
                    type="submit"
                    id="kt_sign_in_submit"
                    class="btn btn-primary"
                  >
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Continuar</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                      Por favor espere...
                      <span
                        class="spinner-border spinner-border-sm align-middle ms-2"
                      ></span>
                    </span>
                    <!--end::Indicator progress-->
                  </button>
                </div>
                <!--end::Submit button-->
              </form>
            </div>
          </div>
          <!--end::Form-->

          <!--begin::Footer-->
          <div class="d-flex flex-stack px-10 mx-auto text-center">
            <!--begin:Text-->
            <div class="mb-1 fs-7 fw-medium">
              <p class="mb-0 copy-color">
                Copyright &#169; 2023 DESARROLLADO POR PYRUS STUDIO Y
              </p>
              <p class="mb-0 copy-color">
                PYRUS HD MARCA Y SOFTWARE REGISTRADOS
              </p>
            </div>
            <!--end:Text-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Body-->

        <!--begin::Aside-->
        <div
          class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
          style="background-color: #405df6"
        >
          <div
            class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100"
          >
            <img
              class="d-none d-lg-block w-300px w-md-100 w-xl-900px mb-10 mb-lg-20 img-fluid"
              src="{{ asset('admin/assets/media/misc/auth-screens.png') }}"
              alt=""
            />
          </div>
        </div>
        <!--end::Aside-->
      </div>
    </div>
    <!--end::Main-->

    <!--Javascript-->
    <!--all pages-->
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <!--all pages-->

    <!--used for this page only-->
    <script src="{{ asset('admin/assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <!--used for this page only-->
    <!--Javascript-->
  </body>
</html>
