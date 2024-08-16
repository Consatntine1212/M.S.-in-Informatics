<!Doctype html>
<html>
  <head>
    <title>Register</title>
    <script defer src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <header class="header" id="home">
    <nav>
      <div>
        <ul class="menu">
          <li><a href="index.php" class="button" href="">Ionian Airlines Home</a></li>
          <li><a href="dest.php" class="button" href="">Προορισμοί</a></li>
          <li><a href="register.php" class="button" href="">Register</a></li>
          <li><a href="login.php" class="button" href="">Login</a></li>
        </ul>
      </div>
    </nav>
    <section class="imageContainer" style="background-image: url(images/wallpaperflare.com_wallpaper2-bluer.png);">
      <br /><br /><br /><br /><br /><br /><br /><br />
      <div>
</body>
</html>
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
$sql = "SELECT * FROM data WHERE mail='".$_POST['email2']."' AND Password='".$_POST['pas']."';";
/*εκτυπώνω στο φυλλομετρητή το ερώτημα ώστε να ελέγξω μην έχει πάει κάτι λάθος*/
//echo $sql;
//εκτέλεση ερωτήματος στη βάση
$result = pg_query($dbconn, $sql) ;
if ($result){
	//Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
	echo"Τα στοιχεία σας είναι :";
	echo "<table style='margin: auto; border: solid 1px #dbdad7; background-color: #ffffff41; width: 90%; padding-left: 10px; padding-bottom: 10px; padding-right: 10px; padding-top: 0px'>";
	echo "<tr><th>id</th><th>First Name</th><th>Last Name</th><th>Phone number</th><th>Mobile Phone number</th><th>Email</th><th>Password</th><th>Country</th><th>City</th><th>Adres</th><th>Zip</th><th>Credit Card Type</th><th>Credit curd Number</th></tr>";
	// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα password
	while($row = pg_fetch_array($result)) {
	echo"<tr><td>".$row['id']."</td>".
			"<td>".$row['firstname']."</td>".
			"<td>".$row['lastname']."</td>".
			"<td>".$row['phonenum']."</td>".
			"<td>".$row['mobilenum']."</td>".
			"<td>".$row['mail']."</td>".
			"<td>".$row['mail']."</td>".
			"<td>".$row['xora']."</td>".
			"<td>".$row['city']."</td>".
			"<td>".$row['adres']."</td>".
			"<td>".$row['zip']."</td>".
			"<td>".$row['cardtype']."</td>".
			"<td>".$row['cardnumb']."</td></tr>";
	}
	echo "</table>" ;
}
else {
	echo"<h3>Η συνδεση απετυχε το email ή password είναι λαθος</h3>";
	
}
?>