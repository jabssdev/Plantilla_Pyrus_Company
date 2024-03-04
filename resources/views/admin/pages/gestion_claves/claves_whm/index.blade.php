@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables Claves WHM-->
<div class="card card-flush">
  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-lock-2 fs-1 text-pyrus"></i></span>&nbsp; Claves WHM</span>
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
        <input type="text" data-kt-claves-whm-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar Clave WHM" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add client-->
      <a href="#" class="btn btn-new" style="margin: 15px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_clave_whm">
        <i class="ki-outline ki-plus fs-2"></i> Nueva Clave
      </a>
      <!--end::Add client-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_claves_whm_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
          <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Dominio/WHM</th>
          <th class="min-w-125px text-center" style="padding-right: 10px !important;">Usuario</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Clave</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Fecha Activación</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Fecha Término</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_clave_whm"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
            <span class="fs-7" data-kt-claves-whm-filter="claves_whm_name">www.bytecraft.com</span>
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

              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-claves-whm-filter="delete_row"> Eliminar </a>
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
<!--end::Tables Claves WHM-->

<!--begin::Modal - Crear Clave WHM-->
<div class="modal fade" id="kt_modal_create_clave_whm" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_clave_whm_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Nueva Clave WHM</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_clave_whm_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_clave_whm_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_clave_whm_header" data-kt-scroll-wrappers="#kt_modal_create_clave_whm_scroll" data-kt-scroll-offset="300px">
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
          <button type="reset" id="kt_modal_create_clave_whm_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_clave_whm_submit" class="btn btn-primary">
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
<!--end::Modal - Crear Clave WHM-->

<!--begin::Modal - Editar Clave WHM-->
<div class="modal fade" id="kt_modal_edit_clave_whm" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_clave_whm_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Editar Clave WHM</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_clave_whm_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_clave_whm_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_clave_whm_header" data-kt-scroll-wrappers="#kt_modal_edit_clave_whm_scroll" data-kt-scroll-offset="300px">
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
          <button type="reset" id="kt_modal_edit_clave_whm_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_clave_whm_submit" class="btn btn-primary">
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
<!--end::Modal - Editar Clave WHM-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_whm/claves_whm.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_whm/create_clave_whm.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_whm/edit_clave_whm.js') }}"></script>
<!--end::Custom Javascript-->

@endsection