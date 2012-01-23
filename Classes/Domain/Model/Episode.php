<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Noël Bossart <n dot company at me dot com>, noelboss.ch
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package podcast
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Podcast_Domain_Model_Episode extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Description
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * File
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $file;

	/**
	 * Publication Date
	 *
	 * @var DateTime
	 */
	protected $publicationDate;

	/**
	 * Duration
	 *
	 * @var DateTime
	 */
	protected $duration;

	/**
	 * website
	 *
	 * @var Tx_Podcast_Domain_Model_Website
	 */
	protected $website;

	/**
	 * author
	 *
	 * @var Tx_Podcast_Domain_Model_Person
	 */
	protected $author;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the file
	 *
	 * @return string $file
	 */
	public function getFile() {
		return $this->file;
	}

	/**
	 * Sets the file
	 *
	 * @param string $file
	 * @return void
	 */
	public function setFile($file) {
		$this->file = $file;
	}

	/**
	 * Returns the publicationDate
	 *
	 * @return DateTime $publicationDate
	 */
	public function getPublicationDate() {
		return $this->publicationDate;
	}

	/**
	 * Sets the publicationDate
	 *
	 * @param DateTime $publicationDate
	 * @return void
	 */
	public function setPublicationDate($publicationDate) {
		$this->publicationDate = $publicationDate;
	}

	/**
	 * Returns the duration
	 *
	 * @return DateTime $duration
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Sets the duration
	 *
	 * @param DateTime $duration
	 * @return void
	 */
	public function setDuration($duration) {
		$this->duration = $duration;
	}

	/**
	 * Returns the website
	 *
	 * @return Tx_Podcast_Domain_Model_Website $website
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * Sets the website
	 *
	 * @param Tx_Podcast_Domain_Model_Website $website
	 * @return void
	 */
	public function setWebsite(Tx_Podcast_Domain_Model_Website $website) {
		$this->website = $website;
	}

	/**
	 * Returns the author
	 *
	 * @return Tx_Podcast_Domain_Model_Person $author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Sets the author
	 *
	 * @param Tx_Podcast_Domain_Model_Person $author
	 * @return void
	 */
	public function setAuthor(Tx_Podcast_Domain_Model_Person $author) {
		$this->author = $author;
	}

}
?>