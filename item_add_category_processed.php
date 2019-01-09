<?php

// browser validation
include("db/table_configdb.php");	

$add_cat=$_POST['add_cat']; 

if(empty($add_cat))
{
	echo "Error:New category is Empty";
	exit();
}

$sql_chk_item_count="SELECT * from item_category_master where item_category_name='$add_cat'";

if ($result=mysqli_query($con,$sql_chk_item_count)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{
			echo "Error2";
			exit();
		}
		
	$sql_add_cat="insert into item_category_master(item_category_name)values('$add_cat')";
	if ($result=mysqli_query($con,$sql_add_cat)){
	echo "updated";
	}
	
	if(! $result){
	echo 'Error1 in adding new category, please contact the system administrator';
	}
	


?>

