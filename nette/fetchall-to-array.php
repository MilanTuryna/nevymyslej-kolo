<?php

/*
 * related:
 * https://forum.nette.org/cs/32296-database-selection-na-php-array
 */
// Get $this->explorer from dependency injection
// When you want associative array like [id => row] just remove array_values()

$allRows = $this->explorer->table("tableName")->fetchAll();
$array = array_values(array_map(function ($activeRow) {
    return $activeRow->getIterator();
}, $allRows));