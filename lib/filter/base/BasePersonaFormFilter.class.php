<?php

/**
 * Persona filter form base class.
 *
 * @package    rayden
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePersonaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'            => new sfWidgetFormFilterInput(),
      'apellido'          => new sfWidgetFormFilterInput(),
      'tipo_documento_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoDocumento', 'add_empty' => true)),
      'nro_documento'     => new sfWidgetFormFilterInput(),
      'sexo_id'           => new sfWidgetFormPropelChoice(array('model' => 'TipoSexo', 'add_empty' => true)),
      'celular'           => new sfWidgetFormFilterInput(),
      'email'             => new sfWidgetFormFilterInput(),
      'nacionalidad_id'   => new sfWidgetFormPropelChoice(array('model' => 'Nacionalidad', 'add_empty' => true)),
      'estado_civil_id'   => new sfWidgetFormPropelChoice(array('model' => 'EstadoCivil', 'add_empty' => true)),
      'fecha_nacimiento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'lugar_nacimiento'  => new sfWidgetFormFilterInput(),
      'observaciones'     => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by_id'     => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_by_id'     => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'deleted_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_by_id'     => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'apellido'          => new sfValidatorPass(array('required' => false)),
      'tipo_documento_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoDocumento', 'column' => 'id')),
      'nro_documento'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sexo_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoSexo', 'column' => 'id')),
      'celular'           => new sfValidatorPass(array('required' => false)),
      'email'             => new sfValidatorPass(array('required' => false)),
      'nacionalidad_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Nacionalidad', 'column' => 'id')),
      'estado_civil_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'EstadoCivil', 'column' => 'id')),
      'fecha_nacimiento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'lugar_nacimiento'  => new sfValidatorPass(array('required' => false)),
      'observaciones'     => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_by_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'deleted_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_by_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'nombre'            => 'Text',
      'apellido'          => 'Text',
      'tipo_documento_id' => 'ForeignKey',
      'nro_documento'     => 'Number',
      'sexo_id'           => 'ForeignKey',
      'celular'           => 'Text',
      'email'             => 'Text',
      'nacionalidad_id'   => 'ForeignKey',
      'estado_civil_id'   => 'ForeignKey',
      'fecha_nacimiento'  => 'Date',
      'lugar_nacimiento'  => 'Text',
      'observaciones'     => 'Text',
      'created_at'        => 'Date',
      'created_by_id'     => 'ForeignKey',
      'updated_at'        => 'Date',
      'updated_by_id'     => 'ForeignKey',
      'deleted_at'        => 'Date',
      'deleted_by_id'     => 'ForeignKey',
    );
  }
}
