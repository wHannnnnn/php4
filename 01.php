<?php

$_GET["id"]="\n".$_GET["id"]."|";
$_GET["xm"]=$_GET["xm"]."|";
$_GET["nl"]=$_GET["nl"]."|";
$_GET["wz"]=$_GET["wz"]."|";
$_GET["bk"]=$_GET["bk"];
file_put_contents("names.txt",$_GET,FILE_APPEND);

$text=file_get_contents("names.txt");
$arr=explode("\n",$text);
foreach ($arr as $value) {
	if(!$value) continue;
     $cols=explode("|",$value);
     $arr1[]=$cols;
}

// var_dump($arr1);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
 	table{
 		text-align: center;
 		margin: 0 auto;
 	} 
 	</style>
 </head>
 <body>
 <table border="1" cellspacing="0">
 	<thead>
 		<th>ID</th>
 		<th>姓名</th>
 		<th>年龄</th>
 		<th>网址</th>
 		<th>博客</th>
 	</thead>
 	<tbody>
 		<?php foreach ($arr1 as $value1) : ?>
 			<tr>
 			<?php foreach($value1 as $col) : ?>
 			<?php $col=trim($col); ?>
 			<?php if (strpos($col,"http://")===0) :?>
 			<td><a href="<?php echo strtolower($col); ?>"><?php echo substr($col,7); ?></a></td>

 			<?php else: ?>
 				<td><?php echo $col; ?></td>
 				<?php endif ?>
 				<?php endforeach ?>

 			</tr>

 		<?php endforeach ?>


 	</tbody>
 </table>
 </body>
 </html>