<?php
session_start();
include("Config.inc.php");

$Greeting=getGreeting();

if(!isset($_SESSION['Ticket']) || $_SESSION['Ticket']==""){
  die(header("Location: LogIn.php"));
}elseif(!in_array(Module,$_SESSION['AuthModules'])){
  die(header("Location:".AuthURL));
}else{
  echo $_SESSION['UserName']."，".$Greeting;
}

function getGreeting(){
  $Hour=date("H");
  if($Hour>=0 && $Hour<5) $rtn="凌晨好！";
  elseif($Hour>=5 && $Hour<9) $rtn="早安！";
  elseif($Hour>=9 && $Hour<12) $rtn="上午好！";
  elseif($Hour>=12 && $Hour<15) $rtn="中午好！";
  elseif($Hour>=15 && $Hour<17) $rtn="下午好！";
  elseif($Hour>=17 && $Hour<20) $rtn="傍晚好！";
  elseif($Hour>=20 && $Hour<24) $rtn="晚上好！";
  return $rtn;
}
?>