<html>
<head>
<meta charset= "utf-8">
<title>Simple PHP Calculator</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
<form method='post'>
<input type='text' name='number1' value ="<?php echo $_POST['number1']?>"> <br/>
<input type='text' name='number2' value ="<?php echo $_POST['number2']?>"> <br/>
<select name='action'>
<option>+</option> 
<option>-</option>
<option>*</option>
<option>/</option> 
<option>%</option> 
</select> <br/>
<input type="submit" name="submit" value='result'> <br/>
</form>
<?php
if(isset($_POST['submit']))
{
        $text1 = $_POST['number1'];
        $text2 = $_POST['number2'];
        $action = $_POST['action'];
if(is_numeric($text1) && is_numeric($text2))
{
    if($action=="+")
    {
        echo "<b> Answer is: </b><br>";
        echo $text1+$text2;
    }
    if($action=="-")
    {
        echo "<b> Answer is:</b><br>";
        echo $text1-$text2;
    }
    if($action=="*")
    {
        echo "<b> Answer is:</b><br>";
        echo $text1*$text2;
    }
    if($action=="/")
    {
        echo "<b> Answer is:</b><br>";
        echo $text1/$text2;
    }
    if($action=="%")
    {
        echo "<b> Answer is:</b><br>";
        echo $text1%$text2;
    }
}
else
    {
    echo "Not number";
    }
}
?>
</body>
</html>