<?php
if (isset($_POST["message"])) {
    $retour = mail("rsgl.alexis@gmail.com", $_POST["fname"], $_POST["sujet"], "From:" . $_POST["email"], $_POST["subject"]);
    if ($retour) {
        echo "L'email a bien été envoyé";
        header("location: index.html");
    }
    header("location: index.html");
    
}
?>