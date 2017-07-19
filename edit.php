<?php
require('database.php');

$id = $_REQUEST['id'];
$select = "Select * from user where id = '".$id."'";
$query = mysqli_query($connect, $select);
$row = mysqli_fetch_assoc($query);
?>

<html>
<head>
</head>

<?php

if(isset($_POST['send']))
{
	$nama = $_POST['nama'];
	$des = $_POST['des'];
	$dateUpdated = date("Y-m-d H:i:s");
	
	$update = "update `user` set nama='".$nama."', des='".$des."', date2='".$dateUpdated."' where id = '".$id."' ";
	$test = mysqli_query($connect,$update);
	
	if($test){
		?>
        <script>
		alert('success');
		window.location.href="show.php";
		</script>
        <?php
	} else {
		?>
        <script>
		alert('error');
		</script>
        <?php } 
	
	};
?>


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
    <table>
    	<tr>
        	<th><h1>Edit Detail</h1></th>
        </tr>
        <form action="" name"form" method="post">
        <tr>
        	<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" /></td>
        </tr>
        <tr>
            <td>Name:&nbsp;&nbsp; <input name="nama" type="text" value="<?php echo $row['nama']; ?>" placeholder="Insert Name" /><br/><br/></td>
        </tr>
        <tr>
            <td>Description:&nbsp;&nbsp; <input name="des" type="text" value="<?php echo $row['des']; ?>" placeholder="Insert Description" /><br/><br/></td>
        </tr>
        
        <tr>
            <td align="right"><a href="show.php">
            <input name="view" type="button" value="Back" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="send" type="submit" value="Update" /><br/><br/> </td>
         </form>
        </tr>
    </table>
     </td>
</tr>
</table>

</body>
</html>