<?php


/**
 * This class adds structure of 'cliente' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Mon Sep 21 18:14:56 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ClienteMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ClienteMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(ClientePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ClientePeer::TABLE_NAME);
		$tMap->setPhpName('Cliente');
		$tMap->setClassname('Cliente');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('RAZON_SOCIAL', 'RazonSocial', 'VARCHAR', true, 255);

		$tMap->addForeignKey('TIPO_DOCUMENTO_ID', 'TipoDocumentoId', 'INTEGER', 'tipo_documento', 'ID', false, null);

		$tMap->addColumn('NRO_DOCUMENTO', 'NroDocumento', 'VARCHAR', true, 255);

		$tMap->addColumn('ACTIVO', 'Activo', 'BOOLEAN', true, null);

		$tMap->addColumn('DIRECCION', 'Direccion', 'VARCHAR', false, 255);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null);

	} // doBuild()

} // ClienteMapBuilder
