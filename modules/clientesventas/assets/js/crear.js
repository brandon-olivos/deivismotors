$("#modal-clientesventas").on("click", function () {
    $.post(APP_URL + '/clientesventas/default/get-modal', {}, function (resp) {
        bootbox.dialog({
            title: "<h2><strong>Registro Cliente</strong></h2>",
            message: resp.plantilla,
            size: 'large',
            buttons: {}
        });

        $("#btn-cancelar").click(function () {
            bootbox.hideAll();
        });

        $("#ubigeos").select2({
            placeholder: "Seleccioné Ubigeo"
        });

        $(document).ready(function () {
            $("#btn-guardar-cliente").click(function () {
                $("#frm-cliente-venta").validate({
                    rules: {
                        tipo_entidad: "required",
                        tipo_documento: "required",
                        numero_documento: "required",
                        razon_social: "required",
                        telefono: "required",
                        ubigeos: "required",
                        direccion: "required",

                    },
                    messages: {
                        tipo_entidad: "Por favor ingrese datos",
                        tipo_documento: "Por favor ingrese datos",
                        numero_documento: "Por favor ingrese datos",
                        razon_social: "Por favor ingrese datos",
                        telefono: "Por favor ingrese datos",
                        // correo: "Por favor ingrese datos",
                        ubigeos: "Seleccione",
                        direccion: "Por favor ingrese datos",
                        //  urbanizacion: "Por favor ingrese datos",
                        //  referencias: "Por favor ingrese datos",

                    },
                    submitHandler: function () {
                        var tipo_entidad = $("#tipo_entidad").val();
                        var tipo_documento = $("#tipo_documento_entidad").val();
                        var numero_documento = $("#numero_documento_entidad").val();
                        var razon_social = $("#razon_social").val();
                        var telefono = $("#telefono").val();
                        var correo = $("#correo").val();
                        var ubigeos = $("#ubigeos").val();
                        var direccion = $("#direccion").val();
                        var urbanizacion = $("#urbanizacion").val();
                        var referencias = $("#referencias").val();

                        $.ajax({
                            type: "POST",
                            dataType: 'json',
                            url: APP_URL + '/clientesventas/default/create',
                            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                            data: {
                                tipo_entidad: tipo_entidad,
                                tipo_documento: tipo_documento,
                                numero_documento: numero_documento,
                                razon_social: razon_social,
                                telefono: telefono,
                                correo: correo,
                                ubigeos: ubigeos,
                                direccion: direccion,
                                urbanizacion: urbanizacion,
                                referencias: referencias,
                            },
                            success: function (response) {
                                bootbox.hideAll();
                                if (response) {
                                    notificacion('Accion realizada con exito', 'success');
                                } else {
                                    notificacion('Error al guardar datos', 'error');
                                }
                                datatable.reload()
                            }
                        });
                    }

                });
            });
        });
    }, 'json');
});
