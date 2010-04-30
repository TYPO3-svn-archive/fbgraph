<?php

########################################################################
# Extension Manager/Repository config file for ext "fbgraph".
#
# Auto generated 29-04-2010 21:37
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Facebook Graph API',
	'description' => 'Some usefull facebook Graph API functions.',
	'category' => 'plugin',
	'author' => 'Sascha Korth',
	'author_company' => 'brotherskorth.com',
	'author_email' => 'sascha@brotherskorth.com',
	'shy' => '',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_fbgraph/',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.3.0-4.3.99',
			'extbase' => '1.0.2-0.0.0',
			'fluid' => '1.0.2-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
	'suggests' => array(
	),
);

?>