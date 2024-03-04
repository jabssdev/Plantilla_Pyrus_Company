<!--begin::Menu-->
<div id="kt_aside" class="aside overflow-visible overflow-lg-auto bg-white" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
  <!--begin::Logo-->
  <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-6 bg-pyrus" id="kt_aside_logo">
    <a href="index-1.html">
      <img alt="Logo" src="{{ asset('admin/assets/media/logos/logo-light-icon.png') }}" class="h-45px bg-pyrus" />
    </a>
  </div>
  <!--end::Logo-->

  <!--begin::Nav-->
  <div class="aside-nav d-flex flex-column align-lg-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
    <!--begin::Primary menu-->
    <div class="hover-scroll-y scroll-ms my-2 my-lg-12" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
      <!--begin::Menu-->
      <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
        <!--begin:Menu item Home-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
          <!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-outline ki-home-2 fs-2x"></i></span></span><!--end:Menu link-->

          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <a href="{{route('home.index')}}"><span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span></a>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Gestion de clientes-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
          <!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-outline ki-people fs-2x"></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <span class="menu-section fs-5 fw-bolder ps-1 py-1">Gestión de Clientes</span>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('tercero.index')}}" title="Consultar información de clientes registrados" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Clientes</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('proforma.index')}}" title="Consultar información de proformas de venta registradas" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Proformas</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('notificacion_pago.index')}}" title="Gestionar notificaciones de pago " data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Notificaciones de pago</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('calendario_pago.index')}}" title="Consultar fechas de pago de clientes registrados" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Calendario de pagos</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Contabilidad-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
          <!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-outline ki-graph-up fs-2x"></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <span class="menu-section fs-5 fw-bolder ps-1 py-1">Contabilidad</span>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('facturacion.index')}}" title="Gestionar facturación de de servicios contratados" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Facturación</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('ingresos.egresos.index')}}" title="Consultar información de ingresos y egresos" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Ingresos y Egresos</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('cuenta.index')}}" title="Gestionar cuentas bancarias de la empresa" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Cuentas bancarias</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Gestion de claves-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
          <!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-outline ki-eye-slash fs-2x"></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <span class="menu-section fs-5 fw-bolder ps-1 py-1">Gestión de Claves</span>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('clave_cliente.index')}}" title="Gestionar claves de clientes registrados" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Claves de Clientes</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('clave_whm.index')}}" title="Gestionar claves WHM de clientes registrados" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Claves WHM</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Gestion de servicios-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
          <!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-outline ki-questionnaire-tablet fs-2x"></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <span class="menu-section fs-5 fw-bolder ps-1 py-1">Gestión de servicios</span>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('categorias.index')}}" title="Gestionar categorías y subcategorías de servicios" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Categorías</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('catalogo.index')}}" title="Gestionar servicios de la empresa y sus características" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Catálogo de servicios</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Asistencia-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
          <!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-outline ki-security-user fs-2x"></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <span class="menu-section fs-5 fw-bolder ps-1 py-1">Asistencia</span>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('usuarios.index')}}" title="Gestionar usuarios del sistema" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Usuarios</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="{{route('informe.jornadas.index')}}" title="Consultar información de jornadas laborales" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Informe de Jornadas</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Tienda Virtual-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
          <!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-outline ki-handcart fs-2x"></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <span class="menu-section fs-5 fw-bolder ps-1 py-1">Tienda Virtual</span>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
              <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Pedidos</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link--><a class="menu-link py-3" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Pendientes</span><span class="menu-badge"><span class="badge badge-light-success">3</span></span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link--><a class="menu-link py-3" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Enviados</span><span class="menu-badge"><span class="badge badge-light-success">3</span></span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link--><a class="menu-link py-3" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Realizados</span><span class="menu-badge"><span class="badge badge-light-success">3</span></span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link--><a class="menu-link py-3" href="#"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Rechazados</span><span class="menu-badge"><span class="badge badge-light-success">3</span></span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="#" title="Gestionar sliders de la página web" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Slider</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="#" title="Gestionar footer de la página web" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Footer</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link--><a class="menu-link" href="#" title="Gestionar promociones ofrecidas en la página web" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Promociones</span></a><!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Dashboard - Trabajador-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
          <!--begin:Menu link-->
          <span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-solid ki-home fs-2x"></i></span></span>
          <!--end:Menu link-->

          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <a href="{{route('asistencia.index')}}"><span class="menu-section fs-5 fw-bolder ps-1 py-1">Dashboard</span></a>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Control Asistencia - Trabajador-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
          <!--begin:Menu link-->
          <span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-solid ki-brifecase-timer fs-2x"></i></span></span>
          <!--end:Menu link-->

          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <a href="{{route('asistencia.index')}}"><span class="menu-section fs-5 fw-bolder ps-1 py-1">Control de Asistencia</span></a>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item Videollamada - Trabajador-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
          <!--begin:Menu link-->
          <span class="menu-link menu-center"><span class="menu-icon me-0"><i class="ki-solid ki-user-square fs-2x"></i></span></span>
          <!--end:Menu link-->

          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu content-->
              <div class="menu-content">
                <a href="{{route('videollamada')}}"><span class="menu-section fs-5 fw-bolder ps-1 py-1">Videollamada</span></a>
              </div>
              <!--end:Menu content-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
      </div>
      <!--end::Menu-->
    </div>
    <!--end::Primary menu-->
  </div>
  <!--end::Nav-->
</div>
<!--end::Menu-->