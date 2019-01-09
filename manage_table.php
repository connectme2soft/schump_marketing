
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Take Order</title>
<link rel="stylesheet" type="text/css" href="css/css_table_master.css" />

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
<td>
<input type="button" class="button" value="Add/Remove Table">
</td>
<td>
<input type="button" class="button_add_table" value="+" onClick="table_add_func('ttl_table')">
</td>
<td>
<input type="button" class="button_remove_table" value="-" onClick="table_del_func('ttl_table')">
</td>
<td>
<input type="text" name="ttl_table" id="ttl_table" class="table_text"  disabled value=<?php echo $user_total_listed ?> >
</td>
<td>
<input type="button" class="button_add_table" name=submit value="Save Now...."  onClick="table_save_func('ttl_table')">
</td>
<td>
<input type="button" class="button_add_table" value="Cancel...">
</td>
</tr>
<td>
<div id="table_count_status">Current no. of tables:<?php echo $user_total_listed ?></div>

</td>
<tr>

</table>	
</div>	        
</body>
</html>
