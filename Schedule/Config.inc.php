<?php

/************* 项目基本配置 *************/
define("Module","Schedule");
define("LoginService",$_SERVER['HTTP_HOST']."/SSO/Schedule/LogIn.php");
/************* 项目基本配置 *************/



/*********** 以下代码请勿修改 ************/
define("SSOURL","../SSO/?Action=LogIn&Module=".Module."&Service=".LoginService);
define("AuthURL","../SSO/?Action=Authorize&Module=".Module."&Service=".LoginService);
/*********** 以下代码请勿修改 ************/