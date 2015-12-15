<?php
include "/var/www/northshore/pwf/db.php";
$SELF= $_SERVER['PHP_SELF'];

//$capid=$_SERVER['REMOTE_USER'];
//setcookie ("member", $capid ,time()+86400*180, "/", ".capnorthshore.org");

include_once $_SERVER['DOCUMENT_ROOT'] . "/directory/common.php";

$directions=array("a" => "ASC", "d" => "DESC");
if (isset($_GET['key'])) {
$key=$_GET['key'];
} else{ $key=0;}
$srt=$headingCols[$key];

$DIR="ASC";
if (isset($_GET['o'])) {
$DIR=$directions[$_GET['o']];
}

$filter="E";
if (isset($_GET['f'])) {
$filter=$_GET['f'];
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="en-us">
<title>Northshore Composite Squadron: Dining Out</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="icon" type="image/png" href="/images/logo32.png">
<meta name="description"
        content=" Northshore Composite Squadron, Civil Air Patrol.">
<meta name="keywords"
        content="CAP, Civil Air Patrol, Northshore Composite Squadron, Bothell, Washington">
<META NAME="revisit-after" content="15 days">
<style type="text/css">
tr.rowstyleC {
        display: table-row;
	color: blue;
}

tr.rowstyleS {
	display: table-row;
	color: red;
}
 .g1 { background-color: #e0e0e0;}

body.custom-background { background-image: url('http://capnorthshore.org//wp-content/uploads/2012/03/WPress-CAP-WIDE-Background-Stripe1.jpg'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }

body {font-family: arial;}
</style>

</head>

<body class="custom-background">
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/top.php"; ?>
<table dir="ltr" border="0" cellpadding="0" cellspacing="0" width="960" align="center"><tr><td valign="top" width="1%">

<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/navbar.php";
$db=mysql_connect("localhost",$SQLuser, $SQLpass);
mysql_select_db("northshore",$db);
?>

</td><td valign="top" width="24"></td><td valign="top" align="center">

	<!-- ======================= -->
	<!-- Begin Main Content Area -->
	<!-- ======================= -->
<center>
<table border="0" cellspacing="0" cellpadding="0">
<tr><td align="center" style="background: url(/images/blue-black-gradient.jpg) no-repeat center;background-size: 100%;"><br><img src="/wp-content/uploads/2012/06/WordPress-Header-Image-G1.jpg"></td></tr>
<tr><td align="center" style="background-color:white;">
<h1>Op Orders: Northshore Composite Squadron Dining Out</h1>
<h3>RSVPs, Guest list registration and payment<br> <span style="color:red;font-weight:800;">MUST be completed by 
Wednesday, January 6th.</span><br> No late registrations will be accepted.<br><i>All attendees must register.</i></h3>

</td></tr>
</table></center>



	<!-- ======================= -->
	<!--  End Main Content Area  -->
	<!-- ======================= -->

</td></tr></table>
</center>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>
</body>
</html>

