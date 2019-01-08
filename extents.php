<?php
class Project
{
    var $employees = 'aaa';
    var $staff = 'bbb';
    function work()
    {
        echo 'project practice'. "<br/>" ;
    }
}
class project1 extends project
{
    function introduce()
    {
        $this->employees = 'This is employees - Đây là nhân viên'. "<br/>";
        $this->staff = 'This is staff - Đây là thành viên';
        parent::work(); 
    }
}
  $project1 = new project1();
  $project1->introduce();
echo $project1->employees;
echo $project1->staff;
?>