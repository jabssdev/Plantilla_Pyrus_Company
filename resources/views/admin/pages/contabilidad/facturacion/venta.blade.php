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

<!--begin::Proformas-->
<div class="card">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title fs-3 fw-bold"><i class="ki-outline ki-tag fs-1 text-pyrus"></i></span>&nbsp; Emisión: &nbsp;&nbsp;<span class="badge badge-info fs-3">Factura/Boleta electrónica</span></div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->

    <!--begin::Form-->
    <form id="kt_create_venta_form" class="form">
        <!--begin::Card body-->
        <div class="card-body p-9">
            <div class="row g-5 g-xxl-8">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Row-->
                            <div class="row fv-row">
                                <!--begin::Col-->
                                <div class="col-4">
                                    <label class="fs-5 fw-semibold mb-2 text-black">Documento</label>
                                    <select name="documento" data-control="select2" data-hide-search="true" data-placeholder="Documento" class="form-select form-select-solid">
                                        <option value="">Documento</option>
                                        <option value="1">Factura</option>
                                        <option value="2">Boleta de Venta</option>
                                        <option value="3">Recibo</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <label class="fs-5 fw-semibold mb-2 text-black">Serie</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Serie" name="serie" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <label class="fs-5 fw-semibold mb-2 text-black">Número</label>
                                    <input type="number" class="form-control form-control-solid" placeholder="Numero" name="numero" />
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
                                    <label class="fs-5 fw-semibold mb-2 text-black">Servicio</label>
                                    <select name="servicio" data-control="select2" data-hide-search="true" data-placeholder="Servicio" class="form-select form-select-solid">
                                        <option value="">Servicio</option>
                                        <option value="1">App Móviles</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <label class="fs-5 fw-semibold mb-2 text-black">Periodo</label>
                                    <select name="periodo" data-control="select2" data-hide-search="true" data-placeholder="Periodo" class="form-select form-select-solid">
                                        <option value="">Periodo</option>
                                        <option value="1">Periodo x</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <label class="fs-5 fw-semibold mb-2 text-black">Número</label>
                                    <div class="position-relative d-flex align-items-center">
                                        <input type="text" class="form-control form-control-solid" placeholder="Numero" name="numero" readonly style="background-color: var(--bs-gray-300);" />
                                        <a href="#">
                                            <span class="input-group-text" style="background: var(--bs-info);">
                                                <i class="ki-outline ki-basket-ok fs-2" style="color: white;"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div><br><br>
                    <!--end::Input group-->

                    <!--begin::table-->
                    <div class="row mb-5">
                        <div class="col-md-12 fv-row">
                            <!--begin::Row-->
                            <div class="row fv-row">
                                <!--begin::Col-->
                                <div class="col-12">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_venta_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
                                                <th class="min-w-55px text-center" style="padding-right: 10px !important">#</th>
                                                <th class=" text-center" style="padding-right: 10px !important">Periodo</th>
                                                <th class=" text-center" style="padding-right: 10px !important">Producto</th>
                                                <th class=" text-center" style="padding-right: 10px !important">Descripcion</th>
                                                <th class=" text-center" style="padding-right: 10px !important">Precio</th>
                                                <th class=" text-center" style="padding-right: 10px !important">Desc.</th>
                                                <th class=" text-center" style="padding-right: 10px !important">Importe</th>
                                                <th class=" text-center" style="padding-right: 10px !important">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-center">
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4 offset-8">
                                    <p class="fw-semibold text-gray-700">Sub Total:</p>
                                    <p class="fw-semibold text-gray-700">IGV (18%):</p>
                                    <p class="fw-semibold text-gray-700">Descuentos (-): <span class="float-end">0.00</span></p>
                                    <p class="fw-semibold text-gray-700">Redondeo: <span class="float-end">0.00</span></p>
                                    <p class="fw-bold text-gray-700" style="padding-top:10px;"> TOTAL:<span class="float-end fs-1">S/</span>
                                    </p>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6 offset-6">
                                    <div class="d-flex justify-content-end py-6 px-9">
                                        <a href="{{route('facturacion.index')}}" class="btn btn-danger me-2"> Cancelar </a>
                                        <button type="submit" class="btn btn-primary" id="kt_venta_submit">Guardar</button>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                    </div>
                    <!--end::table-->

                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Row-->
                            <div class="row fv-row">
                                <!--begin::Col-->
                                <div class="col-12">
                                    <textarea class="form-control" placeholder="Observaciones" data-kt-autosize="true"></textarea>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div><br><br>
                    <!--end::Input group-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Row-->
                            <div class="row fv-row">
                                <!--begin::Col-->
                                <div class="col-12">
                                    <div class="card border d-flex flex-column p-5">
                                        <div class="mb-3">
                                            <p class="fw-bold text-gray-700 fs-7">Total <span class="fw-bold text-gray-700 fs-7 float-end">S/</span></p>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" style="border: 1px solid rgb(19, 202, 41); color: rgb(19, 202, 41); background: rgb(255, 255, 255);">Pagado</span>
                                            <select class="form-select" style="border-left-color: rgb(19, 202, 41);">
                                                <option value="">-Seleccione-</option>
                                                <option value="Efectivo">Efectivo</option>
                                                <option value="Yape">Yape</option>
                                                <option value="Visa">Visa</option>
                                                <option value="Cta. Corriente">Cta.Corriente</option>
                                                <option value="Depósito">Depósito</option>
                                                <option value="Crédito">Crédito</option>
                                                <option value="Transferencia">Transferencia</option>
                                                <option value="Plin">Plin</option>
                                                <option value="Transferencia BBVA">Transferencia BBVA</option>
                                                <option value="Transferencia BCP">Transferencia BCP</option>
                                                <option value="Pago Efectivo">PagoEfectivo</option>
                                                <option value="BCP-YAPE">BCP-YAPE</option>
                                                <option value="Transferencia Interbank">Transferencia Interbank</option>
                                                <option value="Transferencia Scotiabank">Transferencia Scotiabank</option>
                                                <option value="Transferencia Caja Piura">Transferencia Caja Piura</option>
                                            </select>
                                            <input type="date" class="form-control">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="border-radius: 0px;">S/</span>
                                            </div>
                                            <input id="pagado" type="text" placeholder="Total Pagado" required="required" class="form-control">
                                        </div> <br>
                                        <div id="deuda" class="mb-3">
                                            <h6 class="fw-bold text-gray-700 fs-7 text-end">Deuda</h6>
                                            <h6 class="fw-bold text-gray-700 fs-7 text-end">S/ 0</h6>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-12" style="margin-top: 20px;">
                                    <div class="card border d-flex flex-column p-5">
                                        <span class="card-label fw-bold fs-3 text-white text-center " style="background: rgb(90, 98, 104); padding: 8px !important;margin-bottom: 40px;">Cliente</span>
                                        <!--begin::Col-->
                                        <div class="col-xl-12 fv-row" style="margin-bottom: 20px;">
                                            <div class="d-flex">
                                                <!--begin::Select2-->
                                                <select name="cliente" data-control="select2" data-hide-search="true" data-placeholder="Selecciona un cliente..." class="form-control form-select me-5">
                                                    <option value="">Seleccione un cliente...</option>
                                                    <option value="1">Cliente 01</option>
                                                    <option value="2">Cliente 02</option>
                                                    <option value="3">Cliente 03</option>
                                                    <option value="4">Cliente 04</option>
                                                    <option value="5">Cliente 05</option>
                                                    <option value="6">Cliente 06</option>
                                                </select>
                                                <a href="#" class="btn btn-warning" style="min-width: 140px;" data-bs-toggle="modal" data-bs-target="#kt_modal_create_cliente">
                                                    Nuevo Cliente
                                                </a>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-xl-12 fv-row">
                                            <div class="d-flex">
                                                <!--begin::Select2-->
                                                <select name="proforma" data-control="select2" data-hide-search="true" data-placeholder="Selecciona una proforma..." class="form-control form-select me-5">
                                                    <option value="">Seleccione una proforma</option>
                                                </select>
                                                <a href="#" class="btn btn-info btn-icon" style="min-width: 70px;" data-bs-toggle="modal" data-bs-target="#kt_modal_create_cliente">
                                                    <i class="ki-solid ki-eye fs-2"></i>
                                                </a>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-12" style="margin-top: 20px;">
                                    <div class="card border d-flex flex-column p-5">
                                        <!--begin::Col-->
                                        <div class="col-xl-12 fv-row" style="margin-bottom: 25px;margin-top:20px;">
                                            <div class="d-flex">
                                                <!--begin::Select2-->
                                                <span class="fw-smibold text-gray-700 fs-6">Fecha de vencimiento: </span>
                                                <input type="date" class="form-control">
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Col-->

            </div>
        </div>
        <!--end::Card body-->
    </form>
    <!--end:Form-->

