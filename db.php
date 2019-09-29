<?php
    $db_conn = pg_connect("********database login info*********")
        or die("Could not connect: " . pg_last_error());

?>
