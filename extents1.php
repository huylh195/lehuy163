
<?php
class Computer {
    public $Screen = true;
    public $Keyboard = true;

    public function start() {
        echo "Starting" . "<br/>";
    }
}

class Laptop extends Computer {
    function end()
    {
    $this->Screen= 'man hinh' . "<br/>";
    $this->Keyboard='dieu khien' . "<br/>";
    parent:: start();
    }
}

class Macbook extends Laptop 
{
    public $brandName = 'Apple';
}

$myMacbook = new Macbook;

$myMacbook->end();
echo $myMacbook->Screen;
echo $myMacbook->Keyboard;
echo $myMacbook->brandName;
?>