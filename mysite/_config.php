<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'nivsuresh',
	'password' => 'CUlHE9YIK6wr',
	'database' => 'ftss3',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
