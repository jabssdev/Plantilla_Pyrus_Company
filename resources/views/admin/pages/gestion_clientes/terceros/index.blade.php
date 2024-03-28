@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->
<style>
  .select2-container {
    margin-right: 10px !important;
  }
</style>

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Client-->
<div class="card card-flush">
  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-user-tick fs-1 text-pyrus"></i></span>&nbsp; Cliente / Proveedores</span>
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
        <input type="text" data-kt-client-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar Cliente" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add client-->
      <a href="#" class="btn btn-new" style="margin: 15px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_cliente">
        <i class="ki-outline ki-plus fs-2"></i> Nuevo Cliente / Proveedor
      </a>
      <!--end::Add client-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_client_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
          <th class="min-w-55px  text-center th-10-table">#</th>
          <th class="min-w-60px">Código</th>
          <th class="min-w-60px ">Tipo Doc.</th>
          <th class="min-w-90px ">N° Doc</th>
          <th class="min-w-100px">Nombre Legal</th>
          <th class="min-w-100px">Dirección</th>
          <th class="min-w-100px">Web</th>
          <th class="min-w-70px">Estado</th>
          <th class="min-w-100px text-center th-10-table">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td>
            <span class="fs-7">cli014</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">15165118</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Rodolfo Conesa</span>
          </td>
          <td>
            <span class="fs-7">Ca. Javier Heraud 166, La Molina</span>
          </td>
          <td>
            <span class="fs-7">www.bytecraft.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
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
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_cliente"> Editar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="{{route('tercero.mapa.index')}}" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_select_location"> Ver ubicación </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_servicio_cliente"> Servicios </a>
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
          <td>
            <span class="fs-7">cli013</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">23695847</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Juan Jesus Herranz</span>
          </td>
          <td>
            <span class="fs-7">Calle Leticia, 170</span>
          </td>
          <td>
            <span class="fs-7">www.solaris.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_cliente" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-client-filter="delete_row" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>

            <a href="{{route('tercero.mapa.index')}}" class="btn btn-icon btn-light-eye-blue btn-sm me-1" title="Dirección">
              <i class="ki-outline ki-geolocation-home fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_select_location" title="Ver ubicación">
              <i class="ki-outline ki-map fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_servicio_cliente" title="Servicios">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td>
            <span class="fs-7">cli012</span>
          </td>
          <td>
            <span class="fs-7">Otros</span>
          </td>
          <td>
            <span class="fs-7">D-25</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Samir Jimenez</span>
          </td>
          <td>
            <span class="fs-7">Calle San Martín, S/N, Urb. Las Brisas De Lurín</span>
          </td>
          <td>
            <span class="fs-7">www.greentech.com</span>
          </td>
          <td>
            <span class="badge badge-light-warning fs-7 fw-bold">Temporal</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli011</span>
          </td>
          <td>
            <span class="fs-7">Otros</span>
          </td>
          <td>
            <span class="fs-7">G-14</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Maria Carme Villanueva</span>
          </td>
          <td>
            <span class="fs-7">415, Of 101, Urb. Sta. María</span>
          </td>
          <td>
            <span class="fs-7">www.quantum.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli010</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">75248135</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Luis Angel Ubeda</span>
          </td>
          <td>
            <span class="fs-7">Prolongación Los Puquinas, 117</span>
          </td>
          <td>
            <span class="fs-7">www.aerodine.com</span>
          </td>
          <td>
            <span class="badge badge-light-danger fs-7 fw-bold">Rechazado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli009</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">15165118</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Rodolfo Conesa</span>
          </td>
          <td>
            <span class="fs-7">Ca. Javier Heraud 166, La Molina</span>
          </td>
          <td>
            <span class="fs-7">www.bytecraft.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli008</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">23695847</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Juan Jesus Herranz</span>
          </td>
          <td>
            <span class="fs-7">Calle Leticia, 170</span>
          </td>
          <td>
            <span class="fs-7">www.solaris.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli007</span>
          </td>
          <td>
            <span class="fs-7">Otros</span>
          </td>
          <td>
            <span class="fs-7">D-25</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Samir Jimenez</span>
          </td>
          <td>
            <span class="fs-7">Calle San Martín, S/N, Urb. Las Brisas De Lurín</span>
          </td>
          <td>
            <span class="fs-7">www.greentech.com</span>
          </td>
          <td>
            <span class="badge badge-light-warning fs-7 fw-bold">Temporal</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli006</span>
          </td>
          <td>
            <span class="fs-7">Otros</span>
          </td>
          <td>
            <span class="fs-7">G-14</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Maria Carme Villanueva</span>
          </td>
          <td>
            <span class="fs-7">415, Of 101, Urb. Sta. María</span>
          </td>
          <td>
            <span class="fs-7">www.quantum.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli005</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">75248135</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Luis Angel Ubeda</span>
          </td>
          <td>
            <span class="fs-7">Prolongación Los Puquinas, 117</span>
          </td>
          <td>
            <span class="fs-7">www.aerodine.com</span>
          </td>
          <td>
            <span class="badge badge-light-danger fs-7 fw-bold">Rechazado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli004</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">15165118</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Rodolfo Conesa</span>
          </td>
          <td>
            <span class="fs-7">Ca. Javier Heraud 166, La Molina</span>
          </td>
          <td>
            <span class="fs-7">www.bytecraft.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli003</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">23695847</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Juan Jesus Herranz</span>
          </td>
          <td>
            <span class="fs-7">Calle Leticia, 170</span>
          </td>
          <td>
            <span class="fs-7">www.solaris.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli002</span>
          </td>
          <td>
            <span class="fs-7">Otros</span>
          </td>
          <td>
            <span class="fs-7">D-25</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Samir Jimenez</span>
          </td>
          <td>
            <span class="fs-7">Calle San Martín, S/N, Urb. Las Brisas De Lurín</span>
          </td>
          <td>
            <span class="fs-7">www.greentech.com</span>
          </td>
          <td>
            <span class="badge badge-light-warning fs-7 fw-bold">Temporal</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli001</span>
          </td>
          <td>
            <span class="fs-7">Otros</span>
          </td>
          <td>
            <span class="fs-7">G-14</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Maria Carme Villanueva</span>
          </td>
          <td>
            <span class="fs-7">415, Of 101, Urb. Sta. María</span>
          </td>
          <td>
            <span class="fs-7">www.quantum.com</span>
          </td>
          <td>
            <span class="badge btn-acept fs-7 fw-bold">Aceptado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
          <td>
            <span class="fs-7">cli000</span>
          </td>
          <td>
            <span class="fs-7">DNI</span>
          </td>
          <td>
            <span class="fs-7">75248135</span>
          </td>
          <td>
            <span class="fs-7" data-kt-client-filter="client_name">Luis Angel Ubeda</span>
          </td>
          <td>
            <span class="fs-7">Prolongación Los Puquinas, 117</span>
          </td>
          <td>
            <span class="fs-7">www.aerodine.com</span>
          </td>
          <td>
            <span class="badge badge-light-danger fs-7 fw-bold">Rechazado</span>
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
                <a href="#" class="menu-link px-3" data-kt-client-filter="delete_row"> Eliminar </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Dirección </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Mapa </a>
              </div>
              <!--end::Menu item-->

              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3"> Ver </a>
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
<!--end::Client-->

