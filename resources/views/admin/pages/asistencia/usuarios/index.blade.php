@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables Usuarios-->
<div class="card card-flush">
  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-profile-circle fs-1 text-pyrus"></i></span>&nbsp; Usuarios</span>
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
        <input type="text" data-kt-usuario-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar Usuario" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add client-->
      <a href="#" class="btn btn-new" data-bs-toggle="modal" data-bs-target="#kt_modal_create_usuario">
        <i class="ki-outline ki-plus fs-2"></i> Nuevo Usuario
      </a>
      <a href="#" class="btn btn-new" style="margin: 15px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_rol">
        <i class="ki-outline ki-plus fs-2"></i> Roles
      </a>
      <!--end::Add client-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_usuario_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
          <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
          <th class="min-w-200px text-center" style="padding-right: 10px !important;">Empleado</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">DNI</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Correo</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Rol</th>
          <th class="min-w-90px text-center">Pin</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_view_pin">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_usuario">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_detalle_usuario">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">2</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">4</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">5</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">6</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">7</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">8</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">9</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">10</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">11</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">12</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">13</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">14</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">15</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-usuario-filter="usuario_name">Jordan Alexander Burgos Saavedra</span>
          </td>
          <td class="text-center">
            <span class="fs-7">75025049</span>
          </td>
          <td class="text-center">
            <span class="fs-7">jordan@pyrushd.com</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Empleado</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-outline ki-eye fs-2"></i>
            </a>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
              <i class="ki-outline ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-primary-green btn-sm">
              <i class="ki-outline ki-address-book fs-2"></i>
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
<!--end::Tables Usuarios-->

<!--begin::Modal - Create User-->
<div class="modal fade" id="kt_modal_create_usuario" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_usuario_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Nuevo Usuario</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_usuario_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_usuario_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_usuario_header" data-kt-scroll-wrappers="#kt_modal_create_usuario_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Nombre</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control" placeholder="Nombre del Usuario" name="nombre" autocomplete="off" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Apellido</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control" placeholder="Apellido del Usuario" name="apellido" autocomplete="off" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">DNI</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="number" class="form-control" placeholder="DNI del Usuario" name="dni" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">PIN</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="number" class="form-control" placeholder="PIN del Usuario" name="pin" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Email</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="email" class="form-control" placeholder="Email del Usuario" name="email" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Contraseña</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control" placeholder="Contraseña del Usuario" name="contraseña" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-10 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Rol</label>
              <!--end::Label-->

              <!--begin::Select-->
              <select name="rol" data-control="select2" data-hide-search="true" data-placeholder="Selecciona un rol..." class="form-select">
                <option value="">Selecciona un rol...</option>
                <option value="1">Administrador</option>
                <option value="2">Supervisor</option>
                <option value="3">Cliente</option>
                <option value="4">Empleado</option>
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
          <button type="reset" id="kt_modal_create_usuario_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_usuario_submit" class="btn btn-primary">
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
<!--end::Modal - Create User-->

<!--begin::Modal - Edit User-->
<div class="modal fade" id="kt_modal_edit_usuario" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_usuario_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Editar Usuario</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_usuario_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_usuario_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_usuario_header" data-kt-scroll-wrappers="#kt_modal_edit_usuario_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Nombre y Apellido</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control" placeholder="" name="nombre" autocomplete="off" value="Jordan Alexander Burgos Saavedra" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">DNI</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="number" class="form-control" placeholder="" name="dni" value="75025049" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">PIN</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="number" class="form-control" placeholder="" name="pin" value="75025049" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Email</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="email" class="form-control" placeholder="" name="email" value="jordan@pyrushd.com" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-10 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Rol</label>
              <!--end::Label-->

              <!--begin::Select-->
              <select name="rol" data-control="select2" data-hide-search="true" class="form-select">
                <option value="4">Empleado</option>
                <option value="1">Administrador</option>
                <option value="2">Supervisor</option>
                <option value="3">Cliente</option>
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
          <button type="reset" id="kt_modal_edit_usuario_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_usuario_submit" class="btn btn-primary">
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
<!--end::Modal - Edit User-->

