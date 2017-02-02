<?php
function query($sql)
{
    $conn = mysqli_connect('localhost','root','') or die('loi ket noi');
    mysqli_select_db($conn,"wbqlbhqa") or die('loi co so du lieu');
    $rows = mysqli_query($conn,$sql) or die('loi truy van');
    mysqli_close($conn);
    return $rows;
}
if(isset($_GET['action']))
{
    $action = $_GET['action'];
}else $action="";

if(isset($_GET['id']))
{
    $id=$_GET['id'];

}else $id=0;
function run(){

      if(file_exists("view/$action.php"))
        include_once("view/$action.php");
        include_once("view/default.php");
}
 
?>