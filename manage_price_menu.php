
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Price and Menu</title>
<link rel="stylesheet" type="text/css" href="css/css_item_category_master.css" />

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/category_add.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
</script>
<script>
function add_item_menu_func()
{
	var select_item=document.getElementById('select_item').value;
	var select_item_cat=document.getElementById('select_item_cat').value;
	var select_item_qty=document.getElementById('select_item_qty').value;
	var add_price_text=document.getElementById('add_price_text').value;
	
    if((select_item=='') || (select_item_cat=='')|| (select_item_qty=='') || (add_price_text=='') ) 
	{
		alert("Error:Check if you have selected/Entered all the mandatory fields-ITEM,Category,Quantity and Price");
		$("#errorMessage").html('Error:Check if you have selected/Entered all the mandatory fields-ITEM,Category,Quantity and Price');
		return;
	}
	$("#errorMessage").html('');

    if ( !(/^[0-9]+(\.)?[0-9]*$/.test(add_price_text) )){
	alert("Enter Integer number or number with decimal. A decimal no should have a value before point like 0.50,1.5");
	
	$("#errorMessage").html('Enter Integer number or number with decimal. A decimal no should have a value before point like 0.50,1.5');
	return;
	}
    var dataString = 'select_item='+ select_item +'&select_item_cat='+ select_item_cat +'&select_item_qty='+ select_item_qty +'&add_price_text='+ add_price_text ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './menu_item_add_item_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="added"){
					 
					 
				 
				 $("#errorMessage").html('New Item updated in menu');
				 alert('New Item updated in menu');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Item with same quantity already exists in Menu.');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Adding item in menu');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}




</script>
</head>
<body>
<?php
     
  
include("db/table_configdb.php");

   
	
$curr_dt = date('Y-m-d H:i:s');

$sql_item_category="SELECT item_category_name FROM item_category_master where item_category_status=1 order by item_category_name asc";
$sql_item="SELECT item_name FROM item_master where item_status=1 order by item_name asc";
$sql_qty="SELECT qty_name FROM qty_master where qty_status=1 order by qty_name asc";


?>
<div class="top">
<table >
<td>
<label class="button">Add/update/Change Status-Price and Menu</label>
</td><tr>
</table>
<table>
<td>

<label >Select Item</label><hr>
<select name="select_item" id="select_item" size=4 style="width:100px;" 
<?php
if ($result=mysqli_query($con,$sql_item)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$item_name = ucwords($row['item_name']);
	

echo "<option value='".$item_name."'>".$item_name."</option>";
}
		}
echo "</select> ";
?>

</td>

<td>

<label >Select Item Category</label><hr>
<select name="select_item_cat" id="select_item_cat" size=4 style="width:100px;" 
<?php
if ($result=mysqli_query($con,$sql_item_category)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$item_category_name = ucwords($row['item_category_name']);
	

echo "<option value='".$item_category_name."'>".$item_category_name."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>

<label >Select Quantity</label><hr>
<select name="select_item_qty" id="select_item_qty" size=4 style="width:100px;" 
<?php
if ($result=mysqli_query($con,$sql_qty)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$item_qty = ucwords($row['qty_name']);
	

echo "<option value='".$item_qty."'>".$item_qty."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<label >Enter the Price- Rupees </label> 

<input type="text" style="width:250px"name="add_price_text" id="add_price_text" class="table_text"  > 
</td>

<tr>
<td></td>
<td>
<input type="button" class="button_add_table" name=submit value="Add Item in menu"  onClick="add_item_menu_func('add_cat')">
</td>
<td>
<input type="button" class="button_add_table" name=submit value="Cancel"  onClick="add_cat_func('add_cat')">
</td>
<td>
<div id="errorMessage"></div>

</td>


</table>
<table>


</td>	
</div>	        
</body>
</html>
