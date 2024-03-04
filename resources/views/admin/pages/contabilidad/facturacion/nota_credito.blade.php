@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Tables Facturacion-->
<div class="card card-flush">

    <!--begin::Title-->
    <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important;">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">
                <span class="menu-icon align-middle"><i class="ki-outline ki-tag fs-1 text-pyrus"></i></span>&nbsp; Nota de Crédito</span>
        </h3>
    </div>
    <!--end::Title-->

    <!--begin::Form-->
    <form id="kt_create_venta_form" class="form">
        <!--begin::Card body-->
        <div class="card-body p-9">
            <div class="row g-5 g-xxl-8">
                <!--begin::Col-->
                <div class="col-xl-2">
                    <div class="position-relative d-flex align-items-center" id="kt_td_picker_emision" data-td-target-input="nearest" data-td-target-toggle="nearest">
                        <!--begin::Datepicker-->
                        <input type="text" class="form-control" data-td-target="#kt_td_picker_emision" placeholder="Fecha de Emision" />
                        <span class="input-group-text" data-td-target="#kt_td_picker_emision" data-td-toggle="datetimepicker">
                            <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="position-relative d-flex align-items-center">
                        <input type="text" class="form-control" placeholder="Acción" name="accion" />
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-2">
                    <div class="input-group">
                        <input type="text" required="required" placeholder="FE0001" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text" style="border-radius: 0px;">-</span>
                        </div>
                        <input type="text" required="required" placeholder="1" class="form-control">
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-1 position-relative d-flex align-items-center justify-content-center">
                    <a href="#" class="btn btn-icon btn-light-eye-blue btn-sm me-1">
                        <i class="ki-solid ki-eye fs-2"></i>
                    </a>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="position-relative d-flex align-items-center">
                        <input type="text" class="form-control" placeholder="Motivo de la Nota de Crédito" name="motivo" />
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-12">
                    <div class="d-flex justify-content-start py-6">
                        <button type="submit" class="btn btn-primary me-2" id="kt_venta_submit">Continuar</button>
                        <a href="{{route('facturacion.index')}}" class="btn btn-danger"> Cancelar </a>
                    </div>
                </div>
                <!--end::Col-->
            </div>
        </div>
        <!--end::Card body-->
    </form>
    <!--end:Form-->
</div>
<!--end::Tables Facturacion-->

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
<!--end::Custom Javascript-->
<script>
    new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_emision"), {
        localization: {
            locale: "es",
            startOfTheWeek: 1,
            format: "dd/MM/yyyy",
        },
    });
</script>
@endsection