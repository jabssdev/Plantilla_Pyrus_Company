@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables Categorias-->
<div class="card card-flush">
  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-handcart fs-1 text-pyrus"></i></span>&nbsp; Categorías</span>
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
        <input type="text" data-kt-categoria-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar Categoria" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add client-->
      <a href="#" class="btn btn-new" style="margin: 15px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_categoria">
        <i class="ki-outline ki-plus fs-2"></i> Nueva Categoría
      </a>
      <!--end::Add client-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_categoria_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
          <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
          <th class="min-w-200px text-center" style="padding-right: 10px !important;">Categoría</th>
          <th class="min-w-200px text-center" style="padding-right: 10px !important;">Imagen</th>
          <th class="min-w-200px text-center" style="padding-right: 10px !important;">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">APP Móviles</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_categoria" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="{{route('subcategorias.index')}}" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">2</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Aula Virtual</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Certificado SSL</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">4</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Diseño Web</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">5</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Dominios</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">6</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">E-mailing</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">7</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Hosting</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">8</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Hosting & Dominio</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">9</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Resellers</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">10</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Web Site</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">11</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Sistema ERP</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">12</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Sistema Contable</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">13</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Sistema Facturación</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">14</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-categoria-filter="categoria_name">Tienda Virtual</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/img.png')}}" alt="BCP" width="80px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="tooltip" title="Añadir Subcategoría">
              <i class="ki-outline ki-lots-shopping fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-categoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
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
<!--end::Tables Categorias-->

<!--begin::Modal - Create Categoria-->
<div class="modal fade" id="kt_modal_create_categoria" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_categoria_header" style="background-color: #4caf50;">
        <!--begin::Modal title-->
        <h2 class="text-white">Nueva Categoría</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_categoria_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_categoria_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_categoria_header" data-kt-scroll-wrappers="#kt_modal_create_categoria_scroll" data-kt-scroll-offset="300px">

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Categoria</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" placeholder="Categoria" name="categoria" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Imagen</label>
              <!--end::Label-->

              <!--begin::Dropzone-->
              <div class="dropzone" id="kt_dropzonejs_categoria">
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
          <button type="reset" id="kt_modal_create_categoria_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_categoria_submit" class="btn btn-primary">
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
<!--end::Modal - Create Categoria-->

<!--begin::Modal - Edit Categoria-->
<div class="modal fade" id="kt_modal_edit_categoria" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_categoria_header" style="background-color: #4caf50;">
        <!--begin::Modal title-->
        <h2 class="text-white">Editar Categoría</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_categoria_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_categoria_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_categoria_header" data-kt-scroll-wrappers="#kt_modal_edit_categoria_scroll" data-kt-scroll-offset="300px">

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Categoria</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control form-control-solid" placeholder="Categoria" name="categoria" value="App Móviles" />
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="required fs-5 fw-semibold mb-2 text-black">Imagen</label>
              <!--end::Label-->

              <!--begin::Dropzone-->
              <div class="dropzone" id="kt_dropzonejs_categoria">
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
          <button type="reset" id="kt_modal_edit_categoria_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_categoria_submit" class="btn btn-primary">
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
<!--end::Modal - Edit Categoria-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/categorias/categorias.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/categorias/create-categoria.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/categorias/edit-categoria.js') }}"></script>
<!--end::Custom Javascript-->

<script>
  var myDropzone = new Dropzone("#kt_dropzonejs_categoria", {
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

@endsection