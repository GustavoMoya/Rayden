<?php


/**
 * This class defines the structure of the 'dato_academico' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Tue Oct 16 23:46:46 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class DatoAcademicoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.DatoAcademicoTableMap';

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
		$this->setName('dato_academico');
		$this->setPhpName('DatoAcademico');
		$this->setClassname('DatoAcademico');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('PERSONA_ID', 'PersonaId', 'INTEGER', 'persona', 'ID', true, null, null);
		$this->addForeignKey('TIPO_TITULO_ID', 'TipoTituloId', 'INTEGER', 'tipo_titulo', 'ID', true, null, null);
		$this->addColumn('TITULO_OBTENIDO', 'TituloObtenido', 'VARCHAR', true, 200, null);
		$this->addColumn('ESTABLECIMIENTO', 'Establecimiento', 'VARCHAR', true, 200, null);
		$this->addColumn('ANIO_TITULO', 'AnioTitulo', 'INTEGER', true, 4, null);
		$this->addColumn('JURISDICCION', 'Jurisdiccion', 'VARCHAR', false, 100, null);
		$this->addForeignKey('TITULO_NACIONALIDAD_ID', 'TituloNacionalidadId', 'INTEGER', 'nacionalidad', 'ID', true, null, null);
		$this->addColumn('ESTATAL', 'Estatal', 'BOOLEAN', true, null, true);
		$this->addColumn('VISADO', 'Visado', 'BOOLEAN', false, null, false);
		$this->addColumn('FECHA_VISADO', 'FechaVisado', 'DATE', false, null, null);
		$this->addColumn('OBSERVACIONES', 'Observaciones', 'LONGVARCHAR', false, null, null);
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
    $this->addRelation('TipoTitulo', 'TipoTitulo', RelationMap::MANY_TO_ONE, array('tipo_titulo_id' => 'id', ), null, null);
    $this->addRelation('Nacionalidad', 'Nacionalidad', RelationMap::MANY_TO_ONE, array('titulo_nacionalidad_id' => 'id', ), null, null);
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

} // DatoAcademicoTableMap
