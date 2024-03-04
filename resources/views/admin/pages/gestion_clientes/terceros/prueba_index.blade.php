@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables Widget 11-->
<div class="card mb-5 mb-xl-8">
  <!--begin::Header-->
  <div class="card-header border-0 pt-5">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-user-tick fs-1 text-pyrus"></i></span> Cliente / Proveedores</span
      >
    </h3>
    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click para agregar nuevo cliente o proveedor">
      <a href="#" class="btn btn-sm btn-light btn-active-primary" style="margin: 15px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_cliente">
        <i class="ki-outline ki-plus fs-2"></i> Nuevo Cliente / Proveedor
      </a>
    </div>
  </div>
  <!--end::Header-->

  <!--begin::Body-->
  <div class="card-body py-3">
    <!--begin::Table container-->
    <div class="table-responsive">
      <!--begin::Table-->
      <table class="table align-middle gs-0 gy-4" id="kt_ecommerce_sales_table">
        <!--begin::Table head-->
        <thead>
          <tr class="fw-bold text-muted table-bg">
            <th class="min-w-55px text-center rounded-start">#</th>
            <th class="min-w-90px text-center">CÓDIGO</th>
            <th class="min-w-90px text-center">TIPO DOC.</th>
            <th class="min-w-90px text-center">N° DOC</th>
            <th class="min-w-210px text-center">NOMBRE LEGAL</th>
            <th class="min-w-150px text-center">DIRECCIÓN</th>
            <th class="min-w-150px text-center">WEB</th>
            <th class="min-w-100px text-center">ESTADO</th>
            <th class="min-w-200px text-center rounded-end">ACCIONES</th>
          </tr>
        </thead>
        <!--end::Table head-->

        <!--begin::Table body-->
        <tbody>
          <tr>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">01</span>
            </td>
            <td class="text-center" data-kt-ecommerce-order-filter="order_id">
              <span class="text-muted fw-semibold text-muted d-block fs-7">cli006</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">DNI</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">15165118</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Rodolfo Conesa</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Ca. Javier Heraud 166, La Molina</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">www.bytecraft.com</span>
            </td>
            <td class="text-center">
              <span class="badge state-bg fs-7 fw-bold">Aceptado</span>
            </td>
            <td class="text-center">
              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_cliente">
                <i class="ki-outline ki-pencil fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" data-kt-ecommerce-order-filter="delete_row">
                <i class="ki-outline ki-trash fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-home fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-map fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <i class="ki-outline ki-eye fs-2"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">02</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">cli005</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">DNI</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">23695847</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Juan Jesus Herranz</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Calle Leticia, 170</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">www.solaris.com</span>
            </td>
            <td class="text-center">
              <span class="badge state-bg fs-7 fw-bold">Aceptado</span>
            </td>
            <td class="text-center">
              <a href="#" class="btn btn-icon btn-light-update btn-sm me-1">
                <i class="ki-outline ki-pencil fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-light-delete btn-sm">
                <i class="ki-outline ki-trash fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-light-adress01 btn-sm">
                <i class="ki-outline ki-home fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-light-adress02 btn-sm">
                <i class="ki-outline ki-map fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-light-eye btn-sm me-1">
                <i class="ki-outline ki-eye fs-2"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">03</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">cli004</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Otros</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">D-25</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Samir Jimenez</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Calle San Martín, S/N, Urb. Las Brisas De Lurín</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">www.greentech.com</span>
            </td>
            <td class="text-center">
              <span class="badge state-bg fs-7 fw-bold">Aceptado</span>
            </td>
            <td class="text-center">
              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="tooltip" title="Editar">
                <i class="ki-outline ki-pencil fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" data-bs-toggle="tooltip" title="Eliminar">
                <i class="ki-outline ki-trash fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" data-bs-toggle="tooltip" title="Dirección">
                <i class="ki-outline ki-home fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" data-bs-toggle="tooltip" title="Mapa">
                <i class="ki-outline ki-map fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="tooltip" title="Ver">
                <i class="ki-outline ki-eye fs-2"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">04</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">cli003</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Otros</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">G-14</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Maria Carme Villanueva</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">415, Of 101, Urb. Sta. María</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">www.quantum.com</span>
            </td>
            <td class="text-center">
              <span class="badge badge-light-warning fs-7 fw-bold">Temporal</span>
            </td>
            <td class="text-center">
              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <i class="ki-outline ki-pencil fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-trash fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-home fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-map fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <i class="ki-outline ki-eye fs-2"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">05</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">cli002</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">DNI</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">75248135</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Luis Angel Ubeda</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Prolongación Los Puquinas, 117</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">www.aerodine.com</span>
            </td>
            <td class="text-center">
              <span class="badge badge-light-danger fs-7 fw-bold">Rechazado</span>
            </td>
            <td class="text-center">
              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <i class="ki-outline ki-pencil fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-trash fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-home fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-map fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <i class="ki-outline ki-eye fs-2"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">06</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">cli001</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">DNI</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">75892585</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Jose Ramon de La Cruz</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">Avenida Márquez De Córpac, Mz. B Lt. 6</span>
            </td>
            <td class="text-center">
              <span class="text-muted fw-semibold text-muted d-block fs-7">www.fusionflare.com</span>
            </td>
            <td class="text-center">
              <span class="badge badge-light-danger fs-7 fw-bold">Rezhazado</span>
            </td>
            <td class="text-center">
              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <i class="ki-outline ki-pencil fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-trash fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-home fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                <i class="ki-outline ki-map fs-2"></i>
              </a>

              <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <i class="ki-outline ki-eye fs-2"></i>
              </a>
            </td>
          </tr>
        </tbody>
        <!--end::Table body-->
      </table>
      <!--end::Table-->
    </div>
    <!--end::Table container-->
  </div>
  <!--begin::Body-->
