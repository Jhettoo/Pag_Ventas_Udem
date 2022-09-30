<?php 
require "../config/Conexion.php";

Class Categoria
{
	//Implementamos nuestro constructor para crear instancias a esta clase sin enviar ningún parámetro
	public function __construct()
	{

	}
	//Implementamos un método para editar registro
	public function insertar($nombre,$descripcion)
	{
		$sql="INSERT INTO categoria (nombre, descripcion, condicion)
			VALUE('$nombre','$descripcion','1')";
		return ejecutarConsulta($sql);
	}
	//Implementamos un método para editar registro
	public function editar($categoria)
	{
		$sql="UPDATE Categoria SET nombre='$nombre', descripcion='$descripcion'
			  WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}
	//Implementar un método para desactivar una categoría
	public function desactivar($idcategoria)
	{
		$sql="UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}
	//Método para activar una categoría
	public function activar($idcategoria)
	{
	    $sql="UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";
	    return ejecutarConsulta($sql);
	}
	//Método para mostrar los datos de un registro a modificar
	public function mostrar($idcategoria)
	{
		$sql="SELECT * FROM categoria WHERE idcategoria='$idcategoria'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM Categoria";
		return ejecutarConsulta($sql);
	}
}

 ?>