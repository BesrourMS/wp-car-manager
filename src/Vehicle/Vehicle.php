<?php
namespace Never5\WPCarManager\Vehicle;

use Never5\WPCarManager\Helper;

abstract class Vehicle {

	/** @var int */
	private $id = null;

	/** @var String */
	private $condition;

	/** @var String */
	private $make;

	/** @var String */
	private $model;

	/** @var int */
	private $year;

	/** @var String */
	private $price;

	/** @var String */
	private $color;

	/** @var array */
	private $features = array();

	/** @var String */
	private $gallery_attachment_ids;

	/**
	 * @return int
	 */
	public function get_id() {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function set_id( $id ) {
		$this->id = $id;
	}

	/**
	 * @return String
	 */
	public function get_condition() {
		return $this->condition;
	}

	/**
	 * @param String $condition
	 */
	public function set_condition( $condition ) {
		$this->condition = $condition;
	}

	/**
	 * @return String
	 */
	public function get_make() {
		return $this->make;
	}

	/**
	 * @param String $make
	 */
	public function set_make( $make ) {
		$this->make = $make;
	}

	/**
	 * @return String
	 */
	public function get_model() {
		return $this->model;
	}

	/**
	 * @param String $model
	 */
	public function set_model( $model ) {
		$this->model = $model;
	}

	/**
	 * @return String
	 */
	public function get_year() {
		return $this->year;
	}

	/**
	 * @param String $year
	 */
	public function set_year( $year ) {
		$this->year = $year;
	}

	/**
	 * @return String
	 */
	public function get_price() {
		return $this->price;
	}

	/**
	 * @param String $price
	 */
	public function set_price( $price ) {
		$this->price = $price;
	}

	/**
	 * Returns formatted price
	 *
	 * @return String
	 */
	public function get_formatted_price() {
		return Helper\Format::price( $this->get_price() );
	}

	/**
	 * @return String
	 */
	public function get_color() {
		return $this->color;
	}

	/**
	 * @param String $color
	 */
	public function set_color( $color ) {
		$this->color = $color;
	}

	/**
	 * @return array
	 */
	public function get_features() {
		return $this->features;
	}

	/**
	 * @param array $features
	 */
	public function set_features( $features ) {
		$this->features = $features;
	}

	/**
	 * @return String
	 */
	public function get_gallery_attachment_ids() {
		return $this->gallery_attachment_ids;
	}

	/**
	 * @param String $gallery_attachment_ids
	 */
	public function set_gallery_attachment_ids( $gallery_attachment_ids ) {
		$this->gallery_attachment_ids = $gallery_attachment_ids;
	}

}