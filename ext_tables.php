<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Pi1', 'Facebook Profile');
Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Pi2', 'Facebook Feed');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Basic Configuration');
?>
