

$(function () {
    $(".dropdown-trigger").dropdown();
    var base_url = 'http://localhost/estacionamiento/';
    $(".dropdown-trigger").dropdown();
    $("#bt_login").click(function (e) {
        e.preventDefault();

        var rut = $("#rut_login").val();
        var clave = $("#clave_login").val();

        if(rut=="" || clave=="" ){
            Materialize.toast("complete campos","4000");
        }else{
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

        }
       
    });
});