<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=mbatrek_v2',
	'emulatePrepare' => true,
	'username' => 'mbatrek_admin',
	'password' => 'mbatrek_admin',
	'charset' => 'utf8',
	
);
