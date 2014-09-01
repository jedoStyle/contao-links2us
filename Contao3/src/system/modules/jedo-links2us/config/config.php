<?php
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 *
 * @copyright  	jedoStyle 2012 - 2014
 * @author     	jedoStyle <http://jensdoberenz.de>
 * @package    	jedoLinksToUs
 * @version    	3.0.0
 */


// Content Elements
// FrontEnd Module
if (!is_array($GLOBALS['TL_CTE']['jedoextensions']))
{
	array_insert($GLOBALS['TL_CTE'], 999, array('jedoextensions' => array()));
}
$GLOBALS['TL_CTE']['jedoextensions']['jedolinks2us'] = 'ContentLinksToUs';


// FrontEnd Module
if (!is_array($GLOBALS['FE_MOD']['jedoextensions']))
{
	array_insert($GLOBALS['FE_MOD'], 4, array('jedoextensions' => array()));
}
$GLOBALS['FE_MOD']['jedoextensions']['jedolinks2us'] = 'ModuleLinksToUs';



