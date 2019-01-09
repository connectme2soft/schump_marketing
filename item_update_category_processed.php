<?php

// browser validation
include("db/table_configdb.php");	

$updt_cat=$_POST['updt_cat'];
$update_cat_text=$_POST['update_cat_text'];
if(empty($update_cat_text))
{
	echo "Error:New category is Empty";
	exit();
}
$sql_chk_item_count="SELECT * from item_category_master where item_category_name='$update_cat_text'";

if ($result=mysqli_query($con,$sql_chk_item_count)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{
			echo "Error2";
			exit();
		}


		
	$sql_updt_cat="update item_category_master set item_category_name='$update_cat_text' where item_category_name='$updt_cat' ";
	if ($result=mysqli_query($con,$sql_updt_cat)){
      echo "updated";
	}
	if(! $result){
	echo 'Error1 in updating category, please contact the system administrator';
	}
	
	


?>

