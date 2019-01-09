<?php

// browser validation
include("db/table_configdb.php");	

$all_enable=$_POST['all_enable']; 

if(empty($all_enable))
{
	echo "Error:Item to disable is Empty";
	exit();
}




		
	$sql_disable_item="update item_master set item_status =0 where item_name='$all_enable' and item_status=1";
    if ($result=mysqli_query($con,$sql_disable_item)){  
	if(! $result){
	echo 'Error1 in enabling item, please contact the system administrator';
	}
	else 
	{
		echo "disabled";
	}
	}


?>

