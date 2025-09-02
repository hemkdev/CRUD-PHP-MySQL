<?php
// Include the database connection file
require_once("../config/bd.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($conn, "DELETE FROM usuario WHERE ID_usuario = $id");

header("Location:../list.php");