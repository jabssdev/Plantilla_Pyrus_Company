@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

<style>
    .gris {
        background-color: #6c757e !important;
        color: white !important;
        border-color: #6c757e !important;
    }

    .rojo {
        background-color: #f54337 !important;
        color: white !important;
        border-color: #f54337 !important;
    }

    .verde {
        background-color: #4fd38a !important;
        color: white !important;
        border-color: #4fd38a !important;
    }

    .btn-block {
        width: 100% !important;
        display: block !important;
    }
</style>

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Teclado-->
<div class="card mb-5 mb-xl-8">
    <div class="row" style="margin-top: 80px; margin-bottom: 80px">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <form class="form-horizontal form-simple">
                <fieldset>
                    <i class="ki-solid ki-lock-3 fs-6x" style="color: #4fd38a !important "></i>
                </fieldset>
                <br />
                <fieldset>
                    <h3>Ingresar</h3>
                </fieldset>
                <br />
                <fieldset>
                    <input type="text" class="form-control" placeholder="Código o DNI" />
                    <div class="form-control-position"></div>
                </fieldset>
                <br />
                <fieldset>
                    <table align="center" class="" style="width: 80%">
                        <tbody>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        1
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        &nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        &nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        4
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        5
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        6
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        7
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        8
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        9
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-danger 
                                           btn-block rojo" style="border-radius: 0.25rem !important;">
                                        Borrar
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-dark 
                                           btn-block gris" style="border-radius: 0.25rem !important;">
                                        &nbsp;&nbsp;&nbsp;0&nbsp;&nbsp;&nbsp;
                                    </button>
                                </td>
                                <td>
                                    <a href="{{route('asistencia.calendario')}}">
                                        <button type="button" class="btn btn-primary
                                           btn-block verde" style="border-radius: 0.25rem !important;">
                                            &nbsp;&nbsp;&nbsp;OK&nbsp;&nbsp;&nbsp;
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<!--end::Teclado-->

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
@endsection