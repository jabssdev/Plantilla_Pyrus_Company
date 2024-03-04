@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
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

<!--begin::Notificaciones de Pago-->
<div class="card">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title fs-3 fw-bold"><i class="ki-outline ki-notification-on fs-1 text-pyrus"></i></span>&nbsp; Notificaciones</div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->

    <!--begin::Form-->
    <form id="kt_create_notificaciones_pago_form" class="form">
        <!--begin::Card body-->
        <div class="card-body p-9">

        <!--begin::Row-->
        <div class="row mb-5">
            <!--begin::Col-->
            <div class="col-xl-3">
            <div class="fs-6 fw-semibold mt-2 mb-3 text-black">Cliente:</div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-9 fv-row">
                <div class="d-flex">
                    <!--begin::Select2-->
                    <select
                        name="cliente"
                        data-control="select2"
                        data-hide-search="true"
                        data-placeholder="Selecciona un cliente..."
                        class="form-control form-select me-5"
                        >
                        <option value="">Seleccione un cliente...</option>
                        <option value="1">Cliente 01</option>
                        <option value="2">Cliente 02</option>
                        <option value="3">Cliente 03</option>
                        <option value="4">Cliente 04</option>
                        <option value="5">Cliente 05</option>
                        <option value="6">Cliente 06</option>
                    </select>
                    <a href="#" class="btn btn-info" style="min-width: 112px;" data-bs-toggle="modal" data-bs-target="#kt_modal_create_cliente">
                        <i class="ki-outline ki-plus fs-2"></i> Nuevo
                    </a>
                    <!--end::Select2-->
                </div>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row mb-5">
            <!--begin::Col-->
            <div class="col-xl-3">
              <div class="fs-6 fw-semibold mt-2 mb-3 text-black">N°:</div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-3 fv-row">
              <input type="number" class="form-control" name="numero" placeholder="Escribe el n° aquí...">
            </div>
            <!--begin::Col-->
            <!--begin::Col-->
            <div class="col-xl-3 text-center">
              <div class="fs-6 fw-semibold mt-2 mb-3 text-black">Fecha:</div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-3 fv-row">
              <div class="position-relative d-flex align-items-center">
                  <i class="ki-outline ki-calendar-8 position-absolute ms-4 mb-1 fs-2"></i>
                  <input class="form-control ps-12" name="fecha" placeholder="Seleccione una fecha" id="kt_datepicker_1" />
              </div>
            </div>
            <!--begin::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row mb-5">
            <!--begin::Col-->
            <div class="col-xl-3">
            <div class="fs-6 fw-semibold mt-2 mb-3 text-black">Importante:</div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-9 fv-row">
            <!--begin::Editor-->
              <div id="editor_importante" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)" name="importante">
                <ul>
                  <li>El precio no varía si Ud. Cuenta con Hosting y Dominio. La empresa le otorga el paquete completo.</li>
                  <li>El paquete de Hosting indicado en la proforma puede variar, dependiendo los requerimientos del cliente.</li>
                  <li>Si desea una APP adaptada para iPhone, se adicionará S/ 300 al monto total.</li>
                  <li>Si sólo desea La Tienda Virtual para APP, el costo es de S/ 1,000; con una inversión anual de S/ 150 (Alojamiento en APP).</li>
                </ul>
              </div>
            <!--end::Editor-->
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row mb-5">
            <!--begin::Col-->
            <div class="col-xl-3">
            <div class="fs-6 fw-semibold mt-2 mb-3 text-black">Formas de pago:</div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-9 fv-row">
            <!--begin::Editor-->
              <div id="editor_formas_pago" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)" name="formas_pago">
                <ul>
                  <li>Se realizará el PAGO del 60% o TOTAL del servicio.</li>
                  <li>Los pagos de adelantos o anuales se realizarán en las fechas de la compra del mismo.</li>
                  <li>Los pagos se realizarán a las cuentas indicadas para su comodidad:</li>
                </ul>
              </div>
            <!--end::Editor-->
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Separador-->
        <div class="row mb-5" style="border-bottom:1px solid var(--bs-card-border-color);">
        </div>
        <!--end::Separador-->

        <!--begin::Row-->
        <div class="row mb-5">
          <!--begin::Col-->
          <div class="col-lg-4">
            <label class="fs-6 fw-semibold mt-2 mb-3 text-black">Código:</label>

            <!--begin::Input group-->
            <div id="editor_codigo" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col-lg-4">
            <label class="fs-6 fw-semibold mt-2 mb-3 text-black">Hosting/Dominio:</label>

            <!--begin::Input group-->
            <div id="editor_hosting_dominio" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col-lg-4">
            <label class="fs-6 fw-semibold mt-2 mb-3 text-black">Descripción:</label>

            <!--begin::Input group-->
            <div id="editor_descripcion" style="border:1px solid var(--bs-gray-300);color:var(--bs-input-color)">
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col-lg-4">
            <label class="fs-6 fw-semibold mt-2 mb-3 text-black">Cantidad:</label>

            <!--begin::Input group-->
            <input type="number" class="form-control" placeholder="Escribe la cantidad aquí...">
            <!--end::Input group-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col-lg-4">
            <label class="fs-6 fw-semibold mt-2 mb-3 text-black">Importe:</label>

            <!--begin::Input group-->
            <input type="number" class="form-control" placeholder="Escribe el importe aquí...">
            <!--end::Input group-->
          </div>
          <!--end::Col-->

          <!--begin::Col-->
          <div class="col-lg-4 d-flex align-items-end justify-content-center" >
              <a href="#" class="btn btn-warning hover-scale">Agregar</a>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Table container-->
        <div class="table-responsive">
          <!--begin::Table-->
          <table class="table align-middle gs-0 gy-4">
            <!--begin::Table head-->
            <thead>
              <tr class="fw-semibold text-muted table-bg">
                <th class="min-w-55px text-center">#</th>
                <th class="min-w-100px text-center">Cant.</th>
                <th class="min-w-90px text-center">Código</th>
                <th class="min-w-120px text-center">Hosting/Dominio</th>
                <th class="min-w-120px text-center">Descripción</th>
                <th class="min-w-120px text-center">Importe</th>
                <th class="min-w-120px text-center">Opciones</th>
              </tr>
            </thead>
            <!--end::Table head-->

            <!--begin::Table body-->
            <tbody>
              <tr>
                <td class="text-center">
                  <span class="text-muted fw-semibold d-block fs-7"></span>
                </td>
              </tr>
            </tbody>
            <!--end::Table body-->
          </table>
          <!--end::Table-->
        </div>
        <!--end::Table container-->

        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer d-flex justify-content-center py-6 px-9">
        <a href="{{route('notificacion_pago.index')}}" class="btn btn-danger me-2"> Cancelar </a>
        <button type="submit" class="btn btn-primary" id="kt_create_notificaciones_pago_submit">Generar</button>
        </div>
        <!--end::Card footer-->
    </form>
    <!--end:Form-->
