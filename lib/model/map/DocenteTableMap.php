<?php


/**
 * This class defines the structure of the 'docente' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Tue Oct 16 23:46:47 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class DocenteTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.DocenteTableMap';

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
		$this->setName('docente');
		$this->setPhpName('Docente');
		$this->setClassname('Docente');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('LEGAJO', 'Legajo', 'INTEGER', true, null, null);
		$this->addColumn('ESTADO', 'Estado', 'INTEGER', true, 1, 0);
		$this->addForeignKey('PERSONA_ID', 'PersonaId', 'INTEGER', 'persona', 'ID', true, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('CREATED_BY_ID', 'CreatedById', 'INTEGER', 'sf_guard_user', 'ID', true, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('UPDATED_BY_ID', 'UpdatedById', 'INTEGER', 'sf_guard_user', 'ID', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('DELETED_BY_ID', 'DeletedById', 'INTEGER', 'sf_guard_user', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Persona', 'Persona', RelationMap::MANY_TO_ONE, array('persona_id' => 'id', ), null, null);
    $this->addRelation('sfGuardUserRelatedByCreatedById', 'sfGuardUser', RelationMap::MANY_TO_ONE, array('created_by_id' => 'id', ), null, null);
    $this->addRelation('sfGuardUserRelatedByUpdatedById', 'sfGuardUser', RelationMap::MANY_TO_ONE, array('updated_by_id' => 'id', ), null, null);
    $this->addRelation('sfGuardUserRelatedByDeletedById', 'sfGuardUser', RelationMap::MANY_TO_ONE, array('deleted_by_id' => 'id', ), null, null);
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

} // DocenteTableMap