<!--begin::Modal - Create Client-->
<div class="modal fade" id="kt_modal_create_cliente" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_cliente_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Nuevo Cliente / Proveedor</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_cliente_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_cliente_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_cliente_header" data-kt-scroll-wrappers="#kt_modal_create_cliente_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-10">
              <!--begin::Heading-->
              <div class="mb-3">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-5 fw-semibold">
                  <span class="required text-black">Tipo de Documento</span>
                </label>
                <!--end::Label-->
              </div>
              <!--end::Heading-->

              <!--begin::Row-->
              <div class="fv-row">
                <!--begin::Radio group-->
                <div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                  <!--begin::Radio-->
                  <label class="btn btn-outline btn-active-primary btn-color-muted" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" name="tipo_documento" value="1" />
                    <!--end::Input-->
                    RUC
                  </label>
                  <!--end::Radio-->

                  <!--begin::Radio-->
                  <label class="btn btn-outline btn-active-primary btn-color-muted active" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" name="tipo_documento" checked="checked" value="2" />
                    <!--end::Input-->
                    DNI
                  </label>
                  <!--end::Radio-->

                  <!--begin::Radio-->
                  <label class="btn btn-outline btn-active-primary btn-color-muted" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" name="tipo_documento" value="3" />
                    <!--end::Input-->
                    N/A
                  </label>
                  <!--end::Radio-->
                </div>
                <!--end::Radio group-->
              </div>
              <!--end::Row-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">N° de Documento</label>
              <!--end::Label-->
              <!--begin::Input-->
              <div class="position-relative d-flex align-items-center">
                <input type="text" class="form-control form-control-solid" placeholder="RUC" name="n_documento" />
                <a href="#"><span class="input-group-text">
                    <i class="ki-outline ki-magnifier fs-2"> </i> </span></a>
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Nombre Legal</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" style="background-color: var(--bs-gray-200)" placeholder="Nombre Legal / Razón Social" name="nombre" autocomplete="off" disabled />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Código</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" placeholder="Código" name="codigo" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Web</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" placeholder="Web" name="web" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Correo</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="email" class="form-control form-control-solid" placeholder="Correo" name="correo" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Teléfono</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="number" class="form-control form-control-solid" placeholder="Teléfono" name="telefono" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2 text-black">Gerente</label>
                <!--end::Label-->

                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control form-control-solid" placeholder="Nombre" name="gerente_nombre" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="email" class="form-control form-control-solid" placeholder="Correo" name="gerente_correo" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="number" class="form-control form-control-solid" placeholder="Celular" name="gerente_celular" />
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
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2 text-black">Contacto</label>
                <!--end::Label-->

                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control form-control-solid" placeholder="Nombre" name="contacto_nombre" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="email" class="form-control form-control-solid" placeholder="Correo" name="contacto_correo" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="number" class="form-control form-control-solid" placeholder="Celular" name="contacto_celular" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-10 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Tipo</label>
              <!--end::Label-->

              <!--begin::Select-->
              <select name="tipo" data-control="select2" data-hide-search="true" data-placeholder="Selecciona un tipo de cliente..." class="form-select form-select-solid">
                <option value="">Selecciona un tipo de cliente...</option>
                <option value="1">Cliente</option>
                <option value="2">Proveedor</option>
                <option value="3">Cliente / Proveedor</option>
              </select>
              <!--end::Select-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-10 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Estado</label>
              <!--end::Label-->

              <!--begin::Select-->
              <select name="estado" data-control="select2" data-hide-search="true" data-placeholder="Selecciona un estado..." class="form-select form-select-solid">
                <option value="">Selecciona un estado...</option>
                <option value="1">Aceptado</option>
                <option value="2">Temporal</option>
                <option value="3">Rechazado</option>
              </select>
              <!--end::Select-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_create_cliente_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_cliente_submit" class="btn btn-primary">
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
<!--end::Modal - Create Client-->

