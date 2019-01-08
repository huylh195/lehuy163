<?php
class MyClass
{
    public $public = 'Yêu' ;
    protected $protected = 'Đơn';
    private $_private = 'Phương';
    public function setMylove($love) {
        $this->_private = $love;
    }
        public function getMylove() 
        {
        return $this->_private;
        }

        function printHello()
        {
        echo $this->public;
        echo $this->protected;
        echo $this->_private;
        }
    }
$obj = new MyClass();
// echo $obj->public; 
$obj->printHello();
$obj->setMylove(1);
echo $obj->getMylove();
class MyClass2 extends MyClass
{
    public $public = 'lần';
    protected $protected = 'end!';
    function printHello()
    {
        // echo $this->public;
        echo $this->protected;
    }
}
$obj2 = new MyClass2();
echo $obj2->public; 
$obj2->printHello(); 
?>