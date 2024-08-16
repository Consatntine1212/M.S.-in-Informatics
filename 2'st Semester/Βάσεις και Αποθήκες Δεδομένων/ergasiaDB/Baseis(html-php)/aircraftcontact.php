<?php
/*διάβασε τα στοιχεία σύνδεσης απο το αρχείο credent.php*/
require_once 'credent.php';
// Δημιουργία σύνδεσης
$connecionstr="host=".DB_SERVER." port=5432 dbname=".DB_BASE." user=".DB_USER." password=".DB_PASS." options='--client_encoding=UTF8'";
$dbconn = pg_connect($connecionstr);
// Έλεγχος σύνδεσης
if (!$dbconn) {
die("Connection failed: " . pg_connect_error());
}
///////////////////////////////////////password
//Δημιουργία ερωτήματος
if ( $_POST['send']=='insert') {
	$sql = "INSERT INTO aircraft(aircraft_code, model, capacity, aircraft_range) VALUES ('".$_POST['code']."','".$_POST['model']."','".$_POST['cap']."','".$_POST['range']."')";
}
elseif ( $_POST['send']=='delete') {
	$sql = "DELETE FROM  aircraft WHERE aircraft_code = '".$_POST['code']."' ";
}
elseif ( $_POST['send']=='update') {
	$sql = "UPDATE aircraft
		SET model = '".$_POST['model']."',  capacity = '".$_POST['cap']."',aircraft_range = '".$_POST['range']."'
		WHERE aircraft_code = '".$_POST['code']."'";
}


echo $sql;
//εκτέλεση ερωτήματος στη βάση
$result = pg_query($dbconn, $sql) ;
//έλεγχος αποτελεσμάτων

if ($result) {
	echo " ". $_POST['send'] . " happened "." οκ";
} else {
	echo " ". $_POST['send'] . " happened "." not οκ";
	die('Query failed: ' . pg_last_error());
}

//κλείσιμο σύνδεσης
pg_close($dbconn);
?>
