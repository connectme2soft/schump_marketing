
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
function table_save_func(){
      var uname="pp";
      
      var dataString = 'uname='+ uname;
	  alert (dataString);
      //$("#flash").show();
      //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
  url: 'tableprocessed.php',
  type: 'POST',
  dataType: "json",
  data: 'post-form='+ $('.post-form').val(),
  success: function(response, textStatus, jqXHR) {
    alert("Yay!");
  },
  error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus, errorThrown);
  }
  });
}
</script>

</head>
<body>
    <input type="button" class="button_add_table" name="submit" value="Save..." onClick="table_save_func()">    
	
	<div id="errorMessage">sfsdf</div>
</body>
</html>
