<?php


/**
 * This class defines the structure of the 'usuario' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Wed Sep 19 19:40:19 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class UsuarioTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.UsuarioTableMap';

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
		$this->setName('usuario');
		$this->setPhpName('Usuario');
		$this->setClassname('Usuario');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('AlumnoRelatedByUserCreated', 'Alumno', RelationMap::ONE_TO_MANY, array('id' => 'user_created', ), null, null);
    $this->addRelation('AlumnoRelatedByUserUpdated', 'Alumno', RelationMap::ONE_TO_MANY, array('id' => 'user_updated', ), null, null);
    $this->addRelation('AlumnoRelatedByUserDeleted', 'Alumno', RelationMap::ONE_TO_MANY, array('id' => 'user_deleted', ), null, null);
    $this->addRelation('CarreraRelatedByUserCreated', 'Carrera', RelationMap::ONE_TO_MANY, array('id' => 'user_created', ), null, null);
    $this->addRelation('CarreraRelatedByUserUpdated', 'Carrera', RelationMap::ONE_TO_MANY, array('id' => 'user_updated', ), null, null);
    $this->addRelation('CarreraRelatedByUserDeleted', 'Carrera', RelationMap::ONE_TO_MANY, array('id' => 'user_deleted', ), null, null);
    $this->addRelation('DatoAcademicoRelatedByUserCreated', 'DatoAcademico', RelationMap::ONE_TO_MANY, array('id' => 'user_created', ), null, null);
    $this->addRelation('DatoAcademicoRelatedByUserUpdated', 'DatoAcademico', RelationMap::ONE_TO_MANY, array('id' => 'user_updated', ), null, null);
    $this->addRelation('DatoAcademicoRelatedByUserDeleted', 'DatoAcademico', RelationMap::ONE_TO_MANY, array('id' => 'user_deleted', ), null, null);
    $this->addRelation('DocenteRelatedByUserCreated', 'Docente', RelationMap::ONE_TO_MANY, array('id' => 'user_created', ), null, null);
    $this->addRelation('DocenteRelatedByUserUpdated', 'Docente', RelationMap::ONE_TO_MANY, array('id' => 'user_updated', ), null, null);
    $this->addRelation('DocenteRelatedByUserDeleted', 'Docente', RelationMap::ONE_TO_MANY, array('id' => 'user_deleted', ), null, null);
    $this->addRelation('DomicilioRelatedByUserCreated', 'Domicilio', RelationMap::ONE_TO_MANY, array('id' => 'user_created', ), null, null);
    $this->addRelation('DomicilioRelatedByUserUpdated', 'Domicilio', RelationMap::ONE_TO_MANY, array('id' => 'user_updated', ), null, null);
    $this->addRelation('DomicilioRelatedByUserDeleted', 'Domicilio', RelationMap::ONE_TO_MANY, array('id' => 'user_deleted', ), null, null);
    $this->addRelation('EmpleoRelatedByUserCreated', 'Empleo', RelationMap::ONE_TO_MANY, array('id' => 'user_created', ), null, null);
    $this->addRelation('EmpleoRelatedByUserUpdated', 'Empleo', RelationMap::ONE_TO_MANY, array('id' => 'user_updated', ), null, null);
    $this->addRelation('EmpleoRelatedByUserDeleted', 'Empleo', RelationMap::ONE_TO_MANY, array('id' => 'user_deleted', ), null, null);
    $this->addRelation('PersonaRelatedByUserCreated', 'Persona', RelationMap::ONE_TO_MANY, array('id' => 'user_created', ), null, null);
    $this->addRelation('PersonaRelatedByUserUpdated', 'Persona', RelationMap::ONE_TO_MANY, array('id' => 'user_updated', ), null, null);
    $this->addRelation('PersonaRelatedByUserDeleted', 'Persona', RelationMap::ONE_TO_MANY, array('id' => 'user_deleted', ), null, null);
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

} // UsuarioTableMap
