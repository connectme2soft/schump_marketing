<?php

// browser validation
include("db/table_configdb.php");	
$p="singer100";
$ttl_table_mod=$_POST['ttl_table']; 
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

	$sql_count_tables="SELECT max(total_tables) as total_tables   FROM  table_master";
	if ($result=mysqli_query($con,$sql_count_tables)){
      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$db_ttl_tables=$row['total_tables'];
	  $db_ttl_tables= $ttl_table_mod;
	  }
	  $sql_mod_tbl="update table_master set total_tables=$db_ttl_tables";
	  
	$result_mod_tbl=mysqli_query($con,$sql_mod_tbl);
		
	if(! $result_mod_tbl){
	//echo 'Error1 in table updation,Please contact the system administrator';
	}
	else 
	{
		echo "Tables updated";
	}
	}
}
if($table_exists==0)
{
	#echo "no records";
	$sql_mod_tbl="insert into table_master(total_tables)values($ttl_table_mod) ";
		
	$result_mod_tbl=mysqli_query($con,$sql_mod_tbl);
		
	if(! $result_mod_tbl){
	echo 'Error2 in table insertion,Please contact the system administrator';
	}
	else 
	{
		echo "Tables updated";
	}
	}


?>

