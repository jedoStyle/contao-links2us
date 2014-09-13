<?php
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @copyright 	jedoStyle 2011 - 2014
 * @author      	jedoStyle <http://jedo-style.de>
 * @package    	jedo Links2Us
 * @version     	3.0.0
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */

namespace jedoStyle\LinksToUs;


class LinksToUs extends \Frontend
{

	public function addLinksToTemplate(\FrontendTemplate $objTemplate, \stdClass $objConfig, $intParent)
	{

		$objTemplate->LinksToUs = array(); 
		$objEnvironment = \Environment::getInstance();

		$folder 		= \FilesModel::findByPk($objConfig->bannerFolder);
		$bannerFolder	= TL_ROOT."/".$folder->path;

		$handle        	= opendir($bannerFolder);

            		while ($file = readdir($handle)) {
                			$filelist[] = $file;
            		}

		asort($filelist);

		$count 	= 0;

		if ($objConfig->template == '')
		{
			$objConfig->template = 'links2us_banner';
		}
		$objEntry = new \FrontendTemplate($objConfig->template);


            		while (list ($a, $file) = each ($filelist)) 
		{

			if ( (exif_imagetype( $bannerFolder."/".$file ) == IMAGETYPE_GIF) ||  (exif_imagetype( $bannerFolder."/".$file ) == IMAGETYPE_JPEG) ||  (exif_imagetype( $bannerFolder."/".$file ) == IMAGETYPE_PNG) ) 
			{
				if ($objConfig->bannerSize)
				{
					$dimension 		= getimagesize ( $bannerFolder."/".$file );
					$dimensionXL	= $GLOBALS['TL_LANG']['MSC']['size'].$dimension[0]."x".$dimension[1];
					$bannerInfo 		= $dimensionXL;
				}
				if ($objConfig->bannerByte)
				{
                  		 		$filesize 	= filesize ( $bannerFolder."/".$file );
					$filesize	= number_format( $filesize / 1024, 2);
                    			$filesizeXL 	= $GLOBALS['TL_LANG']['MSC']['bytes'].$filesize."kb";
					$bannerInfo	= $filesizeXL;
				}

				if ($objConfig->bannerSize && $objConfig->bannerByte)
				{
					$bannerInfo	= $dimensionXL." ( ".$filesize. "kb ) ";
				}

				$objEntry->bannerSRC 	= $objEnvironment->base .$folder->path."/".$file;
				$objEntry->bCount		= $count;
				$objEntry->toClipboard	= $objConfig->toClipboard;
				$objEntry->bannerInfo	= $bannerInfo;

				$arrLinkBanners[] = $objEntry->parse();
				++$count;

			}

		}
		$objTemplate->backLink		= $objConfig->backLink;
		$objTemplate->LinkBanners 	= $arrLinkBanners;
		$objTemplate->color	 	= ' '.$objConfig->modColor;
		$objTemplate->TeaserText	= $objConfig->TeaserText;
		$objTemplate->displayTextLink 	= $objConfig->displayTextLink;
		$objTemplate->CopytoClip	= $objConfig->toClipboard;
		$objTemplate->backInfo		= '<p class="backlink">Links2Us by <a href="http://jedo-style.de">jedo Style</a></p>';
		
	}
}
