<?php

/************* 项目基本配置 *************/

// 当前应用的名称(必须存在于SSO服务器里的AllModules.json)
define("Module","Schedule");
// 当前应用的登录页面文件路径
$LoginService=$_SERVER['HTTP_HOST']."/SSO/Schedule/LogIn.php";
// SSO系统登录页面文件路径(应保持每个应用都一致)
define("SSOServer","../SSO/");

/************* 项目基本配置 *************/




/*********** 以下代码请勿修改 ************/
define("LoginService",urlencode($LoginService));
define("SSOURL",SSOServer."?Module=".Module."&Service=".LoginService."&Action=LogIn");
define("AuthURL",SSOServer."?Module=".Module."&Service=".LoginService."&Action=Authorize");
/*********** 以下代码请勿修改 ************/
