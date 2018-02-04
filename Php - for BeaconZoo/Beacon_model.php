<?php
class Beacon_model extends CI_Model {

	public function getBeaconData() {
			$beaconData = $this->db->get("beacondata");
			return $beaconData; 
			
		}
	 
	 
	public function getBeaconIds() {

			$beacon = $this->db->get("beacon");
			return $beacon; 
			
		}
	
	
	public function insertData() {
		
		//Variables
		if (isset($_POST["temperature"])) { 
			$temp = $_POST['temperature'];
		}
		else {
			$temp = 0;
		}
		
		if (isset($_POST["beaconId"])) { 
			$beaconvar = $_POST['beaconId'];
		}
		else {
			$beaconvar = "null";
			echo "No data inserted. Beacon id is missing.";
			//return "Error";
		}
		
		if (isset($_POST["url"])) { 
			$url = $_POST['url'];
		}
		else {
			$url = "null";
		}
		
		if (isset($_POST["voltage"])) { 
			$voltage = $_POST['voltage'];
		}
		else {
			$voltage = 0;
		}

		
		$this->db->query("INSERT INTO beacondata (Temp, Time, BeaconId, Url, Voltage) VALUES ('$temp', UNIX_TIMESTAMP(), '$beaconvar', '$url', '$voltage')");
		echo "Data added successfully.";
	}

}