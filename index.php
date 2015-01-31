
<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
<div style="margin:20px auto;width:300px;background:#DDD">
	<form id='myForm' method='post' action='action.php'>
		<table>
		<tr><td>Name:</td><td><input type='text' name='name' /></td></tr>
		<tr><td>Age :</td><td><input type='text' name='age' /></td></tr>
		<tr><td></td><td><button id='sub'>Save</button></td></tr>
		</table>
	</form>
	
	
	<span id='result' style='background: #073642;display:none;color: #fff;margin-left:67px;padding: 5px;'></span>
	
	<!--to show loading image-->
	<div id="wait" style="display:none;background:#FFF width:69px;height:89px;top:50%;left:50%;padding:2px;">
		<img src='wait.gif' width="64" height="64" />
	</div>
</div>


	<script>
	$(document).ready(function(){
		
		$("#sub").click(function(){
			
		//getting all the input name and value as an array form and here it stored in data
		data= $("#myForm").serializeArray();	
		//delay(1200);		
		//ajax post method 
		//$.post('action page','relevant data that might need in action page ', optional callback function )
		$.post("action.php",data,function(info){$('#result').html(info);});
		$("#result").fadeIn(1500);
		});//--------
		
		//conform that action of form does not work
		$('#myForm').submit(function(){return false;});//-----------
		
		//to show loading image
		$(document).ajaxStart(function(){
			$("#wait").css("display", "block");
			});
		$(document).ajaxComplete(function(){
			$("#wait").css("display", "none");
			});

	
		
		});
	</script>

</body>
</html>
