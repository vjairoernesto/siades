
$(document).ready(function(){
	//proceso para cargar otras paginas en el div de contenido que esta en el index
	$("#nav a").each(function(){
		var href=$(this).attr("href");
		$(this).attr({
			href:"#"
		});
		$(this).click(function(){
			$("#contenido").load(href);
		});

	});

});
var lista = document.createElement('ul');
    var item = document.createElement('li');
    lista.appendChild(item);
            
// funciones para la gestion de registros de clientes

// aqui estamos corrobrando que esta funcionando el evento clik

function cargaRegCliente(){
	$("#mostrar").load('./php/regcliente.php');
}
function Buscar(){
	$("#contenido").load('./php/Persona.php');
}

function validar(e) {
	tecla = (document.all)?e.keyCode:e.which;
	
	if (tecla==8 || tecla==0){
		return true;
	}
	
	patron = /([A-Za-z\s\t])/;
	te = String.fromCharCode(tecla);
	return patron.test(te);
}
	

function savePersona(){
	if($('#nombre').val().length ==0  
		|| $('#apellido').val().length ==0 
		|| $('#sexo').val().length ==0
		|| $('#fechaNac').val().length ==0 ){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
			$.post("./php/procesaPersona.php",$('#regPersona').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regPersona.php');

				});

		}


	}
	


function editPersona(pId){
	var id;
	$.post('./php/editPersona.php',{
		id:pId
	},function(result){
		$('#mostrar').html(result);

	});
}

function updatePersona(){
if($('#nombre').val().length ==0  
		|| $('#apellido').val().length ==0 
		|| $('#sexo').val().length ==0
		|| $('#fechaNac').val().length ==0 ){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
		$.post("./php/procesaPersona.php",$('#frmPersona').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regPersona.php');

				});

		}
	}


function deletePersona(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaPersona.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaPersona.php');
		});
	}
}
//documento-----------------------------------------------------------------------------------------------------------
function savedoc(){
	if($('#documento').val().length ==0  
		|| $('#descripcion').val().length ==0  ){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
			$.post("./php/procesaDoc.php",$('#regDoc').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regDoc.php');

				});

		}

	}
	
	function editDoc(pId){
	var id;
	$.post('./php/editDoc.php',{
		id:pId
	},function(result){
		$('#mostrar').html(result);

	});
}

function updateDoc(){
if($('#documento').val().length ==0  ){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
			$.post("./php/procesaDoc.php",$('#frmDoc').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consultaDoc.php');

				});

		}

	}


function deleteDoc(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaDoc.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaDoc.php');
		});
	}
}
	


//Ciclo_--------------------------------------------------------------------------------------------------------

function saveCiclo(){
	if($('#nombre').val().length ==0){
		alert('campo obligatorio');
		return false;
	}else{
		$.post("./php/procesaCiclo.php",$('#regCiclo').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regCiclo.php');

				});

	}


}
function editCiclo(pId){
	var id;
	$.post('./php/editCiclo.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
}
function updateCiclo(){
if($('#nombre').val().length ==0 ){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
		
			$.post("./php/procesaCiclo.php",$('#frmCiclo').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consultaCiclo.php');

				});

		
		}
	}

function deleteCiclo(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaCiclo.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaCiclo.php');
		});
	}
}function saveCiclo(){
	if($('#nombre').val().length ==0){
		alert('campo obligatorio');
		return false;
	}else{
		$.post("./php/procesaCiclo.php",$('#regCiclo').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regCiclo.php');

				});

	}


}
function editCiclo(pId){
	var id;
	$.post('./php/editCiclo.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
}
function updateCiclo(){
if($('#nombre').val().length ==0 ){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
		
			$.post("./php/procesaCiclo.php",$('#frmCiclo').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consultaCiclo.php');

				});

		
		}
	}

function deleteCiclo(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaCiclo.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaCiclo.php');
		});
	}
}


//----------------------------------------------------------------------------------------------------------------------------
//GRADO
function Savegrado(){
	if($('#nombre').val().length ==0 || $('#ciclo').val().length ==0){
		alert('campo obligatorio');
		return false;
	}else{
		$.post("./php/procesaGrado.php",$('#regGrado').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regGrado.php');

				});

	}


}
function editgrado(pId){
	var id;
	$.post('./php/editGrado.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
}
function updategrado(){
if($('#nombre').val().length ==0 || $('#ciclo').val().length ==0){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
		
			$.post("./php/procesaGrado.php",$('#frmGrado').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consultaGrado.php');

				});

		
		}
	}

function deletegrado(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaGrado.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaGrado.php');
		});
	}
}
//----------------------------------------------------------------------------------------------------------------------------
//_Becado
function saveBecado(){
	if($('#becado').val().length ==0 ){
		alert('campo obligatorio');
		return false;
	}else{
		$.post("./php/procesaBecado.php",$('#regBecado').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regBecado.php');

				});

	}


}
function editBecado(pId){
	var id;
	$.post('./php/editBecado.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
}
function updateBecado(){
if($('#becado').val().length ==0 ){
		alert('campo obligatorio');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
		
			$.post("./php/procesaBecado.php",$('#frmBecado').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consultaBecado.php');

				});

		
		}
	}

function deleteBecado(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaBecado.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaBecado.php');
		});
	}
}
//----------------------------------------------------------------------------------------------------------------------------
//TURNO
function saveTurno(){
	if($('#turno').val().length ==0 ){
		alert('campo obligatorio');
		return false;
	}else{
		$.post("./php/procesaTurno.php",$('#regTurno').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regTurno.php');

				});

	}


}
function editTurno(pId){
	var id;
	$.post('./php/editTurno.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
}
function updateTurno(){
if($('#turno').val().length ==0 ){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
		
			$.post("./php/procesaTurno.php",$('#frmTurno').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consultaTurno.php');

				});

		
		}
	}

