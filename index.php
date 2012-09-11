<?php

include "includes/catch.php";
include "includes/status.php";
include "includes/useragentsw.php";
include "includes/setting.php";
include "includes/mysqlconnect.php";
include "includes/batch.php";
include "includes/common.php";
include "includes/pagetype.php";
include "includes/logindec.php";
include "includes/header.php";

if($contents_dis == "true"){
	
	include "themes/{$theme}/header.php";
	include "includes/body.php";
	include "themes/{$theme}/footer.php";
}
else{
	
	include "themes/{$theme}/header.php";
	include "includes/login.php";
	include "themes/{$theme}/footer.php";
}

include "includes/footer.php";

?>
