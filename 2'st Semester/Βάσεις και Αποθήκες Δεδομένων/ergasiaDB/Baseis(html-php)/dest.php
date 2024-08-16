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
        <form id="formsearch" action="destsearch.php" method="POST">
            <label class="form-label">
                <span style="font-size: 26px;">Βρείτε τους 5 πιο δημοφιλείς προορισμούς!</span>
                <br><br>
                <span style="font-size: 18px;">Παρακαλώ πληκτρολογήστε την χρονολογία που επιθυμείτε:</span>
                <input class="form-control" type="number" placeholder="πχ. 2022" size="10" maxlength="4" max="2022" min="2000" id="year" name="year" required="required">
            </label>
            <label>
                <input type="submit" id="searchpopular" name="searchpopular" value="search" class="search-buttons">
            </label>
        </form>
    </div>

    <br><br><br><br>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>