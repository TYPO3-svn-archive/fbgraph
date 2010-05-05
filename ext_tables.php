<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Profile', 'Facebook Profile');
Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Feed', 'Facebook Feed');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Basic Configuration');
?>
