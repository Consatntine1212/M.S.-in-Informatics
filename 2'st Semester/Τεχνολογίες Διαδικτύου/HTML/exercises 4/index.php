<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form</title>
  <script defer src="script.js"></script>
</head>
  <header class="header" id="home">
    <nav>
      <div>
        <ul class="menu">
          <li><a href="#home" class="button" href="">Ionian Airlines Home</a></li>
        </ul>
      </div>
    </nav>
  </header>
   <--------------------->
   <--------------------->
<body>
<div id="error"></div>
<form id="form" action="contact.php" method="POST">
      <fieldset><legend>Προσωπικά στοιχεία</legend>

  <div>
    <label for="name">Name</label>
    <input id="name" name="name" type="text" >
  </div>
    <div>
    <label for="sername">SerName</label>
    <input id="sername" name="sername" type="text" >
  </div>
    <div>
    <label for="phonenum">Phone number :</label>
    <input id="phonenum" name="phonenum" type="text" >
  </div>
    <div>
    <label for="mobilenum">mobil Phone number :</label>
    <input id="mobilenum" name="mobilenum" type="text" >
  </div>
    <div>
    <label for="email">email</label>
    <input id="email" name="email" type="text" >
  </div>
  <div>
    Country : <select id="xora" name="xora" size="1" >
    <option >UK</option>
    <option >Turkey</option>
    <option >Russia</option>
    <option >switzerland</option>
    <option >Norway</option>
    <option >Egypt</option>
    <optgroup label="Ευρωπαικη Ενωση">
      <option>Austria</option>
      <option>Belgium</option>
      <option>Bulgaria</option>
      <option>Croatia</option>
      <option>Republic of Cyprus</option>
      <option>Czech Republic</option>
      <option>Denmark</option>
      <option>Estonia</option>
      <option>Finland</option>
      <option>France</option>
      <option>Germany</option>
      <option selected >Greece</option>
      <option>Hungary</option>
      <option>Ireland</option>
      <option>Italy</option>
      <option>Latvia</option>
      <option>Lithuania</option>
      <option>Luxembourg</option>
      <option>Malta</option>
      <option>Netherlands</option>
      <option>Poland</option>
      <option>Portugal</option>
      <option>Romania</option>
      <option>Slovakia</option>
      <option>Slovenia</option>
      <option>Spain</option>
      <option>Sweden</option>
    </optgroup>
    </select>
  </div>
    <div>
    <label for="city">city</label>
    <input id="city" name="city" type="text" >
  </div>
    <div>
    <label for="adres">adres</label>
    <input id="adres" name="adres" type="text" >
  </div>
    <div>
    <label for="zip">zip</label>
    <input id="zip" name="zip" type="text" >
  </div>
  <div>
    Tύπος πιστωτικής κάρτας :&nbsp;<select id="cardtype" name="cardtype" size="1" >
    <option >Visa</option>
    <option >Mastercard</option>
    <option >American Express</option>
    </select>
  </div>
    <div>
    <label for="curdnumb">curdnumb</label>
    <input id="curdnumb" name="curdnumb" type="text" >
  <button type="submit">Submit</button>
  <button type="reset">Reset</button>
</form>
<br><br>
<div>
  <form id="formsearch" action="search.php" method="POST">
    <label for="email2">Search by email :</label>
    <input type="text" id="email2" name="email2">
    <input type="submit" name="mybtn" id="mybtn" value="Αναζήτηση" >
  </form>
</div>
</body>
</html>




  