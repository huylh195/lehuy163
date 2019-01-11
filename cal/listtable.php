<?php
include ("./connect.php");
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap 3 Simple Tables</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <style type="text/css">
        .example{
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="example">
        <div class="container">
            <div class="row">
                <h2>List Staff</h2>
            <div class="table-responsive">    
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Age</th>
                            <th>Go..</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0){

                        while($arr = mysqli_fetch_array($result)){?>
                            <tr class="active">
                                <td><?php echo $arr["stt"]; ?></td>
                                <td><?php echo $arr['id']; ?></td>
                                <td><?php echo $arr['name']; ?></td>
                                <td><?php echo $arr['sex']; ?></td>
                                <td><?php echo $arr['age']; ?></td>
                                <td><a href="edit.php?id=<?php echo $arr['id']?>">Edit</a>  
                                    <a href="delete.php?id=<?php echo $arr['id']?>" onclick="return confirm('SSSSSSSS')">Delete</a>
                                    <a href="insert.php?id=<?php echo $arr['id']?>">insert</a></td>
                            </tr>
                        <?php }

                    }
                    ?>

                    </tbody>
                </table>
             </div>   
            </div>
        </div>
    </div>
</body>
<?php
?>
</html>