<?php

class Music {

	private $id;
	private $artist;
	private $song;
	private $year;

	function __construct($artist, $song, $year) {
		$this->artist 	= $artist;
		$this->song 	= $song;
		$this->year 	= $year;
	}

	public function getId() {
		return $this->id;
	}

	public function getArtist() {
		return $this->artist;
	}

	public function getSong() {
		return $this->song;
	}

	public function getYear() {
		return $this->year;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setArtist($artist) {
		$this->artist = $artist;
	}

	public function setSong($song) {
		$this->song = $song;
	}

	public function setYear($year) {
		$this->year = $year;
	}
}
