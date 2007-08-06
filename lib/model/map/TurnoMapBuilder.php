<?php



class TurnoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TurnoMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('alba');

		$tMap = $this->dbMap->addTable('turno');
		$tMap->setPhpName('Turno');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('FK_CICLOLECTIVO_ID', 'FkCiclolectivoId', 'int', CreoleTypes::INTEGER, 'ciclolectivo', 'ID', true, 11);

		$tMap->addColumn('HORA_INICIO', 'HoraInicio', 'int', CreoleTypes::TIME, true, null);

		$tMap->addColumn('HORA_FIN', 'HoraFin', 'int', CreoleTypes::TIME, true, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::VARCHAR, true, 255);

	} 
} 