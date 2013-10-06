<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  jedo-Webstudio 2011 
 * @author     Jens Doberenz <info@jedo-webstudio.com> 
 * @package    jedo Links2Us 
 * @license    GNU/LGPL 
 * @filesource
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['links2us'] = '{title_legend},name,headline,type;{config_legend},l2u_bsize,l2u_bbyte,l2u_bdir;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_bdir'] = array
(
	'label'       => &$GLOBALS['TL_LANG']['tl_module']['l2u_bdir'],
	'default'	=> 'tl_files/jedo-links2us',		
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('files'=>false, 'fieldType'=>'radio', 'tl_class'=>'clr')
);


$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_bsize'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_bsize'],
	'default'                 		=> 'no',
	'exclude'                 		=> true,
	'inputType'               	=> 'select',
	'options'                 		=> array('no','yes'),
	'reference'              		=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    		=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['l2u_bbyte'] = array
(
	'label'                   		=> &$GLOBALS['TL_LANG']['tl_module']['l2u_bbyte'],
	'default'                 		=> 'no',
	'exclude'                 		=> true,
	'inputType'               	=> 'select',
	'options'                 		=> array('no','yes'),
	'reference'               		=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    		=> array('tl_class'=>'w50')
);


?>