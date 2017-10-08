<?php
class Flights extends CI_Model
{
	var $data = array();
	var $regions;
	var $airlines;

	// Constructor
	public function __construct()
	{
		parent::__construct();
		
		//assign models to each variable
		$this->load->model('Airlines');
		$this->load->model('Airports');
		$this->load->model('Airplanes');
		$this->airlines = $this->Airlines->all();
		$this->airlines = $this->Airports->all();
		$this->airlines = $this->Airplanes->all();

		//data is array of models has planes and airlines which are an array of stdObjects 
		$this->data['airlines'] = $this->airlines;
		$this->data['airports'] = $this->airports;
		$this->data['airplanes'] = $this->airplanes;
	}
	
	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}
}
