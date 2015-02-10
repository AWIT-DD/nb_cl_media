<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_awitclmediadb_domain_model_tape'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_awitclmediadb_domain_model_tape']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, no_c_l, no_list, no_zep, last_editor, edit_time, digit_time, title_c_l, title_zep, description, description_zep, date_c_l, date_zep, date_on, digit, phys_place, phys_place_notice, manufact, nom_time, type, ratio',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, no_c_l, no_list, no_zep, last_editor, edit_time, digit_time, title_c_l, title_zep, description, description_zep, date_c_l, date_zep, date_on, digit, phys_place, phys_place_notice, manufact, nom_time, type, ratio, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_awitclmediadb_domain_model_tape',
				'foreign_table_where' => 'AND tx_awitclmediadb_domain_model_tape.pid=###CURRENT_PID### AND tx_awitclmediadb_domain_model_tape.sys_language_uid IN (-1,0)',
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

		'no_c_l' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.no_c_l',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			)
		),
		'no_list' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.no_list',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'no_zep' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.no_zep',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'last_editor' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.last_editor',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'edit_time' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.edit_time',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'digit_time' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.digit_time',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'title_c_l' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.title_c_l',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			)
		),
		'title_zep' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.title_zep',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'description_zep' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.description_zep',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'date_c_l' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.date_c_l',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'date_zep' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.date_zep',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'date_on' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.date_on',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'digit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.digit',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'phys_place' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.phys_place',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'phys_place_notice' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.phys_place_notice',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'manufact' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.manufact',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'nom_time' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.nom_time',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		'type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.type',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			)
		),
		'ratio' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:awit_cl_media_db/Resources/Private/Language/locallang_db.xlf:tx_awitclmediadb_domain_model_tape.ratio',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			)
		),
		
	),
);
