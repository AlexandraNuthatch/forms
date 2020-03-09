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
$zapytanie = "INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`) VALUES (NULL, \"$uzytkownik\", \"$haslo\")";
$odpowiedz = $baza->query($zapytanie);

if($odpowiedz) 
    echo "Użytkownik utworzony poprawnie<br>"
?>
</body>
</html>