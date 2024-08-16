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
//Δημιουργία ερωτήματος $sql = "SELECT arrival_airport_code, count(*) AS cnt FROM flight GROUP BY arrival_airport_code ORDER BY cnt DESC limit 5 WHERE departure_date BETWEEN DATE '2000-01-01' AND '2023-01-01';
$sql = "SELECT COUNT(*) AS cnt, flight.arrival_airport, airport.airport_name, airport.city, airport.timezone 
FROM flight 
INNER JOIN airport ON flight.arrival_airport=airport.code 
WHERE flight.departure_date BETWEEN DATE '".$_POST['year']."-01-01' AND '".$_POST['year']."-12-31' GROUP BY flight.arrival_airport, airport.airport_name, airport.city, airport.timezone ORDER BY cnt DESC limit 5; 

";


/*SELECT COUNT(*) AS cnt, flight.arrival_airport, airport.airport_name, airport.city, airport.timezone 
FROM flight 
INNER JOIN airport ON flight.arrival_airport=airport.code 
WHERE flight.departure_date BETWEEN DATE '2022-01-01' AND '2022-12-31' GROUP BY flight.arrival_airport, airport.airport_name, airport.city, airport.timezone ORDER BY cnt DESC limit 5; 

";*/
/*εκτυπώνω στο φυλλομετρητή το ερώτημα ώστε να ελέγξω μην έχει πάει κάτι λάθος*/
//echo $sql;
//εκτέλεση ερωτήματος στη βάση
$result = pg_query($dbconn, $sql) ;
//Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
echo "<table style='border:1px solid black'>";
echo "<tr><th>Count</th>
		<th>Airport code</th>
		<th>Airport name</th>
		<th>City</th>
		<th>Timezone</th></tr>";
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα password
while($row = pg_fetch_array($result)) {
echo"<tr><td>".$row['cnt']."</td>".
		"<td>".$row['arrival_airport']."</td>".
		"<td>".$row['airport_name']."</td>".
		"<td>".$row['city']."</td>".
		"<td>".$row['timezone']."</td></tr>";
}
echo "</table>" ;
?>
