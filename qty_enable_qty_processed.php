<?php

// browser validation
include("db/table_configdb.php");	

$all_disable=$_POST['all_disable']; 

if(empty($all_disable))
{
	echo "Error:Quantity to Enable is Empty";
	exit();
}




		
	$sql_enable_item="update qty_master set qty_status =1 where qty_name='$all_disable' and qty_status=0";
    if ($result=mysqli_query($con,$sql_enable_item)){  
	if(! $result){
	echo 'Error1 in enabling quantity, please contact the system administrator';
	}
	else 
	{
		echo "enabled";
	}
	}


?>

