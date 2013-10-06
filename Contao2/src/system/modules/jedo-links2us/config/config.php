<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2009
 * @author     Leo Feyer 
 * @package    Memberlist 
 * @license    LGPL 
 * @filesource
 */


/**
 * Front end modules
 */

if (TL_MODE == 'FE')

{

	$GLOBALS['TL_CSS'][]  = 'system/modules/jedo-links2us/html/mod_links2us.css';

}

//$GLOBALS['FE_MOD']['user']['links2us'] = 'links2us';



if (!is_array($GLOBALS['FE_MOD']['jedoaddons']))
{
	array_insert($GLOBALS['FE_MOD'], 4, array('jedoaddons' => array()));
}

$GLOBALS['FE_MOD']['jedoaddons']['links2us'] = 'links2us';


?>