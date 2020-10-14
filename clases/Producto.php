<?php
/**
 * @author César Cuéllart
 * @version 1.0
 * @created 31-oct-2013 04:28:23 p.m.
 */
class Producto
{

	Private $tipProducto;
	Private $valProducto;
	Private $cantProducto;
	Private $tipMaterial;
	private $Conexion;

	
	public function Producto()
	{
		
	}

	public function getTipProducto()
	{
		return $this->tipProducto;
	}

	public function getValProducto()
	{
		return $this->valProducto;
	}

	public function getCantProducto()
	{
		return $this->cantProducto;
	}

	public function getTipMaterial()
	{
		return $this->tipMaterial;
    }
    


	/**
	 * 
	 * @param newVal
	 */
	public function setTipProducto($newVal)
	{
		$this->tipProducto = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setValProducto($newVal)
	{
		$this->valProducto= $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setCantProducto($newVal)
	{
		$this->cantProducto= $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setTipMaterial($newVal)
	{
		$this->tipMaterial = $newVal;
	}

	

	
	public function crearProducto($tipProducto,$valProducto,$cantProducto,$tipMaterial)
	{
		$this->tipProducto=$tipoProducto;
		$this->valProducto=$valProducto;
		$this->cantProducto=$cantProducto;
		$this->tipMaterial=$tipMaterial;
	
		
	}
	
	public function agregarProducto()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into producto (tipProducto,valProducto,cantProducto,tipMaterial)
values ('$this->tipProducto','$this->valProducto','$this->cantProducto','$this->tipMaterial')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarProductos()
	{
		$this->Conexion=Conectarse();
		$sql="select * from producto ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarProducto($tipProducto)
	{
		$this->Conexion=Conectarse();
		$sql="select * from producto where tipProducto='$tipProducto'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

}
?>

