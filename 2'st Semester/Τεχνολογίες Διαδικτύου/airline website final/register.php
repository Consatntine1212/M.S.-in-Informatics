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
<form id="form" action="contact.php" method="POST">
  <fieldset class="card-body"><legend>Προσωπικά στοιχεία</legend>
    <div id="error" style="color: red;"></div>
  <div>
    <label for="name">Name :</label>
    <input id="name" name="name" type="text" >
  </div>
    <div>
    <label for="sername">SerName :</label>
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
    <label for="email">email :</label>
    <input id="email" name="email" type="text" >
  </div>
      <div>
    <label for="password">Password :</label>
    <input id="password" name="password" type="text" >
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
    <label for="city">city :</label>
    <input id="city" name="city" type="text" >
  </div>
    <div>
    <label for="adres">adres :</label>
    <input id="adres" name="adres" type="text" >
  </div>
    <div>
    <label for="zip">zip :</label>
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
    <label for="curdnumb">curdnumb :</label>
    <input id="curdnumb" name="curdnumb" type="text" >
  <button type="submit">Submit</button>
  <button type="reset">Reset</button>
</form>

</body>
</html>




  