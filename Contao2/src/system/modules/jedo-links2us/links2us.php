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

class Links2Us extends Module
{

	protected $strTemplate = 'mod_links2us';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### LINKS TO US ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=modules&amp;act=edit&amp;id=' . $this->id;
			return $objTemplate->parse();
		}
		return parent::generate();
	}

	protected function compile()
	{
		$this->listAll();
	}

	protected function listAll()
	{
		$objEnvironment = Environment::getInstance();

		$l2u_output = '<div id="l2u-desc">'.$GLOBALS['TL_LANG']['MSC']['desc'].'</div>';

		            $bannerdir     = TL_ROOT."/".$this->l2u_bdir;

			$handle        = opendir($bannerdir);
            			while ($file = readdir($handle)) {
                			$filelist[] = $file;
            			}

		asort($filelist);
            		while (list ($a, $file) = each ($filelist)) {

		// http://php.net/manual/de/function.exif-imagetype.php
		if ( (exif_imagetype( $bannerdir."/".$file ) == IMAGETYPE_GIF) ||  (exif_imagetype( $bannerdir."/".$file ) == IMAGETYPE_JPEG) ||  (exif_imagetype( $bannerdir."/".$file ) == IMAGETYPE_PNG) ) {

		if ($this->l2u_bsize == yes) :
                		$info = getimagesize ( $bannerdir."/".$file );
		endif;
		if ($this->l2u_bbyte == yes) :
                    		$filesize = filesize ( $bannerdir."/".$file );
                    		$filesize = number_format( $filesize / 1024, 2);
		endif;

		$l2u_output .= '<div class="l2u-banner">';
		$l2u_output .= "\n";
		$l2u_output .= '<div><img class="l2u-image" alt="" src="'. $objEnvironment->base .$this->l2u_bdir."/".$file.'" style="border:0;" /></div>';
		$l2u_output .= "\n";

		if (($this->l2u_bbyte == yes) || ($this->l2u_bsize == yes)) :
		$l2u_output .= '<div class="l2u-info">';
		if ($this->l2u_bsize == yes) :
		$l2u_output .=  $GLOBALS['TL_LANG']['MSC']['size'].$info[0].$GLOBALS['TL_LANG']['MSC']['pixel']." x ".$info[1].$GLOBALS['TL_LANG']['MSC']['pixel']."<br />";
		endif;
		if ($this->l2u_bbyte == yes) :
		$l2u_output .=  $GLOBALS['TL_LANG']['MSC']['byte']." ca. ". $filesize ."Kbyte";
		endif;
		$l2u_output .= '</div>';
		$l2u_output .= "\n";
		endif;

		$l2u_output .= "<form action=\"none\"><div><textarea name=\"description\" rows=\"6\" cols=\"51\"><!-- START LINK -->\n";
		$l2u_output .= "<a href=\"". $objEnvironment->base ."\"><img alt=\"". $objEnvironment->base ."\" src=\"". $objEnvironment->base .$this->l2u_bdir."/".$file."\" style=\"border:0;\" /></a>\n";
		$l2u_output .= "<!-- END LINK --></textarea><br /><input name=\"click\" type=\"button\" value=\"". $GLOBALS['TL_LANG']['MSC']['selectcode'] ."\" onclick=\"javascript:this.form.description.focus(); this.form.description.select();\"/></div></form>\n";
		$l2u_output .= "</div>";
		}
	            }

		$l2u_output .= '<div class="l2u-banner">';
		$l2u_output .= '<div style="text-align: center">'.$GLOBALS['TL_LANG']['MSC']['textlink'].'<br /><br />';
		$l2u_output .= "<a href=\"". $objEnvironment->base ."\">". $GLOBALS['TL_LANG']['MSC']['go to'] ." ". $GLOBALS['TL_CONFIG']['websiteTitle'] ."</a></div><br />\n";
		$l2u_output .= "<form action=\"none\"><div><textarea name=\"description\" rows=\"4\" cols=\"51\"><!-- START LINK -->\n";
		$l2u_output .= "<a href=\"". $objEnvironment->base ."\">". $GLOBALS['TL_LANG']['MSC']['go to'] ." ". $GLOBALS['TL_CONFIG']['websiteTitle'] ."</a>\n";
		$l2u_output .= "<!-- END LINK --></textarea><br /><input name=\"click\" type=\"button\" value=\"". $GLOBALS['TL_LANG']['MSC']['selectcode'] ."\" onclick=\"javascript:this.form.description.focus(); this.form.description.select();\"/></div></form>\n";
		$l2u_output .= '</div>';


		$this->Template->l2ubanner = $l2u_output;

	}
}
?>