function deleteTurno(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaTurno.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaTurno.php');
		});
	}
}
//seccion-------------------------------------------------------------------------------------------------
function SaveSeccion(){
	if($('#nombre').val().length ==0 || $('#grado').val().length ==0){
		alert('campo obligatorio');
		return false;
	}else{
		$.post("./php/procesaSeccion.php",$('#regSeccion').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regSeccion.php');

				});

	}


}
function editSeccion(pId){
	var id;
	$.post('./php/editSeccion.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
}
function updateSeccion(){
if($('#nombre').val().length ==0 || $('#grado').val().length ==0){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
		
			$.post("./php/procesaSeccion.php",$('#frmSeccion').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consultaSeccion.php');

				});

		
		}
	}

function deleteSeccion(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaSeccion.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaSeccion.php');
		});
	}
}
//----------------------------------------------------------------------------------------------------------------------------
//TURNO
function saveTurno(){
	if($('#turno').val().length ==0 ){
		alert('campo obligatorio');
		return false;
	}else{
		$.post("./php/procesaTurno.php",$('#regTurno').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/regTurno.php');

				});

	}


}
function editTurno(pId){
	var id;
	$.post('./php/editTurno.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
}
function updateTurno(){
if($('#turno').val().length ==0 ){
		alert('campos obligatorios');

		return false;
		// aqui vemos que las contraseñas sea iguales

	}else{ 
		
			$.post("./php/procesaTurno.php",$('#frmTurno').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consultaTurno.php');

				});

		
		}
	}

function deleteTurno(pId){
	if(confirm("¿Esta Seguro(a) de eliminar el registro?")){
		var id; 
		var opc;
		$.post('./php/procesaTurno.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consultaTurno.php');
		});
	}
}

//-------------------------------------------------------------------------------------------
function SaveMarcas(){
	if($('#nombre').val().length ==0){
		alert('Campo Obligatorio');
	}else{
		$.post("./php/procesa_marcas.php",$('#frmRegMarcas').serialize(),function(result){
			alert(result);
			$('#contenido').load('./php/regmarcas.php');
		});
	}
}

function UpdateMarcas(){
	if($('#nombre').val().length ==0){
		alert('Campo Obligatorio');
	}else{
		$.post("./php/procesa_marcas.php",$('#frmActMarcas').serialize(),function(result){
			alert(result);
			$('#contenido').load('./php/consulta_marcas.php');
		});
	}
}
function deleteCategoria(pId){
	if(confirm("¿Esta seguro(a) de eliminar el registro?")){
		var id;
		var opc;
		$.post('./php/procesa_categoria.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			
		});
	}
}
function editCategoria(pId){
	var id;
	$.post('./php/editcategoria.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
}
function UpdateCategoria(){
	if($('#nombre').val().length ==0){
		alert('campo obligatorio');
		return false;
	}else{
		$.post("./php/procesa_categoria.php",$('#frmActCategoria').serialize(),
				function(result){
					alert(result);
					$('#contenido').load('./php/consulta_categoria.php');

				});
	}

}




function cargaRegBodega(){
	$("#mostrar").load('./php/regbodega.php');
}

function saveBodega(){
if($('#producto').val().length ==0 || $('#descripcion').val().length ==0 || $('#preciocosto').val().length ==0 || $('#preciopublico').val().length ==0 || $('#existencia').val().length ==0){
		alert('Campos obligatorios');
	}else{
		$.post("./php/procesa_bodega.php",$('#frmRegbodega').serialize(),function(result){
			alert(result);
			$('#contenido').load('./php/regbodega.php');
		});
	}
}
function deleteBodega(pId){
	if(confirm("¿Esta seguro(a) de eliminar el registro?")){
		var id;
		var opc;
		$.post('./php/procesa_bodega.php',{
			id:pId,
			opc:"del"
		},function(result){
			alert(result);
			$('#filtro').keyup();
			$('#contenido').load('./php/consulta_bodega.php');
		});
	}
}
 function editBodega(pId){
var id;
	$.post('./php/editbodega.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
 }

 function UpdateBodega(){
 	if($('#producto').val().length ==0 || $('#descripcion').val().length ==0|| $('#marca').val().length ==0 
	|| $('#modelo').val().length ==0 || $('#preciou').val().length ==0 || $('#preciopref').val().length ==0 
	|| $('#existencia').val().length ==0){
		alert('Campos obligatorios');
		return false;
	}else{
		$.post("./php/procesa_bodega.php",$('#frmActbodega').serialize(),function(result){
			alert(result);
			$('#contenido').load('./php/consulta_bodega.php');
		});
	}
}

 
function auntenticar(){
	if($('#login').val().length ==0 || $('#password').val().length ==0){
		$('#msj').html("<h4>Digite usuario y contraseña</h4>");
		return false;
	}else{
     $.post('./autenticar.php',$('#loginform').serialize(),function(result){
     	if(result.trim()==''){
     		$(location).attr('href','../index.php');
     	}else{
     		$('#msj').html(result);
     	}
     });
	}
}
function editar(pId) {
	var id;
	$.post('./php/edit_ordenes.php',{
		id:pId
	},function(result){
		$('#contenido').html(result);
	});
	}

function updateOrden() {	
if($('#orden_no').val().length ==0
		|| $('#fecha').val().length ==0
		|| $('#total').val().length ==0
		|| $('#estado').val().length ==0){
		alert('Campo Obligatorio');
	}else{
		$.post("./php/procesa_orden.php",$('#Actgorden').serialize(),function(result){
			alert(result);
			$('#contenido').load('./php/consulta_ordenes.php');
		});
	}
	
}





