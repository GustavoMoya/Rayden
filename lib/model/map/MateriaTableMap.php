<?php


/**
 * This class defines the structure of the 'materia' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Sep  6 00:23:18 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class MateriaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.MateriaTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('materia');
		$this->setPhpName('Materia');
		$this->setClassname('Materia');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('CARRERA_ID', 'CarreraId', 'INTEGER', 'carrera', 'ID', false, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', false, 50, null);
		$this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', false, 250, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Carrera', 'Carrera', RelationMap::MANY_TO_ONE, array('carrera_id' => 'id', ), null, null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // MateriaTableMap
