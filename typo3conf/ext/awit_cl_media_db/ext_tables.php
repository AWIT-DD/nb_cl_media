<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Clmedialist',
	'CL Media List'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Clmediasearch',
	'CL Media Search'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Clmediapreview',
	'CL Media Preview'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'CL Media DB');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_awitclmediadb_domain_model_take', 'EXT:awit_cl_media_db/Resources/Private/Language/locallang_csh_tx_awitclmediadb_domain_model_take.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_awitclmediadb_domain_model_take');
$GLOBALS['TCA']['tx_awitclmediadb_domain_model_take'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take',
		'label' => 'start_time_tape',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'start_time_tape,end_time_tape,endurance,description,operator,operator_text,record_date_time,codec_master,codec_mid,pic_size_master,pic_size_mid,pic_size_small,file_size_master,file_size_mid,file_size_small,file_name,codec_small,tape,location,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Take.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_awitclmediadb_domain_model_take.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_awitclmediadb_domain_model_tape', 'EXT:awit_cl_media_db/Resources/Private/Language/locallang_csh_tx_awitclmediadb_domain_model_tape.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_awitclmediadb_domain_model_tape');
$GLOBALS['TCA']['tx_awitclmediadb_domain_model_tape'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape',
		'label' => 'no_c_l',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'no_c_l,no_list,no_zep,last_editor,edit_time,digit_time,title_c_l,title_zep,description,description_zep,date_c_l,date_zep,date_on,digit,phys_place,phys_place_notice,manufact,nom_time,type,ratio,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Tape.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_awitclmediadb_domain_model_tape.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_awitclmediadb_domain_model_location', 'EXT:awit_cl_media_db/Resources/Private/Language/locallang_csh_tx_awitclmediadb_domain_model_location.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_awitclmediadb_domain_model_location');
$GLOBALS['TCA']['tx_awitclmediadb_domain_model_location'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_location',
		'label' => 'longitude',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'longitude,latitude,altitude,description,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Location.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_awitclmediadb_domain_model_location.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_awitclmediadb_domain_model_take'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_awitclmediadb_domain_model_tape'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_awitclmediadb_domain_model_location'
);
