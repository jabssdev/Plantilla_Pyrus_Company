"use strict";
var KTModalCreateRol = (function () {
    var t, e, n, o, i, r;
    return {
        init: function () {
            (r = document.querySelector("#kt_modal_create_rol")) &&
                ((i = new bootstrap.Modal(r)),
                (o = document.querySelector("#kt_modal_create_rol_form")),
                (t = document.getElementById("kt_modal_create_rol_submit")),
                (e = document.getElementById("kt_modal_create_rol_cancel")),
                $(o.querySelector('[name="category"]')).on(
                    "change",
                    function () {
                        n.revalidateField("category");
                    }
                ),
                (n = FormValidation.formValidation(o, {
                    fields: {
                        rol: {
                            validators: {
                                notEmpty: {
                                    message: "El nombre del rol es obligatorio",
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                })),
                t.addEventListener("click", function (e) {
                    e.preventDefault(),
                        n &&
                            n.validate().then(function (e) {
                                console.log("validated!"),
                                    "Valid" == e
                                        ? (t.setAttribute(
                                              "data-kt-indicator",
                                              "on"
                                          ),
                                          (t.disabled = !0),
                                          setTimeout(function () {
                                              t.removeAttribute(
                                                  "data-kt-indicator"
                                              ),
                                                  (t.disabled = !1),
                                                  Swal.fire({
                                                      text: "El formulario se ha enviado correctamente!",
                                                      icon: "success",
                                                      buttonsStyling: !1,
                                                      confirmButtonText:
                                                          "Ok, vamos!",
                                                      customClass: {
                                                          confirmButton:
                                                              "btn btn-primary",
                                                      },
                                                  }).then(function (t) {
                                                      t.isConfirmed && i.hide();
                                                  });
                                          }, 2e3))
                                        : Swal.fire({
                                              text: "Lo sentimos, parece que se han detectado algunos errores, por favor inténtelo de nuevo.",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Ok, vamos!",
                                              customClass: {
                                                  confirmButton:
                                                      "btn btn-primary",
                                              },
                                          });
                            });
                }),
                e.addEventListener("click", function (t) {
                    t.preventDefault(),
                        Swal.fire({
                            text: "¿Está seguro de que desea cancelar?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Sí, cancélalo!",
                            cancelButtonText: "No, volver",
                            customClass: {
                                confirmButton: "btn btn-primary",
                                cancelButton: "btn btn-active-light",
                            },
                        }).then(function (t) {
                            t.value
                                ? (o.reset(), i.hide())
                                : "cancel" === t.dismiss &&
                                  Swal.fire({
                                      text: "Su formulario no ha sido cancelado!",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, vamos!",
                                      customClass: {
                                          confirmButton: "btn btn-primary",
                                      },
                                  });
                        });
                }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTModalCreateRol.init();
});
