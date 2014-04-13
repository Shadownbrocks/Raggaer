<?php

/**
 * Raggaer - Simple PHP Framework
 *
 * @package  Raggaer
 * @author   Alvaro Carvajal <nakotoffana@gmail.com>
 */

// Start Raggaer -> Autoloader

require_once __DIR__.'/bootstrap/autoload.php';

// Start Raggaer -> INIT -> Load Route and map to Controller

require_once __DIR__.'/bootstrap/start.php';

$app = new App();
