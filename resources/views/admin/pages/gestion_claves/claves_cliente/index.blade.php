@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables Claves Client-->
<div class="card card-flush">
  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-lock-2 fs-1 text-pyrus"></i></span>&nbsp; Claves Cliente</span>
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
        <input type="text" data-kt-claves-client-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar Clave del Cliente" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add client-->
      <a href="#" class="btn btn-new" style="margin: 15px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_clave_cliente">
        <i class="ki-outline ki-plus fs-2"></i> Nueva Clave
      </a>
      <!--end::Add client-->
      <!-- begin::other actions -->
      <div class="card-toolbar">
        <!--begin::Menu-->
        <button type="button" class="btn btn-new btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
          <i class="ki-outline ki-category fs-5"></i>
        </button>
        <!--begin::Menu 2-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Otras acciones</div>
          </div>
          <!--end::Menu item-->

          <!--begin::Menu separator-->
          <div class="separator mb-3 opacity-75"></div>
          <!--end::Menu separator-->

          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <div class="menu-content px-3 py-3" style="padding-bottom: 0px !important">
              <a class="btn btn-new btn-sm px-4" href="{{route('clave_cliente.ocultos')}}"> <i class="ki-outline ki-eye-slash fs-2"></i> Clientes Ocultos </a>
            </div>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <div class="menu-content px-3 py-3">
              <a class="btn btn-new btn-sm px-4" href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_create_rol"> <i class="ki-outline ki-people fs-2"></i> Roles </a>
            </div>
          </div>
          <!--end::Menu item-->
        </div>
        <!--end::Menu 2-->
        <!--end::Menu-->
      </div>
      <!-- end::other actions -->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_claves_client_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
          <th class="min-w-55px text-center th-10-table">#</th>
          <th class="min-w-60px text-center th-10-table">Código Cliente</th>
          <th class="min-w-100px text-center th-10-table">Cpanel</th>
          <th class="min-w-100px text-center th-10-table">Usuario</th>
          <th class="min-w-70px text-center th-10-table">Clave</th>
          <th class="min-w-70px text-center th-10-table">Fecha Activación</th>
          <th class="min-w-70px text-center th-10-table">Fecha Término</th>
          <th class="min-w-100px text-center th-10-table">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli015</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_detalle_clave"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_clave_cliente"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">2</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli014</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_detalle_clave" title="Detalle">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_clave_cliente" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-claves-client-filter="delete_row" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" title="Ocultar">
              <i class="ki-outline ki-exit-right fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli013</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">4</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli012</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">5</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli011</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">6</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli010</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">7</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli009</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">8</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli008</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">9</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli007</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">10</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli006</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">11</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli005</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">12</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli004</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">13</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli003</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">14</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli002</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">15</span>
          </td>
          <td class="text-center">
            <span class="fs-7">cli001</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-client-filter="claves_client_name">www.bytecraft.com/cpanel</span>
          </td>
          <td class="text-center">
            <span class="fs-7">kaneh90148@newnime.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">15165118</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-10-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2024-10-08</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Acciones
              <i class="ki-outline ki-down fs-5 ms-1"></i>
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Detalle </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ocultar </a>
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
<!--end::Tables Claves Client-->

<!--begin::Modal - Crear Clave Cliente-->
<div class="modal fade" id="kt_modal_create_clave_cliente" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_clave_cliente_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Nueva Clave</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_clave_cliente_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_clave_cliente_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_clave_cliente_header" data-kt-scroll-wrappers="#kt_modal_create_clave_cliente_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Cliente</label>
                    <select name="tipo_cliente" data-control="select2" data-hide-search="true" data-placeholder="--Seleccione--" class="form-select">
                      <option value="">--Seleccione--</option>
                      <option value="1">cli015</option>
                      <option value="2">cli014</option>
                    </select>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Cpanel</label>
                    <input type="text" class="form-control" placeholder="Cpanel" name="cpanel" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Usuario</label>
                    <input type="text" class="form-control " placeholder="Usuario" name="usuario" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Password</label>
                    <input type="text" class="form-control " placeholder="Password" name="password" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Fecha Activación</label>
                    <input type="date" class="form-control" placeholder="dd/mm/aaaa" name="fecha_activacion" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Fecha Fin</label>
                    <input type="date" class="form-control" placeholder="dd/mm/aaaa" name="fecha_fin" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_create_clave_cliente_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_clave_cliente_submit" class="btn btn-primary">
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
<!--end::Modal - Crear Clave Cliente-->

