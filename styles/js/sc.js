function autocompletar() {

	var min_length = 0; // variable length
	var nombre = $('#codigo').val();//obtener el nombre y/o termino de busqeuda

	if (nombre.length >= min_length) {

    var connect,form,result;

    form='nombre='+nombre;
    connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
    if (nombre!='') {
      connect.onreadystatechange =function(){
        if (connect.readyState==4&&connect.status==200) {


          var data = JSON.parse(connect.responseText);
          data.data[0].id_cargo;
          data.data[0].pre_cargo;
          data.data[0].ofi_cargo;
          data.data[0].pre_cargo_a;
          data.data[0].fun_p_cargo;
          data.data[0].fec_p_cargo;
          data.data[0].resepciona_cargo;
          data.data[0].dev_cargo;
          data.data[0].fun_d_cargo;
          data.data[0].fec_d_cargo;
          data.data[0].id_bien;
          data.data[0].cod_bien;
          data.data[0].est_cargo;

          var id = $("#id").val(  data.data[0].id_cargo),
            codigo=$("#codigo").val(  data.data[0].cod_bien),
            codigo=$("#oficina").val(  data.data[0].ofi_cargo),
            codigo=$("#prestador").val(  data.data[0].pre_cargo),
            codigo=$("#prestadoa").val(  data.data[0].pre_cargo_a),
            codigo=$("#funcion1").val(  data.data[0].fun_p_cargo),
            codigo=$("#fecha").val(  data.data[0].fec_p_cargo);
          //  estado=$("#estado").val(data.data[0].est_cargo);$("#estado").change();











          //respuesta....
        }else if(connect.readyState!=4){
          //proceso......
        }

      }


      connect.open('POST','?view=devolBien',true);
      connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
      connect.send(form);

    }



	} else {
		$('#lista').hide();
	}
}

// funcion que setea valores a los input despues de busqueda
function set_item(id,item) {
	// setear valor al imput id y nombre
	$('#nombre').val(item);
	$('#id').val(id);

	// ocultar la lista
	$('#lista').hide();
}
