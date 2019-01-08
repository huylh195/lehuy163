<?php
if(isset($_POST['submit']))
{
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $action = $_POST['action'];
if($action=="+")
    {
        echo "<b>Your Answer is:</b><br>";
        echo $value1+$value2;
    }
if($action=="-")
    {
        echo "<b>Your Answer is:</b><br>";
        echo $value1-$value2;
    }
if($action=="*")
    {
        echo "<b>Your Answer is:</b><br>";
        echo $value1*$value2;
    }
if($action=="/")
    {
        echo "<b>Your Answer is:</b><br>";
        echo $value1/$value2;
    }
}
?>