<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Hello, World!</title>
   <link rel="stylesheet" href="style.css"> 
   <!-- nhúng css vào html -->
</head>
<body>
    <?php
    require('HelloWorld.php');

    // Tạo đối tượng từ class HelloWorld
    $obj = new HelloWorld();

    // Gọi đến phương thức sayHello
    $obj->sayHello();

    // In ra "Hello, World" bằng các thứ tiếng khác
    $obj->sayHello('Vietnamese');
    $obj->sayHello('Chinese');
    $obj->sayHello('French');
    $obj->sayHello('German');
    // Xóa đối tượng khi không dùng đến
    unset($obj);
    ?>
</body>
</html>