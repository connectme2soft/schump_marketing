<?php

// browser validation
include("db/table_configdb.php");	

$add_item=$_POST['add_item']; 

if(empty($add_item))
{
	echo "Error:New Item is Empty";
	exit();
}
$sql_chk_item_count="SELECT * from item_master where item_name='$add_item'";

if ($result=mysqli_query($con,$sql_chk_item_count)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{
			echo "Error2";
			exit();
		}
		
	$sql_add_item="insert into item_master(item_name)values('$add_item')";
	if ($result=mysqli_query($con,$sql_add_item)){
	echo "updated";
	}
	
	if(! $result){
	echo 'Error1 in adding new category, please contact the system administrator';
	}
	


?>

