<?php
$array = $beaconids->result();
$count = count($array);

echo "[";
for ($i = 0; $i < $count; $i++) {
	
		echo "<pre>";
		echo json_encode($array[$i], JSON_PRETTY_PRINT);
		echo "</pre>";
		
		if($i < $count - 1) {
			echo ",";
		}
}
echo "]";
?>