<!--begin::Modal - Edit Client-->
<div class="modal fade" id="kt_modal_edit_cliente" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_cliente_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Editar Cliente / Proveedor</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_cliente_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_cliente_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_cliente_header" data-kt-scroll-wrappers="#kt_modal_edit_cliente_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-10">
              <!--begin::Heading-->
              <div class="mb-3">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-5 fw-semibold">
                  <span class="required text-black">Tipo de Documento</span>
                </label>
                <!--end::Label-->
              </div>
              <!--end::Heading-->

              <!--begin::Row-->
              <div class="fv-row">
                <!--begin::Radio group-->
                <div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                  <!--begin::Radio-->
                  <label class="btn btn-outline btn-active-primary btn-color-muted" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" name="tipo_documento" value="1" />
                    <!--end::Input-->
                    RUC
                  </label>
                  <!--end::Radio-->

                  <!--begin::Radio-->
                  <label class="btn btn-outline btn-active-primary btn-color-muted" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" name="tipo_documento" checked="checked" value="2" />
                    <!--end::Input-->
                    DNI
                  </label>
                  <!--end::Radio-->

                  <!--begin::Radio-->
                  <label class="btn btn-outline btn-active-primary btn-color-muted" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" name="tipo_documento" value="3" />
                    <!--end::Input-->
                    N/A
                  </label>
                  <!--end::Radio-->
                </div>
                <!--end::Radio group-->
              </div>
              <!--end::Row-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">N° de Documento</label>
              <!--end::Label-->
              <!--begin::Input-->
              <div class="position-relative d-flex align-items-center">
                <input type="text" class="form-control form-control-solid" placeholder="RUC" name="n_documento" value="15165118" />
                <a href="#"><span class="input-group-text">
                    <i class="ki-outline ki-magnifier fs-2"> </i> </span></a>
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Nombre Legal</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" style="background-color: var(--bs-gray-200)" placeholder="Nombre Legal / Razón Social" name="nombre" autocomplete="off" disabled value="Rodolfo Conesa" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Código</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" placeholder="Código" name="codigo" value="cli006" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Web</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" placeholder="Web" name="web" value="www.bytecraft.com" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Correo</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="email" class="form-control form-control-solid" placeholder="Correo" name="correo" value="rodolfo_conesa@gmail.com" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Teléfono</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="number" class="form-control form-control-solid" placeholder="Teléfono" name="telefono" value="945216324" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2 text-black">Gerente</label>
                <!--end::Label-->

                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control form-control-solid" placeholder="Nombre" name="gerente_nombre" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="email" class="form-control form-control-solid" placeholder="Correo" name="gerente_correo" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="number" class="form-control form-control-solid" placeholder="Celular" name="gerente_celular" />
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
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2 text-black">Contacto</label>
                <!--end::Label-->

                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="text" class="form-control form-control-solid" placeholder="Nombre" name="contacto_nombre" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="email" class="form-control form-control-solid" placeholder="Correo" name="contacto_correo" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <input type="number" class="form-control form-control-solid" placeholder="Celular" name="contacto_celular" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-10 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Tipo</label>
              <!--end::Label-->

              <!--begin::Select-->
              <select name="tipo" data-control="select2" data-hide-search="true" class="form-select form-select-solid">
                <option value="">Cliente</option>
                <option value="1">Cliente</option>
                <option value="2">Proveedor</option>
                <option value="3">Cliente / Proveedor</option>
              </select>
              <!--end::Select-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-10 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Estado</label>
              <!--end::Label-->

              <!--begin::Select-->
              <select name="estado" data-control="select2" data-hide-search="true" class="form-select form-select-solid">
                <option value="">Aceptado</option>
                <option value="1">Aceptado</option>
                <option value="2">Temporal</option>
                <option value="3">Rechazado</option>
              </select>
              <!--end::Select-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_edit_cliente_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_cliente_submit" class="btn btn-primary">
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
<!--end::Modal - Edit Client-->

