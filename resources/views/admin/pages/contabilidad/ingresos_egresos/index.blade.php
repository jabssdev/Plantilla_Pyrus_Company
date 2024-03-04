@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Ingresos_Egresos-->
<div class="card card-flush">

  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important;">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-finance-calculator fs-1 text-pyrus"></i></span>&nbsp; Ingresos y Egresos</span>
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
        <input type="text" data-kt-ingresos-egresos-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar ingresos o egresos" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
      <!--begin::Select month-->
      <div class="w-100 mw-200px">
        <!--begin::Select2-->
        <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Mes" data-kt-ecommerce-order-filter="status">
          <option></option>
          <option value="Enero">Enero</option>
          <option value="Febrero">Febrero</option>
          <option value="Marzo">Marzo</option>
          <option value="Abril">Abril</option>
          <option value="Mayo">Mayo</option>
          <option value="Junio">Junio</option>
          <option value="Julio">Julio</option>
          <option value="Agosto">Agosto</option>
          <option value="Septiembre">Septiembre</option>
          <option value="Octubre">Octubre</option>
          <option value="Noviembre">Noviembre</option>
          <option value="Diciembre">Diciembre</option>
        </select>
        <!--end::Select2-->
      </div>
      <!--end::Select month-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ingresos_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important;">
          <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Fecha</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Hora</th>
          <th class="min-w-150px text-center" style="padding-right: 10px !important;">Cliente</th>
          <th class="min-w-90px text-center" style="padding-right: 10px !important;">Operación</th>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Francisco Asis Solano</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_detalle_venta">
              <i class="ki-solid ki-eye fs-2"></i>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Marco Antonio Cabrera</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Maria Yolanda Feijoo</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Luis Carlos Nuñez</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Maria Fernanda Moral</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Francisco Asis Solano</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Marco Antonio Cabrera</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Maria Yolanda Feijoo</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Luis Carlos Nuñez</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Maria Fernanda Moral</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Francisco Asis Solano</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Marco Antonio Cabrera</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Maria Yolanda Feijoo</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Luis Carlos Nuñez</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
            <span class="fs-7" data-kt-ingresos-egresos-filter="ingresos_name">Maria Fernanda Moral</span>
          </td>
          <td class="text-center">
            <span class="fs-7">Venta</span>
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
          </td>
        </tr>
      </tbody>
      <!--end::Table body-->
    </table>
    <!--end::Table-->
    <div class="row">
      <div class="col-12" align="right" style="margin-top:30px;">
        <h1 style="color:green; font-weight: bold;">Total: S/.13,950.00</h1>
      </div>
    </div>
  </div>
  <!--end::Card body-->
</div>
<!--end::Ingresos_Egresos-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/ingresos_egresos/ingresos_egresos.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/facturacion/detalle-venta.js') }}"></script>
<!--end::Custom Javascript-->
@endsection