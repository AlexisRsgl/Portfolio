<?php
if (isset($_POST["message"])) {
    $retour = mail("rsgl.alexis@gmail.com", $_POST["name"], $_POST["message"], "From:" . $_POST["email"]);
    if ($retour) {
        echo "L'email a bien été envoyé";
        header("location: main.html");
    }
    header("location: main.html");
    
}
?>