<!--begin::Modal - Select Location-->
<div class="modal fade" id="kt_modal_select_location" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" style="background-color: #4caf50">
        <!--begin::Title-->
        <h2 class="text-white">Ubicación</h2>
        <!--end::Title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Modal body-->
      <div class="modal-body">
        <div class="row" style="margin-top: 20px; margin-bottom: 20px; display: none !important">
          <div class="col-sm-6">
            <input type="text" id="longitud" class="form-control" />
          </div>
          <div class="col-sm-6">
            <input type="text" id="latitud" class="form-control" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div id="mapa" class="w-100 rounded" style="height: 450px"></div>
          </div>
        </div>
      </div>
      <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
  </div>
  <!--end::Modal dialog-->
</div>
<!--end::Modal - Select Location-->

<!--begin::Modal - Service Client-->
<div class="modal fade" id="kt_modal_servicio_cliente" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_servicio_cliente_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Tercero - Servicio</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_servicio_cliente_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_servicio_cliente_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_servicio_cliente_header" data-kt-scroll-wrappers="#kt_modal_servicio_cliente_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-10 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Pack</label>
              <!--end::Label-->

              <!--begin::Select-->
              <div class="d-flex">
                <select name="servicio" data-control="select2" data-hide-search="true" data-placeholder="Selecciona un servicio..." class="form-select form-select-solid me-5">
                  <option value="">Selecciona un servicio...</option>
                  <option value="1">APP Móviles</option>
                  <option value="2">Aula virtual</option>
                  <option value="3">Certificado SSL</option>
                  <option value="4">Diseño Web</option>
                  <option value="5">Dominios</option>
                  <option value="6">Hosting</option>
                </select>
                <button type="submit" id="kt_modal_servicio_cliente_submit" class="btn btn-primary">
                  <span class="indicator-label">Guardar</span>
                  <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                </button>
              </div>
              <!--end::Select-->
            </div>
            <!--end::Input group-->

            <!--begin::Card body-->
            <div class="card-body pt-0">
              <!--begin::Table-->
              <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_servicio_client_table">
                <thead>
                  <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0 table-bg" style="border-bottom: none !important">
                    <th class="min-w-55px text-center" style="padding-right: 10px !important">#</th>
                    <th class="min-w-200px text-center" style="padding-right: 10px !important">NOMBRE LEGAL</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important">ACCIONES</th>
                  </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                  <tr>
                    <td class="text-center">
                      <span class="fs-7">1</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7" data-kt-servicio-client-filter="service_name">App móviles</span>
                    </td>
                    <td class="text-center">
                      <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-servicio-client-filter="delete_row">
                        <i class="ki-solid ki-trash fs-2"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <span class="fs-7">2</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7" data-kt-servicio-client-filter="service_name">Hosting</span>
                    </td>
                    <td class="text-center">
                      <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-servicio-client-filter="delete_row">
                        <i class="ki-solid ki-trash fs-2"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
                <!--end::Table body-->
              </table>
              <!--end::Table-->
            </div>
            <!--end::Card body-->
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
<!--end::Modal - Service Client-->


@endsection
<!--end::Main-->

@section('scripts')

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<!-- Desde 0 -->
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/create-cliente.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/edit-cliente.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/clientes.js') }}"></script>
<!-- <script src="{{ asset('admin/assets/js/custom/utilities/modals/select-location.js') }}"></script> -->
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/servicio-cliente.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/servicios.js') }}"></script>
<!--end::Custom Javascript-->

<script>
  function mapaGoogle() {
    if (document.getElementById("latitud").value == '' || document.getElementById("longitud").value == '') {
      var latitud = -8.11173879433607;
      var longitud = -79.02869051222532;
    } else {
      var latitud = parseFloat(document.getElementById("latitud").value);
      var longitud = parseFloat(document.getElementById("longitud").value);
    }

    const myLatLng = {
      lat: latitud,
      lng: longitud
    };

    const mapa = new google.maps.Map(document.getElementById('mapa'), {
      zoom: 15,
      center: myLatLng
    });

    const marcador = new google.maps.Marker({
      map: mapa,
      draggable: true,
      position: myLatLng
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCShqlh7VDQb7M5k2y5KgdzAAjfN8Fdv3E&amp;&callback=mapaGoogle"></script>

<script type="text/javascript">
  var marcadores = [];
</script>

@endsection