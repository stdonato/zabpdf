<?php

//require_once '../include/config.inc.php';
require_once("inc/ZabbixAPI.class.php");
include("config.inc.php");


if ( $user_login = 0 ) {
  header("Location: chooser.php");
  exit(0);
}

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);

//session_register("myusername");
$_SESSION['login_user']=$myusername;
$_SESSION['username']=$myusername;
$_SESSION['password']=$mypassword;
//print_r($_SESSION); 
 
ZabbixAPI::debugEnabled(FALSE);
ZabbixAPI::login($z_server,$myusername,$mypassword)
	or die('Unable to login: '.print_r(ZabbixAPI::getLastError(),true));

header("location: chooser.php");
}

?>

<html>
<head>
    <title>Zabbix Dynamic PDF Report</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="Pragma" content="public">           

    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	 <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />    
    <link href="css/bootstrap.css" rel="stylesheet">        		   
    <link rel="stylesheet" type="text/css" href="css/index.css">
    
     <!-- this page specific styles 
    <link rel="stylesheet" href="css/compiled/index.css" type="text/css" media="screen" /> -->    

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 
</head>

<body class="skin-blue sidebar-mini login-page">

<div id="top_login" class="col-md-12 col-sm-12 col-xs-12">
	<div class="login-box">

		<div class="login-box-body col-md-3 col-sm-4" style="float: none; margin-left: auto; margin-right: auto;">
			<div class="login-logo">
				<span class="row"><img src="images/pdf.png" style="height: 40px; margin-bottom: 15px; margin-top: -50px;" alt=""></span>
				<span><b>Zabbix PDF reports</b></span>
			</div>
			<form id="form" name="form" method="post" action="" class="col-md-8 col-sm-8" style="float: none; margin-left: auto; margin-right: auto;">
				<div class="form-group">
					<input id="username" name="username" class="form-control" required placeholder="Zabbix User" />
					<span class="form-control-feedback"></span>
				</div>
	
				<div class="form-group">
					<input id="password" name="password" type="password" class="form-control" required placeholder="Password" />
					<span class="form-control-feedback"></span>
				</div>
	
				<div class="row" style="">
					<div class="col-md-12 col-sm-12"></div>
					<div class="col-md-12 col-sm-12">
						<button id="submit_login" type="submit" name="submit" class="btn btn-primary btn-flat" onclick="javascript:this.form.submit();">
							<?php echo _('Sign in'); ?>							
						</button>
<!--						<p style="text-align: center;">Version <?php //echo($version); ?></p>-->
					</div>
					<div class="col-xs-4"></div>
				</div>
			</form>
		</div>

	</div>
	<!-- /.login-box -->
</div>
</body>
</html>	

<?php
//}
?>
	