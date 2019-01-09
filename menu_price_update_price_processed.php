<?php

// browser validation
include("db/table_configdb.php");	

$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];
$cat_name=$_POST['cat_name'];
$qty_name=$_POST['qty_name'];
$item_id=$_POST['item_id'];
$item_current_serving_qty=$_POST['item_current_serving_qty'];
$item_current_cat=$_POST['item_current_cat'];
if(empty($cat_name))
{
	$cat_name=$item_current_cat;
}
if(empty($qty_name))
{
	$qty_name=$item_current_serving_qty;
}
if ((empty($item_name))||(empty($item_price )) ||(empty($item_current_serving_qty ))||(empty($item_current_cat )))
{
	echo "Error3";
	exit();
}

$sql_chk_item_count="SELECT * from restaurant_menu_items where menu_item_id=$item_id";

if ($result=mysqli_query($con,$sql_chk_item_count)){
		$rowcount=mysqli_num_rows($result);}
		
		if ($rowcount<1)
		{
			echo "Error2";
			exit();
		}


		
	$sql_updt_menu="update restaurant_menu_items set menu_item_name='$item_name',menu_item_cat_name='$cat_name',menu_item_qty_name='$qty_name',menu_item_price='$item_price' where menu_item_id=$item_id ";
	if ($result=mysqli_query($con,$sql_updt_menu)){
      echo "updated";
	}
	if(! $result){
	echo 'Error1 in updating Menu-Price, please contact the system administrator';
	}
	
	


?>

