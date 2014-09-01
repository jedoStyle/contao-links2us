<?php
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @copyright 	jedoStyle 2012 - 2014
 * @author      	jedoStyle <http://jedo-style.de>
 * @package    	jedo Links2Us
 * @version     	3.0.0
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['jedolinks2us'] = '{type_legend},name,headline,type;{treaser_legend},l2u_teaser;{folder_legend},l2u_bdir;{config_legend:hide},l2u_color,l2u_backlink,l2u_bsize,l2u_bbyte,l2u_btext,l2u_zeroClip;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_bdir'] = array
(
	'label'       			=> &$GLOBALS['TL_LANG']['tl_module']['l2u_bdir'],
	'default'			=> 'tl_files/jedo-links2us',		
	'exclude'                 		=> true,
	'inputType'               		=> 'fileTree',
	'eval'                    		=> array('files'=>false, 'fieldType'=>'radio', 'tl_class'=>'clr','mandatory'=>true),
	'sql'			=> "binary(16) NULL"
);


$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_teaser'] = array
(
	'label'                   	=> &$GLOBALS['TL_LANG']['tl_module']['l2u_teaser'],
	'exclude'                 	=> true,
	'default'		=> $GLOBALS['TL_LANG']['MSC']['teasertext'],
	'inputType'               	=> 'textarea',
	'eval'                    	=> array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
	'sql'                     	=> "text NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_color'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_color'],
	'default'                 		=> 'light',
	'exclude'                 		=> true,
	'inputType'               		=> 'select',
	'options'                 		=> array('light','dark'),
	'reference'               		=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    		=> array('tl_class'=>'w50'),
	'sql'                     		=> "char(10) NOT NULL default ''" 
);

$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_btext'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_btext'],
	'default'                 		=> '1',
	'exclude'                 		=> true,
	'inputType'               		=> 'select',
	'options'                 		=> array('0','1'),
	'reference'               		=> &$GLOBALS['TL_LANG']['MSC'],		
	'eval'                    		=> array('tl_class'=>'w50'),
	'sql'                     		=> "int(10) unsigned NOT NULL default '0'" 
);

$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_bsize'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_bsize'],
	'default'                 		=> '0',
	'exclude'                 		=> true,
	'inputType'               		=> 'select',
	'options'                 		=> array('0','1'),
	'reference'              		=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    		=> array('tl_class'=>'w50'),
	'sql'                     		=> "int(10) unsigned NOT NULL default '0'" 
);

$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_bbyte'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_bbyte'],
	'default'                 		=> '0',
	'exclude'                 		=> true,
	'inputType'               		=> 'select',
	'options'                 		=> array('0','1'),
	'reference'               		=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    		=> array('tl_class'=>'w50'),
	'sql'                     		=> "int(10) unsigned NOT NULL default '0'" 
);


$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_btext'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_btext'],
	'default'                 		=> '1',
	'exclude'                 		=> true,
	'inputType'               		=> 'select',
	'options'                 		=> array('0','1'),
	'reference'               		=> &$GLOBALS['TL_LANG']['MSC'],		
	'eval'                    		=> array('tl_class'=>'w50'),
	'sql'                     		=> "int(10) unsigned NOT NULL default '0'" 
);

$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_backlink'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_backlink'],
	'default'                 		=> '1',
	'exclude'                 		=> true,
	'inputType'               		=> 'select',
	'options'                 		=> array('0','1'),
	'reference'               		=> &$GLOBALS['TL_LANG']['MSC'],		
	'eval'                    		=> array('tl_class'=>'w50'),
	'sql'                     		=> "int(10) unsigned NOT NULL default '0'" 
);
$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_zeroClip'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_zeroclip'],
	'default'                 		=> '1',
	'exclude'                 		=> true,
	'inputType'               		=> 'select',
	'options'                 		=> array('0','1'),
	'reference'               		=> &$GLOBALS['TL_LANG']['MSC'],		
	'eval'                    		=> array('tl_class'=>'w50'),
	'sql'                     		=> "int(10) unsigned NOT NULL default '0'" 
);