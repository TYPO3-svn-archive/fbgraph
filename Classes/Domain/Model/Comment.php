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
 * A Facebook Comment
 *
 * @package fbgraph
 * @subpackage Domain
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Fbgraph_Domain_Model_Comment extends Tx_Extbase_DomainObject_AbstractEntity {

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
	 * @var string
	 */
	protected $message;
	
	/**
	 * @var string
	 */
	protected $createdTime;
	
	/**
	 * Constructs this entry
	 */
	public function __construct() {
		$this->from = new Tx_Fbgraph_Domain_Model_Profile;
	}

	/**
	 * Sets the id for this comment
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
	 * Sets the message for this comment
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
	 * Sets the createdTime for this comment
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
	 * Sets the profile from which this comment was posted
	 *
	 * @param Tx_Fbgraph_Domain_Model_Profile $from
	 * @return void
	 */
	public function setFrom(Tx_Fbgraph_Domain_Model_Profile $from) {
		$this->from = $from;
	}

	/**
	 * Getter for the profile which posted this comment
	 *
	 * @return Tx_Fbgraph_Domain_Model_Profile
	 */
	public function getFrom() {
		return $this->from;
	}
	
	
	/**
	 * Returns this message as a formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->message;
	}

}
?>