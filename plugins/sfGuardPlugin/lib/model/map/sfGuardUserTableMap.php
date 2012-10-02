<?php


/**
 * This class defines the structure of the 'sf_guard_user' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Mon Oct  1 23:37:19 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.sfGuardPlugin.lib.model.map
 */
class sfGuardUserTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfGuardPlugin.lib.model.map.sfGuardUserTableMap';

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
		$this->setName('sf_guard_user');
		$this->setPhpName('sfGuardUser');
		$this->setClassname('sfGuardUser');
		$this->setPackage('plugins.sfGuardPlugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('USERNAME', 'Username', 'VARCHAR', true, 128, null);
		$this->addColumn('ALGORITHM', 'Algorithm', 'VARCHAR', true, 128, 'sha1');
		$this->addColumn('SALT', 'Salt', 'VARCHAR', true, 128, null);
		$this->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 128, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('LAST_LOGIN', 'LastLogin', 'TIMESTAMP', false, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'BOOLEAN', true, null, true);
		$this->addColumn('IS_SUPER_ADMIN', 'IsSuperAdmin', 'BOOLEAN', true, null, false);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('sfGuardUserPermission', 'sfGuardUserPermission', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'CASCADE', null);
    $this->addRelation('sfGuardUserGroup', 'sfGuardUserGroup', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'CASCADE', null);
    $this->addRelation('sfGuardRememberKey', 'sfGuardRememberKey', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'CASCADE', null);
    $this->addRelation('AlumnoRelatedByCreatedById', 'Alumno', RelationMap::ONE_TO_MANY, array('id' => 'created_by_id', ), null, null);
    $this->addRelation('AlumnoRelatedByUpdatedById', 'Alumno', RelationMap::ONE_TO_MANY, array('id' => 'updated_by_id', ), null, null);
    $this->addRelation('AlumnoRelatedByDeletedById', 'Alumno', RelationMap::ONE_TO_MANY, array('id' => 'deleted_by_id', ), null, null);
    $this->addRelation('CarreraRelatedByCreatedById', 'Carrera', RelationMap::ONE_TO_MANY, array('id' => 'created_by_id', ), null, null);
    $this->addRelation('CarreraRelatedByUpdatedById', 'Carrera', RelationMap::ONE_TO_MANY, array('id' => 'updated_by_id', ), null, null);
    $this->addRelation('CarreraRelatedByDeletedById', 'Carrera', RelationMap::ONE_TO_MANY, array('id' => 'deleted_by_id', ), null, null);
    $this->addRelation('DatoAcademicoRelatedByCreatedById', 'DatoAcademico', RelationMap::ONE_TO_MANY, array('id' => 'created_by_id', ), null, null);
    $this->addRelation('DatoAcademicoRelatedByUpdatedById', 'DatoAcademico', RelationMap::ONE_TO_MANY, array('id' => 'updated_by_id', ), null, null);
    $this->addRelation('DatoAcademicoRelatedByDeletedById', 'DatoAcademico', RelationMap::ONE_TO_MANY, array('id' => 'deleted_by_id', ), null, null);
    $this->addRelation('DocenteRelatedByCreatedById', 'Docente', RelationMap::ONE_TO_MANY, array('id' => 'created_by_id', ), null, null);
    $this->addRelation('DocenteRelatedByUpdatedById', 'Docente', RelationMap::ONE_TO_MANY, array('id' => 'updated_by_id', ), null, null);
    $this->addRelation('DocenteRelatedByDeletedById', 'Docente', RelationMap::ONE_TO_MANY, array('id' => 'deleted_by_id', ), null, null);
    $this->addRelation('DomicilioRelatedByCreatedById', 'Domicilio', RelationMap::ONE_TO_MANY, array('id' => 'created_by_id', ), null, null);
    $this->addRelation('DomicilioRelatedByUpdatedById', 'Domicilio', RelationMap::ONE_TO_MANY, array('id' => 'updated_by_id', ), null, null);
    $this->addRelation('DomicilioRelatedByDeletedById', 'Domicilio', RelationMap::ONE_TO_MANY, array('id' => 'deleted_by_id', ), null, null);
    $this->addRelation('EmpleoRelatedByCreatedById', 'Empleo', RelationMap::ONE_TO_MANY, array('id' => 'created_by_id', ), null, null);
    $this->addRelation('EmpleoRelatedByUpdatedById', 'Empleo', RelationMap::ONE_TO_MANY, array('id' => 'updated_by_id', ), null, null);
    $this->addRelation('EmpleoRelatedByDeletedById', 'Empleo', RelationMap::ONE_TO_MANY, array('id' => 'deleted_by_id', ), null, null);
    $this->addRelation('PersonaRelatedByCreatedById', 'Persona', RelationMap::ONE_TO_MANY, array('id' => 'created_by_id', ), null, null);
    $this->addRelation('PersonaRelatedByUpdatedById', 'Persona', RelationMap::ONE_TO_MANY, array('id' => 'updated_by_id', ), null, null);
    $this->addRelation('PersonaRelatedByDeletedById', 'Persona', RelationMap::ONE_TO_MANY, array('id' => 'deleted_by_id', ), null, null);
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
			'symfony_timestampable' => array('create_column' => 'created_at', ),
		);
	} // getBehaviors()

} // sfGuardUserTableMap
