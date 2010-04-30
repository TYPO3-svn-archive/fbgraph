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
 * Facebook PHP SDK
 * http://github.com/facebook/php-sdk/
 * 
 * Also check out the official Facebook Graph API docs
 * http://developers.facebook.com/docs/api
 * 
 * Please notice the Apache License Version 2.0
 * for the original Facebook SDK Classes.
 * 
 * Example for using this class:
 * 
 * $facebook = new Tx_Fbgraph_Domain_Model_Facebook;
 * $multiArray = $facebook->api('/typo3');
 * or for example
 * $multiArray = $facebook->api('/typo3/feed');
 * 
 * Exceptions are thrown by FacebookApiException class within
 * class.tx_fbgraph_facebookSDK.php
 *
 * @package Fbgraph
 * @subpackage Domain
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.apache.org/licenses/LICENSE-2.0.html Apache Licence, Version 2.0
 * @scope prototype
 * @entity
 */

class Tx_Fbgraph_Domain_Model_Facebook extends tx_fbgraph_facebookSDK {

   /**
   * Makes an HTTP request. This method can be overriden by subclasses if
   * developers want to do fancier things or use something other than curl to
   * make the request.
   *
   * @param String $url the URL to make the request to
   * @param Array $params the parameters to use for the POST body
   * @param CurlHandler $ch optional initialized curl handle
   * @return String the response text
   */
  protected function makeRequest($url, $params, $ch=null) {
    if (!$ch) {
      $ch = curl_init();
    }
    $opts = self::$CURL_OPTS;
    $opts[CURLOPT_POSTFIELDS] = http_build_query($params, null, '&');
    $opts[CURLOPT_URL] = $url;
    curl_setopt_array($ch, $opts);
    $result = curl_exec($ch);
    curl_close($ch);
	return $result;
  }
   
}
?>