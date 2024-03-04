@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->
<style>
  .estado {
    padding: 13px;
    border-radius: 25px !important;
    border: 1px solid #C1C1C1;
    text-align: center;
  }
</style>

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables Facturacion-->
<div class="card card-flush">

  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important;">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-tag fs-1 text-pyrus"></i></span>&nbsp; Comprobantes</span>
    </h3>
  </div>
  <!--end::Title-->

  <!--begin::Card header-->
  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
    <!--begin::Card toolbar-->
    <div class="card-toolbar flex-row-fluid justify-content-between gap-5">
      <div class="position-relative d-flex align-items-center" id="kt_td_picker_localization" data-td-target-input="nearest" data-td-target-toggle="nearest">
        <!--begin::Datepicker-->
        <input type="text" class="form-control" data-td-target="#kt_td_picker_localization" placeholder="Fecha de Inicio" />
        <span class="input-group-text" data-td-target="#kt_td_picker_localization" data-td-toggle="datetimepicker">
          <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
        </span>
        <!--end::Datepicker-->
      </div>

      <div class="position-relative d-flex align-items-center" id="kt_td_picker_localization01" data-td-target-input="nearest" data-td-target-toggle="nearest">
        <!--begin::Datepicker-->
        <input type="text" class="form-control" data-td-target="#kt_td_picker_localization01" placeholder="Fecha de Fin" />
        <span class="input-group-text" data-td-target="#kt_td_picker_localization01" data-td-toggle="datetimepicker">
          <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
        </span>
        <!--end::Datepicker-->
      </div>

      <div class="w-100 mw-200px">
        <!--begin::Select2-->
        <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Comprobante" data-kt-ecommerce-order-filter="status">
          <option></option>
          <option value="all">All</option>
          <option value="Cancelled">Cancelled</option>
          <option value="Completed">Completed</option>
          <option value="Denied">Denied</option>
          <option value="Expired">Expired</option>
          <option value="Failed">Failed</option>
          <option value="Pending">Pending</option>
          <option value="Processing">Processing</option>
          <option value="Refunded">Refunded</option>
          <option value="Delivered">Delivered</option>
          <option value="Delivering">Delivering</option>
        </select>
        <!--end::Select2-->
      </div>

      <div class="w-100 mw-200px">
        <!--begin::Select2-->
        <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Cliente" data-kt-ecommerce-order-filter="status">
          <option></option>
          <option value="all">All</option>
          <option value="Cancelled">Cancelled</option>
          <option value="Completed">Completed</option>
          <option value="Denied">Denied</option>
          <option value="Expired">Expired</option>
          <option value="Failed">Failed</option>
          <option value="Pending">Pending</option>
          <option value="Processing">Processing</option>
          <option value="Refunded">Refunded</option>
          <option value="Delivered">Delivered</option>
          <option value="Delivering">Delivering</option>
        </select>
        <!--end::Select2-->
      </div>

      <div class="w-100 mw-200px">
        <!--begin::Select2-->
        <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Servicio" data-kt-ecommerce-order-filter="status">
          <option></option>
          <option value="all">All</option>
          <option value="Cancelled">Cancelled</option>
          <option value="Completed">Completed</option>
          <option value="Denied">Denied</option>
          <option value="Expired">Expired</option>
          <option value="Failed">Failed</option>
          <option value="Pending">Pending</option>
          <option value="Processing">Processing</option>
          <option value="Refunded">Refunded</option>
          <option value="Delivered">Delivered</option>
          <option value="Delivering">Delivering</option>
        </select>
        <!--end::Select2-->
      </div>
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card header-->
  <div class="card-header align-items-center py-5 gap-2 gap-md-5" style="padding-top: 0 !important;">
    <!--begin::Card title-->
    <div class="card-title">
      <!--begin::Search-->
      <div class="d-flex align-items-center position-relative my-1">
        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
        <input type="text" data-kt-facturacion-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar factura o boleta" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add venta-->
      <a href="{{route('venta.create')}}" class="btn btn-new" style="margin: 15px">
        <i class="ki-outline ki-plus fs-2"></i> Nueva venta
      </a>
      <!--end::Add venta-->
      <!-- begin::Acciones rapidas -->
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
              <a class="btn btn-info btn-sm px-4" href="#"> <i class="ki-outline ki-two-credit-cart fs-2"></i> Nota de Débito </a>
            </div>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <div class="menu-content px-3 py-3">
              <a class="btn btn-danger btn-sm px-4" href="{{route('nota.credito')}}"> <i class="ki-outline ki-two-credit-cart fs-2"></i> Nota de Crédito </a>
            </div>
          </div>
          <!--end::Menu item-->
        </div>
        <!--end::Menu 2-->
        <!--end::Menu-->
      </div>
      <!-- end::Acciones rapidas -->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_facturacion_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important;">
          <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Fecha</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Hora</th>
          <th class="min-w-150px text-center" style="padding-right: 10px !important;">Cliente</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Tipo de Pago</th>
          <th class="min-w-80px text-center" style="padding-right: 10px !important;">Estado</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Comprobante</th>
          <th class="min-w-80px text-center" style="padding-right: 10px !important;">Procedencia</th>
          <th class="min-w-80px text-center" style="padding-right: 10px !important;">Total</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">15</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-04-11</span>
          </td>
          <td class="text-center">
            <span class="fs-7">10:15:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Francisco Asis Solano</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Crédito</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_pdf_facturacion"><img src=" {{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.400.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_detalle_venta">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="{{route('nota.credito')}}" class="btn btn-icon btn-light-delete btn-sm">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">14</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-02-11</span>
          </td>
          <td class="text-center">
            <span class="fs-7">10:57:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Marco Antonio Cabrera</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Efectivo</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.580.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">13</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-15-10</span>
          </td>
          <td class="text-center">
            <span class="fs-7">08:31:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Maria Yolanda Feijoo</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Yape</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.540.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">12</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-04-09</span>
          </td>
          <td class="text-center">
            <span class="fs-7">12:21:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Luis Carlos Nuñez</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Plin</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.320.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">11</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-18-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">11:11:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Maria Fernanda Moral</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Transferencia Interbank</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.950.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">10</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-04-11</span>
          </td>
          <td class="text-center">
            <span class="fs-7">10:15:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Francisco Asis Solano</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Crédito</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.400.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">9</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-02-11</span>
          </td>
          <td class="text-center">
            <span class="fs-7">10:57:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Marco Antonio Cabrera</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Efectivo</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.580.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">8</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-15-10</span>
          </td>
          <td class="text-center">
            <span class="fs-7">08:31:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Maria Yolanda Feijoo</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Yape</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.540.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">7</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-04-09</span>
          </td>
          <td class="text-center">
            <span class="fs-7">12:21:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Luis Carlos Nuñez</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Plin</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.320.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">6</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-18-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">11:11:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Maria Fernanda Moral</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Transferencia Interbank</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.950.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">5</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-04-11</span>
          </td>
          <td class="text-center">
            <span class="fs-7">10:15:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Francisco Asis Solano</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Crédito</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.400.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">4</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-02-11</span>
          </td>
          <td class="text-center">
            <span class="fs-7">10:57:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Marco Antonio Cabrera</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Efectivo</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.580.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-15-10</span>
          </td>
          <td class="text-center">
            <span class="fs-7">08:31:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Maria Yolanda Feijoo</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Yape</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.540.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">2</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-04-09</span>
          </td>
          <td class="text-center">
            <span class="fs-7">12:21:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Luis Carlos Nuñez</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Plin</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.320.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td class="text-center">
            <span class="fs-7">2023-18-08</span>
          </td>
          <td class="text-center">
            <span class="fs-7">11:11:23</span>
          </td>
          <td class="text-center">
            <span class="fs-7" data-kt-facturacion-filter="facturacion_name">Maria Fernanda Moral</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Transferencia Interbank</span>
          </td>
          <td class="text-center">
            <span class="badge btn-acept fs-7 fw-bold">Activo</span>
          </td>
          <td class="text-center">
            <a href="#" data-bs-toggle="tooltip" title="PDF"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
            <a href="#" data-bs-toggle="tooltip" title="XML"><img src="{{asset('admin/assets/media/logos/xml.png')}}" alt="XML" /></a>
            <a href="#" data-bs-toggle="tooltip" title="RAR"><img src="{{asset('admin/assets/media/logos/formato-rar.png')}}" alt="PDF" /></a>
          </td>
          <td class="text-center">
            <span class="fs-7">ADMIN</span>
          </td>
          <td class="text-center">
            <span class="fs-7">S/.950.00</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
              <i class="ki-solid ki-eye fs-2"></i>
            </a>

            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-facturacion-filter="delete_row">
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
<!--end::Tables Facturacion-->

<!--begin::Modal - Create Pago-->
<div class="modal fade" id="kt_modal_detalle_venta" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-850px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_detalle_venta_header" style="background-color: #4caf50;">
        <!--begin::Modal title-->
        <h2 class="text-white">Venta</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_detalle_venta_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-10">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_detalle_venta_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_detalle_venta_header" data-kt-scroll-wrappers="#kt_modal_detalle_venta_scroll" data-kt-scroll-offset="300px">
            <div class="row g-5 g-xxl-8">
              <!--begin::Col-->
              <div class="col-md-7">
                <h4 class="fw-semibold text-gray-800 fs-3">Venta » S/ 400.00</h4>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-5">
                <div class="estado fw-semibold text-gray-800 fs-6">
                  <i aria-hidden="true" class="fa fa-circle" style="color: rgb(56, 193, 114);"></i>
                  Estado: <span><span class="ng-binding">ENTREGADO</span></span>
                  / Procedencia: <span><span class="ng-binding badge badge-warning">ADMIN</span></span>
                </div>
              </div>
              <!--end::Col-->

              <div class="separator" style="margin-bottom: 25px;"></div>

            </div>
            <div class="row g-5 g-xxl-8">
              <!--begin::Col-->
              <div class="col-md-12">
                <h4 class="fw-semibold text-gray-800 fs-3">Datos del Cliente</h4>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Nombres y Apellidos: </span>
                <span class="fw-semibold text-gray-700 fs-7">Jhon Henry Sánchez Loyaga</span>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">DNI: </span>
                <span class="fw-semibold text-gray-700 fs-7">70512113</span>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Dirección: </span>
                <span class="fw-semibold text-gray-700 fs-7">Mayta Capac 142</span>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Correo: </span>
                <span class="fw-semibold text-gray-700 fs-7">jhon@gmail.com</span>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Celular: </span>
                <span class="fw-semibold text-gray-700 fs-7">925478963</span>
              </div>
              <!--end::Col-->

              <div class="separator" style="margin-bottom: 25px;"></div>

            </div>
            <div class="row g-5 g-xxl-8">
              <!--begin::Col-->
              <div class="col-md-12">
                <h4 class="fw-semibold text-gray-800 fs-3">Datos del Pedido</h4>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Dirección de Entrega: </span>
                <span class="fw-semibold text-gray-700 fs-7">Mayta Capac 142</span>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Referencia: </span>
                <span class="fw-semibold text-gray-700 fs-7">142,Mayta Capac,P.i el Porvenir Sector Rio Seco Barrio 3</span>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Fecha y Hora: </span>
                <span class="fw-semibold text-gray-700 fs-7">2024-01-24</span>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Tipo de Pago: </span>
                <span class="fw-semibold text-gray-700 fs-7">Depósito</span>
              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-md-6" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Comprobante: </span>
                <span class="fw-semibold text-gray-700 fs-7">Boleta</span>
              </div>
              <!--end::Col-->

              <div class="separator" style="margin-bottom: 25px;"></div>

            </div>
            <div class="row g-5 g-xxl-8">
              <!--begin::Col-->
              <div class="col-md-12">
                <!--begin::Table-->
                <table class="table align-middle table-bordered fs-5 gy-5" id="kt_venta_table">
                  <thead>
                    <tr class="text-start text-gray-800 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
                      <th class=" text-center" style="padding-right: 10px !important; color: white;">Servicio</th>
                      <th class=" text-center" style="padding-right: 10px !important; color: white;">Precio</th>
                      <th class=" text-center" style="padding-right: 10px !important; color: white;">Preiodo</th>
                    </tr>
                  </thead>
                  <tbody class="fw-semibold">
                    <tr>
                      <td class="text-center">
                        <span class="fs-7 text-gray-700">APP Móviles</span>
                      </td>
                      <td class="text-center">
                        <span class="fs-7 text-gray-700">400.00</span>
                      </td>
                      <td class="text-center">
                        <span class="fs-7 text-gray-700">2 Años</span>
                      </td>
                    </tr>
                  </tbody>
                  <!--end::Table body-->
                </table>
                <!--end::Table-->
              </div>
              <!--end::Col-->

              <div class="separator" style="margin-bottom: 5px;"></div>

              <div class="col-md-4 offset-8" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Operaciones Gravadas: </span>
                <span class="fw-semibold text-gray-700 fs-7">338.98</span>
              </div>

              <div class="col-md-4 offset-8" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">IGV: </span>
                <span class="fw-semibold text-gray-700 fs-7">61.02</span>
              </div>

              <div class="col-md-4 offset-8" style="margin-top: 5px;">
                <span class="fw-bold text-gray-700 fs-7">Total: </span>
                <span class="fw-semibold text-gray-700 fs-7">400.00</span>
              </div>

            </div>
          </div>
          <!--end::Scroll-->
        </div>
        <!--end::Modal body-->

        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
          <!--begin::Button-->
          <button type="reset" id="kt_modal_detalle_venta_cancel" class="btn btn-danger me-3" data-bs-dismiss="modal">Cerrar</button>
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
<!--end::Modal - Create Pago-->

<!--begin::Modal - PDF Facturacion-->
<div class="modal fade" id="kt_modal_pdf_facturacion" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_pdf_facturacion_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">PDF - Facturacion</h2>
        <!--end::Modal title-->

        <div>
          <!--begin::Email-->
          <a href="#" class="btn btn-info" style="font-size: 12px;">
            <i class="ki-outline ki-directbox-default fs-3"></i>
            Email
          </a>
          <!--end::Email-->

          <!--begin::Editar-->
          <a href="#" class="btn btn-warning" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_pdf_facturacion">
            <i class="ki-outline ki-message-edit fs-3"></i>
            Editar
          </a>
          <!--end::Editar-->

          <!--begin::Whatsapp-->
          <a href="#" class="btn btn-secondary" style="font-size: 12px;">
            <i class="ki-outline ki-file-down fs-3"></i>
            Descargar
          </a>
          <!--end::Whatsapp-->

          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1 text-white"></i>
          </div>
          <!--end::Close-->
        </div>


      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_pdf_facturacion_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_pdf_facturacion_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_pdf_facturacion_header" data-kt-scroll-wrappers="#kt_modal_pdf_facturacion_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="row mb-5">
              <!--begin::Col-->
              <div class="col-md-12 fv-row">
                <p>Colocar iframe xD...</p>
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
<!--end::Modal - PDF Facturacion-->

<!--begin::Modal - Edit PDF Facturacion-->
<div class="modal fade" id="kt_modal_edit_pdf_facturacion" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_edit_pdf_facturacion_header" style="background-color: #4caf50;">
        <!--begin::Modal title-->
        <h2 class="text-white">Editar Comprobante</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1 text-white"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Form-->
      <form id="kt_modal_edit_pdf_facturacion_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_pdf_facturacion_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_pdf_facturacion_header" data-kt-scroll-wrappers="#kt_modal_edit_pdf_facturacion_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Fecha Emision</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div class="position-relative d-flex align-items-center" id="kt_td_picker_localization02" data-td-target-input="nearest" data-td-target-toggle="nearest">
                <!--begin::Datepicker-->
                <input type="text" class="form-control" data-td-target="#kt_td_picker_localization02" placeholder="Fecha de Inicio" />
                <span class="input-group-text" data-td-target="#kt_td_picker_localization02" data-td-toggle="datetimepicker">
                  <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                </span>
                <!--end::Datepicker-->
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Fecha Vencimiento</label>
              <!--end::Label-->

              <!--begin::Input-->
              <div class="position-relative d-flex align-items-center" id="kt_td_picker_localization03" data-td-target-input="nearest" data-td-target-toggle="nearest">
                <!--begin::Datepicker-->
                <input type="text" class="form-control" data-td-target="#kt_td_picker_localization03" placeholder="Fecha de Inicio" />
                <span class="input-group-text" data-td-target="#kt_td_picker_localization03" data-td-toggle="datetimepicker">
                  <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                </span>
                <!--end::Datepicker-->
              </div>
              <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-5 fv-row">
              <!--begin::Label-->
              <label class="fs-5 fw-semibold mb-2 text-black">Fecha Vencimiento</label>
              <!--end::Label-->

              <!--begin::Input-->
              <select name="" id="" class="form-control form-select">
                <option value="soles">--Seleccione--</option>
                <option value="soles">Soles</option>
                <option value="dolares">Dólares</option>
              </select>
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
          <button type="reset" id="kt_modal_edit_pdf_facturacion_cancel" class="btn btn-light me-3">Cancelar</button>
          <!--end::Button-->

          <!--begin::Button-->
          <button type="submit" id="kt_modal_edit_pdf_facturacion_submit" class="btn btn-primary">
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
<!--end::Modal - Edit PDF Facturacion-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/facturacion/facturacion.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/facturacion/detalle-venta.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/facturacion/pdf-facturacion.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/facturacion/edit-pdf-facturacion.js') }}"></script>
<!--end::Custom Javascript-->
<script>
  new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_localization"), {
    localization: {
      locale: "es",
      startOfTheWeek: 1,
      format: "dd/MM/yyyy",
    },
  });
</script>
<script>
  new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_localization01"), {
    localization: {
      locale: "es",
      startOfTheWeek: 1,
      format: "dd/MM/yyyy",
    },
  });
</script>
<script>
  new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_localization02"), {
    localization: {
      locale: "es",
      startOfTheWeek: 1,
      format: "dd/MM/yyyy",
    },
  });
</script>
<script>
  new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_localization03"), {
    localization: {
      locale: "es",
      startOfTheWeek: 1,
      format: "dd/MM/yyyy",
    },
  });
</script>
@endsection