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
$wlasciwyUzytkownik = "marian";
$wlasciweHaslo = "ad0234829205b9033196ba818f7a872b";


if( md5($_REQUEST['haslo']) == $wlasciweHaslo &&
    $_REQUEST['uzytkownik'] == $wlasciwyUzytkownik)
    echo "Hasło poprawne<br>";
else 
    echo "Hasło niepoprawne<br>";
?>
</body>
</html>