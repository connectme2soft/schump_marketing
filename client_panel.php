
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Take Order</title>
<link rel="stylesheet" type="text/css" href="css/css_panel_master.css" />

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/table_add.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
</script>
<script>
function table_save_func()
{
	var ttl_table=$('#ttl_table').val();
      

    var dataString = 'ttl_table='+ ttl_table ;
	alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './tableprocessed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=result;
               //$("#flash").hide();
				 //alert(result);
				 alert('Table updated');
				 window.location.reload();
				 //$("#errorMessage").html(result);
				 
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

$sql_count_tables="SELECT total_tables  FROM  table_master";
$table_exists=1;
if ($result=mysqli_query($con,$sql_count_tables)){
		$rowcount=mysqli_num_rows($result);}
		if ($rowcount>0)
		{
			$table_exists=1;
		}
		else{
			$table_exists=0;
		}
if($table_exists==1)
{
#echo "records-yes";
	$sql_count_tables="SELECT max(total_tables) as total_tables   FROM  table_master";
	if ($result=mysqli_query($con,$sql_count_tables)){
      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
$user_total_listed=$row['total_tables'];
#echo $user_total_listed;
		}
	}
}
if($table_exists==0)
{
	#echo "no records";
	$user_total_listed=0;
}
?>
<div class="top">
<table >

<tr>
<td >
<input type="button" class="button" value="Update Item Category"  onclick="location.href='./manage_item_category.php';">
</td>
<tr>
<td>

<input type="button" class="button" value="Update Item" onclick="location.href='./manage_item.php';">
</td>
<tr>
<td>
<input type="button" class="button" value="Update Quantity" onclick="location.href='./manage_quantity.php';">
</td>
<tr>
<td>
<input type="button" class="button" value="Update Table"  onclick="location.href='./manage_table.php';"/>
</td>
<tr>
</table>
<fieldset>
    <legend>Update Price/Menu</legend>
	<table align="center" cellpadding="2px" border="0"  >
<td>
<input type="button" class="button_update_price" value="ADD Item" onclick="location.href='./manage_price_menu.php';"/>
</td>

<td>
<input type="button" class="button_update_price" value="Update Item" onclick="location.href='./update_price_menu.php';"/>
</td>


<td>
<input type="button" class="button_update_price" value=" Disable/Delete Item" onclick="location.href='./manage_price_menu.php';"/>
</td>



</table>	
</div>	        
</body>
</html>
