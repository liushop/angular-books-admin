<?php
header("content-type:text/html;charset=utf-8");
include("conn.php");
$bookId=$_GET['bookId'];
if(!empty($bookId)){
$num=mysql_query("delete from books where bookId='$bookId'");
if($num>0){
	echo "1";
	}else{
		echo "0";
		}
mysql_close($conn);
}else{
	echo "0";
	}
?>