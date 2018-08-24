<?php
header("content-type:text/html;charset=utf-8");
include("conn.php");
$rs=mysql_query("select * from books");
$json="[";
while($info=mysql_fetch_array($rs)){
   	$json.='{"bookId":'.'"'.$info['bookId'].'"'.',"bookName":'.'"'.$info['bookName'].'"'.',"bookPrice":'.'"'.$info['bookPrice'].'"'.',"bookOri":'.'"'.$info['bookOri'].'"'.',"bookPub":'.'"'.$info['bookPub'].'"'.',"bookAddTime":'.'"'.$info['bookAddTime'].'"'.'},';
}
$json=substr($json,0,strlen($json)-1);
$json.="]";
echo $json;
mysql_free_result($rs);
mysql_close($conn);
?>