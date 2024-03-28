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
        <span class="menu-icon align-middle"><i class="ki-outline ki-calendar-add fs-1 text-pyrus"></i></span>&nbsp; Calendario de Pagos</span>
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
        <input type="text" data-kt-calendario-pago-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar pago" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Menu-->
      <button type="button" class="btn btn-sm btn-icon btn-primary hover-scale" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <i class="ki-outline ki-category fs-6"></i>
      </button>

      <!--begin::Menu 2-->
      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
          <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Acciones rápidas</div>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu separator-->
        <div class="separator mb-3 opacity-75"></div>
        <!--end::Menu separator-->

        <!--begin::Menu item-->
        <div class="menu-item px-3">
          <div class="menu-content px-3 py-3" style="padding-bottom: 0px !important">
            <a class="btn btn-primary btn-sm px-4" href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_create_pago"> <i class="ki-outline ki-plus fs-2"></i> Registrar </a>
          </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
          <div class="menu-content px-3 py-3">
            <a class="btn btn-warning btn-sm px-4" href="{{route('calendario_pago.ocultos')}}"> <i class="ki-outline ki-eye-slash fs-2"></i> Ocultos </a>
          </div>
        </div>
        <!--end::Menu item-->
      </div>
      <!--end::Menu 2-->
      <!--end::Menu-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_calendario_pago_table">
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.techwiz.com</span>
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
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_pago"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_nota"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.solarsystemexplore.net</span>
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
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_pago" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_nota" title="Nota">
              <i class="ki-outline ki-notepad-edit fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-calendario-pago-filter="delete_row" title="Suspender">
              <i class="ki-solid ki-exit-right fs-2"></i>
            </a>
          </td>
        </tr>
        <tr style="background-color: rgba(0, 0, 255, 0.6)">
          <td class="text-center">
            <span class="fs-7">10</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.greengarden.org</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.swiftcode.io</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.quantumanalytics.biz</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.brightideas.dev</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.aerodineaero.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.aqualuxspaandwellness.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.fusionflare.marketing</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.stellareats.restaurant</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.techwiz.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-calendario-pago-filter="calendario_pago_name">www.solarsystemexplore.net</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Nota </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-calendario-pago-filter="delete_row"> Eliminar </a>
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
<div class="modal fade" id="kt_modal_create_pago" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_pago_header" style="background-color: #4caf50;">
        <!--begin::Modal title-->
        <h2 class="text-white">Registrar</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_pago_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_pago_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_pago_header" data-kt-scroll-wrappers="#kt_modal_create_pago_scroll" data-kt-scroll-offset="300px">

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Cliente</label>
              <!--end::Label-->

              <!--begin::Select-->
              <select name="cliente" data-control="select2" data-hide-search="true" data-placeholder="Selecciona un cliente..." class="form-select form-select-solid">
                <option value="">Selecciona un cliente...</option>
                <option value="1">Cliente 01</option>
                <option value="2">Cliente 02</option>
                <option value="3">Cliente 03</option>
                <option value="4">Cliente 04</option>
                <option value="5">Cliente 05</option>
              </select>
              <!--end::Select-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Dominio</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" placeholder="Dominio" name="web" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Fecha de Pago</label>
              <!--end::Label-->

              <!--begin::Datepicker-->
              <input class="form-control form-control-solid" placeholder="Seleccione una fecha" name="fecha_pago" />
              <!--end::Datepicker-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Monto</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="number" class="form-control form-control-solid" placeholder="Monto" name="monto" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Nota</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_nota_create" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_create_pago_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_pago_submit" class="btn btn-primary">
            <span class="indicator-label">Guardar</span>
            <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
          </button>
          <!--end::Button-->
        </div>
        <!--end::Modal footer-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Modal content-->
  </div>
  <!--end::Modal dialog-->
</div>
<!--end::Modal - Create Pago-->

<!--begin::Modal - Nota-->
<div class="modal fade" id="kt_nota" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_nota_header" style="background-color: #4caf50;">
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
      <form id="kt_nota_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_nota_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_nota_header" data-kt-scroll-wrappers="#kt_nota_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Input-->
              <div id="editor_nota" style="color:var(--bs-input-color)">
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
<!--end::Modal - Nota->

<!--begin::Modal - Edit Pago-->
<div class="modal fade" id="kt_modal_edit_pago" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_pago_header" style="background-color: #4caf50;">
        <!--begin::Modal title-->
        <h2 class="text-white">Editar</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_pago_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_pago_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_pago_header" data-kt-scroll-wrappers="#kt_modal_edit_pago_scroll" data-kt-scroll-offset="300px">

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Cliente</label>
              <!--end::Label-->

              <!--begin::Select-->
              <select name="cliente" data-control="select2" data-hide-search="true" class="form-select form-select-solid">
                <option value="1">Cliente 01</option>
                <option value="2">Cliente 02</option>
                <option value="3">Cliente 03</option>
                <option value="4">Cliente 04</option>
                <option value="5">Cliente 05</option>
              </select>
              <!--end::Select-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Dominio</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" placeholder="Dominio" name="web" value="www.techwiz.com" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Fecha de Pago</label>
              <!--end::Label-->

              <!--begin::Datepicker-->
              <input class="form-control form-control-solid" placeholder="Seleccione una fecha" name="fecha_pago" value="08-01-2023" />
              <!--end::Datepicker-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Monto</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="number" class="form-control form-control-solid" placeholder="Monto" name="monto" value="250" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Nota</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_nota_edit" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequuntur fugit sint nesciunt ab!
                  In doloremque dolor excepturi at amet provident alias a debitis aliquam magnam officia, possimus nam quidem!sfasfasfsa
                </p>
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_edit_pago_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_pago_submit" class="btn btn-primary">
            <span class="indicator-label">Guardar</span>
            <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
          </button>
          <!--end::Button-->
        </div>
        <!--end::Modal footer-->
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
<script src="{{ asset('admin/assets/js/custom/pyrus/calendario_pago/calendario_pago.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/calendario_pago/create_pago.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/calendario_pago/edit_pago.js') }}"></script>
<!--end::Custom Javascript-->

<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_nota'), {
      readonly,
    })
    .catch(error => {
      console.error(error);
    });
</script>

<script>
  ClassicEditor
    .create(document.querySelector('#editor_nota_create'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>

<script>
  ClassicEditor
    .create(document.querySelector('#editor_nota_edit'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<!-- ckeditor -->
@endsection