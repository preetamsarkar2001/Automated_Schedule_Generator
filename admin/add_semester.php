<?php 
include('../config.php');
extract($_POST);
if(isset($save))
{
$que=mysqli_query($con,"select * from semester where sem_id=''");	
$row=mysqli_num_rows($que);
	if($row)
	{
	$err="<script>alert('This Semester already exists')</script>";
	}
	else
	{
mysqli_query($con,"insert into semester values(null,'$s','$c')");	

	$err="<script>alert('Congrats Semester added successfully!!!')</script>";
	}
	
}

?>

<div class="row">
<div class="col-md-5">
<h2>Add Semester</h2>
<form method="POST" enctype="multipart/form-data">
  <table border="0" cellspacing="5" cellpadding="5" class="table">
  <tr>
  <td colspan="2"><?php echo @$err; ?></td>
  </tr>
 <tr>
    <th width="237" scope="row">Select Department</th>
    <td width="213">
    <select name="c" class="form-control">
	<?php 
	$dep=mysqli_query($con,"select * from department");
	while($dp=mysqli_fetch_array($dep))
	{
	$dp_id=$dp[0];
	echo "<option value='$dp_id'>".$dp[1]."</option>";
	}
	?>
	
    </select>
  </tr>
 
   <tr>
    <th width="237" scope="row">Semester Name </th>
    <td width="213"><input type="text" name="s" class="form-control"/></td>
  </tr>
  
 <tr>
    <td colspan="2" align="center">
	<input type="submit" value="Add Semester" name="save" class="btn btn-success" />
	
	<input type="reset" value="Reset" class="btn btn-success"/>
	
	</td>
  </tr>
  
  </table>
  </form>
</div>
</div>