
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <form action="process_login.php" method="post";>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login Minimalista</title>
   
</head>
<?php
if(isset($_GET["rec_senha"])){
    require_once "../views/rec_senha.php";
} else if(isset($_GET["rec_email"])){
    require_once "../views/rec_email.php";
}
else{
    require_once "../views/login.php";
}

?>

</html>