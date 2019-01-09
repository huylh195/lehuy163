<html>
<head>
<title>Simple PHP Calculator</title>
</head>
<body>
<form method='post' action="action.php">
<input type='text' name='number1'> <br/>
<!-- <select name='action'> -->
<!-- <button name= 'action'>+</button>  -->
<!-- <button name= 'action'>-</button>  -->
<!-- <button name= 'action'>*</button>  -->
<!-- <button name= 'action'>/</button> <br/> -->
<input type='text' name='number2'> <br/>
<select name='action'>
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option> 
<option>%</option> 
</select> <br/>
<input type="submit" name="submit" value='result'> <br/>
</form>
</body>
</html>