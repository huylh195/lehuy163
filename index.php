<?php 
 class custom
 {
	private  $hi="helooooo";
	public function setchao($a)
	{
		 $this -> hi=$a;
	} 
	public function getchao()
	{
		return $this-> hi . "<br/>";
	}
 }
 $hiiii= new custom();
 $hii= new custom();
 echo $hiiii->getchao();
 echo $hii-> getchao();
 $hiiii->setchao("aaaaaaaaa");
 $hii-> setchao("bbbbbbb");
 echo $hiiii-> getchao();
 echo $hii-> getchao();