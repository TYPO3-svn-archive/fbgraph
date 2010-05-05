<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Could be used to Generate an ext_autoload.php file
//$extutil = new Tx_Extbase_Utility_Extension;
//$extutil->createAutoloadRegistryForExtension($_EXTKEY, t3lib_extMgm::extPath($_EXTKEY));

// Configure Facebook Profile Plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Profile',
	array(	 
		'Profile' => 'index'
		),
	array(
		)
	);

// Configure Facebook Feed Plugin
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Feed',
	array(	 
		'Feed' => 'index',
		),
	array(
		)
	);

?>