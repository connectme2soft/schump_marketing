<?php

// browser validation
include("db/table_configdb.php");	

$all_enable=$_POST['all_enable']; 

if(empty($all_enable))
{
	echo "Error:Item to disable is Empty";
	exit();
}




		
	$sql_disable_item="update qty_master set qty_status =0 where qty_name='$all_enable' and qty_status=1";
    if ($result=mysqli_query($con,$sql_disable_item)){  
	if(! $result){
	echo 'Error1 in enabling Quantity, please contact the system administrator';
	}
	else 
	{
		echo "disabled";
	}
	}


?>

