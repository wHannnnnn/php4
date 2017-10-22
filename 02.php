<?php 
$str="你好";
echo mb_strlen($str);
$arr=array(
	"姓名"=>"马磊",
	"年龄"=>"18",
	"性别"=>"男"
	);
if(isset($arr["性别"])):
	echo "男";

else:
	echo "没有";
endif;
if(empty($arr["性别"])):
echo "没有";
else:
echo "男";
endif;

date_default_timezone_set("PRC");
echo date('Y年 m月 d日 H点 i分 s秒');
$adate='2016-05-04 14:20:30';
$atime=strtotime($adate);
echo date('Y年m月d日<b\r> H时i分s秒',$atime);


$astr


 ?>