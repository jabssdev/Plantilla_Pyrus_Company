@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Proformas-->
<div class="card card-flush">

  <!--begin::Title-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important;">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">
        <span class="menu-icon align-middle"><i class="ki-outline ki-note fs-1 text-pyrus"></i></span>&nbsp; Proformas</span>
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
        <input type="text" data-kt-proforma-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar proforma" />
      </div>
      <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <!--begin::Add client-->
      <a href="{{route('proforma.create')}}" class="btn btn-new" style="margin: 15px">
        <i class="ki-outline ki-plus fs-2"></i> Crear proforma
      </a>
      <!--end::Add client-->
    </div>
    <!--end::Card toolbar-->
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_proforma_table">
      <thead>
        <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important;">
          <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
          <th class="min-w-200px">Cliente</th>
          <th class="min-w-125px">PDF</th>
          <th class="min-w-125px">Fecha</th>
          <th class="min-w-125px">Total</th>
          <th class="min-w-100px text-center" style="padding-right: 10px !important;">Acciones</th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        <tr>
          <td class="text-center">
            <span class="fs-7">15</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Rodolfo Conesa</span>
          </td>
          <td>
            <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_pdf_proforma"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-10-20</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.300.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">14</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Juan Antonio Monzon</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-10-23</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.800.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">13</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Fabiola Palomares</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-09-15</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.650.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">12</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Luis Francisco Giner</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-08-31</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.250.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">11</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Jose Domingo Morillo</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-07-08</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.430.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">10</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Rodolfo Conesa</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-10-20</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.300.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">9</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Juan Antonio Monzon</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-10-23</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.800.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">8</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Fabiola Palomares</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-09-15</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.650.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">7</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Luis Francisco Giner</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-08-31</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.250.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">6</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Jose Domingo Morillo</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-07-08</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.430.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">5</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Rodolfo Conesa</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-10-20</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.300.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">4</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Juan Antonio Monzon</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-10-23</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.800.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">3</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Fabiola Palomares</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-09-15</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.650.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">2</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Luis Francisco Giner</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-08-31</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.250.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
              <i class="ki-solid ki-trash fs-2"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <span class="fs-7">1</span>
          </td>
          <td>
            <span class="fs-7" data-kt-proforma-filter="proforma_name">Jose Domingo Morillo</span>
          </td>
          <td>
            <a href="#"><img src="{{asset('admin/assets/media/logos/pdf.png')}}" alt="PDF" /></a>
          </td>
          <td>
            <span class="fs-7">2023-07-08</span>
          </td>
          <td>
            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">S/.430.00</a>
            <span class="fs-7">Inversión Total</span>
          </td>
          <td class="text-center">
            <a href="#" class="btn btn-icon btn-light-delete btn-sm" data-kt-proforma-filter="delete_row">
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
<!--end::Proformas-->

<!--begin::Modal - PDF Proforma-->
<div class="modal fade" id="kt_modal_pdf_proforma" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-800px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header" id="kt_modal_pdf_proforma_header" style="background-color: #4caf50">
        <!--begin::Modal title-->
        <h2 class="text-white">PDF - Proforma</h2>
        <!--end::Modal title-->

        <div>
          <!--begin::Whatsapp-->
          <a href="#" class="btn btn-secondary">
            <i class="ki-outline ki-whatsapp fs-1"></i>
            WhatsApp
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
      <form id="kt_modal_pdf_proforma_form" class="form" action="#">
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">
          <!--begin::Scroll-->
          <div class="scroll-y me-n7 pe-7" id="kt_modal_pdf_proforma_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_pdf_proforma_header" data-kt-scroll-wrappers="#kt_modal_pdf_proforma_scroll" data-kt-scroll-offset="300px">
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
<!--end::Modal - PDF Proforma-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/proformas/proformas.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/proformas/pdf_proforma.js') }}"></script>
<!--end::Custom Javascript-->

@endsection