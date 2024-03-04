@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables Catalogo Servicios-->
<div class="card card-flush">
  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-handcart fs-1 text-pyrus"></i></span>&nbsp; Servicios</span>
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
        <input type="text" data-kt-catalogo-servicios-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar Servicio" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add client-->
      <a href="#" class="btn btn-new" style="margin: 15px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_servicio">
        <i class="ki-outline ki-plus fs-2"></i> Nuevo Servicio
      </a>
      <!--end::Add client-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_catalogo_servicios_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
          <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Código</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Tipo</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Categoría</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">SubCategoría</th>
          <th class="min-w-110px text-center" style="padding-right: 10px !important;">Dominio</th>
          <th class="min-w-70px text-center" style="padding-right: 10px !important;">Espacio</th>
          <th class="min-w-70px text-center" style="padding-right: 10px !important;">Velocidad</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Descripción</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Estado</th>
          <th class="min-w-200px text-center" style="padding-right: 10px !important;">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc015</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_servicio" title=" Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_planes" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">2</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc014</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc013</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">4</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc012</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge badge-light-danger fs-7 fw-bold">Inactivo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">5</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc011</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">6</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc010</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">7</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc009</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge badge-light-danger fs-7 fw-bold">Inactivo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">8</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc008</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">9</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc007</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">10</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc006</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge badge-light-danger fs-7 fw-bold">Inactivo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">11</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc005</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">12</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc004</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">13</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc003</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge badge-light-danger fs-7 fw-bold">Inactivo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">14</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc002</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">15</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-catalogo-servicios-filter="catalogo_servicios_name">svc001</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Servicio</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Móviles</span>
          </td>
          <td class="text-center">
            <span class="fs-7">APP Android</span>
          </td>
          <td class="text-center">
            <span class="fs-7">www.dominio1.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">5 MB</span>
          </td>
          <td class="text-center">
            <span class="fs-7">20 MB/S</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt ad
              libero, quidem vel distinctio non deleniti a?</span>
          </td>
          <td class="text-center">
            <span class="badge badge-light-danger fs-7 fw-bold">Inactivo</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1" data-bs-toggle="tooltip" title="Planes">
              <i class="ki-outline ki-calendar-tick fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-catalogo-servicios-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
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
<!--end::Tables Catalogo Servicios-->

<!--begin::Modal - Crear Servicio-->
<div class="modal fade" id="kt_modal_create_servicio" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_servicio_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Nuevo Servicio</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_servicio_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_servicio_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_servicio_header" data-kt-scroll-wrappers="#kt_modal_create_servicio_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Tipo</label>
                    <select name="tipo" data-control="select2" data-hide-search="true" data-placeholder="Tipo de servicio" class="form-select form-select-solid">
                      <option value="">Tipo de servicio</option>
                      <option value="1">Existencia</option>
                      <option value="2">Servicio</option>
                    </select>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Categoría</label>
                    <select name="categoria" data-control="select2" data-hide-search="true" data-placeholder="Categoría" class="form-select form-select-solid">
                      <option value="">Categoría</option>
                      <option value="1">App Móviles</option>
                      <option value="2">Aula Virtual</option>
                    </select>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Subcategoría</label>
                    <select name="subcategoria" data-control="select2" data-hide-search="true" data-placeholder="Subcategoría" class="form-select form-select-solid">
                      <option value="">Subcategoría</option>
                      <option value="1">Subcategoría 1</option>
                      <option value="2">Subcategoría 2</option>
                    </select>
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
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Código</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Código" name="codigo" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Recomendado</label>
                    <select name="recomendado" data-control="select2" data-hide-search="true" data-placeholder="Recomendado" class="form-select form-select-solid">
                      <option value="">Recomendado</option>
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Estado</label>
                    <select name="estado" data-control="select2" data-hide-search="true" data-placeholder="Estado" class="form-select form-select-solid">
                      <option value="">Estado</option>
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
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
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Dominio</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Dominio" name="dominio" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Espacio</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Espacio" name="espacio" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Velocidad</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Velocidad" name="velocidad" />
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
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Correos</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Correos" name="correos" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Usuarios</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Usuarios" name="usuarios" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Descripción</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_descripcion_create" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Descripción Inglés</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_descripcion_ingles_create" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Imagen</label>
              <!--end::Label-->

              <!--begin::Dropzone-->
              <div class="dropzone" id="kt_dropzonejs_servicio">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                  <!--begin::Icon-->
                  <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                  <!--end::Icon-->
                  <!--begin::Info-->
                  <div class="ms-4">
                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Suelte los archivos aquí o haga click para cargarlos.</h3>
                    <span class="fs-7 fw-semibold text-gray-400">Subir solo 1 archivo</span>
                  </div>
                  <!--end::Info-->
                </div>
              </div>
              <!--end::Dropzone-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_create_servicio_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_servicio_submit" class="btn btn-primary">
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
<!--end::Modal - Crear Servicio-->

