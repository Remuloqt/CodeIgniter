<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beacon extends CI_Controller {
	
	 public function __construct() {
         parent::__construct();
		 $this->load->database();
         $this->load->model('Beacon_model');
     }

	public function showBeaconData() {
		
		$this->load->model('Beacon_model');
		$data['beacondatat'] = $this->Beacon_model->getBeaconData();

		$this->load->view('Beacon/showBeaconData',$data);
	}
	
	public function showBeaconIds() {
		
		$this->load->model('Beacon_model');
		$data['beaconids'] = $this->Beacon_model->getBeaconIds();

		$this->load->view('Beacon/showBeacon',$data);
	}
	
	public function addBeaconData() {
		$this->load->model('Beacon_model');
		$data['addBeacon'] = $this->Beacon_model->insertData();
		
		//$data['sivun_sisalto']="beacon/showBeacon";
	}

}
