<?php
require('database.php');

$id = $_REQUEST['id'];
$delete = "delete from `user` where id = $id";
$query = mysqli_query($connect,$delete);
header("Location: show.php");
?>