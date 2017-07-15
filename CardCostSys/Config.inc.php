<?php

/************* 项目基本配置 *************/
define("Module","Card");
define("LoginService",$_SERVER['HTTP_HOST']."/SSO/CardCostSys/LogIn.php");
/************* 项目基本配置 *************/



/*********** 以下代码请勿修改 ************/
define("SSOURL","../SSO/?Action=LogIn&Module=".Module."&Service=".LoginService);
define("AuthURL","../SSO/?Action=Authorize&Module=".Module."&Service=".LoginService);
/*********** 以下代码请勿修改 ************/