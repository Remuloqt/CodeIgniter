<?php
class Beacon_model extends CI_Model {

	 public function getBeaconData() {
		// $servername = "localhost";
		// $username = "root";
		// $password = "root";
		// $dbname = "sulproj";
		
		// // Create connection
		// $conn = new mysqli($servername, $username, $password, $dbname);
		// // Check connection
		// if ($db->connect_error) {
			// die("Connection failed: " . $db->connect_error);
		// } 

		// // $sql_beacondata = "SELECT Temp, Time, BeaconId, Url, Voltage FROM beacondata";
		
		// $result_beacondata = $this->db->query("SELECT Temp, Time, BeaconId, Url, Voltage FROM beacondata");
		
		// $return_arr = array();

		// if ($result_beacondata->num_rows > 0) {
			// while ($row = $result_beacondata->fetch_assoc()) {
			// $row_array['Temp'] = $row['Temp'];
			// $row_array['Time'] = $row['Time'];
			// $row_array['BeaconId'] = $row['BeaconId'];
			// $row_array['Url'] = $row['Url'];
			// $row_array['Voltage'] = $row['Voltage'];
			// array_push($return_arr,$row_array);
			// }
				
		// echo "<pre>";
		// echo json_encode($return_arr, JSON_PRETTY_PRINT);
		// echo "</pre>";

		// $conn->close();
		}
	 

	
	public function getBeaconIds() {
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "sulproj";
		
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql_beaconids = "SELECT BeaconId FROM beacon";
		
		$result_beaconids = $conn->query($sql_beaconids);
		
		$return_arr = array();
		
		if ($result_beaconids->num_rows > 0) {
			while ($row = $result_beaconids->fetch_assoc()) {
			$row_array['BeaconId'] = $row['BeaconId'];
			array_push($return_arr,$row_array);
			}
			
		echo "<pre>";
		echo json_encode($return_arr, JSON_PRETTY_PRINT);
		echo "</pre>";

		$conn->close();

		}
	}
	
	public function insertData() {
		
		//Variables
		$temp = $_POST['temperature'];
		$beaconvar = $_POST['beaconId'];
		$url = $_POST['url'];
		$voltage = $_POST['voltage'];
		
		if("" == trim($_POST['temperature'])){
			$temp = 0;
		}
		if("" == trim($_POST['beaconId'])){
			$beaconvar = "null";
		}
		if("" == trim($_POST['url'])){
			$url = "null";
		}
		if("" == trim($_POST['voltage'])){
			$voltage = 0;
		}

		$link = mysqli_connect("localhost", "root", "root", "sulproj");
 
		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		
		// Attempt insert query execution
		$sql = "INSERT INTO beacondata (Temp, Time, BeaconId, Url, Voltage) VALUES ('$temp', 'UNIX_TIMESTAMP()', '$beaconvar', '$url', '$voltage')";
		if(mysqli_query($link, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		 
		// Close connection
		mysqli_close($link);
		
	}

}