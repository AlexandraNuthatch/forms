<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Podaj hasło: 
        <input type="password" name="haslo">
        <input type="submit">
    </form>
<?php
$wlasciweHaslo = "test2";
echo "Podane hasło: ".$_REQUEST['haslo']."<br>";
if($_REQUEST['haslo'] == $wlasciweHaslo)
    echo "Hasło poprawne<br>";
else 
    echo "Hasło niepoprawne<br>";
?>
</body>
</html>