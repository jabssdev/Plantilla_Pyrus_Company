@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Table Claves Client Ocultos-->
<div class="card card-flush">
    <!--begin::Title-->
    <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">
                <span class="menu-icon align-middle"><i class="ki-outline ki-lock-2 fs-1 text-pyrus"></i></span>&nbsp; Clientes Ocultos</span>
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
                <input type="text" data-kt-claves-client-ocultos-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar Clave del Cliente" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click para regresar">
            <a href="{{route('clave_cliente.index')}}" class="btn btn-sm btn-primary" style="margin: 15px">
                <i class="ki-outline ki-entrance-right fs-2"></i> Regresar
            </a>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_claves_client_ocultos_table">
            <thead>
                <tr class="text-start text-gray-400 fw-semibold fs-7 gs-0 table-bg" style="border-bottom: none !important">
                    <th class="min-w-55px text-center" style="padding-right: 10px !important;">#</th>
                    <th class="min-w-90px text-center" style="padding-right: 10px !important;">Código Cliente</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important;">Cpanel</th>
                    <th class="min-w-125px text-center" style="padding-right: 10px !important;">Usuario</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important;">Clave</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important;">Fecha Activación</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important;">Fecha Término</th>
                    <th class="min-w-100px text-center" style="padding-right: 10px !important;">Acciones</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <tr>
                    <td class="text-center">
                        <span class="fs-7">1</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli015</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">2</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli014</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">3</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli013</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">4</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli012</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">5</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli011</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">6</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli010</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">7</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli009</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">8</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli008</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">9</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli007</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">10</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli006</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">11</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli005</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">12</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli004</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">13</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli003</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">14</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli002</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="fs-7">15</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">cli001</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7" data-kt-claves-client-ocultos-filter="claves_client_name">www.bytecraft.com/cpanel</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">kaneh90148@newnime.com</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">15165118</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2023-10-08</span>
                    </td>
                    <td class="text-center">
                        <span class="fs-7">2024-10-08</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Acciones
                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Detalle </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> Activar </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Table Claves Client Ocultos-->


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
<script src="{{ asset('admin/assets/js/custom/pyrus/claves_cliente/claves_cliente_ocultos.js') }}"></script>
<!--end::Custom Javascript-->
@endsection