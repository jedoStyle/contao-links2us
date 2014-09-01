<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Jedo-links2us
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'jedoStyle\LinksToUs',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'jedoStyle\LinksToUs\ContentLinksToUs' => 'system/modules/jedo-links2us/elements/ContentLinksToUs.php',

	//Modules
	'jedoStyle\LinksToUs\ModuleLinksToUs' => 'system/modules/jedo-links2us/modules/ModuleLinksToUs.php',

	//Classes
	'jedoStyle\LinksToUs\LinksToUs' => 'system/modules/jedo-links2us/classes/LinksToUs.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_links2us' 	=> 'system/modules/jedo-links2us/templates',
	'ce_links2us'	=> 'system/modules/jedo-links2us/templates',
	'links2us_banner'	=> 'system/modules/jedo-links2us/templates',
	'links2us_textbanner' => 'system/modules/jedo-links2us/templates',
));
