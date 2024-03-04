@extends('admin.layouts.principal') @section('styles')

<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

@endsection

<!--begin::Main-->
@section('content')

<!--begin::Form Mapa-->
<div class="card mb-5 mb-xl-8">
  <!--begin::Header-->
  <div class="card-header border-0 pt-5" style="border-bottom: 1px solid var(--bs-card-border-color) !important">
    <h3 class="card-title align-items-start flex-column">
      <span class="card-label fw-bold fs-3 mb-1">Por favor selecciona la ubicación en el mapa</span>
    </h3>
    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Volver atrás">
      <a href="{{route('tercero.index')}}" class="btn btn-info hover-scale" style="margin: 15px"> <i class="ki-outline ki-exit-left fs-2"></i> Volver </a>
    </div>
  </div>
  <br />
  <!--end::Header-->
  <!--begin::Card header-->
  <div class="card-header align-items-center py-5 gap-2 gap-md-5" style="border-bottom: none !important">
    <!--begin::Card toolbar-->
    <div class="card-toolbar flex-row-fluid justify-content-between gap-5">
      <div class="position-relative d-flex align-items-center" style="min-width: 350px !important; display: none !important">
        <!--begin::Latitud-->
        <input type="text" class="form-control" placeholder="Latitud" id="latitud" />
        <!--end::Latitud-->
      </div>
      <div class="position-relative d-flex align-items-center" style="min-width: 350px !important; display: none !important">
        <!--begin::Longitud-->
        <input type="text" class="form-control" placeholder="Longitud" id="longitud" />
        <!--end::Longitud-->
      </div>
      <div class="position-relative d-flex align-items-center" style="min-width: 350px !important">
        <!--begin::Direction-->
        <input type="text" class="form-control" placeholder="Dirección" />
        <!--end::Direction-->
      </div>
      <div class="position-relative d-flex align-items-center" style="min-width: 350px !important">
        <!--begin::Reference-->
        <input type="text" class="form-control" placeholder="Referencia" />
        <!--end::Reference-->
      </div>
      <div class="position-relative d-flex align-items-center" style="min-width: 350px !important">
        <!--begin::Search-->
        <input type="text" class="form-control" placeholder="Buscador" />
        <!--end::Search-->
      </div>
    </div>
    <!--end::Card toolbar-->
  </div>
  <br />
  <!--end::Card header-->
  <div class="card-toolbar flex-row-fluid justify-content-end gap-5" style="text-align: center; padding-bottom: 30px !important">
    <!--begin::Add product-->
    <a href="#" class="btn btn-primary"> Guardar </a>
    <!--end::Add product-->
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="mapa" style="width: 100%; height: 500px"></div>
    </div>
  </div>
</div>
<!--end::Form Mapa -->

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
<script 
async 
defer 
src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=AIzaSyCShqlh7VDQb7M5k2y5KgdzAAjfN8Fdv3E&amp;&callback=iniciarMapa"
></script>
<script src="{{ asset('admin/assets/js/custom/pyrus/cliente/mapa-google.js') }}"></script>
<!--end::Custom Javascript-->
@endsection
