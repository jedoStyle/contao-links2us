-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- --------------------------------------------------------

-- 
-- Table `btable`
-- 

CREATE TABLE `tl_module` (
	`l2u_bdir` varchar(255) NOT NULL default '',
	`l2u_bsize` varchar(32) NOT NULL default '',
	`l2u_bbyte` varchar(32) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
