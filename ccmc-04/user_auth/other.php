<?php
session_start();
$id = $_SESSION["id"];

?>
<html>
    <body>
        <p><?= $id ?>login</p>
    </body>
</html>