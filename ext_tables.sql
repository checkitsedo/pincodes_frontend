#
# Table structure for table 'tx_pincodesfrontend_domain_model_pincode'
#
CREATE TABLE tx_pincodesfrontend_domain_model_pincode (
    
    pincode varchar(25) DEFAULT '' NOT NULL,
    active tinyint(4) unsigned DEFAULT 0 NOT NULL,
    pincodes_user int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (

	pincodes int(11) unsigned DEFAULT '0' NOT NULL,
	tx_extbase_type varchar(255) DEFAULT '' NOT NULL
    
);

#
# Table structure for table 'tx_pincodesfrontend_pincode_user_mm'
#
CREATE TABLE tx_pincodesfrontend_pincode_user_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
