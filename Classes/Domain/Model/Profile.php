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
 * A Facebook Profile
 *
 * @package Fbgraph
 * @subpackage Domain
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Fbgraph_Domain_Model_Profile extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * @var string
	 */
	protected $id;
	
	/**
	 * @var string
	 */
	protected $name;
	
	/**
	 * @var string
	 */
	protected $picture;
	
	/**
	 * @var string
	 */
	protected $link;
	
	/**
	 * @var string
	 */
	protected $category;
	
	/**
	 * @var string
	 */
	protected $username;
	
	/**
	 * @var string
	 */
	protected $founded;
	
	/**
	 * @var string
	 */
	protected $companyOverview;
	
	/**
	 * @var string
	 */
	protected $mission;
	
	/**
	 * @var string
	 */
	protected $products;
	
	/**
	 * @var int
	 */
	protected $fanCount;
	
	/**
	 * Constructs a new Profile via API
	 * 
	 * @string Profile Name to build a new Profile
	 * @boolean If true we generate a new profile via Facebook API
	 * @return void
	 */
	public function __construct() {
	}
	
	/**
	 * Grabs data from Facebook and fills the profile
	 *
	 * @string Facebook User Name or ID. For Example: '/typo3'
	 * @return void
	 */
	public function grab($arg){
		
		$facebook = t3lib_div::makeInstance('Tx_Fbgraph_Domain_Model_Facebook');
		$rawData = $facebook->api($arg);
			
		$this->id = $rawData[id];
		$this->name = $rawData[name];
		$this->picture = $rawData[picture];
		$this->link = $rawData[link];
		$this->category = $rawData[category];
		$this->username = $rawData[username];
		$this->founded = $rawData[founded];
		$this->companyOverview = $rawData[company_overview];
		$this->mission = $rawData[mission];
		$this->products = $rawData[products];
		$this->fanCount = $rawData[fan_count];
		
	}
	
	/**
	 * Returns the Profile id
	 *
	 * @return string The Profile id
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Sets this profile id
	 *
	 * @param string $id Profile id
	 * @return void
	 */
	public function setId($id) {
		$this->id = $id;
	}
	
	/**
	 * Returns the Profile name
	 *
	 * @return string The Profile name
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Sets this profile name
	 *
	 * @param string $name Profile name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * Returns the Profile picture
	 *
	 * @return string The Profile picture
	 */
	public function getPicture() {
		return $this->picture;
	}
	
	/**
	 * Returns the Profile link
	 *
	 * @return string The Profile link
	 */
	public function getLink() {
		return $this->link;
	}
	
	/**
	 * Returns the Profile category
	 *
	 * @return string The Profile category
	 */
	public function getCategory() {
		return $this->category;
	}
	
	/**
	 * Sets this profile category
	 *
	 * @param string $category Profile category
	 * @return void
	 */
	public function setCategory($category) {
		$this->category = $category;
	}
	
	/**
	 * Returns the Profile username
	 *
	 * @return string The Profile username
	 */
	public function getUsername() {
		return $this->username;
	}
	
	/**
	 * Returns the Profile founded
	 *
	 * @return string The Profile founded
	 */
	public function getFounded() {
		return $this->founded;
	}
	
	/**
	 * Returns the Profile companyOverview
	 *
	 * @return string The Profile companyOverview
	 */
	public function getCompanyOverview() {
		return $this->companyOverview;
	}
	
	/**
	 * Returns the Profile mission
	 *
	 * @return string The Profile mission
	 */
	public function getMission() {
		return $this->mission;
	}
	
	/**
	 * Returns the Profile products
	 *
	 * @return string The Profile products
	 */
	public function getProducts() {
		return $this->products;
	}
	
	/**
	 * Returns the Profile fanCount
	 *
	 * @return int The Profile fanCount
	 */
	public function getFanCount() {
		return $this->fanCount;
	}
	
	/**
	 * Returns the id as string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->id;
	}

}
?>