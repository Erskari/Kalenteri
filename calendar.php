<?php 
include_once('functions_c.php');

session_start();

include "functions.php";

include "alku.php";

tarkistus_lvl1();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kalenteri</title>
<link type="text/css" rel="stylesheet" href="./style/calendar.css"/>
<script src="jquery.min.js"></script>
</head>
<body>

<div id="calendar_div">
	<?php echo getCalender(); ?>
</div>

</body>
</html>
