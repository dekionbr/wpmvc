<?php
use core\Dbmap\DBlueprint;
use core\Dbmap\DataTable;

DataTable::run()->createTable('testeDbmap', function(DBlueprint $table) {
        $table->int('id', 11)->increments()->primaryKey();
        
        return $table;
});