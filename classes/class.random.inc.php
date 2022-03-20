<?php
class random
{
	static function _getRandomValue($length=8)
	{
		$value=array('1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','1','2','3','4','5','6','7','8','9','I','J','K','1','2','3','4','5','6','7','8','9','L','M','N','P','Q','R','1','2','3','4','5','6','7','8','9','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9');
		$rand_valus = array_rand($value,$length);
		$str = "";
		for($i=0;$i<$length;$i++)
		{
			$k = rand(0,count($value)-1);
			$str .=$value[$k];
		}
		return $str;       
	}
}
?>