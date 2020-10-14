<?php
/**
 * @author César Cuéllart
 * @version 1.0
 * @created 31-oct-2013 04:28:23 p.m.
 */
class Material
{

	Private $tipMaterial;
	Private $cantMaterial;
	Private $valMaterial;
	Private $proveedorMaterial;
	private $Conexion;

	
	public function Material()
	{
		
	}

	public function getTipMaterial()
	{
		return $this->tipMaterial;
	}

	public function getCantMaterial()
	{
		return $this->cantMaterial;
	}

	public function getValMaterial()
	{
		return $this->valMaterial;
	}

	public function getProveedorMaterial()
	{
		return $this->proveedorMaterial;
	}



	/**
	 * 
	 * @param newVal
	 */
	public function setTipMaterial($newVal)
	{
		$this->tipMaterial = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setCantMaterial($newVal)
	{
		$this->cantMaterial = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setValMaterial($newVal)
	{
		$this->ValMaterial = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setProveedorMaterial($newVal)
	{
		$this->proveedorMaterial = $newVal;
	}

	
	
	public function crearMaterial($tipMaterial,$cantMaterial,$valMaterial,$proveedorMaterial)
	{
		$this->tipMaterial=$tipMaterial;
		$this->cantMaterial=$cantMaterial;
		$this->valMaterial=$valMaterial;
		$this->proveedorMaterial=$proveedorMaterial;

	}
	
	public function agregarMaterial()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into material(tipMaterial,cantMaterial,valMaterial,proveedorMaterial)
values ('$this->tipMaterial','$this->cantMaterial','$this->valMaterial','$this->proveedorMaterial')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarMateriales()
	{
		$this->Conexion=Conectarse();
		$sql="select * from material";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarMaterial($tipMaterial)
	{
		$this->Conexion=Conectarse();
		$sql="select * from material where tipMaterial='$tipMaterial'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

}
?>