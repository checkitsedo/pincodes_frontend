#
# Table structure for table 'tx_pincodesfrontend_domain_model_pincode'
#
CREATE TABLE tx_pincodesfrontend_domain_model_pincode (
    
    pincode varchar(25) DEFAULT '' NOT NULL,
    active tinyint(4) unsigned DEFAULT 0 NOT NULL,
    pincodes_user int(11) unsigned DEFAULT '0' NOT NULL,

);
