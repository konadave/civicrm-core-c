<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/StateProvince.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:0f81a38af5bb0f779c36fd20d889767b)
 */

/**
 * Database access object for the StateProvince entity.
 */
class CRM_Core_DAO_StateProvince extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_state_province';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'name';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * State/Province ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Name of State/Province
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * 2-4 Character Abbreviation of State/Province
   *
   * @var string|null
   *   (SQL type: varchar(4))
   *   Note that values will be retrieved from the database as a string.
   */
  public $abbreviation;

  /**
   * ID of Country that State/Province belong
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $country_id;

  /**
   * Is this StateProvince active?
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_active;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_state_province';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('States/Provinces') : ts('State/Province');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('State ID'),
          'description' => ts('State/Province ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_state_province.id',
          'table_name' => 'civicrm_state_province',
          'entity' => 'StateProvince',
          'bao' => 'CRM_Core_DAO_StateProvince',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.1',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('State'),
          'description' => ts('Name of State/Province'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => TRUE,
            'export' => TRUE,
            'duplicate_matching' => TRUE,
            'token' => FALSE,
          ],
          'import' => TRUE,
          'where' => 'civicrm_state_province.name',
          'headerPattern' => '/state|prov(ince)?/i',
          'dataPattern' => '/[A-Z]{2}/',
          'export' => TRUE,
          'table_name' => 'civicrm_state_province',
          'entity' => 'StateProvince',
          'bao' => 'CRM_Core_DAO_StateProvince',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'abbreviation' => [
          'name' => 'abbreviation',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('State Abbreviation'),
          'description' => ts('2-4 Character Abbreviation of State/Province'),
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_state_province.abbreviation',
          'table_name' => 'civicrm_state_province',
          'entity' => 'StateProvince',
          'bao' => 'CRM_Core_DAO_StateProvince',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'country_id' => [
          'name' => 'country_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Country ID'),
          'description' => ts('ID of Country that State/Province belong'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_state_province.country_id',
          'table_name' => 'civicrm_state_province',
          'entity' => 'StateProvince',
          'bao' => 'CRM_Core_DAO_StateProvince',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Country',
          'FKColumnName' => 'id',
          'html' => [
            'label' => ts("Country"),
          ],
          'add' => '1.1',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('StateProvince Is Active'),
          'description' => ts('Is this StateProvince active?'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_state_province.is_active',
          'default' => '1',
          'table_name' => 'civicrm_state_province',
          'entity' => 'StateProvince',
          'bao' => 'CRM_Core_DAO_StateProvince',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
            'label' => ts("Enabled"),
          ],
          'add' => '5.35',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'state_province', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'state_province', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_name_country_id' => [
        'name' => 'UI_name_country_id',
        'field' => [
          0 => 'name',
          1 => 'country_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_state_province::1::name::country_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
