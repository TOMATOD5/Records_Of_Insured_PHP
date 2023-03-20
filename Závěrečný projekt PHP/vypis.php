<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/vypis.css">
    <title>Výpis uživatelů</title>
</head>

<body>
    <table class="list-box">
        <tr>
            <th>ID uživatele</th>
            <th>Jméno</th>
            <th>Příjmení</th>
            <th>Datum narození</th>
            <th>Tel. číslo</th>
        </tr>
        <?php
        include "mysql/db.php";
        ListFun();
        ?>
    </table>

    <div>
        <a class="previous-button" href="index.html" class="previous">&laquo; Zpátky</a>
    </div>
    
</body>
</html>


