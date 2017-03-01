$(function() {
	var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var dni=/^\d{8}$/;
	var telefono=/^\d{9}$/;
	var letras=/^[a-zA-Z]+\s?[a-zA-Z]*$/;
	var apellidos=/^[a-zA-Z]+\s+[a-zA-Z]*$/;
	var pass=/^[\w-]{6,10}/;
	//var telefono=/^\d{3}-\d{3}-\d{3}$/;// 999-999-999


	$(".btn").click(function(){
		$(".error").fadeOut().remove();

         if ($(".dni").val() == "" || !dni.test($(".dni").val())) {
 		   	$(".dni").focus().after('<span class="error">DNI incorrecto</span>');
 					return false;
 		   }
			 if ($(".nombres").val() == "" || !letras.test($(".nombres").val())) {
			$(".nombres").focus().after('<span class="error">NOMBRES incorrecto</span>');
				return false;
		 }
			 if ($(".apellidos").val() == "" || !apellidos.test($(".apellidos").val())) {
			$(".apellidos").focus().after('<span class="error">APELLIDOS incorrecto</span>');
				return false;
		  }
				if ($(".telefono").val() == "" || !telefono.test($(".telefono").val())) {
			 $(".telefono").focus().after('<span class="error">TELÉFONO incorrecto</span>');
				 return false;
			 }
			 if ($(".direccion").val() == "" ) {
			$(".direccion").focus().after('<span class="error">DIRECCION incorrecto</span>');
				return false;
			}
				if ($(".nick").val() == "" ) {
			 $(".nick").focus().after('<span class="error">NICK incorrecto</span>');
				 return false;
			 }
			 if ($(".pass").val() == ""|| !pass.test($(".pass").val()))  {
			$(".pass").focus().after('<span class="error">PASSWORD incorrecto,mínimo 6 caracteres</span>');
				return false;
			}
			var indice = document.getElementById("condicion").selectedIndex;
			var indice2 = document.getElementById("estado").selectedIndex;


			if( indice == null || indice == 0 ) {
				$(".condi").focus().after('<span class="error">SELECCIONE una condición</span>');
			 	 return false;
			}
			if( indice2 == null || indice2 == 0 ) {
				$(".estado").focus().after('<span class="error">SELECCIONE un estado</span>');
				 return false;
			}
			if( name=="no") {
				$(".dropzone").focus().after('<span class="error">CARGUE una  foto </span>');
				 return false;
			}

		




    });



	$(".email").bind('blur keyup', function(){
        if ($(".email").val() != "" && emailreg.test($(".email").val())) {
			$('.error').fadeOut();
			return false;
		}
	});
	$(".dni").bind('blur keyup', function(){
        if ($(".dni").val() != "" && dni.test($(".dni").val())) {
			$('.error').fadeOut();
			return false;
		}
	});
	$(".nombres,.apellidos,.nick,.pass").bind('blur keyup', function(){
				if ($(".nombres").val() != "" && letras.test($(".nombres").val())) {
			$('.error').fadeOut();
			return false;
		}
	});
	$(".telefono").bind('blur keyup', function(){
				if ($(".telefono").val() != "" && telefono.test($(".telefono").val())) {
			$('.error').fadeOut();
			return false;
		}
	});


});
