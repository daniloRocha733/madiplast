<?php
/**
 * @author César Cuéllart
 * @version 1.0
 * @created 31-oct-2013 04:28:23 p.m.
 */
class Proveedor
{
    Private $cedulaProveedor;
	Private $nombreProveedor;
	Private $correoProveedor;
	Private $TelProveedor;
	Private $empProveedor;
	Private $mateProveedor;
	private $Conexion;

	
	public function Proveedor()
	{
		
	}

	public function getCedulaProveedor()
	{
		return $this->cedulaProveedor;
	}

	public function getNombreProveedor()
	{
		return $this->nombreProveedor;
	}


	public function getCorreoProveedor()
	{
		return $this->correoProveedor;
	}
	public function getTelProveedor()
	{
		return $this->TelProveedor;
	}

	
	public function getMateProveedorr()
	{
		return $this->mateProveedor;
	}


	/**
	 * 
	 * @param newVal
	 */
	public function setCedulaProveedor ($newVal)
	{
		$this->cedulaProveedor = $newVal;
	}
	
	/**
	 * 
	 * @param newVal
	 */
	public function setNombreProveedor($newVal)
	{
		$this->nombreProveedor = $newVal;
	}


	/**
	 * 
	 * @param newVal
	 */
	public function setCorreoProveedor($newVal)
	{
		$this->correoProveedor = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setTelProveedor($newVal)
	{
		$this->TelProveedor = $newVal;
	}
	/**
	 * 

	/**
	 * 
	 * @param newVal
	 */
	public function setMateProveedor($newVal)
	{
		$this->mateProveedor = $newVal;
	}



	
	public function crearProveedor($cedulaProveedor,$nombreProveedor,$correoProveedor, $TelProveedor, $mateProveedor)
	{
		$this->cedulaProveedor=$cedulaProveedor;
		$this->nombreProveedor=$nombreProveedor;
		$this->correoProveedor=$correoProveedor;
		$this->TelProveedor=$TelProveedor;
		$this->mateProveedor=$mateProveedor;
	}
	
	public function agregarProveedor()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into proveedor(cedulaProveedor,nombreProveedor,correoProveedor,TelProveedor,mateProveedor)
values ('$this->cedulaProveedor','$this->nombreProveedor','$this->correoProveedor','$this->TelProveedor','$this->mateProveedor')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarProveedores()
	{
		$this->Conexion=Conectarse();
		$sql="select * from proveedor";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarProveedor($cedulaProveedor)
	{
		$this->Conexion=Conectarse();
		$sql="select * from proveedor where cedulaProveedor='$cedulaProveedor'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

}
?>