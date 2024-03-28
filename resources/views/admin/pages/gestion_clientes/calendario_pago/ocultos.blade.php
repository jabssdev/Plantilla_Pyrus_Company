@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Calendario_pago-->
<div class="card card-flush">

  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important;">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-calendar-add fs-1 text-pyrus"></i></span>&nbsp; Calendario de Pagos - Ocultos</span>
    </h3>
  </div>
  <!--end::Title-->

  <!--begin::Card header-->
  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
    <!--begin::Card title-->
    <div class="card-title">
      <!--begin::Search-->
      <div class="d-flex align-items-center position-relative my-1">
        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
        <input type="text" data-kt-oculto-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar pago" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click para regresar">
      <a href="{{route('calendario_pago.index')}}" class="btn btn-sm btn-primary" style="margin: 15px">
        <i class="ki-outline ki-entrance-right fs-2"></i> Regresar
      </a>
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_oculto_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important;">
          <th class="min-w-70px text-center" style="padding-right: 10px !important;">Cód. Cliente</th>
          <th class="min-w-150px text-center" style="padding-right: 10px !important;">Dominio</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Monto</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Año</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Mes</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Día</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-black">
        <tr style="background-color: rgba(255, 0, 0, 0.6)">
          <td class="text-center">
            <span class="fs-7">12</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.techwiz.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.250.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Enero</span>
          </td>
          <td class="text-center">
            <span class="fs-7">08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_ocultos"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(0, 255, 0, 0.6)">
          <td class="text-center">
            <span class="fs-7">11</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.solarsystemexplore.net</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.550.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Febrero</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_ocultos" title="Nota">
              <i class="ki-outline ki-notepad-edit fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm" title="Activar">
              <i class="ki-outline ki-exit-left fs-2"></i>
            </a>
          </td>
        </tr>
        <tr style="background-color: rgba(0, 0, 255, 0.6)">
          <td class="text-center">
            <span class="fs-7">10</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.greengarden.org</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.260.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Marzo</span>
          </td>
          <td class="text-center">
            <span class="fs-7">21</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(255, 255, 0, 0.6)">
          <td class="text-center">
            <span class="fs-7">9</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.swiftcode.io</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.150.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Abril</span>
          </td>
          <td class="text-center">
            <span class="fs-7">01</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(0, 255, 255, 0.6)">
          <td class="text-center">
            <span class="fs-7">8</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.quantumanalytics.biz</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.420.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Mayo</span>
          </td>
          <td class="text-center">
            <span class="fs-7">30</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(255, 0, 255, 0.6)">
          <td class="text-center">
            <span class="fs-7">7</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.brightideas.dev</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.840.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Junio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">07</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(255, 255, 255, 0.6)">
          <td class="text-center">
            <span class="fs-7">6</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.aerodineaero.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.850.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Julio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">28</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(79, 172, 60, 0.6)">
          <td class="text-center">
            <span class="fs-7">5</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.aqualuxspaandwellness.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.870.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Agosto</span>
          </td>
          <td class="text-center">
            <span class="fs-7">05</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(255, 165, 0, 0.6)">
          <td class="text-center">
            <span class="fs-7">4</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.fusionflare.marketing</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.400.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Septiembre</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(255, 192, 203, 0.6)">
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.stellareats.restaurant</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.620.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Octubre</span>
          </td>
          <td class="text-center">
            <span class="fs-7">23</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(138, 43, 226, 0.6)">
          <td class="text-center">
            <span class="fs-7">2</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.techwiz.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.800.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Noviembre</span>
          </td>
          <td class="text-center">
            <span class="fs-7">28</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr style="background-color: rgba(128, 128, 128, 0.6)">
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-oculto-filter="oculto_name">www.solarsystemexplore.net</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.900.00</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Diciembre</span>
          </td>
          <td class="text-center">
            <span class="fs-7">25</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center text-black" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Activar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
      </tbody>
      <!--end::Table body-->
    </table>
    <!--end::Table-->
  </div>
  <!--end::Card body-->
</div>
<!--end::Calendario_pago-->

<!--begin::Modal - Create Pago-->
<div class="modal fade" id="kt_modal_ocultos" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_ocultos_header" style="background-color: #4caf50;">
        <!--begin::Modal title-->
        <h2 class="text-white">Nota</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_ocultos_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_ocultos_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_ocultos_header" data-kt-scroll-wrappers="#kt_modal_ocultos_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Input-->
              <div id="editor_nota_oculto" style="color:var(--bs-input-color)">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo, libero aliquam excepturi dignissimos vero, odit nisi vitae
                  corporis ipsum reprehenderit dolorum eius. Unde, vitae sapiente! Et nam eaque autem!
                </p>
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Modal content-->
  </div>
  <!--end::Modal dialog-->
</div>
<!--end::Modal - Create Pago-->

@endsection
<!--end::Main-->

@section('scripts')

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/calendario_pago/ocultos.js') }}"></script>
<!--end::Custom Javascript-->

<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_nota_oculto'), {
      placeholder: 'Escribe el contenido importante aquí...',
      readOnly, // Agrega esta línea para hacer el editor de texto solo de lectura
    })
    .catch(error => {
      console.error(error);
    });
</script>
<!-- ckeditor -->
@endsection