<?php
if(isset($_POST)){
    if($_POST['password'] == 1){
        $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
Inscription :
<form method="post" name="inscription">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="hidden" name="id" value="1">
    <input type="submit" value="Envoyer">
</form>


</body>
</html>