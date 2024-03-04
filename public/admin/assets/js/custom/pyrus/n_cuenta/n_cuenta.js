"use strict";
var KTAppNCuenta = (function () {
    var t,
        e,
        n = () => {
            t.querySelectorAll('[data-kt-ncuenta-filter="delete_row"]').forEach(
                (t) => {
                    t.addEventListener("click", function (t) {
                        t.preventDefault();
                        const n = t.target.closest("tr"),
                            o = n.querySelector(
                                '[data-kt-ncuenta-filter="ncuenta_name"]'
                            ).innerText;
                        Swal.fire({
                            text:
                                "Estás seguro de que quieres borrar a " +
                                o +
                                "?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Si, borrar!",
                            cancelButtonText: "No, cancelar",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton:
                                    "btn fw-bold btn-active-light-primary",
                            },
                        }).then(function (t) {
                            t.value
                                ? Swal.fire({
                                      text: "Has borrado a" + o + "!.",
                                      icon: "success",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, vamos!",
                                      customClass: {
                                          confirmButton:
                                              "btn fw-bold btn-primary",
                                      },
                                  }).then(function () {
                                      e.row($(n)).remove().draw();
                                  })
                                : "cancel" === t.dismiss &&
                                  Swal.fire({
                                      text: o + " no ha sido borrado.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, vamos!",
                                      customClass: {
                                          confirmButton:
                                              "btn fw-bold btn-primary",
                                      },
                                  });
                        });
                    });
                }
            );
        };
    return {
        init: function () {
            (t = document.querySelector("#kt_ncuenta_table")) &&
                ((e = $(t).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 10,
                    columnDefs: [
                        { orderable: !0, targets: 0 },
                        { orderable: !0, targets: 4 },
                    ],
                })).on("draw", function () {
                    n();
                }),
                document
                    .querySelector('[data-kt-ncuenta-filter="search"]')
                    .addEventListener("keyup", function (t) {
                        e.search(t.target.value).draw();
                    }),
                n());
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTAppNCuenta.init();
});
