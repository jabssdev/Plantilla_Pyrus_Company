@extends('admin.layouts.principal') @section('styles')
<!--used for this page only-->
<link href="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--used for this page only-->
@endsection

<!--begin::Main-->
@section('content')

<!--begin::Modal - Quicky Access-->
<div class="modal fade" id="kt_modal_3" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-700px">
    <!--begin::Modal content-->
    <div class="modal-content" style="border-radius: 20px;">
      <!--begin::Modal header-->
      <div class="modal-header" style="background-color: #4caf50;border-top-left-radius: 20px;border-top-right-radius: 20px;">
        <!--begin::Modal title-->
        <h2 style="color: var(--bs-white);">Inicio rápido</h2>
        <!--end::Modal title-->

        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-outline ki-cross fs-1" style="color: var(--bs-white);"></i>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->

      <!--begin::Modal body-->
      <div class="modal-body py-lg-10 px-lg-10">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
          <!--begin::Content-->
          <div class="d-flex flex-row-fluid mb-10 mb-xl-0" style="justify-content: center">
            <!--begin::Pos food-->
            <div class="card card-flush card-p-0 bg-transparent border-0">
              <!--begin::Body-->
              <div class="card-body">
                <!--begin::Nav-->
                <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-3 mb-6">
                  <!--begin::Item-->
                  <li class="nav-item mb-3 me-0">
                    <!--begin::Nav link-->
                    <a
                      class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg quickly-access"
                      href="{{ route('tercero.index') }}"
                    >
                      <!--begin::Icon-->
                      <div class="nav-icon mb-3">
                        <!--begin::Food icon-->
                          <i class="ki-outline ki-people fs-3x" style="color: rgb(253, 86, 142);"></i>
                        <!--end::Food icon-->
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info-->
                      <div class="">
                        <span class="text-gray-600 fw-semibold fs-4 d-block">Clientes</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::Nav link-->
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="nav-item mb-3 me-0">
                    <!--begin::Nav link-->
                    <a
                      class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg quickly-access"
                      href="{{ route('proforma.index') }}"
                    >
                      <!--begin::Icon-->
                      <div class="nav-icon mb-3">
                        <!--begin::Food icon-->
                          <i class="ki-outline ki-note-2 fs-3x" style="color: orange;"></i>
                        <!--end::Food icon-->
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info-->
                      <div class="">
                        <span class="text-gray-600 fw-semibold fs-4 d-block">Proformas</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::Nav link-->
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="nav-item mb-3 me-0">
                    <!--begin::Nav link-->
                    <a
                      class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg quickly-access"
                      href="{{ route('notificacion_pago.index') }}"
                    >
                      <!--begin::Icon-->
                      <div class="nav-icon mb-3">
                        <!--begin::Food icon-->
                          <i class="ki-outline ki-notification-on fs-3x" style="color: rgb(86, 119, 236);"></i>
                        <!--end::Food icon-->
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info-->
                      <div class="">
                        <span class="text-gray-600 fw-semibold fs-4 d-block">Notificaciones</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::Nav link-->
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="nav-item mb-3 me-0">
                    <!--begin::Nav link-->
                    <a
                      class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg quickly-access"
                      href="{{ route('calendario_pago.index') }}"
                    >
                      <!--begin::Icon-->
                      <div class="nav-icon mb-3">
                        <!--begin::Food icon-->
                          <i class="ki-outline ki-calendar-add fs-3x" style="color: green;"></i>
                        <!--end::Food icon-->
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info-->
                      <div class="">
                        <span class="text-gray-600 fw-semibold fs-4 d-block">Calendario de Pagos</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::Nav link-->
                  </li>
                  <!--end::Item-->

                </ul>
                <!--end::Nav-->
              </div>
              <!--end: Card Body-->
              <!--begin::Body-->
              <div class="card-body">
                <!--begin::Nav-->
                <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-3 mb-6">
                  <!--begin::Item-->
                  <li class="nav-item mb-3 me-0">
                    <!--begin::Nav link-->
                    <a
                      class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg quickly-access"
                      href="{{ route('clave_cliente.index') }}"
                    >
                      <!--begin::Icon-->
                      <div class="nav-icon mb-3">
                        <!--begin::Food icon-->
                          <i class="ki-outline ki-lock-2 fs-3x" style="color: red;"></i>
                        <!--end::Food icon-->
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info-->
                      <div class="">
                        <span class="text-gray-600 fw-semibold fs-4 d-block">Claves Cliente</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::Nav link-->
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="nav-item mb-3 me-0">
                    <!--begin::Nav link-->
                    <a
                      class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg quickly-access"
                      href="{{ route('facturacion.index') }}"
                    >
                      <!--begin::Icon-->
                      <div class="nav-icon mb-3">
                        <!--begin::Food icon-->
                          <i class="ki-outline ki-tag fs-3x" style="color: blue;"></i>
                        <!--end::Food icon-->
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info-->
                      <div class="">
                        <span class="text-gray-600 fw-semibold fs-4 d-block">Comprobantes</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::Nav link-->
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="nav-item mb-3 me-0">
                    <!--begin::Nav link-->
                    <a
                      class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg quickly-access"
                      href="#"
                    >
                      <!--begin::Icon-->
                      <div class="nav-icon mb-3">
                        <!--begin::Food icon-->
                          <i class="ki-outline ki-purchase fs-3x" style="color: rgb(11, 188, 135);"></i>
                        <!--end::Food icon-->
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info-->
                      <div class="">
                        <span class="text-gray-600 fw-semibold fs-4 d-block">Pedidos Pendientes</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::Nav link-->
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="nav-item mb-3 me-0">
                    <!--begin::Nav link-->
                    <a
                      class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg quickly-access"
                      href="{{ route('categorias.index') }}"
                    >
                      <!--begin::Icon-->
                      <div class="nav-icon mb-3">
                        <!--begin::Food icon-->
                          <i class="ki-outline ki-handcart fs-3x" style="color: rgb(255, 184, 34);"></i>
                        <!--end::Food icon-->
                      </div>
                      <!--end::Icon-->

                      <!--begin::Info-->
                      <div class="">
                        <span class="text-gray-600 fw-semibold fs-4 d-block">Servicios</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::Nav link-->
                  </li>
                  <!--end::Item-->
                </ul>
                <!--end::Nav-->
              </div>
              <!--end: Card Body-->
            </div>
            <!--end::Pos food-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Layout-->
      </div>
      <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
  </div>
  <!--end::Modal dialog-->
