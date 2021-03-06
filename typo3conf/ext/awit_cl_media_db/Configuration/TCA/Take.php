<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_awitclmediadb_domain_model_take'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_awitclmediadb_domain_model_take']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, start_time_tape, end_time_tape, endurance, description, operator, operator_text, record_date_time, codec_master, codec_mid, pic_size_master, pic_size_mid, pic_size_small, file_size_master, file_size_mid, file_size_small, file_name, codec_small, tape, location',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, start_time_tape, end_time_tape, endurance, description, operator, operator_text, record_date_time, codec_master, codec_mid, pic_size_master, pic_size_mid, pic_size_small, file_size_master, file_size_mid, file_size_small, file_name, codec_small, tape, location, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_awitclmediadb_domain_model_take',
				'foreign_table_where' => 'AND tx_awitclmediadb_domain_model_take.pid=###CURRENT_PID### AND tx_awitclmediadb_domain_model_take.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'start_time_tape' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.start_time_tape',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'end_time_tape' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.end_time_tape',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'endurance' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.endurance',
			'config' => array(
				'type' => 'input',
				'size' => 6,
				'eval' => 'timesec',
				'checkbox' => 1,
				'default' => time()
			)
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'operator' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.operator',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'operator_text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.operator_text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'record_date_time' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.record_date_time',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'codec_master' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.codec_master',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'codec_mid' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.codec_mid',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'pic_size_master' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.pic_size_master',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'pic_size_mid' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.pic_size_mid',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'pic_size_small' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.pic_size_small',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'file_size_master' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.file_size_master',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2,required'
			)
		),
		'file_size_mid' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.file_size_mid',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		'file_size_small' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.file_size_small',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		'file_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.file_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'codec_small' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.codec_small',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'tape' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.tape',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_awitclmediadb_domain_model_tape',
				'MM' => 'tx_awitclmediadb_take_tape_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_awitclmediadb_domain_model_tape',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'location' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_take.location',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_awitclmediadb_domain_model_location',
				'foreign_field' => 'take',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		
	),
);
