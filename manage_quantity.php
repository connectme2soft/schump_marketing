
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Quantity</title>
<link rel="stylesheet" type="text/css" href="css/css_item_category_master.css" />

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/qty_update.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
</script>
<script>
function add_qty_func()
{
	var add_qty=$('#add_qty').val();
    if(add_qty=='')
	{
		alert("Add Qty is empty, enter Quantity");
		return;
	}		
	
    var dataString = 'add_qty='+ add_qty ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './qty_add_qty_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="updated"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('New Qunatity Added');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Quantity already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Adding Quantity');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}
function update_qty_func()
{
	
	var updt_qty=$('#loads').val();
	var update_qty_text=$('#update_qty_text').val();
    		
	if(update_qty_text=='')
	{
		alert("Update Quantity is empty, Select the Quantity");
		return;
	}		
	
    var dataString = 'updt_qty='+ updt_qty +'&update_qty_text='+ update_qty_text ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './qty_update_qty_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="updated"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Quantity updated');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Quantity already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Updating Quantity');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}

function enable_qty_func()
{
	var x = document.getElementById('all_disable').value;
	var all_disable=x;
	
    if(all_disable=='')
	{
		alert("Select the Quantity to enable");
		return;
	}		
	
    var dataString = 'all_disable='+ all_disable ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './qty_enable_qty_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="enabled"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Quantity Enabled');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Quantity already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Adding Quantity');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}

function update_qty_func()
{
	
	var updt_qty=$('#loads').val();
	var update_qty_text=$('#update_qty_text').val();
    		
	if(update_qty_text=='')
	{
		alert("Update Quantity is empty, Select the Quantity");
		return;
	}		
	
    var dataString = 'updt_qty='+ updt_qty +'&update_qty_text='+ update_qty_text ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './qty_update_qty_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="updated"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Quantity updated');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Quantity already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Updating Quantity');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}

function delete_qty_func()
{
	var x = document.getElementById('all_disable').value;
	var all_disable=x;
	
    if(all_disable=='')
	{
		alert("Select the Quantity to delete");
		return;
	}		
	
    var dataString = 'all_disable='+ all_disable ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './qty_delete_qty_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="deleted"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Quantity Deleted');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Quantity already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Deleting Quantity');
					 
				 }
      },
	 error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
	alert(textStatus);
	alert(errorThrown);
	 }
      });
}
function disable_qty_func()
{
	var x = document.getElementById('all_enable').value;
	var all_enable=x;
	
    if(all_enable=='')
	{
		alert("Select the Quantity to disable");
		return;
	}		
	
    var dataString = 'all_enable='+ all_enable ;
	//alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './qty_disable_qty_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 //alert(result);
				 if(result=="disabled"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Quantity Disabled');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Quantity already exists');
					 
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Adding Quantity');
					 
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

$sql_qty="SELECT qty_name FROM qty_master where qty_status=1 order by qty_name asc";
$sql_qty_disabled="SELECT qty_name FROM qty_master where qty_status=0 order by qty_name asc";


?>
<div class="top">
<table >
<td>
<label class="button">Add/update/Change Status -Quantity</label>
</td>
<tr>
<td>
<label class="button">Add new Quantity </label> 

<input type="text" style="width:250px"name="add_qty" id="add_qty" class="table_text"  > 
</td>

<td>
<input type="button" class="button_add_table" name=submit value="Add"  onClick="add_qty_func()">
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

<select name="loads" id="loads" size=3 style="width:100px;" onchange="qty_select_func('loads','update_qty_text')">
<?php
if ($result=mysqli_query($con,$sql_qty)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$fv = ucwords($row['qty_name']);
	

echo "<option value='".$fv."'>".$fv."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<input type="text" name="update_qty_text" id="update_qty_text" class="table_text"  > 
</td>



<td>
<input type="button" class="button_add_table" name=submit value="Update"  onClick="update_qty_func()">
</td>
<td>

<input type="button" class="button_add_table" value="Cancel...">
</td>
</tr>
</table>
<hr>
<table>
<td>
<input type="button" class="button_remove_table" value="Disable Quantity" onClick="disable_qty_func()">
</td>
<td>

<select name="all_enable" id="all_enable" size=3 style="width:100px;" >;
<?php
if ($result=mysqli_query($con,$sql_qty)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$qty_enabled = ucwords($row['qty_name']);
	

echo "<option value='".$qty_enabled."'>".$qty_enabled."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<input type="button" class="button_remove_table" value="Enable Quantity" onClick="enable_qty_func()">
</td>
<td>

<select name="all_disable" id="all_disable" size=3 style="width:100px;" >;
<?php
if ($result=mysqli_query($con,$sql_qty_disabled)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {


	$qty_disabled = ucwords($row['qty_name']);
	

echo "<option value='".$qty_disabled."'>".$qty_disabled."</option>";
}
		}
echo "</select> ";
?>

</td>
<td>
<input type="button" class="button_remove_table" value="Delete Quantity" onClick="delete_qty_func()">
</td>	
<td>
<div id="errorMessage"></div>

</td>


</table>	
</div>	        
</body>
</html>
