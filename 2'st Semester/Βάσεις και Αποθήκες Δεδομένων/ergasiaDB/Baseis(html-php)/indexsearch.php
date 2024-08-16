<head>
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
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

$sql = "SELECT ticket.passenger_id, ticket.passenger_name, ticket.phone, book.book_date 
FROM flight 
JOIN ticket ON flight.flight_no = ticket.flight_no
JOIN book ON ticket.book_ref = book.book_ref
WHERE flight.flight_no='".$_POST['code']."' AND flight.departure_date= '".$_POST['date']."';";

/*$sql = "SELECT ticket.passenger_id, ticket.passenger_name, ticket.phone, book.book_date 
FROM flight 
JOIN ticket ON flight.flight_no = ticket.flight_no
JOIN book ON ticket.book_ref = book.book_ref
WHERE flight.flight_no='101674' AND flight.departure_date= '2022-09-19';";

flight_no='".$_POST['code']."' AND departure_date= '".$_POST['date']."';";*/
/*εκτυπώνω στο φυλλομετρητή το ερώτημα ώστε να ελέγξω μην έχει πάει κάτι λάθος*/
//echo $sql;
//εκτέλεση ερωτήματος στη βάση
$result = pg_query($dbconn, $sql) ;
//Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
echo "<table style='border:1px solid black'>";
echo "<tr><th>Passenger id </th><th>Passenger name</th><th>Phone number</th><th>Book Date</th></tr>"  ;
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα password
while($row = pg_fetch_array($result)) {
echo"<tr><td>".$row['passenger_id']."</td>".
		"<td>".$row['passenger_name']."</td>".
		"<td>".$row['phone']."</td>".
		"<td>".$row['book_date']."</td></tr>";
}
echo "</table>" ;
?>
