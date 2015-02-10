<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'AWIT.' . $_EXTKEY,
	'Clmedialist',
	array(
		'Take' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Take' => 'list',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'AWIT.' . $_EXTKEY,
	'Clmediasearch',
	array(
		'Take' => 'search',
		
	),
	// non-cacheable actions
	array(
		'Take' => 'search',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'AWIT.' . $_EXTKEY,
	'Clmediapreview',
	array(
		'Take' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Take' => 'show',
		
	)
);