<!--begin::Modal - Editar Servicio-->
<div class="modal fade" id="kt_modal_edit_servicio" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_servicio_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Nuevo Servicio</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_servicio_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_servicio_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_servicio_header" data-kt-scroll-wrappers="#kt_modal_edit_servicio_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Tipo</label>
                    <select name="tipo" data-control="select2" data-hide-search="true" data-placeholder="Tipo de servicio" class="form-select form-select-solid">
                      <option value="1">Existencia</option>
                      <option value="2">Servicio</option>
                    </select>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Categoría</label>
                    <select name="categoria" data-control="select2" data-hide-search="true" data-placeholder="Categoría" class="form-select form-select-solid">
                      <option value="1">App Móviles</option>
                      <option value="2">Aula Virtual</option>
                    </select>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Subcategoría</label>
                    <select name="subcategoria" data-control="select2" data-hide-search="true" data-placeholder="Subcategoría" class="form-select form-select-solid">
                      <option value="1">Subcategoría 1</option>
                      <option value="2">Subcategoría 2</option>
                    </select>
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
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Código</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Código" name="codigo" value="123456" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Recomendado</label>
                    <select name="recomendado" data-control="select2" data-hide-search="true" data-placeholder="Recomendado" class="form-select form-select-solid">
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Estado</label>
                    <select name="estado" data-control="select2" data-hide-search="true" data-placeholder="Estado" class="form-select form-select-solid">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
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
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Dominio</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Dominio" name="dominio" value="dominio@example.com" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Espacio</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Espacio" name="espacio" value="5GB" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Velocidad</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Velocidad" name="velocidad" value="100 Mb/s" />
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
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Correos</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Correos" name="correos" value="" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-4">
                    <label class="fs-5 fw-semibold mb-2 text-black">Usuarios</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Usuarios" name="usuarios" value="" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Descripción</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_descripcion_edit" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quos neque ducimus voluptates omnis optio quae
                  equi nisi! Minus provident voluptatem nemo aliquam sit ipsam repellendus unde ex iste harum.
                </p>
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Descripción Inglés</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_descripcion_ingles_edit" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quos neque ducimus voluptates omnis optio quae
                  equi nisi! Minus provident voluptatem nemo aliquam sit ipsam repellendus unde ex iste harum.
                </p>
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Imagen</label>
              <!--end::Label-->

              <!--begin::Dropzone-->
              <div class="dropzone" id="kt_dropzonejs_servicio">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                  <!--begin::Icon-->
                  <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                  <!--end::Icon-->
                  <!--begin::Info-->
                  <div class="ms-4">
                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Suelte los archivos aquí o haga click para cargarlos.</h3>
                    <span class="fs-7 fw-semibold text-gray-400">Subir solo 1 archivo</span>
                  </div>
                  <!--end::Info-->
                </div>
              </div>
              <!--end::Dropzone-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_edit_servicio_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_servicio_submit" class="btn btn-primary">
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
<!--end::Modal - Editar Servicio-->

<!--begin::Modal - Planes-->
<div class="modal fade" id="kt_modal_planes" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_planes_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Planes</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_planes_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_planes_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_planes_header" data-kt-scroll-wrappers="#kt_modal_planes_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <!--begin::Row-->
                <div class="row fv-row">
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Periodo</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Periodo" name="periodo" />
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <label class="fs-5 fw-semibold mb-2 text-black">Precio</label>
                    <input type="number" class="form-control form-control-solid" placeholder="Precio" name="precio" />
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->

            <div class="card-toolbar flex-row-fluid justify-content-end gap-5" style="text-align: center; padding-bottom: 30px !important">
              <!--begin::Add product-->
              <button type="submit" id="kt_modal_planes_submit" class="btn btn-primary">
                <span class="indicator-label">Guardar</span>
                <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
              </button>
              <!--end::Add product-->
            </div>

            <!--begin::Card body-->
            <div class="card-body pt-0">
              <!--begin::Table-->
              <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_planes_table">
                <thead>
                  <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0 table-bg" style="border-bottom: none !important">
                    <th class="min-w-55px text-center" style="padding-right: 10px !important">#</th>
                    <th class="min-w-200px text-center" style="padding-right: 10px !important">Periodo</th>
                    <th class="min-w-200px text-center" style="padding-right: 10px !important">Precio</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important">Acciones</th>
                  </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                  <tr>
                    <td class="text-center">
                      <span class="fs-7">1</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7" data-kt-planes-filter="service_name">1 AÑO</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">200.00</span>
                    </td>
                    <td class="text-center">
                      <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-planes-filter="delete_row">
                        <i class="ki-solid ki-trash fs-2"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <span class="fs-7">2</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7" data-kt-planes-filter="service_name">2 AÑOS</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">400.00</span>
                    </td>
                    <td class="text-center">
                      <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-planes-filter="delete_row">
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
<!--end::Modal - Planes-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/catalogo_servicios/catalogo_servicios.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/catalogo_servicios/create-servicio.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/catalogo_servicios/edit-servicio.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/catalogo_servicios/planes.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_descripcion_create'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_descripcion_ingles_create'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_descripcion_edit'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_descripcion_ingles_edit'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  var myDropzone = new Dropzone("#kt_dropzonejs_servicio", {
    url: "https://keenthemes.com/scripts/void.php",
    paramName: "file",
    maxFiles: 1,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function(file, done) {
      if (file.name == "wow.jpg") {
        done("Naha, you don't.");
      } else {
        done();
      }
    }
  });
</script>

<!--end::Custom Javascript-->

@endsection