<?php

// browser validation
include("db/table_configdb.php");	

$all_enable=$_POST['all_enable']; 

if(empty($all_enable))
{
	echo "Error:Category to Enable is Empty";
	exit();
}




		
	$sql_disable_cat="update item_category_master set item_category_status =0 where item_category_name='$all_enable' and item_category_status=1";
    if ($result=mysqli_query($con,$sql_disable_cat)){  
	if(! $result){
	echo 'Error1 in enabling category, please contact the system administrator';
	}
	else 
	{
		echo "disabled";
	}
	}


?>