</div>
<!--end::Modal - Quicky Access-->

<!--begin::Row-->
<div class="row gy-5 g-xl-10">
  <!--begin::Col Our Fleet Tonnage-->
  <div class="col-xl-3">
    <!--begin::List widget 11-->
    <div class="card card-flush h-xl-100">
      <!--begin::Header-->
      <div class="card-header pt-7 mb-3 dash-card-center">
        <!--begin::Title-->
        <div class="card-title align-items-center flex-column">
          <img class="dash-card-img" src="{{asset('admin/assets/media/logos/300_21.jpg')}}" alt="Pyrus Company" />
        </div>
        <!--end::Title-->
      </div>
      <!--end::Header-->

      <!--begin::Body-->
      <div class="card-body pt-4">
        <!--begin::Item-->
        <div class="d-flex flex-stack dash-card-center">
          <!--begin::Section-->
          <div class="d-flex align-items-center me-5">
            <!--begin::Symbol-->
            <div class="symbol symbol-40px me-4">
              <span class="symbol-label">
                <i class="ki-outline ki-people text-gray-600 fs-1"></i>
              </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Content-->
            <div class="me-5 text-center">
              <!--begin::Title-->
              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Pyrus Company</a>
              <!--end::Title-->

              <!--begin::Desc-->
              <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">RUC. 205596611253</span>
              <!--end::Desc-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Section-->
        </div>
        <!--end::Item-->

        <!--begin::Separator-->
        <div class="separator separator-dashed my-5"></div>
        <!--end::Separator-->

        <!--begin::Item-->
        <div class="d-flex flex-stack dash-card-center">
          <!--begin::Section-->
          <div class="d-flex align-items-center me-5">
            <!--begin::Symbol-->
            <div class="symbol symbol-40px me-4">
              <span class="symbol-label">
                <i class="ki-outline ki-sms text-gray-600 fs-1"></i>
              </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Content-->
            <div class="me-5 text-center">
              <!--begin::Title-->
              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email</a>
              <!--end::Title-->

              <!--begin::Desc-->
              <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">info@pyruscompany.com</span>
              <!--end::Desc-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Section-->
        </div>
        <!--end::Item-->

        <!--begin::Separator-->
        <div class="separator separator-dashed my-5"></div>
        <!--end::Separator-->

        <!--begin::Item-->
        <div class="d-flex flex-stack dash-card-center">
          <!--begin::Section-->
          <div class="d-flex align-items-center me-5">
            <!--begin::Symbol-->
            <div class="symbol symbol-40px me-4">
              <span class="symbol-label">
                <i class="ki-outline ki-phone text-gray-600 fs-1"></i>
              </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Content-->
            <div class="me-5 text-center">
              <!--begin::Title-->
              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Celular</a>
              <!--end::Title-->

              <!--begin::Desc-->
              <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">968 637 864</span>
              <!--end::Desc-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Section-->
        </div>
        <!--end::Item-->

        <!--begin::Separator-->
        <div class="separator separator-dashed my-5"></div>
        <!--end::Separator-->

        <!--begin::Item-->
        <div class="d-flex flex-stack dash-card-center">
          <!--begin::Section-->
          <div class="d-flex align-items-center me-5">
            <!--begin::Symbol-->
            <div class="symbol symbol-40px me-4">
              <span class="symbol-label">
                <i class="ki-outline ki-map text-gray-600 fs-1"></i>
              </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Content-->
            <div class="me-5 text-center">
              <!--begin::Title-->
              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Dirección</a>
              <!--end::Title-->

              <!--begin::Desc-->
              <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Mi dirección registrada en Sunat</span>
              <!--end::Desc-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Section-->
        </div>
        <!--end::Item-->
      </div>
      <!--end::Body-->
    </div>
    <!--end::List widget 11-->
  </div>
  <!--end::Col-->

  <!--begin::Col Grafico Ventas-->
  <div class="col-xl-5">
    <!--begin::Chart widget 20-->
    <div class="card card-flush h-xl-100">
      <!--begin::Header-->
      <div class="card-header py-5">
        <!--begin::Title-->
        <h3 class="card-title fw-bold text-gray-800">Facturacion Ventas</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
          <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
          <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
            <!--begin::Display range-->
            <div class="text-gray-600 fw-bold">Loading date range...</div>
            <!--end::Display range-->

            <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
          </div>
          <!--end::Daterangepicker-->
        </div>
        <!--end::Toolbar-->
      </div>
      <!--end::Header-->

      <!--begin::Card body-->
      <div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
        <!--begin::Items-->
        <div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
          <!--begin::Item-->
          <div class="me-md-2">
            <!--begin::Statistics-->
            <div class="d-flex mb-2">
              <span class="fs-4 fw-semibold text-gray-400 me-1">S/.</span>
              <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
            </div>
            <!--end::Statistics-->

            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-400">Ventas de Abril</span>
            <!--end::Description-->
          </div>
          <!--end::Item-->

          <!--begin::Item-->
          <div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
            <!--begin::Statistics-->
            <div class="d-flex mb-2">
              <span class="fs-4 fw-semibold text-gray-400 me-1">S/.</span>
              <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
            </div>
            <!--end::Statistics-->

            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-400">Ventas de 2023</span>
            <!--end::Description-->
          </div>
          <!--end::Item-->
        </div>
        <!--end::Items-->

        <!--begin::Chart-->
        <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Ingresos" style="height: 300px"></div>
        <!--end::Chart-->
      </div>
      <!--end::Card body-->
    </div>
    <!--end::Chart widget 20-->
  </div>
  <!--end::Col-->

  <!--begin::Col Grafico Clientes-->
  <div class="col-xl-4">
    <!--begin::Chart widget 36-->
    <div class="card card-flush overflow-hidden h-lg-100">
      <!--begin::Header-->
      <div class="card-header pt-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
          <span class="card-label fw-bold text-dark">Clientes</span>
          <span class="text-gray-400 mt-1 fw-semibold fs-6">04 clientes hoy</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
          <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
          <div
            data-kt-daterangepicker="true"
            data-kt-daterangepicker-opens="left"
            data-kt-daterangepicker-range="today"
            class="btn btn-sm btn-light d-flex align-items-center px-4"
          >
            <!--begin::Display range-->
            <div class="text-gray-600 fw-bold">Loading date range...</div>
            <!--end::Display range-->

            <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
          </div>
          <!--end::Daterangepicker-->
        </div>
        <!--end::Toolbar-->
      </div>
      <!--end::Header-->

      <!--begin::Card body-->
      <div class="card-body d-flex align-items-end p-0">
        <!--begin::Chart-->
        <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
        <!--end::Chart-->
      </div>
      <!--end::Card body-->
    </div>
    <!--end::Chart widget 36-->
  </div>
  <!--end::Col-->
</div>
<!--end::Row-->

@endsection
<!--end::Main-->

@section('scripts')
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/select-location.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<!--end::Custom Javascript-->
<!-- <script>
  // Make the DIV element draggable:
var element = document.querySelector('#kt_modal_3');
dragElement(element);

function dragElement(elmnt) {
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    if (elmnt.querySelector('.modal-content')) {
        // if present, the header is where you move the DIV from:
        elmnt.querySelector('.modal-content').onmousedown = dragMouseDown;
    } else {
        // otherwise, move the DIV from anywhere inside the DIV:
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        // stop moving when mouse button is released:
        document.onmouseup = null;
        document.onmousemove = null;
    }
}
</script> -->
<script>
  $(document).ready(function () {
    $("#kt_modal_3").modal("show");
  });
</script>
@endsection
