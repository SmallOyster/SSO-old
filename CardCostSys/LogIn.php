<?php
include("Config.inc.php");

// 获取Token值，没有则跳转至SSO系统
$Token=isset($_GET['Token'])?$_GET['Token']:die(header("Location:".SSOURL));

// 获取并设置SSO系统的SessionID
$SessionID=substr($Token,32);
session_id($SessionID);
session_start();

define("Prefix",$_SESSION['SessionPrefix']);

// 还没有登录
if($_SESSION[Prefix.'isLogged']!="1"){
  die(Prefix);
  die(header("Location:".SSOURL));
}

// 判断Ticket是否有效
$Ticket=substr($Token,0,32);
if(!isset($_SESSION[Prefix.'Ticket'])){
  die('<center><font color="red" style="font-weight:bolder;font-size:30;">404-Ticket不存在<br>Ticket Not Found</font></center>');
}elseif($Ticket!=$_SESSION[Prefix.'Ticket']){
  die('<center><font color="red" style="font-weight:bolder;font-size:30;">500-Ticket错误<br>Invaild Ticket</font></center>');
}

if(!in_array(Module,$_SESSION[Prefix.'AuthModules'])){
  die(header("Location:".AuthURL));
}

header("Location: index.php");
?>