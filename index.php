<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Üzenet</title>
    </head>
    <body>
        <h1>Üzenet</h1>
        <form name="contactForm" method="post" action="uzenet.php">
            <label>Név:</label>
            <br>
            <input type="text" name="contactName">
            <br>
            <label>Telefon:</label>
            <br>
            <input type="text" name="contactPhone">
            <br>
            <label>e-mail:</label>
            <br>
            <input type="email" name="contactEmail">
            <br>
            <label>Üzenet:</label>
            <br>
            <textarea name="contactMessage"></textarea>
            <br>
            <input type="submit" name="contactSubmit">
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
