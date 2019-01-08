<?php
/* Định nghĩa class HelloWorld
 * "Hello, world" được in ra màn hình với các thứ tiếng khác nhau
 */
class HelloWorld {
    // Phương thức đưa ra lời chào với mặc định là tiếng Anh
    function sayHello($language = 'English') {
        echo '<p>';
        // Tùy thuộc ngôn ngữ sẽ in ra màn hình các lời chào bằng ngôn ngữ khác nhau.
        switch ($language) {
            case 'French':
                echo 'Bonjour, monde!';
                break;
            case 'German':
                echo 'Hallo, Welt!';
                break;
            case 'Vietnamese':
                echo 'Xin chào, các bạn trên toàn cầu!';
                break;
            case 'Chinese':
                echo '你好，世界!';
                break;
            case 'English':
            default:
                echo 'Hello, world!';
            break;
        }
        echo '</p>';
    } // End of sayHello() method.
} // End of HelloWorld class.