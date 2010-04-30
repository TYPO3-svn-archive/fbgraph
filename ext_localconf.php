<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Generates the needed ext_autoload.php file
//$extutil = new Tx_Extbase_Utility_Extension;
//$extutil->createAutoloadRegistryForExtension($_EXTKEY, t3lib_extMgm::extPath($_EXTKEY));

// Configure Facebook Profile Plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(	 
		'Profile' => 'index'
		),
	array(
		)
	);

// Configure Facebook Feed Plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi2',
	array(	 
		'Feed' => 'index',
		),
	array(
		)
	);

?>