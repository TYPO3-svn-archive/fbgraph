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
 * A Facebook Feed Entry
 *
 * @package fbgraph
 * @subpackage Domain
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Fbgraph_Domain_Model_FeedEntry extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $id;
	
	/**
	 * @var Tx_Fbgraph_Domain_Model_Profile
	 * @lazy
	 */
	protected $from;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Fbgraph_Domain_Model_Profile>
	 * @lazy
	 */
	protected $to;
	
	/**
	 * @var string
	 */
	protected $message;
	
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
	protected $name;
	
	/**
	 * @var string
	 */
	protected $caption;
	
	/**
	 * @var string
	 */
	protected $description;
	
	/**
	 * @var string
	 */
	protected $icon;
	
	/**
	 * @var string
	 */
	protected $createdTime;
	
	/**
	 * @var string
	 */
	protected $updatedTime;
	
	/**
	 * @var int
	 */
	protected $likes;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Fbgraph_Domain_Model_Comment>
	 * @lazy 
	 */
	protected $commments;
	
	/**
	 * Constructs this entry
	 */
	public function __construct() {
		$this->from = new Tx_Fbgraph_Domain_Model_Profile;
		$this->to = new Tx_Extbase_Persistence_ObjectStorage();
		$this->comments = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Sets the id for this feed entry
	 *
	 * @param string $id
	 * @return void
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * Getter for id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Sets the name for this feed entry
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Getter for name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Sets the message for this feed entry
	 *
	 * @param string $message
	 * @return void
	 */
	public function setMessage($message) {
		$this->message = $message;
	}

	/**
	 * Getter for message
	 *
	 * @return string
	 */
	public function getMessage() {
		return $this->message;
	}
	
	/**
	 * Sets the picture for this feed entry
	 *
	 * @param string $picture
	 * @return void
	 */
	public function setPicture($picture) {
		$this->picture = $picture;
	}

	/**
	 * Getter for picture
	 *
	 * @return string
	 */
	public function getPicture() {
		return $this->picture;
	}
	
	/**
	 * Sets the link for this feed entry
	 *
	 * @param string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * Getter for link
	 *
	 * @return string
	 */
	public function getLink() {
		return $this->link;
	}
	
	/**
	 * Sets the caption for this feed entry
	 *
	 * @param string $caption
	 * @return void
	 */
	public function setCaption($caption) {
		$this->caption = $caption;
	}

	/**
	 * Getter for picture
	 *
	 * @return string
	 */
	public function getCaption() {
		return $this->caption;
	}
	
	/**
	 * Sets the description for this feed entry
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Getter for description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * Sets the icon for this feed entry
	 *
	 * @param string $icon
	 * @return void
	 */
	public function setIcon($icon) {
		$this->icon = $icon;
	}

	/**
	 * Getter for icon
	 *
	 * @return string
	 */
	public function getIcon() {
		return $this->icon;
	}
	
	/**
	 * Sets the createdTime for this feed entry
	 *
	 * @param string $createdTime
	 * @return void
	 */
	public function setCreatedTime($createdTime) {
		$this->createdTime = $createdTime;
	}

	/**
	 * Getter for createdTime
	 *
	 * @return string
	 */
	public function getCreatedTime() {
		return $this->createdTime;
	}
	
	/**
	 * Sets the updatedTime for this feed entry
	 *
	 * @param string $updatedTime
	 * @return void
	 */
	public function setUpdatedTime($updatedTime) {
		$this->updatedTime = $updatedTime;
	}

	/**
	 * Getter for updatedTime
	 *
	 * @return string
	 */
	public function getUpdatedTime() {
		return $this->updatedTime;
	}
	
	/**
	 * Sets the likes for this feed entry
	 *
	 * @param string $likes
	 * @return void
	 */
	public function setLikes($likes) {
		$this->likes = $likes;
	}

	/**
	 * Getter for likes
	 *
	 * @return string
	 */
	public function getLikes() {
		return $this->likes;
	}
	
	
	/**
	 * Sets the comments for this entry
	 *
	 * @param array $comments
	 * @return void
	 */
	public function setComments(array $items) {
		
		// Set all Comments including there authors
		foreach($items[data] as $item){
						
			// Set the Profile
			$profile = new Tx_Fbgraph_Domain_Model_Profile;
			$profile->setName($item[from][name]);
			$profile->setCategory($item[from][category]);
			$profile->setId($item[from][id]);
			
			// Set the Comment
			$comment = new Tx_Fbgraph_Domain_Model_Comment;
			$comment->setId($item[id]);
			$comment->setFrom($profile);
			$comment->setMessage($item[message]);
			$comment->setCreatedTime($item[created_time]);
			
			// Push that comment into the Object Storage
			$this->addComment($comment);		
		}
	}
	
	/**
	 * Sets the profile from which this feed entry was posted
	 *
	 * @param Tx_Fbgraph_Domain_Model_Profile $from
	 * @return void
	 */
	public function setFrom(Tx_Fbgraph_Domain_Model_Profile $from) {
		$this->from = $from;
	}

	/**
	 * Getter for the profile which posted this feed entry
	 *
	 * @return Tx_Fbgraph_Domain_Model_Profile
	 */
	public function getFrom() {
		return $this->from;
	}
	
	/**
	 * Adds a new profile to the "to" object storage
	 *
	 * @param Tx_Fbgraph_Domain_Model_Profile $profile
	 * @return void
	 */
	public function addTo(Tx_Fbgraph_Domain_Model_Profile $profile) {
		$this->to->attach($profile);
	}
	
	/**
	 * Returns all profiles within the "to" Object Storage
	 *
	 * @return An Tx_Extbase_Persistence_ObjectStorage holding instances of Tx_Fbgraph_Domain_Model_Profile
	 */
	public function getTo() {
		return clone $this->to;
	}
	
	/**
	 * Adds a new comment to the FeedEntry
	 *
	 * @param Tx_Fbgraph_Domain_Model_Comment $comment
	 * @return void
	 */
	public function addComment(Tx_Fbgraph_Domain_Model_Comment $comment) {
		$this->comments->attach($comment);
	}
	
	/**
	 * Returns all comments of this FeedEntry
	 *
	 * @return An Tx_Extbase_Persistence_ObjectStorage holding instances of Tx_Fbgraph_Domain_Model_Comment
	 */
	public function getComment() {
		return clone $this->comments;
	}
	
	/**
	 * Returns this entry as a formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->message;
	}

}
?>