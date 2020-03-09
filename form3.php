<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Podaj nazwę użytkownika:
        <input type="text" name="uzytkownik"><br>
        Podaj hasło: 
        <input type="password" name="haslo"><br>
        <input type="submit">
    </form>
<?php
if( !isset($_REQUEST['haslo']) )
    exit;
$uzytkownik = $_REQUEST['uzytkownik'];
$haslo = md5($_REQUEST['haslo']);
$baza = new mysqli('localhost', 'root', '', 'formularze');
$zapytanie = "SELECT * FROM `uzytkownicy`
                WHERE `login` = \"$uzytkownik\" 
                AND `haslo` = \"$haslo\" ";
$odpowiedz = $baza->query($zapytanie);
//var_dump($odpowiedz->num_rows);
//echo $zapytanie;

if($odpowiedz->num_rows == 1)
    echo "Hasło poprawne<br>";
else 
    echo "Hasło niepoprawne<br>";
?>
</body>
</html>