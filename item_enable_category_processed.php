<?php

// browser validation
include("db/table_configdb.php");	

$all_disable=$_POST['all_disable']; 

if(empty($all_disable))
{
	echo "Error:Category to Enable is Empty";
	exit();
}




		
	$sql_enable_cat="update item_category_master set item_category_status =1 where item_category_name='$all_disable' and item_category_status=0";
    if ($result=mysqli_query($con,$sql_enable_cat)){  
	if(! $result){
	echo 'Error1 in enabling category, please contact the system administrator';
	}
	else 
	{
		echo "enabled";
	}
	}


?>

