@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables N° Cuenta-->
<div class="card card-flush">

  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important;">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-bank  fs-1 text-pyrus"></i></span>&nbsp; N° de Cuenta</span>
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
        <input type="text" data-kt-ncuenta-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar N° de cuenta" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add client-->
      <a href="{{route('proforma.create')}}" class="btn btn-new" style="margin: 15px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_cuenta">
        <i class="ki-outline ki-plus fs-2"></i> Crear cuenta
      </a>
      <!--end::Add client-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ncuenta_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important;">
          <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
          <th class="min-w-200px text-center" style="padding-right: 10px !important;">Tipo de Cuenta</th>
          <th class="min-w-200px text-center" style="padding-right: 10px !important;">N° Cuenta</th>
          <th class="min-w-200px text-center" style="padding-right: 10px !important;">Imagen</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td class="text-center">
            <span class="fs-7">CTA AHORROS</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-ncuenta-filter="ncuenta_name">570-97789536-061</span>
          </td>
          <td class="text-center">
            <img src="{{asset('admin/assets/media/logos/imagen_banco.png')}}" alt="BCP" width="150px" />
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_cuenta">
              <i class="ki-solid ki-pencil fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-ncuenta-filter="delete_row">
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
<!--end::Tables N° Cuenta-->

<!--begin::Modal - Crear Cuenta-->
<div class="modal fade" id="kt_modal_create_cuenta" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_cuenta_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Nueva Cuenta</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_create_cuenta_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_create_cuenta_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_cuenta_header" data-kt-scroll-wrappers="#kt_modal_create_cuenta_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Cuenta</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_cuenta" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">N° de Cuenta</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_n_cuenta" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
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
              <div class="dropzone" id="kt_dropzonejs_cuenta">
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
          <button type="reset" id="kt_modal_create_cuenta_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_create_cuenta_submit" class="btn btn-primary">
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
<!--end::Modal - Crear Cuenta-->

<!--begin::Modal - Editar Cuenta-->
<div class="modal fade" id="kt_modal_edit_cuenta" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_cuenta_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">Editar Cuenta</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_cuenta_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_cuenta_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_cuenta_header" data-kt-scroll-wrappers="#kt_modal_edit_cuenta_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Cuenta</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_cuenta_edit" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
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
              <label class="fs-5 fw-semibold mb-2 text-black">N° de Cuenta</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div id="editor_n_cuenta_edit" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
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
              <div class="dropzone" id="kt_dropzonejs_cuenta">
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
          <button type="reset" id="kt_modal_edit_cuenta_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_cuenta_submit" class="btn btn-primary">
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
<!--end::Modal - Editar Cuenta-->

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
<script src="{{ asset('admin/assets/js/custom/utilities/modals/new-target.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/n_cuenta/n_cuenta.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/n_cuenta/crear_cuenta.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/n_cuenta/edit_cuenta.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_cuenta'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_n_cuenta'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_cuenta_edit'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor_n_cuenta_edit'), {
      placeholder: 'Escribe el contenido importante aquí...',
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  var myDropzone = new Dropzone("#kt_dropzonejs_cuenta", {
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