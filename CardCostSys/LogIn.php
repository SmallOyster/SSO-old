<?php
include("Config.inc.php");

// 获取Token值，没有则跳转至SSO系统
$Token=isset($_GET['Token'])?$_GET['Token']:die(header("Location:".SSOURL));

// 获取并设置SSO系统的SessionID
$SessionID=substr($Token,32);
session_id($SessionID);
session_start();

// 还没有登录
if($_SESSION['isLogged']!="1"){
  die(header("Location:".SSOURL));
}

// 判断Ticket是否有效
$Ticket=substr($Token,0,32);
if(!isset($_SESSION['Ticket'])){
  die('<center><font color="red" style="font-weight:bolder;font-size:30;">500-Ticket不存在</font></center>');
}elseif($Ticket!=$_SESSION['Ticket']){
  die('<center><font color="red" style="font-weight:bolder;font-size:30;">500-Ticket错误</font></center>');
}

if(!in_array(Module,$_SESSION['AuthModules'])){
  die(header("Location:".AuthURL));
}

header("Location: index.php");
?>