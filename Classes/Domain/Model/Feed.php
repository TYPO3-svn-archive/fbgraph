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
 * A Facebook Feed
 *
 * @package Fbgraph
 * @subpackage Domain
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Fbgraph_Domain_Model_Feed extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Fbgraph_Domain_Model_FeedEntry>
	 * @lazy
	 * @cascade remove
	 */
	protected $entries;
	
	/**
	 * Constructs this Feed
	 */
	public function __construct() {
		$this->entries = new Tx_Extbase_Persistence_ObjectStorage();
	}
	
	/**
	 * Grabs data from Facebook and fills the feed
	 *
	 * @string Facebook User Name or ID. For Example: '/typo3'
	 * @return void
	 */
	public function grab($profile){
		
		// Would be nice to see some suggestions for this method
		// I think there are alot of improvements possible

		$facebook = new Tx_Fbgraph_Domain_Model_Facebook;
		
		$arg = ('/' . $profile . '/feed');
		$rawData = $facebook->api($arg);
		
		// Each Feed entry -> as data
		foreach($rawData[data] as $data){
			
			// We need a Feed and a "from" Profile
			$entry = new Tx_Fbgraph_Domain_Model_FeedEntry;
			$from_profile = new Tx_Fbgraph_Domain_Model_Profile;
			
			// Set all entry attributes without the "from" and "to"
			$entry->setId($data[id]);
			$entry->setMessage($data[message]);
			$entry->setPicture($data[picture]);
			$entry->setLink($data[link]);
			$entry->setName($data[name]);
			$entry->setCaption($data[caption]);
			$entry->setDescription($data[description]);
			$entry->setIcon($data[icon]);
			$entry->setCreatedTime($data[created_time]);
			$entry->setUpdatedTime($data[updated_time]);
			$entry->setLikes($data[likes]);
			
			// Set the "from" Profile attributes
			$from_profile->setName($data[from][name]);
			$from_profile->setCategory($data[from][category]);
			$from_profile->setId($data[from][id]);
			
			// Add the "from" profile to our new entry
			$entry->setFrom($from_profile);
			
			// Add all written comments to our new entry
			if($data[comments]){
				$entry->setComments($data[comments]);
			}
			
			
			// At least add all "to" profiles to our Entry
			foreach($data[to][data] as $data){
				
				// We also need a new Profile Object
				$to_profile = new Tx_Fbgraph_Domain_Model_Profile;
				
				// Set the "to" Profile attributes
				$to_profile->setName($data[name]);
				$to_profile->setCategory($data[category]);
				$to_profile->setId($data[id]);
				
				$entry->addTo($to_profile);
				
			}
			
			// Add this Entry to our Object Storage
			$this->addEntry($entry);
			
		}
		
	}
	
	/**
	 * Setter for the entries to this feed
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage $entries An Object Storage of related Entry instances
	 * @return void
	 */
	public function setEntries(Tx_Extbase_Persistence_ObjectStorage $entries) {
		$this->entries = $entries;
	}

	/**
	 * Adds an entry to this feed
	 *
	 * @param Tx_Fbgraph_Domain_Model_FeedEntry $entry
	 * @return void
	 */
	public function addEntry(Tx_Fbgraph_Domain_Model_FeedEntry $entry) {
		$this->entries->attach($entry);
	}

	/**
	 * Removes an entry from this feed
	 *
	 * @param Tx_Fbgraph_Domain_Model_FeedEntry $entryToDelete
	 * @return void
	 */
	public function removeEntry(Tx_Fbgraph_Domain_Model_FeedEntry $entryToDelete) {
		$this->entries->detach($entryToDelete);
	}
	
	/**
	 * Remove all entries from this feed
	 *
	 * @return void
	 */
	public function removeAllEntries() {
		$this->entries = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all entries to this feed
	 *
	 * @return An Tx_Extbase_Persistence_ObjectStorage holding instances of Tx_Fbgraph_Domain_Model_FeedEntry
	 */
	public function getEntries() {
		return clone $this->entries;
	}
	
	/**
	 * Returns the name as string
	 *
	 * @return string
	 */
	public function __toString() {
		return "I'am a Facebook feed...";
	}

}
?>