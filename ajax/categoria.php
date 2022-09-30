<?php 
require_once "../modelos/Categoria.php";

$categoria = new Categoria();

$idcategoria=isset($_POST["idcategoria"])?limpiarCadena($_POST["idcategoria"]):"";
$nombre=isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";

switch ($_GET["op"]) //Archivo js, mediante peticion Ajax a este archivo envía "op"
{
	case 'guardaryeditar':
		if (empty($idcategoria))
		{
			$rspta=$categoria->insertar($nombre,$descripcion);
			echo $rspta ? "categoria registrada" : "Categoría no se pudo registrar";
		}
		else
		{
			$rspta=$categoria->editar($idcategoria,$nombre,$descripcion);
			echo $rspta ? "categoria actualizada" : "Categoría no se pudo actualizar";
		}
		break;
	case 'desactivar':
		$rspta=$categoria->desactivar($idcategoria);
		echo $rspta ? "Categoría desactivada" : "Categoría no se puede desactivar";
		break;
	case 'activar':
		$rspta=$categoria->activar($idcategoria);
		echo $rspta ? "Categoria activada" : "Categoría no se puede activar";
		break;
	case 'mostrar':
		$rspta=$categoria->mostrar($idcategoria);
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;
	case 'listar':
		$rspta=$categoria->listar();
		//Declaramos un array
		$data = Array();

		while ($reg=$rspta->fetch_object()) //Recorre el array
		{
			$data[]=array(
				"0"=>$reg->idcategoria,
				"1"=>$reg->nombre,
				"2"=>$reg->descripcion,
				"3"=>$reg->condicion
				);
		}
		$results=array(
			"sEcho"=>1,	//Información para el datatable -Listar y paginar usando datatable
			"iTotalRecords"=>count($data),//Enviamos registros al datatable
			"itotalDisplayRecords"=>count($data),//Enviamos el total de registro a visualizar
			"aaData"=>$data
			);
		echo json_encode($results);
		break;
}


 ?>