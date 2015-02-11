<html>
    <head>
        <meta charset="UTF-8">
        <title>Üzenet</title>
    </head>
    <body>
        <h1>Üzenet</h1>
        <?php
        //print_r($_POST); '<br>';
        echo "Név: ",$_POST['contactName'] . '<br>';
        echo "Telefon: ",$_POST['contactPhone'] . '<br>';
        echo "Email: ",$_POST['contactEmail'] . '<br>';
        echo "Üzenet: ",$_POST['contactMessage'] . '<br>';
        ?>