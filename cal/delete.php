
<?php
include "./connect.php";
    $id = $_GET['id'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $sql = "DELETE FROM `users` WHERE id= '$id'";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header('Location: listtable.php');
    }else
    {
        echo ("Nooooooooo");
    }
?>