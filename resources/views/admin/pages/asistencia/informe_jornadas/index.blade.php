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
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important;">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">Por favor selecciona los criterios para tu informe</span>
    </h3>
  </div><br>
  <!--end::Header-->
  <!--begin::Card header-->
  <div class="card-header align-items-center py-5 gap-2 gap-md-5" style="border-bottom: none !important;">
    <!--begin::Card toolbar-->
    <div class="card-toolbar flex-row-fluid justify-content-between gap-5">
      <div class="w-100 mw-350px">
        <!--begin::Select2-->
        <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Selecionar cliente" data-kt-ecommerce-order-filter="status">
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
      <div class="position-relative d-flex align-items-center" id="kt_td_picker_localization" data-td-target-input="nearest" data-td-target-toggle="nearest" style="min-width: 350px !important;">
        <!--begin::Datepicker-->
        <input type="text" class="form-control" data-td-target="#kt_td_picker_localization" placeholder="Fecha de Inicio" />
        <span class="input-group-text" data-td-target="#kt_td_picker_localization" data-td-toggle="datetimepicker">
          <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
        </span>
        <!--end::Datepicker-->
      </div>
      <div class="position-relative d-flex align-items-center" id="kt_td_picker_localization01" data-td-target-input="nearest" data-td-target-toggle="nearest" style="min-width: 350px !important;">
        <!--begin::Datepicker-->
        <input type="text" class="form-control" data-td-target="#kt_td_picker_localization01" placeholder="Fecha de Fin" />
        <span class="input-group-text" data-td-target="#kt_td_picker_localization01" data-td-toggle="datetimepicker">
          <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
        </span>
        <!--end::Datepicker-->
      </div>
    </div>
    <!--end::Card toolbar-->
  </div><br>
  <!--end::Card header-->
  <div class="card-toolbar flex-row-fluid justify-content-end gap-5" style="text-align: center; padding-bottom:30px !important;">
    <!--begin::Add product-->
    <a href="#" class="btn btn-info">
      Generar
    </a>
    <!--end::Add product-->
  </div>
</div>
<!--end::Tables Widget 11-->

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
@endsection