<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Sascha Korth <sascha@brotherskorth.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * The feed controller for the fbgraph package
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_Fbgraph_Controller_FeedController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * List action for this controller. Displays a facebook feed.
	 *
	 * @return string
	 */
	public function indexAction() {
		
		// Check if api_profile is set in ts
		if(!$this->settings['api_profile']){
			throw new Exception('You have to set the api_profile in your Typoscript');
		}
		
		// Needs to be set in ts if connection problems appear
		if( $this->settings['https_connection'] == '0' ) {
			Tx_Fbgraph_Domain_Model_Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYPEER] = false;
		}
		
		
		$feed = new Tx_Fbgraph_Domain_Model_Feed;
		$feed->grab($this->settings['api_profile']);
		$this->view->assign('feed', $feed);
	}
	
}

?>