<!--begin::Modal - Create Rol-->
<div class="modal fade" id="kt_modal_create_rol" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
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
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Nombre</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control" placeholder="Rol" name="rol" autocomplete="off" />
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
<!--end::Modal - Create Rol-->

<!--begin::Modal - View PIN-->
<div class="modal fade" id="kt_modal_view_pin" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_view_pin_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">PIN del empleado: Jordan Alexander Burgos Saavedra</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_view_pin_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_view_pin_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_view_pin_header" data-kt-scroll-wrappers="#kt_modal_view_pin_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Input-->
              <input type="number" class="form-control" placeholder="" name="rol" autocomplete="off" value="75025049" style="background-color: var(--bs-gray-200)" disabled />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center" style="padding: 10px;">
          <!--begin::Button-->
          <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancelar</button>
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
<!--end::Modal - View PIN-->

<!--begin::Modal - Detalle User-->
<div class="modal fade" id="kt_modal_detalle_usuario" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-900px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_detalle_usuario_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">USUARIO: Jordan Alexander Burgos Saavedra</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_detalle_usuario_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_detalle_usuario_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_detalle_usuario_header" data-kt-scroll-wrappers="#kt_modal_detalle_usuario_scroll" data-kt-scroll-offset="300px">
            <!--begin::Card body-->
            <div class="card-body pt-0">
              <!--begin::Table-->
              <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_planes_table">
                <thead>
                  <tr class="text-start text-gray-400 fw-bold fs-7 gs-0 table-bg" style="border-bottom: none !important">
                    <th class="min-w-55px text-center" style="padding-right: 10px !important">#</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important">Fecha de Jornada</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important">Hora de Inicio</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important">Hora de Fin</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important">Tiempo Trabajado</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important">Estado</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important">Detalle</th>
                  </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                  <tr>
                    <td class="text-center">
                      <span class="fs-7">1</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">08/02/2024</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">7:48 AM</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">7:50 AM</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">00:02:34</span>
                    </td>
                    <td class="text-center">
                      <span class="badge btn-acept fs-7">Activo</span>
                    </td>
                    <td class="text-center">
                      <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_view_detalle">
                        <i class="ki-outline ki-eye fs-2"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <span class="fs-7">2</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">08/02/2024</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">7:48 AM</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">7:50 AM</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">00:02:34</span>
                    </td>
                    <td class="text-center">
                      <span class="badge badge-light-danger fs-7">Pendiente</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">No ingreso detalle</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <span class="fs-7">3</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">08/02/2024</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">7:48 AM</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">7:50 AM</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">00:02:34</span>
                    </td>
                    <td class="text-center">
                      <span class="badge badge-light-warning fs-7">En Curso</span>
                    </td>
                    <td class="text-center">
                      <span class="fs-7">No ingreso detalle</span>
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

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center" style="padding: 10px;">
          <!--begin::Button-->
          <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancelar</button>
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
<!--end::Modal - Detalle User-->

<!--begin::Modal - View Detalle-->
<div class="modal fade" id="kt_modal_view_detalle" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_view_detalle_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">PIN del empleado: Jordan Alexander Burgos Saavedra</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_view_detalle_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_view_detalle_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_view_detalle_header" data-kt-scroll-wrappers="#kt_modal_view_detalle_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <textarea class="form-control" data-kt-autosize="true" disabled>Holaaaaaaaaa Mundoooooooo</textarea>
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center" style="padding: 10px;">
          <!--begin::Button-->
          <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancelar</button>
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
<!--end::Modal - View Detalle-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/usuarios/usuarios.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/usuarios/create-usuario.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/usuarios/edit-usuario.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/usuarios/create-rol.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/usuarios/view-pin.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/usuarios/detalle-usuario.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/usuarios/view-detalle.js') }}"></script>
<!--end::Custom Javascript-->

@endsection