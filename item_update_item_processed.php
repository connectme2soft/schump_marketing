<?php

// browser validation
include("db/table_configdb.php");	

$updt_item=$_POST['updt_item'];
$update_item_text=$_POST['update_item_text'];
if(empty($update_item_text))
{
	echo "Error:Update Item is Empty";
	exit();
}
$sql_chk_item_count="SELECT * from item_master where item_name='$update_item_text'";

if ($result=mysqli_query($con,$sql_chk_item_count)){
		$rowcount=mysqli_num_rows($result);}
		
		if ($rowcount>0)
		{
			echo "Error2";
			exit();
		}


		
	$sql_updt_cat="update item_master set item_name='$update_item_text' where item_name='$updt_item' ";
	if ($result=mysqli_query($con,$sql_updt_cat)){
      echo "updated";
	}
	if(! $result){
	echo 'Error1 in updating item, please contact the system administrator';
	}
	
	


?>

