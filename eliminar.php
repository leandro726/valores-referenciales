<?php
include 'db.php';
$id = $_GET['id'];

$con->query("DELETE FROM mediciones WHERE id = $id");
header("Location: listar.php");