<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM productos WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'alert("Registro eliminado exitósamente");';
    echo 'window.location="products.php";';
    echo '</script>';
   
} else {
    echo '<script language="javascript">';
    echo 'alert("Error eliminando registro!");';
    echo 'window.location="products.php";';
    echo '</script>';
}
?>