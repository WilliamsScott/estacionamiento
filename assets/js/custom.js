

$(function () {

    var base_url = 'http://localhost/estacionamiento/';

    $("#bt_login").click(function (e) {
        e.preventDefault();

        var rut = $("#rut_login").val();
        var clave = $("#clave_login").val();
        $.ajax({
            url: base_url + 'login',
            type: 'post',
            dataType: 'json',
            data: {
                rut: rut,
                clave: clave
            },
            success: function (o) {
                Materialize.toast(o.msg, "4000");

                if (o.msg == "administrador") {


                    window.location = "admin";
                }
            },
            error: function () {
                Materialize.toast("error nose 500", "4000");
            }

        })
    });
});