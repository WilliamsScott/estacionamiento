
$(document).ready(function(){

  var base_url = 'http://localhost/Estacionamiento/';

  $("#bt_login").click(function(e){
    e.preventDefault();

    var rut = $("#rut_login").val();
    var rut = $("#clave_login").val();
    $.ajax({
      url:base_url+'login',
      type:'post',
      datatype:'json',
      data:{
        rut:rut,
       clave:clave
      },
      success:function(o){
        Materialize.toast(o.msg,"4000");
      },
      error:function(){
        Materialize.toast("error 500","4000");
      }

    })
  });
});