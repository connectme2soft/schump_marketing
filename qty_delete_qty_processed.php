<?php

// browser validation
include("db/table_configdb.php");	

$all_disable=$_POST['all_disable']; 

if(empty($all_disable))
{
	echo "Error:Quantity to delete is Empty";
	exit();
}




		
	$sql_delete_item="delete from qty_master where qty_name='$all_disable' and qty_status=0";
	//echo $sql_delete_item;
    if ($result=mysqli_query($con,$sql_delete_item)){  
	if(! $result){
	echo 'Error1 in deleting quantity, please contact the system administrator';
	}
	else 
	{
		echo "deleted";
	}
	}


?>

