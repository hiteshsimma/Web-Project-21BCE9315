<?php
    $comm=mysqli_connect('localhost','root','','hotel');
$sql = "select distinct * from cartorders";
$res = mysqli_query($comm,$sql);
$row = mysqli_num_rows($res);
echo $row;
while($res->){

}
// $sql1="select count(distinct) from cartorders";
// $res1 = mysqli_query($comm,$sql1);
// $row1 = mysqli_num_rows($res1);
// echo $row1;
?>