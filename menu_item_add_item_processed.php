<?php

// browser validation
include("db/table_configdb.php");	

$select_item=$_POST['select_item']; 
$select_item_cat=$_POST['select_item_cat']; 
$select_item_qty=$_POST['select_item_qty']; 
$add_price_text=$_POST['add_price_text']; 
if((empty($select_item) )or (empty($select_item_cat))or (empty($select_item_qty))or (empty($add_price_text)))
{
	echo "Error:Select all the manadatory items";
	exit();
}

$sql_menu_item_exists="select * from restaurant_menu_items where menu_item_name='$select_item' and menu_item_qty_name='$select_item_qty' ";
if ($result=mysqli_query($con,$sql_menu_item_exists)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{
			echo "Error2";
			exit();
		}
	
	$sql_add_menu_item="insert into restaurant_menu_items(menu_item_name,menu_item_cat_name,menu_item_qty_name,menu_item_price)values('$select_item','$select_item_cat','$select_item_qty',$add_price_text)";
	if ($result=mysqli_query($con,$sql_add_menu_item)){
	echo "added";
	}
	
	if(! $result){
	echo 'Error1 in adding new item in menu, please contact the system administrator';
	}
	


?>