</div>
<!--end::Proformas-->

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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_create_cliente_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_cliente_header" data-kt-scroll-wrappers="#kt_modal_create_cliente_scroll" data-kt-scroll-offset="300px">

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
                                <input type="text" class="form-control form-control-solid" placeholder="RUC" name="n_documento" />
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
                            <input type="text" class="form-control form-control-solid" style="background-color: var(--bs-gray-200);" placeholder="Nombre Legal / Razón Social" name="nombre" autocomplete="off" disabled />
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
<script src="{{ asset('admin/assets/js/custom/pyrus/proformas/create_proforma.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/create-cliente.js') }}"></script>
<!--end::Custom Javascript-->

<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/inline/ckeditor.js"></script>

<script>
    InlineEditor
        .create(document.querySelector('#editor_importante'), {
            placeholder: 'Escriba el contenido importante aquí...',
        })
        .catch(error => {
            console.error(error);
        });

    InlineEditor
        .create(document.querySelector('#editor_formas_pago'), {
            placeholder: 'Escriba las formas de pago aquí...',
        })
        .catch(error => {
            console.error(error);
        });

    InlineEditor
        .create(document.querySelector('#editor_servicio'), {
            placeholder: 'Escriba el servicio aquí...',
        })
        .catch(error => {
            console.error(error);
        });

    InlineEditor
        .create(document.querySelector('#editor_descripcion'), {
            placeholder: 'Escriba la descripción aquí...',
        })
        .catch(error => {
            console.error(error);
        });

    InlineEditor
        .create(document.querySelector('#editor_hosting_dominio'), {
            placeholder: 'Escriba el hosting y dominio aquí...',
        })
        .catch(error => {
            console.error(error);
        });

    InlineEditor
        .create(document.querySelector('#editor_inv_anual'), {
            placeholder: 'Escriba la inversión anual aquí...',
        })
        .catch(error => {
            console.error(error);
        });

    InlineEditor
        .create(document.querySelector('#editor_footer_table'))
        .catch(error => {
            console.error(error);
        });
</script>
<!-- ckeditor -->

@endsection