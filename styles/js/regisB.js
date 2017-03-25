
	$(document).ready(function()
	{
	var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var numeros=/^[0-9]*$/;
  var precio=/^[0-9]+[.][0-9]{2}?$/;
	var telefono=/^\d{9}$/;
	var letras=/^[a-zA-Z]+\s?[a-zA-Z]*$/;
	var apellidos=/^[a-zA-Z]+\s+[a-zA-Z]*$/;
	var pass=/^[\w-]{6,10}/;
	var name ="anom.png";
  var tname;
  var puntero1=0;

  Dropzone.autoDiscover = false;
  $("#dropzone").dropzone(
    {
                url: "core/controllers/regisBControllers.php",
                addRemoveLinks: true,
                maxFileSize: 1000,
                dictResponseError: "Ha ocurrido un error en el server",
                acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF',
                complete: function(file)
                {
                  if(file.status == "success" &&puntero1==0)
                  {
                    name=file.name;

                  	//alert("El siguiente archivo ha subido correctamente: " + file.name);
                    puntero1=1;
                  }
                  else {
                    alert("Ya existe una foto ..!!");
                    name = file.name;

                      var element;
                      (element = file.previewElement) != null ?
                      element.parentNode.removeChild(file.previewElement) :
                      false;


                  }
                },
                error: function(file)
                {
                  alert("Error subiendo el archivo " + file.name);
                },
                removedfile: function(file, serverFileName)
                {
                   name = file.name;

                      var element;
                      (element = file.previewElement) != null ?
                      element.parentNode.removeChild(file.previewElement) :
                      false;
                    //	alert("El elemento fué eliminado: " + name);
                    puntero1=0;


                }
  });

	//var telefono=/^\d{3}-\d{3}-\d{3}$/;// 999-999-999


	$(".mib").click(function(){
		$(".error").fadeOut().remove();

            var indice = document.getElementById("tipo").selectedIndex;
            var indice2 = document.getElementById("estado").selectedIndex;
						if ($(".codigoP").val()=="") {
							$(".codigoP").focus().after('<span class="error">CODIGO PATRIMONIAL</span>');
             return false;
						}
						if ($(".codigoI").val()=="") {
							$(".codigoI").focus().after('<span class="error">CODIGO INTERNO</span>');
							return false;

						}


            if( indice == null || indice == 0 ) {
              $(".tipo").focus().after('<span class="error">SELECCIONE tipo de BIEN</span>');
               return false;
            }

               if ($(".descripcion").val() == "" ) {
       		   	$(".descripcion").focus().after('<span class="error">ESCRIBIR  descripcion</span>');
       					return false;
       		   }
             if ($(".fecha").val() == "" ) {
             $(".fecha").focus().after('<span class="error">FALTA fecha</span>');
               return false;
            }
            if ($(".cantidad").val() == ""|| !numeros.test($(".cantidad").val()))  {
           $(".cantidad").focus().after('<span class="error">CANTIDAD incorrecto,solo números</span>');
             return false;
           }
           if ($(".precio").val() == ""|| !precio.test($(".precio").val()))  {
          $(".precio").focus().after('<span class="error">PRECIO ej:234.05 </span>');
            return false;
          }
          if( indice2 == null || indice2 == 0 ) {
            $(".estado").focus().after('<span class="error">SELECCIONE un estado</span>');
             return false;
          }


						var connect,form,result,codigo,codigoP,codigoI,tipo,detalle,fecha,cantidad,valor,foto,estado;
						codigo=document.getElementById('codigo').value;
						codigoP=document.getElementById('codigoP').value;
						codigoI=document.getElementById('codigoI').value;
						tipo=document.getElementById('tipo').value;
						detalle=document.getElementById('descripcion').value;
						fecha=document.getElementById('date-fr').value;
						cantidad=document.getElementById('cantidad').value;
						valor=document.getElementById('precio').value;
						estado=document.getElementById('estado').value;
						foto=name;
						form='codigo='+codigo+
						     '&codigoP='+codigoP+
								 '&codigoI='+codigoI+
								 '&tipo='+tipo+
								 '&detalle='+detalle+
								 '&fecha='+fecha+
								 '&cantidad='+cantidad+
								 '&valor='+valor+
								 '&estado='+estado+
								 '&foto='+foto;
          connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');

						if (true) {
							connect.onreadystatechange =function(){
 							 if (connect.readyState==4&&connect.status==200) {
 								 // alert(connect.responseText);
 								 if (parseInt(connect.responseText) ==1) {

 												 result='<div class="alert alert-warning alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CONECTADO..</div>';

												 setTimeout(envio(),500);
 												 document.getElementById('_AJAX_').innerHTML=result;
												 location.href= '?view=listaB';


 								 } else if(parseInt(connect.responseText)==2){
									 result='<div class="alert bg-pink alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>LOS  DATOS YA EXISTEN EN LA DB..! </div>';
		 							document.getElementById('_AJAX_').innerHTML=result;

 								 }

 							 } else if(connect.readyState!=4){
 								 result='<div class="alert bg-green alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>PROCENSANDO--!</div>';
 								 document.getElementById('_AJAX_').innerHTML=result;
 							 }
 						 }

 						 connect.open('POST','?view=regisB',true);
 						 connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
 						 connect.send(form);

					 } else{
							result='<div class="alert bg-pink alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>FALTAN DATOS..! </div>';
							document.getElementById('_AJAX_').innerHTML=result;
						}




    });

    $(".descripcion,.fecha,.cantidad,.precio").bind('blur keyup', function(){
          if ($(".precio,.cantidad,.fecha,.descripcion").val() != "" ) {
        $('.error').fadeOut();
        return false;
      }
    });

		function envio()
		{
			swal("Datos Registrados!", "_", "success");
		}






});
