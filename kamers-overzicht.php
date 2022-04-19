<?php

require_once 'database.php';
$db = new database();

$act = $db->select("SELECT * FROM kamers");

include 'table_generators/table_generator_kamers.php';

create_table($act, 'kamer');

?>
    <a href="log_out.php" class="btn btn-danger">Log Out</a>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

