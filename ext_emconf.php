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
	'_md5_values_when_last_written' => 'a:21:{s:32:"class.tx_fbgraph_facebookSDK.php";s:4:"5b50";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"2594";s:14:"ext_tables.php";s:4:"3588";s:37:"Classes/Controller/FeedController.php";s:4:"5567";s:40:"Classes/Controller/ProfileController.php";s:4:"6ea6";s:32:"Classes/Domain/Model/Comment.php";s:4:"403d";s:33:"Classes/Domain/Model/Facebook.php";s:4:"fbb3";s:29:"Classes/Domain/Model/Feed.php";s:4:"849c";s:34:"Classes/Domain/Model/FeedEntry.php";s:4:"5f69";s:32:"Classes/Domain/Model/Profile.php";s:4:"1f2c";s:38:"Configuration/TypoScript/constants.txt";s:4:"1225";s:34:"Configuration/TypoScript/setup.txt";s:4:"bade";s:38:"Resources/Private/Layouts/default.html";s:4:"11d2";s:43:"Resources/Private/Templates/Feed/index.html";s:4:"d68f";s:46:"Resources/Private/Templates/Profile/index.html";s:4:"b07f";s:64:"Resources/Public/Icons/icon_tx_blogexample_domain_model_blog.gif";s:4:"50a3";s:67:"Resources/Public/Icons/icon_tx_blogexample_domain_model_comment.gif";s:4:"50a3";s:66:"Resources/Public/Icons/icon_tx_blogexample_domain_model_person.gif";s:4:"50a3";s:64:"Resources/Public/Icons/icon_tx_blogexample_domain_model_post.gif";s:4:"50a3";s:63:"Resources/Public/Icons/icon_tx_blogexample_domain_model_tag.gif";s:4:"50a3";}',
	'suggests' => array(
	),
);

?>