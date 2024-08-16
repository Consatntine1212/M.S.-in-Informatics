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
//Δημιουργία ερωτήματος
$sql = "SELECT * FROM data WHERE mail='".$_POST['email2']."';";
/*εκτυπώνω στο φυλλομετρητή το ερώτημα ώστε να ελέγξω μην έχει πάει κάτι λάθος*/
echo $sql;
//εκτέλεση ερωτήματος στη βάση
$result = pg_query($dbconn, $sql) ;
//Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
echo "<table style='border:1px solid black'>";
echo "<tr><th>id</th><th>First Name</th><th>Sir Name</th><th>Pone number</th><th>Mobile Pone number</th><th>mail</th><th>Country</th><th>City</th><th>Adres</th><th>Zip</th><th>Credit Card Type</th><th>Credit curd Number</th></tr>";
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
while($row = pg_fetch_array($result)) {
echo"<tr><td>".$row['id']."</td>".
		"<td>".$row['firstname']."</td>".
		"<td>".$row['lastname']."</td>".
		"<td>".$row['phonenum']."</td>".
		"<td>".$row['mobilenum']."</td>".
		"<td>".$row['mail']."</td>".
		"<td>".$row['xora']."</td>".
		"<td>".$row['city']."</td>".
		"<td>".$row['adres']."</td>".
		"<td>".$row['zip']."</td>".
		"<td>".$row['cardtype']."</td>".
		"<td>".$row['cardnumb']."</td></tr>";
}
echo "</table>" ;
?>