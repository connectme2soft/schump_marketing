
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Price and Menu</title>
<link rel="stylesheet" type="text/css" href="css/css_menu_item_update.css" />

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/category_add.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
</script>
<script>
function update_item_menu_func()
{
	var select_item=document.getElementById('select_item').value;
	
    if((select_item==''){
		alert("Error:Select Item to update");
		$("#errorMessage").html('Error:Select Item to update');
		return;
	}
	$("#errorMessage").html('');

}




</script>
</head>
<body>
<?php
     
  
include("db/table_configdb.php");

   
	
$curr_dt = date('Y-m-d H:i:s');


$sql_item="SELECT * FROM restaurant_menu_items where menu_item_status=1 order by menu_item_name asc";
$sql_item_category="SELECT item_category_name FROM item_category_master where item_category_status=1 order by item_category_name asc";
$sql_qty="SELECT * from qty_master where qty_status=1 order by qty_name asc";

?>
<!--<div class="top" style="overflow-x:auto;">-->
<div class="top">
<table >
<td>
<label class="button">update/Change Status-Price and Menu</label>
</td><tr>
</table>
<table>

<tr>
<th class='update_td_view' >Menu Item name</th>


<th class='update_td_view' >Menu Category</th>


<th class='update_td_view' >Serving Quantity</th>


<th class='update_td_view' >Current Price</th>
<th class='update_td_view' >Click radio and update</th>

</tr>



<?php
if ($result=mysqli_query($con,$sql_item)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$item_name = ucwords($row['menu_item_name']);
	$menu_item_cat_name = ucwords($row['menu_item_cat_name']);
	$menu_item_qty_name = ucwords($row['menu_item_qty_name']);
	$menu_item_price = ucwords($row['menu_item_price']);
	$menu_item_id=($row['menu_item_id']);
	echo "<tr style='border:solid;border-width: 1px 0;'>";
	
echo "<td class='update_td_view'><input type='text' style='width:250px' disabled  name='item_name' id='item_name' class='table_text' value='$item_name'</td>";
echo "<td class='update_td_view'><input type='text' style='width:250px' disabled  name='item_cat' id='item_cat' class='table_text' value='$menu_item_cat_name'</td>"; 

echo "</td>";

echo "<td class='update_td_view'><input type='text' style='width:250px' disabled  name='item_qty' id='item_qty' class='table_text' value='$menu_item_qty_name'</td>"; 


echo "</td>";
echo "<td class='update_td_view'><input type='text' style='width:250px' disabled  name='item_price' id='item_price' class='table_text' value='$menu_item_price'</td>"; 

	  
	  
echo '<td class="update_td_view">';
?>
<input type="radio"  style="border: 0px;    width: 100%;    height: 2em;" name="item_name_radio" id="item_name_radio" value=<?php echo htmlspecialchars($menu_item_id);?> onclick ="return email_seller('<?php echo htmlspecialchars($menu_item_id);?>','multi_email','send_email','email_selected','email_unselected')"/>
<?php
echo '<input type="button" class="button_add_table" name=submit value="Update menu"  onClick="add_item_menu_func("add_cat")">';


echo '<input type="button" class="button_add_table" name=submit value="Cancel"  onClick="add_cat_func("add_cat")">';
echo '</td>';
}	
		}
?>

<tr>


<td>
<div id="errorMessage"></div>

</td>


</table>
<table>


</td>	
</div>	        
</body>
</html>
