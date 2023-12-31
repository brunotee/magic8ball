<?php
session_start();
include("header.php");
include("action.php");
include ("footer.php");


?>
<form action="index.php" method="get">
    <p><?=($_SESSION['reponse'])? $_SESSION['reponse'] : "pose ta question !";?></p>

    <label>Ta Question est</label><input type="text" name="question"/>
<button type="submit">Envoi</button>
</form>