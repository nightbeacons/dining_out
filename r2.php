<?php
$to = "northshorediningout@gmail.com";
$headers = 'From: Reservations <webmaster@capnorthshore.org>' . "\r\n" .
    'Reply-To: ' . $to . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$type = $_POST['type'];
$name = $_POST['name'];
$attending = TRUE;

switch ($type){
   case "vip":
      $subject= "Northshore Dining Out: VIP Reservation";
      $msg = $name . " has submitted their VIP RSVP for the Northshore Dining Out.\r\n\r\n";
         if ($_POST['number'] == "No") {
         $msg .= "They will not be able to attend.\r\n";
         $attending=FALSE;
         } else {
         $msg .= "There will be " . $_POST['number'] . " in their party.\r\n"; 
         }
      break;


   case "escort":
      $subject= "Northshore Dining Out: Escort Reservation";
      $msg = $name . " has submitted their Escort RSVP for the Northshore Dining Out.\r\n\r\n";
      break;


   case "scholarship":
      $subject= "Northshore Dining Out: Scholarship Request";
      $msg = $name . " requests a scholarship for the Northshore Dining Out.\r\n\r\n";
      $msg .= "Birthdate: " . $_POST['birthdate'] . "\r\n\r\n";
      break;
}


mail($to, $subject, $msg, $headers);

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


body {background-image: url(/images/tan_parchment_paper_wallpaper_texture_seamless.jpg);
      background-repeat: repeat;
font-family: arial;}
</style>

</head>

<body >
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/top.php"; ?>
<table dir="ltr" border="0" cellpadding="0" cellspacing="0" width="960" align="center"><tr><td valign="top" width="1%">


</td><td valign="top" width="24"></td><td valign="top" align="center">

        <!-- ======================= -->
        <!-- Begin Main Content Area -->
        <!-- ======================= -->
<center>
<table border="0" cellspacing="0" cellpadding="0" width="90%">
<tr><td align="center" style="background-color:f5fffa;">
<img src="/images/Northshore_Badge_ebrite.png">
<h1>Northshore Composite Squadron Dining Out</h1>
<h2>Thank you.<br>Your <?php echo $type; ?> request has been recorded.</h2>

<?php
if ($attending) {

echo "<p>Please return to the <a href=\"register.php#two\">registration page</a> and complete Step 2.</p>";
} else {
echo "<p>We are sorry that you will not be able to join us.</p>";
}
?>
<h2>&nbsp;</h2></td></tr></table>
</td></tr></table></body>
</html>

