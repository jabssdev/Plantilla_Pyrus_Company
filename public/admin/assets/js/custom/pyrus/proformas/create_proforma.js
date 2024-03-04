"use strict";
var KTTercerosProformas = {
    init: function () {
        !(function () {
            var t;
            $("#kt_datepicker_1").flatpickr();
            var e = document.getElementById("kt_create_proforma_form"),
                i = e.querySelector("#kt_create_proforma_submit");
            (t = FormValidation.formValidation(e, {
                fields: {
                    cliente: {
                        validators: {
                            notEmpty: {
                                message:
                                    "Seleccionar al cliente es obligatorio",
                            },
                        },
                    },
                    fecha: {
                        validators: {
                            notEmpty: { message: "La fecha es obligatoria" },
                        },
                    },
                    importante: {
                        validators: {
                            notEmpty: {
                                message: "La información es obligatoria",
                            },
                        },
                    },
                    formas_pago: {
                        validators: {
                            notEmpty: {
                                message: "Las formas de pago son obligatorias",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                    }),
                },
            })),
                i.addEventListener("click", function (e) {
                    e.preventDefault(),
                        t.validate().then(function (t) {
                            "Valid" == t
                                ? swal.fire({
                                      text: "La proforma a sido creada con éxito",
                                      icon: "success",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, vamos!",
                                      customClass: {
                                          confirmButton:
                                              "btn fw-bold btn-light-primary",
                                      },
                                  })
                                : swal.fire({
                                      text: "Lo sentimos, parece que se han detectado algunos errores, por favor inténtelo de nuevo.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, vamos!",
                                      customClass: {
                                          confirmButton:
                                              "btn fw-bold btn-light-primary",
                                      },
                                  });
                        });
                });
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTTercerosProformas.init();
});
