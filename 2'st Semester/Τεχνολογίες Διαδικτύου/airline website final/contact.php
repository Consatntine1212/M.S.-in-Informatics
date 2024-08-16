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
$sql = "INSERT INTO data(firstname, lastname, phonenum, mobilenum, mail, password, xora, city, adres, zip, cardtype, cardnumb) VALUES ('".$_POST['name']."','".$_POST['sername']."','".$_POST['phonenum']."','".$_POST['mobilenum']."','".$_POST['email']."','".$_POST['password']."','".$_POST['xora']."','".$_POST['city']."','".$_POST['adres']."','".$_POST['zip']."','".$_POST['cardtype']."','".$_POST['curdnumb']."')";
//$sql = "SELECT * FROM data WHERE username='".$_GET['user']."';";
//}
echo $sql;
//εκτέλεση ερωτήματος στη βάση
$result = pg_query($dbconn, $sql) ;
//έλεγχος αποτελεσμάτων
if ($result) {
//Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
echo "αποθηκευση οκ";
} else {
echo "αποθηκευση NOT οκ <br>";
die('Query failed: ' . pg_last_error());
}

//κλείσιμο σύνδεσης
pg_close($dbconn);
?>
