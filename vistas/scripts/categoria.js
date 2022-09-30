var tabla;

//Función que se ejecuta al inicio
function init()
{
	mostrarform(false);
	listar();
}

function limpiar()
{
	$("#idcategoria").val("");
	$("#nombre").val("");
	$("#descripcion")val("");
}

function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros"):show();
		$("#btnGuardar").prop("disable",false);
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros"):hide();
	}
}

function cancelarform()
{
	limpiar();
	mostrarform(false);
}

function listar()  //Petición Ajax al archivo categoria.php y envie un valor 
{					//a la variable op que lo recibe mediante el método GET
	tabla=$('#tbllistado').dataTable(
		{				//tbllistado=objeto de la pagina HTML (tabla)
			"aProcessing":true,
			"aServerSide":true,
			dom: 'Bfrtip',
			buttons: [
						'copyHtml5',
						'excelHtml5',
						'csvHtml5',
						'pdf'			]
						],
			"ajax":
			{
				url: '.../ajax/categoria.php?op=listar', //lista los registros
				type:"get",			//registros enviado con GET
				dataType:"json",
				error:function(e){
					console.log(e.responseText);
				}			//para ver el error en 'inspeccion' del explorador
			},
			"bDestroy":true,
			"iDisplayLength":5,  //Cada cuantos registros vamos a realizar la paginación
			"order":[[0,"desc"]]  //Ordena (columnna, orden) 
		}).DataTable();
}

init();