<?php


/**
 * Skeleton subclass for representing a row from the 'persona' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Sep  6 00:23:19 2012
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Persona extends BasePersona {

	public function __toString()
	{
	
	}

	public function getNombreCompleto()
	{
		$nombre =	$this->getApellido().' ';
		$nombre.= $this->getNombre();

		return $nombre;
	}

	public function getDocumentoCompleto()
	{
		$doc = $this->getTipoDocumento()->__toString().' ';
		$doc.= $this->getNroDocumento();

		return $doc;
	}

  public function getEdad()
	{
    $dia = date('j');
    $mes = date('n');
    $ano = date('Y');
    $dia_nac = $this->getFechaNacimiento('d');
    $mes_nac = $this->getFechaNacimiento('m');
    $ano_nac = $this->getFechaNacimiento('Y');

    if ( (is_null($ano_nac)) || (is_null($mes_nac)) || (is_null($dia_nac))){
      return null;
    }
    
		if (($mes_nac == $mes) && ($dia_nac > $dia)) {
      $ano = ($ano - 1);
    }

    if ($mes_nac > $mes) 
		{
      $ano = ($ano - 1);
    }
    
		$edad = ($ano - $ano_nac);
    
		return $edad;
  }
} // Persona
