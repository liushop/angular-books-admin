<?php
header("content-type:text/html;charset=utf-8");
include("conn.php");
$params = json_decode(file_get_contents('php://input'),true);//获取前端通过POST传递的原始数据，然后转换为数组
$bookId=$params['bookId'];
$bookName=$params['bookName'];
$bookOri=$params['bookOri'];
$bookPrice=$params['bookPrice'];
$bookPub=$params['bookPub'];
$num=mysql_query("update books set bookName='$bookName',bookOri='$bookOri',bookPrice='$bookPrice',bookPub='$bookPub' where bookId='$bookId'");
if($num>0){
	echo "1";
	}else{
		echo "0";
		}
mysql_close($conn);
?>