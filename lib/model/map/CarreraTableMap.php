<?php


/**
 * This class defines the structure of the 'carrera' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Sep  6 00:23:13 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CarreraTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CarreraTableMap';

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
		$this->setName('carrera');
		$this->setPhpName('Carrera');
		$this->setClassname('Carrera');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 100, null);
		$this->addColumn('DESCRIPCION', 'Descripcion', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('USER_CREATED', 'UserCreated', 'INTEGER', 'usuario', 'ID', true, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('USER_UPDATED', 'UserUpdated', 'INTEGER', 'usuario', 'ID', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('USER_DELETED', 'UserDeleted', 'INTEGER', 'usuario', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('UsuarioRelatedByUserCreated', 'Usuario', RelationMap::MANY_TO_ONE, array('user_created' => 'id', ), null, null);
    $this->addRelation('UsuarioRelatedByUserUpdated', 'Usuario', RelationMap::MANY_TO_ONE, array('user_updated' => 'id', ), null, null);
    $this->addRelation('UsuarioRelatedByUserDeleted', 'Usuario', RelationMap::MANY_TO_ONE, array('user_deleted' => 'id', ), null, null);
    $this->addRelation('Materia', 'Materia', RelationMap::ONE_TO_MANY, array('id' => 'carrera_id', ), null, null);
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
			'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
		);
	} // getBehaviors()

} // CarreraTableMap
