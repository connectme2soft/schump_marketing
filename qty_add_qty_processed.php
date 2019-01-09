<?php

// browser validation
include("db/table_configdb.php");	

$add_qty=$_POST['add_qty']; 

if(empty($add_qty))
{
	echo "Error:New Item is Empty";
	exit();
}
$sql_chk_qty_count="SELECT * from qty_master where qty_name='$add_qty'";

if ($result=mysqli_query($con,$sql_chk_qty_count)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{
			echo "Error2";
			exit();
		}
		
	$sql_add_qty="insert into qty_master(qty_name)values('$add_qty')";
	if ($result=mysqli_query($con,$sql_add_qty)){
	echo "updated";
	}
	
	if(! $result){
	echo 'Error1 in adding new Quantity, please contact the system administrator';
	}
	


?>

