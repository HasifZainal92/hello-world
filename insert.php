<?php
require('database.php');

if(isset($_POST['send']))
{
	$nama = $_POST['nama'];
	$des = $_POST['des'];
	$dateCreated = date("Y-m-d H:i:s");
	
	$insert = "INSERT into `user` (nama, des, date1) values ('$nama','$des','$dateCreated')";
	$test = mysqli_query($connect,$insert);
	
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
	
}
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
    <table>
    	<tr>
        	<th><h1>Insert Detail</h1></th>
        </tr>
        <tr>
        	<td>
<form action="" method="post" enctype="multipart/form-data">

	Name:&nbsp;&nbsp;<input name="nama" type="text" placeholder="Insert Name" /><br/><br/>
    
	Description:&nbsp;&nbsp; <input name="des" type="text" placeholder="Insert Description" /><br/><br/> 
    
	<a href="show.php"><input name="view" type="button" value="View List" /></a>
    
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="send" type="submit" value="Send" /><br/><br/> 
    
</form> 
       		</td> 
        </tr>
    </table>
     </td>
</tr>
</table>

</body>
</html>