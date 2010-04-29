<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(	 
		'Profile' => 'index'
		),
	array(
		'Profile' => 'index'
		)
	);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi2',
	array(	 
		'Feed' => 'index',
		),
	array(
		'Feed' => 'index'
		)
	);

?>