</div>
<!--end::Tables Widget 11-->


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

<!--begin::Modal - Edit Client-->
  <div class="modal fade" id="kt_modal_edit_cliente" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_edit_cliente_header" style="background-color: #4caf50;">
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
            <div
              class="scroll-y me-n7 pe-7"
              id="kt_modal_edit_cliente_scroll"
              data-kt-scroll="true"
              data-kt-scroll-activate="{default: false, lg: true}"
              data-kt-scroll-max-height="auto"
              data-kt-scroll-dependencies="#kt_modal_edit_cliente_header"
              data-kt-scroll-wrappers="#kt_modal_edit_cliente_scroll"
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
                  <input type="text" class="form-control form-control-solid" placeholder="RUC" name="n_documento" value="15165118"/>
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
                <input type="text" class="form-control form-control-solid" style="background-color: var(--bs-gray-200);" placeholder="Nombre Legal / Razón Social" name="nombre" autocomplete="off" disabled value="Rodolfo Conesa"/>
                <!--end::Input-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="mb-5 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2 text-black">Código</label>
                <!--end::Label-->

                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="Código" name="codigo" value="cli006"/>
                <!--end::Input-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="mb-5 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2 text-black">Web</label>
                <!--end::Label-->

                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="Web" name="web" value="www.bytecraft.com"/>
                <!--end::Input-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="mb-5 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2 text-black">Correo</label>
                <!--end::Label-->

                <!--begin::Input-->
                <input type="email" class="form-control form-control-solid" placeholder="Correo" name="correo" value="rodolfo_conesa@gmail.com"/>
                <!--end::Input-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="mb-5 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2 text-black">Teléfono</label>
                <!--end::Label-->

                <!--begin::Input-->
                <input type="number" class="form-control form-control-solid" placeholder="Teléfono" name="telefono" value="945216324"/>
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
                  class="form-select form-select-solid"
                >
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
                <select
                  name="estado"
                  data-control="select2"
                  data-hide-search="true"
                  class="form-select form-select-solid"
                >
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
<!-- Desde 0 -->
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/create-cliente.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/edit-cliente.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/clientes.js') }}"></script>
<!--end::Custom Javascript-->

@endsection
