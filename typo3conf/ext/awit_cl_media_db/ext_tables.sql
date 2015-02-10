#
# Table structure for table 'tx_awitclmediadb_domain_model_take'
#
CREATE TABLE tx_awitclmediadb_domain_model_take (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	start_time_tape int(11) DEFAULT '0' NOT NULL,
	end_time_tape int(11) DEFAULT '0' NOT NULL,
	endurance int(11) DEFAULT '0' NOT NULL,
	description text NOT NULL,
	operator varchar(255) DEFAULT '' NOT NULL,
	operator_text text NOT NULL,
	record_date_time int(11) DEFAULT '0' NOT NULL,
	codec_master varchar(255) DEFAULT '' NOT NULL,
	codec_mid varchar(255) DEFAULT '' NOT NULL,
	pic_size_master varchar(255) DEFAULT '' NOT NULL,
	pic_size_mid varchar(255) DEFAULT '' NOT NULL,
	pic_size_small varchar(255) DEFAULT '' NOT NULL,
	file_size_master double(11,2) DEFAULT '0.00' NOT NULL,
	file_size_mid double(11,2) DEFAULT '0.00' NOT NULL,
	file_size_small double(11,2) DEFAULT '0.00' NOT NULL,
	file_name varchar(255) DEFAULT '' NOT NULL,
	codec_small varchar(255) DEFAULT '' NOT NULL,
	tape int(11) unsigned DEFAULT '0' NOT NULL,
	location int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_awitclmediadb_domain_model_tape'
#
CREATE TABLE tx_awitclmediadb_domain_model_tape (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	no_c_l text NOT NULL,
	no_list text NOT NULL,
	no_zep text NOT NULL,
	last_editor text NOT NULL,
	edit_time int(11) DEFAULT '0' NOT NULL,
	digit_time int(11) DEFAULT '0' NOT NULL,
	title_c_l text NOT NULL,
	title_zep text NOT NULL,
	description text NOT NULL,
	description_zep text NOT NULL,
	date_c_l int(11) DEFAULT '0' NOT NULL,
	date_zep int(11) DEFAULT '0' NOT NULL,
	date_on int(11) DEFAULT '0' NOT NULL,
	digit tinyint(1) unsigned DEFAULT '0' NOT NULL,
	phys_place text NOT NULL,
	phys_place_notice text NOT NULL,
	manufact text NOT NULL,
	nom_time double(11,2) DEFAULT '0.00' NOT NULL,
	type text NOT NULL,
	ratio text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_awitclmediadb_domain_model_location'
#
CREATE TABLE tx_awitclmediadb_domain_model_location (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	take int(11) unsigned DEFAULT '0' NOT NULL,

	longitude double(11,2) DEFAULT '0.00' NOT NULL,
	latitude double(11,2) DEFAULT '0.00' NOT NULL,
	altitude double(11,2) DEFAULT '0.00' NOT NULL,
	description text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_awitclmediadb_domain_model_location'
#
CREATE TABLE tx_awitclmediadb_domain_model_location (

	take  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_awitclmediadb_domain_model_take'
#
CREATE TABLE tx_awitclmediadb_domain_model_take (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_awitclmediadb_take_tape_mm'
#
CREATE TABLE tx_awitclmediadb_take_tape_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_awitclmediadb_domain_model_tape'
#
CREATE TABLE tx_awitclmediadb_domain_model_tape (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_awitclmediadb_domain_model_location'
#
CREATE TABLE tx_awitclmediadb_domain_model_location (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);
