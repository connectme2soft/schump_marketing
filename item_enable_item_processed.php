<?php

// browser validation
include("db/table_configdb.php");	

$all_disable=$_POST['all_disable']; 

if(empty($all_disable))
{
	echo "Error:Item to Enable is Empty";
	exit();
}




		
	$sql_enable_item="update item_master set qty_status =1 where item_name='$all_disable' and item_status=0";
    if ($result=mysqli_query($con,$sql_enable_item)){  
	if(! $result){
	echo 'Error1 in enabling Item, please contact the system administrator';
	}
	else 
	{
		echo "enabled";
	}
	}


?>

