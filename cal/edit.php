<?php
include('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> </title>
</head>
<body>
<form method='post'>
Name: <input type='text' name='name' value =""><br/>
Sex: <input type='text' name='sex' value =""> <br/>
Age: <input type='text' name='age' value ="">
<input type="submit" name="submit" value='result'> <br/>
</form>
</body>
<?php
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $sql = "UPDATE `users` SET `name`='$name',`sex`='$sex',`age`='$age' WHERE id='$id' ";

    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header('Location: listtable.php');
    }else
    {
        echo ("Nooooooooo");
    }
}
?>