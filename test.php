<?php

$arr = array( 
    [0] => array( 
            [0] => 2 
            [1] => Department of General Chemistry
        ) 
    [1] => array( 
            [0] => 3 
            [1] => Institute of Silicate Materials
        ) 
    [2] => array( 
            [0] => 4 
            [1] => Department of General Chemistry
        ) 
    [3] => array( 
            [0] => 5 
            [1] => Department of General Chemistry
        ) 
    [4] => array( 
            [0] => 6 
            [1] => Institute of Silicate Materials
        ) 
);




foreach ($array as $key => $value) {
 $return[$value[1]][] = $value[0];
}

foreach ($return as $key => $value) {
  echo implode(',', $value)." ".$key;
}




	/*echo date("d");
	$servername = "localhost";
	$username = "root";
	$password = "nehemiah";
	$dbname = "online-doctor";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "SELECT 		id
			FROM 		users
			WHERE 		username = 'robert'";
	$query = $conn->query($sql);

	$rows = array();
	print_r($rows);*/

	/*

	$sql = "SELECT 		Incident.OBNumber AS incident_ob,
						Incident.Datetime as incident_date,
						CONCAT(PoliceOfficer.Name1,' ',PoliceOfficer.Name2) AS incident_officer,
						Incident.Type AS incident_type,
						Incident.Location AS incident_location,
						Incident.Brief AS brief,
						Incident.InjuryDesc AS incident_injury,
						--CONCAT(p_witness.Name1,' ',p_witness.Name2) AS incident_witness1,
						Vehicle.Registration AS vehicle_reg,
						Vehicle.Make AS vehicle_make,
						Vehicle.Color AS vehicle_color,
						Vehicle.InsuranceAgent AS vehicle_agent,
						Vehicle.InsuranceNumber AS vehicle_num,
						--CONCAT(p_vehicle.Name1,' ',p_vehicle.Name2) AS vehicle_owner,
						Vehicle.Owner AS vehicle_owner,
						LCASE(County.name) as county,
						Station.Name as station_name,
						Station.Address as station_address,
						Station.Phone as station_phone
			FROM 		Incident
			LEFT JOIN	Persons p_witness ON Persons.ID=Incident.Witness1
			LEFT JOIN	Persons p_vehicle ON Persons.ID=Vehicle.Owner
			LEFT JOIN	PoliceOfficer ON PoliceOfficer.ID=Incident.Officer
			LEFT JOIN	Station  ON Station.ID=Incident.Station
			LEFT JOIN	County   ON County.id=Station.County
			WHERE		Incident.ID = $id
			LIMIT 1";


	*/

	/*echo "<pre>";
	print_r($query->fetch_assoc());
	echo "</pre>";*/

	//return $query->result();

	/*$rows = array();
	while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    $json_string = '{"data": '.json_encode($rows, JSON_PRETTY_PRINT).'}';
	
	echo $json_string;*/
	//print json_encode($rows);*/

/*

"name": "Ashton Cox",
      "brief": "Some Description","position": "Junior Technical Author",
      "salary": "$86,000",
      "start_date": "2009/01/12",
      "office": "San Francisco",
      "extn": "1562"




if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

	/*$query = mysql_query("SELECT * FROM Incident");
	$rows = array();
	print_r($rows);
	exit;
	while($row = mysql_fetch_assoc($query)) {
	    $rows[] = $row;
	}
	print json_encode($rows);*/
?>