</div>
<!--end::Notificaciones de Pago-->

<!--begin::Modal - Create Client-->
<div class="modal fade" id="kt_modal_create_cliente" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_create_cliente_header" style="background-color: #4caf50;">
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
          <div
            class="scroll-y me-n7 pe-7"
            id="kt_modal_create_cliente_scroll"
            data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}"
            data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="#kt_modal_create_cliente_header"
            data-kt-scroll-wrappers="#kt_modal_create_cliente_scroll"
            data-kt-scroll-offset="300px"
          >

            <!--begin::Input group-->
            <div class="mb-10">
              <!--begin::Heading-->
              <div class="mb-3">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-5 fw-semibold ">
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
                <input type="text" class="form-control form-control-solid" placeholder="RUC" name="n_documento"/>
                <a href="#"><span class="input-group-text">
                  <i class="ki-outline ki-magnifier fs-2">
                  </i>
                </span></a>
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
              <input type="text" class="form-control form-control-solid" style="background-color: var(--bs-gray-200);" placeholder="Nombre Legal / Razón Social" name="nombre" autocomplete="off" disabled/>
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
              <select
                name="tipo"
                data-control="select2"
                data-hide-search="true"
                data-placeholder="Selecciona un tipo de cliente..."
                class="form-select form-select-solid"
              >
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
              <select
                name="estado"
                data-control="select2"
                data-hide-search="true"
                data-placeholder="Selecciona un estado..."
                class="form-select form-select-solid"
              >
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
<script src="{{ asset('admin/assets/js/custom/pyrus/notificaciones_pago/create_notificaciones_pago.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/create-cliente.js') }}"></script>
<!--end::Custom Javascript-->

<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/inline/ckeditor.js"></script>

<script>
  InlineEditor
      .create( document.querySelector( '#editor_importante' ),
  {
    placeholder: 'Escribe el contenido importante aquí...',
  } )
      .catch( error => {
          console.error( error );
      } );

  InlineEditor
  .create( document.querySelector( '#editor_formas_pago' ),
  {
    placeholder: 'Escribe la forma de pago aquí...',
  } )
  .catch( error => {
      console.error( error );
  } );

  InlineEditor
  .create( document.querySelector( '#editor_codigo' ),
  {
    placeholder: 'Escribe el código aquí...',
  } )
  .catch( error => {
      console.error( error );
  } );

  InlineEditor
  .create( document.querySelector( '#editor_descripcion' ),
  {
    placeholder: 'Escriba la descripción aquí...',
  } )
  .catch( error => {
      console.error( error );
  } );

  InlineEditor
  .create( document.querySelector( '#editor_hosting_dominio' ),
  {
    placeholder: 'Escribe el hosting/dominio aquí...',
  }  )
  .catch( error => {
      console.error( error );
  } );
</script>
<!-- ckeditor -->

@endsection
