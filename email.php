<?php
if($_POST["message"]) {
    mail("mohini.vem@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
