<!--begin::Header-->
<div id="kt_header" class="header align-items-stretch bg-header">
  <!--begin::Container-->
  <div
    class="container-fluid d-flex align-items-stretch justify-content-between"
  >
    <!--begin::Aside mobile toggle-->
    <div
      class="d-flex align-items-center d-lg-none ms-n3 me-1"
      title="Show aside menu"
    >
      <div
        class="btn btn-icon btn-active-color-primary w-40px h-40px"
        id="kt_aside_toggle"
      >
        <i class="ki-outline ki-abstract-14 fs-1"></i>
      </div>
    </div>
    <!--end::Aside mobile toggle-->

    <!--begin::Mobile logo-->
    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
      <a href="index-1.html" class="d-lg-none">
        <img
          alt="Logo"
          src="{{ asset('admin/assets/media/logos/demo4-mobile.svg') }}"
          class="h-25px"
        />
      </a>
    </div>
    <!--end::Mobile logo-->

    <div class="d-flex align-items-center" id="kt_header_wrapper">
      <!--begin::Page title-->
      <div
        class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 pb-5 pb-lg-0"
        data-kt-swapper="true"
        data-kt-swapper-mode="prepend"
        data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_wrapper'}"
      >
        <!--begin::Heading-->
        <h1 class="text-pyrus fw-bold my-1 fs-3 lh-1">ADMINISTRADOR</h1>
        <!--end::Heading-->
      </div>
      <!--end::Page title--->
    </div>

    <!--begin::Wrapper-->
    <div
      class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
    >
      <!--begin::Navbar-->
      <div class="d-flex align-items-stretch" id="kt_header_nav">
        <!--begin::Menu wrapper-->
        <div
          class="header-menu align-items-stretch"
          data-kt-drawer="true"
          data-kt-drawer-name="header-menu"
          data-kt-drawer-activate="{default: true, lg: false}"
          data-kt-drawer-overlay="true"
          data-kt-drawer-width="{default:'200px', '300px': '250px'}"
          data-kt-drawer-direction="end"
          data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
          data-kt-swapper="true"
          data-kt-swapper-mode="prepend"
          data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}"
        >
          <!--begin::Menu-->
          <div
            class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-state-primary menu-title-gray-600 menu-arrow-gray-400 fw-semibold fs-6 my-5 my-lg-0 px-2 px-lg-0 align-items-stretch"
            id="#kt_header_menu"
            data-kt-menu="true"
          >
            <!--begin:Menu item-->
            <div
              data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
              data-kt-menu-placement="bottom-start"
              class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2"
            >
              <!--begin:Menu link | Menu Header-->
              <a href="{{ route('home.index') }}"
                ><span class="menu-link py-3 btn-dash"
                  ><span class="menu-title btn-dash-white">Dashboard</span
                  ><span class="menu-arrow d-lg-none"></span></span
              ></a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div
              data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
              data-kt-menu-placement="bottom-start"
              class="menu-item menu-lg-down-accordion me-0 me-lg-2"
            >
              <!--begin:Menu link-->
              <a href="#"
                ><span class="menu-link py-3"
                  ><span class="menu-title">Ventas</span
                  ><span class="menu-arrow d-lg-none"></span></span
              ></a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div
              data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
              data-kt-menu-placement="bottom-start"
              class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"
            >
              <!--begin:Menu link-->
              <a href="#"
                ><span class="menu-link py-3"
                  ><span class="menu-title">Servicios</span
                  ><span class="menu-arrow d-lg-none"></span></span
              ></a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div
              data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
              data-kt-menu-placement="bottom-start"
              class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"
            >
              <!--begin:Menu link-->
              <a href="#"
                ><span class="menu-link py-3"
                  ><span class="menu-title">Cliente</span
                  ><span class="menu-arrow d-lg-none"></span></span
              ></a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div
              data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
              data-kt-menu-placement="bottom-start"
              class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"
            >
              <!--begin:Menu link--><span class="menu-link py-3"
                ><span class="menu-title">Pedidos</span
                ><span class="menu-arrow d-lg-none"></span></span
              ><!--end:Menu link--><!--begin:Menu sub-->
              <div
                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px"
              >
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link--><a
                    class="menu-link py-3"
                    href="#"
                    title="Consultar pedidos pendientes"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-dismiss="click"
                    data-bs-placement="right"
                    ><span class="menu-icon"
                      ><i class="ki-outline ki-notepad fs-2"></i></span
                    ><span class="menu-title">Pendientes</span></a
                  ><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link--><a
                    class="menu-link py-3"
                    href="#"
                    title="Consultar pedidos enviados"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-dismiss="click"
                    data-bs-placement="right"
                    ><span class="menu-icon"
                      ><i class="ki-outline ki-notepad fs-2"></i></span
                    ><span class="menu-title">Enviados</span></a
                  ><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link--><a
                    class="menu-link py-3"
                    href="#"
                    title="Consultar pedidos realizados"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-dismiss="click"
                    data-bs-placement="right"
                    ><span class="menu-icon"
                      ><i class="ki-outline ki-notepad fs-2"></i></span
                    ><span class="menu-title">Realizados</span></a
                  ><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link--><a
                    class="menu-link py-3"
                    href="#"
                    title="Consultar pedidos rechazados"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-dismiss="click"
                    data-bs-placement="right"
                    ><span class="menu-icon"
                      ><i class="ki-outline ki-notepad fs-2"></i></span
                    ><span class="menu-title">Rechazados</span></a
                  ><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
      </div>
      <!--end::Navbar-->

      <!--begin::Toolbar wrapper-->
      <div class="d-flex align-items-stretch justify-self-end flex-shrink-0">
        <!--begin::Notifications-->
        <div class="d-flex align-items-center ms-1 ms-lg-icon-header">
          <!--begin::Menu wrapper-->
          <div
            class="btn btn-icon btn-active-light-primary position-relative btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
            data-kt-menu-trigger="click"
            data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end"
          >
            <i class="ki-outline ki-notification fs-1"></i>
            <span
              class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"
            >
            </span>
          </div>

          <!--begin::Menu-->
          <div
            class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
            data-kt-menu="true"
            id="kt_menu_notifications"
          >
            <!--begin::Heading-->
            <div
              class="d-flex flex-column bgi-no-repeat rounded-top"
              style="
                background-image: url('../admin/assets/media/misc/header-bg-demo4.png');
              "
            >
              <!--begin::Title-->
              <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                Notificaciones
                <span class="fs-8 opacity-75 ps-3">24 reportes</span>
              </h3>
              <!--end::Title-->

              <!--begin::Tabs-->
              <ul
                class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9"
              >
                <li class="nav-item">
                  <a
                    class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                    data-bs-toggle="tab"
                    href="#kt_topbar_notifications_1"
                    >Proyectos</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                    data-bs-toggle="tab"
                    href="#kt_topbar_notifications_2"
                    >Pagos</a
                  >
                </li>
              </ul>
              <!--end::Tabs-->
            </div>
            <!--end::Heading-->

            <!--begin::Tab content-->
            <div class="tab-content">
              <!--begin::Tab panel-->
              <div
                class="tab-pane fade show active"
                id="kt_topbar_notifications_1"
                role="tabpanel"
              >
                <!--begin::Items-->
                <div class="scroll-y mh-325px my-5 px-8">
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-primary">
                          <i
                            class="ki-outline ki-abstract-28 fs-2 text-primary"
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a
                          href="#"
                          class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Project Alice</a
                        >
                        <div class="text-gray-400 fs-7">
                          Phase 1 development
                        </div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">1 hr</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-danger">
                          <i
                            class="ki-outline ki-information fs-2 text-danger"
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a
                          href="#"
                          class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >HR Confidential</a
                        >
                        <div class="text-gray-400 fs-7">
                          Confidential staff documents
                        </div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">2 hrs</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-warning">
                          <i
                            class="ki-outline ki-briefcase fs-2 text-warning"
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a
                          href="#"
                          class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Company HR</a
                        >
                        <div class="text-gray-400 fs-7">
                          Corporeate staff profiles
                        </div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">5 hrs</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-success">
                          <i
                            class="ki-outline ki-abstract-12 fs-2 text-success"
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a
                          href="#"
                          class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Project Redux</a
                        >
                        <div class="text-gray-400 fs-7">
                          New frontend admin theme
                        </div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">2 days</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-primary">
                          <i
                            class="ki-outline ki-colors-square fs-2 text-primary"
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a
                          href="#"
                          class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Project Breafing</a
                        >
                        <div class="text-gray-400 fs-7">
                          Product launch status update
                        </div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">21 Jan</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-info">
                          <i class="ki-outline ki-picture fs-2 text-info"></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a
                          href="#"
                          class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Banner Assets</a
                        >
                        <div class="text-gray-400 fs-7">
                          Collection of banner images
                        </div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">21 Jan</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-warning">
                          <i
                            class="ki-outline ki-color-swatch fs-2 text-warning"
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a
                          href="#"
                          class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Icon Assets</a
                        >
                        <div class="text-gray-400 fs-7">
                          Collection of SVG icons
                        </div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">20 March</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Items-->

                <!--begin::View more-->
                <div class="py-3 text-center border-top">
                  <a
                    href="pages/user-profile/activity.html"
                    class="btn btn-color-gray-600 btn-active-color-primary"
                  >
                    Ver más
                    <i class="ki-outline ki-arrow-right fs-5"></i>
                  </a>
                </div>
                <!--end::View more-->
              </div>
              <!--end::Tab panel-->

              <!--begin::Tab panel-->
              <div
                class="tab-pane fade"
                id="kt_topbar_notifications_2"
                role="tabpanel"
              >
                <!--begin::Items-->
                <div class="scroll-y mh-325px my-5 px-8">
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-success me-4"
                        >200 OK</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >New order</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Just now</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-danger me-4"
                        >500 ERR</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >New customer</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">2 hrs</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-success me-4"
                        >200 OK</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >Payment process</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">5 hrs</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-warning me-4"
                        >300 WRN</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >Search query</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">2 days</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-success me-4"
                        >200 OK</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >API connection</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">1 week</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-success me-4"
                        >200 OK</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >Database restore</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Mar 5</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-warning me-4"
                        >300 WRN</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >System update</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">May 15</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-warning me-4"
                        >300 WRN</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >Server OS update</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Apr 3</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-warning me-4"
                        >300 WRN</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >API rollback</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Jun 30</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-danger me-4"
                        >500 ERR</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >Refund process</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Jul 10</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-danger me-4"
                        >500 ERR</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >Withdrawal process</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Sep 10</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-danger me-4"
                        >500 ERR</span
                      >
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a
                        href="#"
                        class="text-gray-800 text-hover-primary fw-semibold"
                        >Mail tasks</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Dec 10</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Items-->

                <!--begin::View more-->
                <div class="py-3 text-center border-top">
                  <a
                    href="pages/user-profile/activity.html"
                    class="btn btn-color-gray-600 btn-active-color-primary"
                  >
                    Ver más
                    <i class="ki-outline ki-arrow-right fs-5"></i>
                  </a>
                </div>
                <!--end::View more-->
              </div>
              <!--end::Tab panel-->
            </div>
            <!--end::Tab content-->
          </div>
          <!--end::Menu-->
          <!--end::Menu wrapper-->
        </div>
        <!--end::Notifications-->

        <!--begin::Theme mode-->
        <div class="d-flex align-items-center ms-1 ms-lg-icon-header">
          <!--begin::Menu toggle-->
          <a
            href="#"
            class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
            data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end"
          >
            <i class="ki-outline ki-night-day theme-light-show fs-1"></i>
            <i class="ki-outline ki-moon theme-dark-show fs-1"></i
          ></a>
          <!--begin::Menu toggle-->

          <!--begin::Menu-->
          <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
            data-kt-menu="true"
            data-kt-element="theme-mode-menu"
          >
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a
                href="#"
                class="menu-link px-3 py-2"
                data-kt-element="mode"
                data-kt-value="light"
              >
                <span class="menu-icon" data-kt-element="icon">
                  <i class="ki-outline ki-night-day fs-2"></i>
                </span>
                <span class="menu-title"> Claro </span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a
                href="#"
                class="menu-link px-3 py-2"
                data-kt-element="mode"
                data-kt-value="dark"
              >
                <span class="menu-icon" data-kt-element="icon">
                  <i class="ki-outline ki-moon fs-2"></i>
                </span>
                <span class="menu-title"> Oscuro </span>
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
              <a
                href="#"
                class="menu-link px-3 py-2"
                data-kt-element="mode"
                data-kt-value="system"
              >
                <span class="menu-icon" data-kt-element="icon">
                  <i class="ki-outline ki-screen fs-2"></i>
                </span>
                <span class="menu-title"> Sistema </span>
              </a>
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::Menu-->
        </div>
        <!--end::Theme mode-->

        <!--begin::User | cerrar sesion-->
        <div
          class="d-flex align-items-center ms-1 ms-lg-user-header"
          id="kt_header_user_menu_toggle"
        >
          <!--begin::Menu wrapper-->
          <div
            class="cursor-pointer symbol symbol-30px symbol-md-40px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end"
          >
            <img
              src="{{ asset('admin/assets/media/avatars/300-1.jpg') }}"
              alt="user"
            />
          </div>

          <!--begin::User account menu-->
          <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
            data-kt-menu="true"
          >
            <!--begin::Menu item-->
            <div class="menu-item px-3">
              <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                  <img
                    alt="Logo"
                    src="{{ asset('admin/assets/media/avatars/300-1.jpg') }}"
                  />
                </div>
                <!--end::Avatar-->

                <!--begin::Username-->
                <div class="d-flex flex-column">
                  <div class="fw-bold d-flex align-items-center fs-5">
                    Administrador
                  </div>
                </div>
                <!--end::Username-->
              </div>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a
                class="menu-link py-3"
                href="#"
                data-bs-toggle="tooltip"
                data-bs-trigger="hover"
                data-bs-dismiss="click"
                data-bs-placement="right"
                ><span class="menu-icon"
                  ><i class="ki-outline ki-user-tick fs-1 text-pyrus"></i></span
                ><span class="menu-title"
                  >Razón Social: &nbsp;<span class="text-muted"
                    >Administrador</span
                  ></span
                ></a
              ><!--end:Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a
                class="menu-link py-3"
                href="#"
                data-bs-toggle="tooltip"
                data-bs-trigger="hover"
                data-bs-dismiss="click"
                data-bs-placement="right"
                ><span class="menu-icon"
                  ><i class="ki-outline ki-bank fs-1 text-pyrus"></i></span
                ><span class="menu-title"
                  >RUC: &nbsp;<span class="text-muted">20606548011</span></span
                ></a
              ><!--end:Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a
                class="menu-link py-3"
                href="#"
                data-bs-toggle="tooltip"
                data-bs-trigger="hover"
                data-bs-dismiss="click"
                data-bs-placement="right"
                ><span class="menu-icon"
                  ><i class="ki-outline ki-sms fs-1 text-pyrus"></i></span
                ><span class="menu-title"
                  >Email: &nbsp;<span class="text-muted"
                    >admin@pyrushd.com</span
                  ></span
                ></a
              ><!--end:Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a
                class="menu-link py-3"
                href="#"
                data-bs-toggle="tooltip"
                data-bs-trigger="hover"
                data-bs-dismiss="click"
                data-bs-placement="right"
                ><span class="menu-icon"
                  ><i class="ki-outline ki-phone fs-1 text-pyrus"></i></span
                ><span class="menu-title"
                  >Celular: &nbsp;<span class="text-muted"
                    >970036050</span
                  ></span
                ></a
              ><!--end:Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a
                class="menu-link py-3"
                href="#"
                data-bs-toggle="tooltip"
                data-bs-trigger="hover"
                data-bs-dismiss="click"
                data-bs-placement="right"
                ><span class="menu-icon"
                  ><i
                    class="ki-outline ki-geolocation-home fs-1 text-pyrus"
                  ></i></span
                ><span class="menu-title"
                  >Dirección: &nbsp;<span class="text-muted"
                    >Dirección X</span
                  ></span
                ></a
              ><!--end:Menu link-->
            </div>
            <!--end::Menu item-->

            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->
            <div class="menu-item px-5 my-1">
              <a
                href="#"
                class="menu-link px-5"
                style="background-color: #f0f1f5"
              >
                Editar Perfil
              </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-5">
              <a
                href="{{ route('admin.logout') }}"
                class="menu-link px-5"
                style="background-color: #f0f1f5"
              >
                Cerrar Sesión
              </a>
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::User account menu-->
          <!--end::Menu wrapper-->
        </div>
        <!--end::User -->

        <!--begin::Heaeder menu toggle-->
        <div
          class="d-flex align-items-center d-lg-none ms-3 me-n1"
          title="Show header menu"
        >
          <div
            class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
            id="kt_header_menu_mobile_toggle"
          >
            <i class="ki-outline ki-element-4 fs-1"></i>
          </div>
        </div>
        <!--end::Heaeder menu toggle-->
      </div>
      <!--end::Toolbar wrapper-->
    </div>
    <!--end::Wrapper-->
  </div>
  <!--end::Container-->
</div>
<!--end::Header-->

<!--begin::Search form-->
<div
  class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover"
  style="
    background-color: rgb(12,10,60);
    background-size: auto 100%;
  "
>
  <!--begin::body-->
  <div class="card-body container-xxl pt-10 pb-8" style="padding-bottom: 0px !important;">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column">
      <!--begin::Block-->
      <div class="d-lg-flex align-lg-items-center">
        <!--begin::Simple form-->
          <!--begin::Row-->
          <div class="row flex-grow-1 mb-5 mb-lg-0">
            <!--begin::Col-->
            <div class="col-lg-6 d-flex align-items-center mb-3 mb-lg-0">
              <img src="{{asset('admin/assets/media/logos/logo.png')}}" alt="">
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6 d-flex align-items-center mb-3 mb-lg-0 justify-content-end">
              <img src="{{asset('admin/assets/media/logos/icono-derecha.png')}}" alt="">
            </div>
            <!--end::Col-->
          </div>
          <!--end::Row-->
        <!--end::Simple form-->
      </div>
      <!--end::Block-->
    </div>
    <!--end::Wrapper-->
  </div>
  <!--end::body-->
</div>
<!--end::Search form-->
