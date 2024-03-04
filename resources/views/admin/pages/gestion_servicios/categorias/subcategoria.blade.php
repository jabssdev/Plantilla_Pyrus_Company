@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Form Subcategoria-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Subcategorias de APP Móviles</span>
        </h3>
        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Volver atrás">
            <a href="{{route('categorias.index')}}" class="btn btn-info hover-scale" style="margin: 15px"> <i class="ki-outline ki-exit-left fs-2"></i> Volver </a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5" style="border-bottom: none !important">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                <input type="text" data-kt-subcategoria-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar Subcategoria" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <div class="position-relative d-flex align-items-center" style="min-width: 450px !important">
                <!--begin::Reference-->
                <input type="text" class="form-control" placeholder="Subcategoría" style="margin-right: 15px;" />
                <!--end::Reference-->

                <!--begin::Add product-->
                <a href="#" class="btn btn-primary"> Guardar </a>
                <!--end::Add product-->
            </div>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subcategoria_table">
            <thead>
                <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
                    <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
                    <th class="min-w-300px text-center" style="padding-right: 10px !important;">Subcategoría</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important;">Acciones</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <tr>
                    <td class="text-center">
                        <span class="fs-7">1</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-subcategoria-filter="subcategoria_name">APP Android</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_subcategoria" title="Editar">
                            <i class="ki-solid ki-pencil fs-2"></i>
                        </a>

                        <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-subcategoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
                            <i class="ki-solid ki-trash fs-2"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">1</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-subcategoria-filter="subcategoria_name">APP iPhone</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_subcategoria" title="Editar">
                            <i class="ki-solid ki-pencil fs-2"></i>
                        </a>

                        <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-subcategoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
                            <i class="ki-solid ki-trash fs-2"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">1</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-subcategoria-filter="subcategoria_name">APP Android & iPhone</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-icon btn-light-update btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_subcategoria" title="Editar">
                            <i class="ki-solid ki-pencil fs-2"></i>
                        </a>

                        <a href="#" class="btn btn-icon btn-light-delete btn-sm me-1" data-kt-subcategoria-filter="delete_row" data-bs-toggle="tooltip" title="Eliminar">
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
<!--end::Form Subcategoria -->

<!--begin::Modal - Edit Subcategoria-->
<div class="modal fade" id="kt_modal_edit_subcategoria" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_edit_subcategoria_header" style="background-color: #4caf50;">
                <!--begin::Modal title-->
                <h2 class="text-white">Editar Subcategoría de APP Móviles</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1 text-white"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Form-->
            <form id="kt_modal_edit_subcategoria_form" class="form" action="#">
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_subcategoria_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_subcategoria_header" data-kt-scroll-wrappers="#kt_modal_edit_subcategoria_scroll" data-kt-scroll-offset="300px">

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2 text-black">Subcategoría</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Subcategoria" name="subcategoria" value="App Android" />
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
                    <button type="reset" id="kt_modal_edit_subcategoria_cancel" class="btn btn-light me-3">Cancelar</button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_edit_subcategoria_submit" class="btn btn-primary">
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
<!--end::Modal - Edit Subcategoria-->

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
<script src="{{ asset('admin/assets/js/custom/pyrus/categorias/subcategorias.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/categorias/edit-subcategoria.js') }}"></script>
<!--end::Custom Javascript-->
@endsection