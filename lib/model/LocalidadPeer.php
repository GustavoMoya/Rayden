<?php


/**
 * Skeleton subclass for performing query and update operations on the 'localidad' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Sep  6 00:23:17 2012
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class LocalidadPeer extends BaseLocalidadPeer {

	static public function doSelectByProvincia($provincia_id)
	{
  	$c= new Criteria();

    if ($provincia_id != '')
		{
				$c= new Criteria();
        $c->add(LocalidadPeer::PROVINCIA_ID, $provincia_id);
        $c->addAscendingOrderByColumn(self::NOMBRE);

        return  LocalidadPeer::doSelect($c);
    }

    return  '';
  }

} // LocalidadPeer
