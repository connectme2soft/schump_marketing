
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Item</title>
<link rel="stylesheet" type="text/css" href="css/css_item_category_master.css" />

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/item_add_p.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
</script>
<script>
function add_item_func()
{
	var add_item=$('#add_item').val();
    if(add_item=='')
	{
		alert("Add Item is empty, enter category");
		return;
	}		
	
    var dataString = 'add_item='+ add_item ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_add_item_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="updated"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('New Item Added');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Item already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Adding records');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}
function update_item_func()
{
	
	var updt_item=$('#loads').val();
	var update_item_text=$('#update_item_text').val();
    		
	if(update_item_text=='')
	{
		alert("Update Item is empty, Select the Item");
		return;
	}		
	
    var dataString = 'updt_item='+ updt_item +'&update_item_text='+ update_item_text ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_update_item_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="updated"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('New Category Added');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Item Category already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Updating category');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}

function enable_item_func()
{
	var x = document.getElementById('all_disable').value;
	var all_disable=x;
	
    if(all_disable=='')
	{
		alert("Select the category to enable");
		return;
	}		
	
    var dataString = 'all_disable='+ all_disable ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_enable_item_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="enabled"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Category Enabled');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Item Category already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Adding records');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}
function disable_item_func()
{
	var x = document.getElementById('all_enable').value;
	var all_enable=x;
	
    if(all_enable=='')
	{
		alert("Select the Item to disable");
		return;
	}		
	
    var dataString = 'all_enable='+ all_enable ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_disable_item_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="disabled"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Item Disabled');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Item already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Adding records');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}
function delete_item_func()
{
	var x = document.getElementById('all_disable').value;
	var all_disable=x;
	
    if(all_disable=='')
	{
		alert("Select the Item to delete");
		return;
	}		
	
    var dataString = 'all_disable='+ all_disable ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_delete_item_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="deleted"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Item deleted');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Item already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in deleting records');
					 
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

$sql_item="SELECT item_name FROM item_master where item_status=1 order by item_name asc";
$sql_item_disabled="SELECT item_name FROM item_master where item_status=0 order by item_name asc";


?>
<div class="top">
<table >
<td>
<label class="button">Add/update/Change Status -Item</label>
</td>
<tr>
<td>
<label class="button">Add new Item </label> 

<input type="text" style="width:250px"name="add_item" id="add_item" class="table_text"  > 
</td>

<td>
<input type="button" class="button_add_table" name=submit value="Add"  onClick="add_item_func()">
</td>
<td>

<input type="button" class="button_add_table" value="Cancel...">
</td>
<tr>
</table>
<hr>
<table>
<td>
<input type="button" class="button_remove_table" value="Update Item">
</td>
<td>

<select name="loads" id="loads" size=3 style="width:100px;" onchange="item_func('loads','update_item_text')">
<?php
if ($result=mysqli_query($con,$sql_item)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$fv = ucwords($row['item_name']);
	

echo "<option value='".$fv."'>".$fv."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<input type="text" name="update_item_text" id="update_item_text" class="table_text"  > 
</td>



<td>
<input type="button" class="button_add_table" name=submit value="Update"  onClick="update_item_func()">
</td>
<td>

<input type="button" class="button_add_table" value="Cancel...">
</td>
</tr>
</table>
<hr>
<table>
<td>
<input type="button" class="button_remove_table" value="Disable Item" onClick="disable_item_func()">
</td>
<td>

<select name="all_enable" id="all_enable" size=3 style="width:100px;" >;
<?php
if ($result=mysqli_query($con,$sql_item)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$items_enabled = ucwords($row['item_name']);
	

echo "<option value='".$items_enabled."'>".$items_enabled."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<input type="button" class="button_remove_table" value="Enable Item" onClick="enable_item_func()">
</td>
<td>

<select name="all_disable" id="all_disable" size=3 style="width:100px;" >;
<?php
if ($result=mysqli_query($con,$sql_item_disabled)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {


	$items_disabled = ucwords($row['item_name']);
	

echo "<option value='".$items_disabled."'>".$items_disabled."</option>";
}
		}
echo "</select> ";
?>

</td>

<td>
<input type="button" class="button_remove_table" value="Delete Item" onClick="delete_item_func()">
</td>
<tr>
	
<td>
<div id="errorMessage"></div>

</td>


</table>	
</div>	        
</body>
</html>
