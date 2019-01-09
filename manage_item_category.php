
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Take Order</title>
<link rel="stylesheet" type="text/css" href="css/css_item_category_master.css" />

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/category_add.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
</script>
<script>
function add_cat_func()
{
	var add_cat=$('#add_cat').val();
    if(add_cat=='')
	{
		alert("Add category is empty, enter category");
		return;
	}		
	
    var dataString = 'add_cat='+ add_cat ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_add_category_processed.php',
	  
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
function update_cat_func()
{
	var updt_cat=$('#loads').val();
	var update_cat_text=$('#update_cat_text').val();
    		
	if(update_cat_text=='')
	{
		alert("Update category is empty, Select the category");
		return;
	}		
	
    var dataString = 'updt_cat='+ updt_cat +'&update_cat_text='+ update_cat_text ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_update_category_processed.php',
	  
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

function enable_item_cat_func()
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
      url: './item_enable_category_processed.php',
	  
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

function delete_item_cat_func()
{
	var x = document.getElementById('all_disable').value;
	var all_disable=x;
	
    if(all_disable=='')
	{
		alert("Select the category to delete");
		return;
	}		
	
    var dataString = 'all_disable='+ all_disable ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_delete_category_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="deleted"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Category deleted');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Item Category already exists');
					 
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
function disable_item_cat_func()
{
	var x = document.getElementById('all_enable').value;
	var all_enable=x;
	
    if(all_enable=='')
	{
		alert("Select the category to disable");
		return;
	}		
	
    var dataString = 'all_enable='+ all_enable ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './item_disable_category_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="disabled"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Category Disabled');
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

</script>
</head>
<body>
<?php
     
  
include("db/table_configdb.php");

   
	
$curr_dt = date('Y-m-d H:i:s');

$sql_item_category="SELECT item_category_name FROM item_category_master where item_category_status=1 order by item_category_name asc";
$sql_item_category_disabled="SELECT item_category_name FROM item_category_master where item_category_status=0 order by item asc";


?>
<div class="top">
<table >
<td>
<label class="button">Add/update/Change Status Item Category</label>
</td>
<tr>
<td>
<label class="button">Add new Item Category</label> 

<input type="text" style="width:250px"name="add_cat" id="add_cat" class="table_text"  > 
</td>

<td>
<input type="button" class="button_add_table" name=submit value="Add"  onClick="add_cat_func('add_cat')">
</td>
<td>

<input type="button" class="button_add_table" value="Cancel...">
</td>
<tr>
</table>
<hr>
<table>
<td>
<input type="button" class="button_remove_table" value="Update Category" onClick="update_cat_func('ttl_table')">
</td>
<td>

<select name="loads" id="loads" size=3 style="width:100px;" onchange="category_select_func('loads','update_cat_text')">;
<?php
if ($result=mysqli_query($con,$sql_item_category)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$fv = ucwords($row['item_category_name']);
	

echo "<option value='".$fv."'>".$fv."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<input type="text" name="update_cat_text" id="update_cat_text" class="table_text"  > 
</td>



<td>
<input type="button" class="button_add_table" name=submit value="Update"  onClick="update_cat_func()">
</td>
<td>

<input type="button" class="button_add_table" value="Cancel...">
</td>
</tr>
</table>
<hr>
<table>
<td>
<input type="button" class="button_remove_table" value="Disable Category" onClick="disable_item_cat_func()">
</td>
<td>

<select name="all_enable" id="all_enable" size=3 style="width:100px;" >;
<?php
if ($result=mysqli_query($con,$sql_item_category)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$items_enabled = ucwords($row['item_category_name']);
	

echo "<option value='".$items_enabled."'>".$items_enabled."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<input type="button" class="button_remove_table" value="Enable Category" onClick="enable_item_cat_func()">
</td>
<td>

<select name="all_disable" id="all_disable" size=3 style="width:100px;" >;
<?php
if ($result=mysqli_query($con,$sql_item_category_disabled)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

echo $user_total_listed;
	$items_disabled = ucwords($row['item_category_name']);
	

echo "<option value='".$items_disabled."'>".$items_disabled."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<input type="button" class="button_remove_table" value="Delete Category" onClick="delete_item_cat_func()">
</td>

<tr>	
<td>
<div id="errorMessage"></div>

</td>


</table>	
</div>	        
</body>
</html>
