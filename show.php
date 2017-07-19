<?php
require('database.php');

?>

<html>
<head>
</head>

<body>
<style>
.box {border: black solid;
	 height:500px;
	 width:600px;}
	 
</style>
<table>
<tr>
	<td width="50%"></td>
    <td class="box" align="center">
    <div align="center">
    <h1>Result</h1>
    <table border="1" style="border-collapse:collapse;" >
        <tr border="1">
        	<td>No</td>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Date(Created)</td>
            <td>Date(Update)</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
		$count=1;
		$select = "select * from `user` order by 'id' asc";
		$query = mysqli_query($connect,$select);
		while($row = mysqli_fetch_assoc($query)){
		?>
        
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo uniqid($row['id']) ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['des'] ?></td>
            <td><?php echo $row['date1'] ?></td>
            <td><?php echo $row['date2'] ?></td>
            <td><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
        <?php $count++; } ?>
    </table>
    	<div align="center"><br /><br /><a href="insert.php"><input name="view" type="button" value="Back" /></a></div>
    </div>
     </td>
</tr>
</table>

</body>
</html>