<?php

// browser validation
include("db/table_configdb.php");	

$updt_qty=$_POST['updt_qty'];
$update_qty_text=$_POST['update_qty_text'];
if(empty($update_qty_text))
{
	echo "Error:Update Quantity is Empty";
	exit();
}
$sql_chk_qty_count="SELECT * from qty_master where qty_name='$update_qty_text'";

if ($result=mysqli_query($con,$sql_chk_qty_count)){
		$rowcount=mysqli_num_rows($result);}
		
		if ($rowcount>0)
		{
			echo "Error2";
			exit();
		}


		
	$sql_updt_qty="update qty_master set qty_name='$update_qty_text' where qty_name='$updt_qty' ";
	if ($result=mysqli_query($con,$sql_updt_qty)){
      echo "updated";
	}
	if(! $result){
	echo 'Error1 in updating Quantity, please contact the system administrator';
	}
	
	


?>

