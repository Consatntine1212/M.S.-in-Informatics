<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="faststyle.css">
 
    <title>Fast Airlines</title>
</head>

<body>
        <nav>
        <ul>
            <li><a class="active" href="index.php"><ion-icon name="home" style="width: 24px; height: 24px;"></ion-icon></a></li>
            <li><a href="index.php">Κρατήσεις</a></li>
            <li><a href="dest.php">Δημοφιλείς Προορισμοί</a></li>
            <li><a href="aircraft.php">Αεροσκάφη</a></li>
        </ul>
    </nav>

    <h2 style="margin-top: 15%"><em>Fast Airlines</em><img src="white-arrow.png" alt="white-arrow" width="30" height="22"></h2>
<div class="center">
    <form id="form" action="aircraftcontact.php" method="POST">
        <label class="form-label">
            <span style="font-size: 25px;">Παρακαλώ πληκτρολογήστε τα χαρακτηριστικά του αεροσκάφους:</span>
            <div class="card-body">
                <label class="form-label">
                    Μοντέλο: <input class="form-control" type="text" placeholder="πχ. Antonov" id="model" name="model" required="required">
                </label>
                <label class="form-label">
                    Κωδικός αεροσκάφους: <input class="form-control" type="text" placeholder="πχ. A4F" size="3" maxlength="3" max="999" min="1" id="code" name="code" required="required">
                </label>
                <label class="form-label">
                    Χωρητικότητα (σε επιβάτες) <input class="form-control" type="number" placeholder="πχ. 140" min="1" id="cap" name="cap" required="required">
                </label>
                <label class="form-label">
                    Εμβέλεια (σε χιλιόμετρα) <input class="form-control" type="number" placeholder="πχ. 12000" min="1" id="range" name="range" required="required">
                </label>

                <div class="buttons">
                    <input type="submit" value="insert" id="insert" name="send">
                    <input type="submit" value="delete" id="delete" name="send">
                    <input type="submit" value="update" id="update" name="send">
                    <input type="reset" value="reset" id="reset" name="reset">
                </div>
            </div>
        </label>
    </form>
</div>

<br><br><br><br>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>