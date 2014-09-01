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
 * Run in a custom namespace, so the class can be replaced
 */

namespace jedoStyle\LinksToUs;

class ContentLinksToUs extends \ContentElement
{

	protected $strTemplate = 'ce_links2us';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### LINKS 2 US BY JEDOSTYLE ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->l2u_teaser;
			$objTemplate->href = 'contao/main.php?do=article&table=tl_content&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}
		return parent::generate();
	}

	protected function compile()
	{

		$this->import('LinksToUs');
		$objConfig = new \stdClass();

		$objConfig->bannerFolder 	= $this->l2u_bdir;
		$objConfig->bannerSize 		= $this->l2u_bsize;
		$objConfig->bannerByte 		= $this->l2u_bbyte;
		$objConfig->toClipboard 		= $this->l2u_zeroClip;
		$objConfig->modColor 		= $this->l2u_color;
		$objConfig->displayTextLink 	= $this->l2u_btext;
		$objConfig->TeaserText 		= $this->l2u_teaser;
		$objConfig->backLink 		= $this->l2u_backlink;

		$this->LinksToUs->addLinksToTemplate($this->Template, $objConfig, $this->id);

	}

}