<!--begin::Modal - Crear Rol-->
<div class="modal fade" id="kt_modal_create_rol" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_rol_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Nuevo Rol</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_rol_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_rol_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_rol_header" data-kt-scroll-wrappers="#kt_modal_create_rol_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <label class="fs-5 fw-semibold mb-2 text-black">Rol</label>
                <input type="text" class="form-control" placeholder="Rol" name="rol" />
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_create_rol_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_rol_submit" class="btn btn-primary">
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
<!--end::Modal - Crear Rol-->

<!--begin::Modal - Detalle Clave-->
<div class="modal fade" id="kt_modal_detalle_clave" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_detalle_clave_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Detalle Clave</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_detalle_clave_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_detalle_clave_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_detalle_clave_header" data-kt-scroll-wrappers="#kt_modal_detalle_clave_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Cod. Cliente</label>
                    <input type="text" class="form-control" name="" value="cli015" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Fecha Activación</label>
                    <input type="date" class="form-control" value="18/10/2023" name="" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Fecha Termino</label>
                    <input type="date" class="form-control" value="08/10/2024" name="" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <label class="fs-5 fw-semibold mb-2 text-black">Cpanel</label>
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="www.bytecraft.com/cpanel" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="cpanel" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="1234" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <label class="fs-5 fw-semibold mb-2 text-black">Webmail</label>
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="webmail.com" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="web" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="1234" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <label class="fs-5 fw-semibold mb-2 text-black">Administrador</label>
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="administrador.com" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="admin" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="1234" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <label class="fs-5 fw-semibold mb-2 text-black">Facebook</label>
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="facebook.com" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="face" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="1234" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <label class="fs-5 fw-semibold mb-2 text-black">Instagram</label>
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="instagram.com" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="insta" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="1234" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <label class="fs-5 fw-semibold mb-2 text-black">Otro</label>
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="otro.com" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="otro" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control " name="" value="1234" readonly style="background-color: var(--bs-gray-200);" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
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
<!--end::Modal - Detalle Clave-->

<!--begin::Modal - Editar Clave Cliente-->
<div class="modal fade" id="kt_modal_edit_clave_cliente" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_clave_cliente_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Editar Clave</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_clave_cliente_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_clave_cliente_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_clave_cliente_header" data-kt-scroll-wrappers="#kt_modal_edit_clave_cliente_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Cliente</label>
                    <select name="tipo_cliente" data-control="select2" data-hide-search="true" data-placeholder="--Seleccione--" class="form-select">
                      <option value="1">cli015</option>
                      <option value="2">cli014</option>
                    </select>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Cpanel</label>
                    <input type="text" class="form-control" placeholder="Cpanel" name="cpanel" value="www.bytecraft.com/cpanel" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Usuario</label>
                    <input type="text" class="form-control " placeholder="Usuario" name="usuario" value="kaneh90148@newnime.com" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Password</label>
                    <input type="text" class="form-control " placeholder="Password" name="password" value="15165118" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Fecha Activación</label>
                    <input type="date" class="form-control" placeholder="dd/mm/aaaa" name="fecha_activacion" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Fecha Fin</label>
                    <input type="date" class="form-control" placeholder="dd/mm/aaaa" name="fecha_fin" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_edit_clave_cliente_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_clave_cliente_submit" class="btn btn-primary">
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
<!--end::Modal - Editar Clave Cliente-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_cliente/claves_cliente.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_cliente/create_clave_cliente.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_cliente/create_rol.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_cliente/detalle_clave.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_cliente/edit_clave_cliente.js') }}"></script>
<!--end::Custom Javascript-->

@endsection