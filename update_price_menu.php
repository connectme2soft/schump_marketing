
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Price and Menu</title>
<link rel="stylesheet" type="text/css" href="css/css_menu_item_update.css" />

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
</script>
<script>
function cancel_item_menu_func()
{ 
window.location.reload();
}
</script>
<script>
function update_item_menu_func()
{
	//alert("pp");
	var item_id=document.getElementById('item_selected').value;
	
	var row_id_item_name= "item_name" + "_" + item_id;
	//alert(row_id_item_name);
	var item_name=document.getElementById(row_id_item_name).value;
	//alert(item_name);
	
	//current item cat name
	var row_id_current_item_cat= "current_item_cat" + "_" + item_id;
	//alert(row_id_current_item_cat);
	var item_current_cat=document.getElementById(row_id_current_item_cat).value;
	alert(item_current_cat);
	
	//current item cat name
	var row_id_current_serving_qty= "current_serving_qty" + "_" + item_id;
	//alert(row_id_current_item_cat);
	var item_current_serving_qty=document.getElementById(row_id_current_serving_qty).value;
	alert(item_current_serving_qty);
	
	
	var row_id_price= "item_price" + "_" + item_id;
	var item_price=document.getElementById(row_id_price).value;
	alert(item_price);
	
	 row_id_cat_name= "item_cat_name" + "_" + item_id;
	 alert(row_id_cat_name);
	var cat_name=document.getElementById(row_id_cat_name).value;
	
	alert(cat_name);
	
	row_id_qty_name= "item_qty_name" + "_" + item_id;
	 alert(row_id_qty_name);
	var qty_name=document.getElementById(row_id_qty_name).value;
	
	alert(qty_name);
	
//check for empty all if(update_item_text=='')
	
if((item_name=='') || (item_price=='') || (item_current_cat=='') || (item_current_serving_qty=='') ) 
	{
		alert("Item name, Price, category or quantity cannot be empty.");
		$("#errorMessage").html('Error:Item name and Price cannot be empty.');
		$("#errorMessage").css("background-color","red");
		return;
	}
	$("#errorMessage").html('');

    if ( !(/^[0-9]+(\.)?[0-9]*$/.test(item_price) )){
	alert("Enter Integer number or number with decimal for Item Price. A decimal no should have a value before point like 0.50,1.5");
	
	$("#errorMessage").html('Enter Integer number or number with decimal for Item Price. A decimal no should have a value before point like 0.50,1.5');
	$("#errorMessage").css("background-color","red");
	return;
	}
	
	
			
	var dataString = 'item_name='+ item_name +'&item_price='+ item_price +'&cat_name='+ cat_name +'&qty_name='+ qty_name +'&item_id='+ item_id +'&item_current_serving_qty='+ item_current_serving_qty +'&item_current_cat='+ item_current_cat;
	alert(dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: './menu_price_update_price_processed.php',
	  
      data: dataString,
      cache: false,
	  success: function(result){
               var result=$.trim(result);
               //$("#flash").hide();
				 alert(result);
				 if(result=="updated"){
					 
					 
				 
				 $("#errorMessage").html('Table updated');
				 alert('Menu Item Updated');
				 window.location.reload();
				 }
				 else if(result=="Error2")
				 {
					
					 $("#errorMessage").html('Item not available for update');
					 $("#errorMessage").css("background-color","red");
				 }
				 else if(result=="Error3")
				 {
					
					 $("#errorMessage").html('Item name or Price is empty');
					 $("#errorMessage").css("background-color","red");
					 alert("Item name or Price is empty");
				 }
				  else 
				 {
					
					 $("#errorMessage").html('Error in Updating category');
					 $("#errorMessage").css("background-color","red");
					 
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

<script type="text/javascript">
    $(document).ready(function(){
        $("input[type='radio']").click(function(){
            var radioValue = $("input[name='item_name_radio']:checked").val();
            if(radioValue){
                alert("Your are a - " + radioValue);
				$("#item_selected").val(radioValue);
				//var update_button='update_button'+"_"+ radioValue; 
				//alert(update_button);
				$("#update_button").removeAttr('disabled');
				$("#update_button").css("background-color","#4CAF50");
				
			
				 
            }
        });
        
    });
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
<div class="fixed">
<table >
<td>
<label class="button">update/Change Status-Price and Menu</label>
</td><tr>
</table>

<table >


<td >
<input type ="text"  name="item_selected" id="item_selected"  value=""/>
</td>
<td>
<input type="button" class="button_add_table" disabled name= "update_button" id= "update_button"  value="Update menu"  onClick="update_item_menu_func()">
</td>
<td>
<input type="button" class="button_remove_table" name="cancel" value="Cancel"  onClick="cancel_item_menu_func()">
	  </td>
<td>
<div id="errorMessage"></div>

</td>
</table>
</div>
<div >
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
	$row_id_current_item_cat="current_item_cat"."_".$menu_item_id;
	$row_id_current_serving_qty="current_serving_qty"."_".$menu_item_id;
	//$row_id_current_price="current_item_price"."_".$menu_item_id;
	$row_id_item_name="item_name"."_".$menu_item_id;
	$row_id_cat_name='item_cat_name'."_".$menu_item_id;
	$row_id_qty_name='item_qty_name' ."_". $menu_item_id;
	$row_id_price='item_price' ."_". $menu_item_id;
	$update_button='update_button'."_". $menu_item_id;
	
echo "<td class='update_td_view'><input type='text' style='width:250px' name=$row_id_item_name id=$row_id_item_name class='table_text' value='$item_name'</td>";
//echo "<td class='update_td_view'><input type='text' style='width:250px' name=$row_id_current_item_cat id=$row_id_current_item_cat class='table_text' value='$menu_item_cat_name'<br>";
echo "<td class='update_td_view'><input type='text' disabled style='width:250px' name=$row_id_current_item_cat id=$row_id_current_item_cat class='table_text' value='$menu_item_cat_name'<hr><br>"; ?>
<select name= <?php echo htmlspecialchars($row_id_cat_name );?> id= <?php echo htmlspecialchars($row_id_cat_name );?> size="4" style="width:250px;" />
<?php
if ($result2=mysqli_query($con,$sql_item_category)){
		$rowcount=mysqli_num_rows($result2);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result2, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$item_category_name = ucwords($row['item_category_name']);
	

echo "<option value='".$item_category_name."'>".$item_category_name."</option>";
}
		}
echo "</select> ";
echo "</td>";

echo "<td class='update_td_view'><input type='text' disabled style='width:250px' name=$row_id_current_serving_qty id=$row_id_current_serving_qty class='table_text' value='$menu_item_qty_name'<hr><br>"; ?>


<select name= <?php echo htmlspecialchars($row_id_qty_name );?> id= <?php echo htmlspecialchars($row_id_qty_name );?> size="4" style="width:250px;" />
<?php
if ($result3=mysqli_query($con,$sql_qty)){
		$rowcount=mysqli_num_rows($result3);}
		if ($rowcount>0)
		{

      while($row=mysqli_fetch_array($result3, MYSQLI_ASSOC)) {

#echo $user_total_listed;
	$qty_name = ucwords($row['qty_name']);
	

echo "<option value='".$qty_name."'>".$qty_name."</option>";
}
		}
echo "</select> ";
echo "</td>";
//echo "<td>$row_id_qty_name</td>";

echo "<td class='update_td_view'><input type='text' style='width:250px' name= $row_id_price id=$row_id_price class='table_text' value='$menu_item_price'</td>";
	  
	 echo '<td class="update_td_view">';
?>

<input type="radio"  style="border: 0px;    width: 100%;    height: 2em;" name="item_name_radio" id="item_name_radio" value=<?php echo htmlspecialchars($menu_item_id);?> />




	  
	  
<?php	  }
		}
?>

<tr>





</table>
<table>


</td>	
</div>	        
</body>
</html>
