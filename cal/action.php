<?php
if(isset($_POST['submit']))
{
        $value1 = $_POST['number1'];
        $value2 = $_POST['number2'];
        $action = $_POST['action'];
if($action=="+")
    {
        echo "<b> Answer is:</b><br>";
        echo $value1+$value2;
    }
if($action=="-")
    {
        echo "<b> Answer is:</b><br>";
        echo $value1-$value2;
    }
if($action=="*")
    {
        echo "<b> Answer is:</b><br>";
        echo $value1*$value2;
    }
if($action=="/")
    {
        echo "<b> Answer is:</b><br>";
        echo $value1/$value2;
    }
    if($action=="%")
    {
        echo "<b> Answer is:</b><br>";
        echo $value1%$value2;
    }
}
?>