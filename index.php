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
<table border="0" width="85%" cellspacing="0" cellpadding="12">
<tr><td valign="top" width="50%">

<table border="1" cellpadding="15" cellspacing="0">
<tr><th colspan="2">Ticket Prices</th</tr>
<tr><td>Children (age 0-5)</td><td>Free</td></tr>
<tr><td>Cadets and Youth (age 6-18)</td><td>$10.00</td></tr>
<tr><td>Adults</td><td>$20.00</td></tr>
<tr><td>VIP Guests of the Squadron</td><td>Free</td></tr>
</table>
</td><td valign="top" width="50%" style="background-color:#e0e0e0;padding:15px;"><h3>Scholarship requests:</h3>

<p>If you would like to request a scholarship for a cadet admission to Dining Out please use the 

special <i>REQUEST A SCHOLARSHIP</i> PayPal button, below.</p>

<h3>Scholarship sponsors:</h3>

<p>You may sponsor a cadet admission scholarship.  You may choose any dollar amount. Your 

contribution is greatly appreciated, thank you!  Please use the <i>DONATION</i> PayPal button.</p>
</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2">
<h2>Instructions:</h2>
<p>If you will be attending the event, you <b>must</b> follow these steps. Naval Station Everett requires this of ALL persons requesting access to the Navy base. This includes attendees, VIPs, as well as escorts who may be dropping you off and picking you up. You will not be allowed beyond the gate unless you have registered.</p>
</td></tr>
<tr><td colspan="2"><h3 style="margin-top:15px;">Step One:</h3>
<p>Please click the appropriate PayPal button, below</p></td></tr>




<tr ><td class="g1"><p>RSVP and register the name of EACH attendee* and pay admission price.</td><td class="g1"><!-- Button 1 -->

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="X8HUYHCY88C7Q">
<table>
<tr><td><input type="hidden" name="on0" value="Dining Out Admission (Choose one & ADD TO CART for EACH person)">Dining Out Admission (Choose one & ADD TO CART for EACH person)</td></tr><tr><td><select name="os0">
 <option value="Cadet /Youth (6-18)">Cadet /Youth (6-18) $10.00 USD</option>
 <option value="Child (0-5)">Child (0-5) $0.00 USD</option>
 <option value="Adult">Adult $20.00 USD</option>
 <option value="VIP invited GUEST">VIP invited GUEST $0.00 USD</option>
 <option value="Base Escort/No Dining Out">Base Escort/No Dining Out $0.00 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Guest Name (Required for ALL)">Guest Name (Required for ALL)</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</td></tr>





<tr><td><p>Register the name of an escort who will NOT be attending Dining Out.<br>
<small>Example: If your parents are dropping you off, but not attending, use this option to register them. If you do not, they will not be allowed on the base.</small></p></td>
<td>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="X8HUYHCY88C7Q">
<table>
<tr><td><input type="hidden" name="on0" value="Dining Out Admission (Choose one & ADD TO CART for EACH person)">Dining Out Admission (Choose one & ADD TO CART for EACH person)</td></tr><tr><td><select name="os0">
 <option value="Base Escort/No Dining Out">Base Escort/No Dining Out $0.00 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Guest Name (Required for ALL)">Guest Name (Required for ALL)</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</td></tr>

<tr><td class="g1"><p>Request a scholarship for yourself (cadets only) and register for Base Access.</p></td><td class="g1">
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8PSX5RBZUA8RQ">
<table>
<tr><td><input type="hidden" name="on0" value="CADET SCHOLARSHIP REQUEST (Choose ADD TO CART for EACH person)">CADET SCHOLARSHIP REQUEST (Choose ADD TO CART for EACH person)</td></tr><tr><td><select name="os0">
    <option value="Cadet">Cadet $0.00 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Guest Name">Guest Name</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



</td></tr>

<tr><td><p>Sponsor a cadet scholarship (you choose the amount)</p></td><td>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JE228MZTNLGKA">
<table>
<tr><td><input type="hidden" name="on0" value="Sponsor a Cadet admission   SELECT AN AMOUNT   ~    Thank You!">Sponsor a Cadet admission   SELECT AN AMOUNT   ~    Thank You!</td></tr><tr><td><select name="os0">
 <option value="$5 Sponsor">$5 Sponsor $5.00 USD</option>
 <option value="$10 Sponsor">$10 Sponsor $10.00 USD</option>
 <option value="$20 Sponsor">$20 Sponsor $20.00 USD</option>
 <option value="$30 Sponsor">$30 Sponsor $40.00 USD</option>
 <option value="$50 Sponsor">$50 Sponsor $50.00 USD</option>
 <option value="$100 Sponsor">$100 Sponsor $100.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</td></tr>

<tr><td class="g1">View your Shopping Cart</td><td class="g1">
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</td></tr>
</table>



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
<?php
#-----------------------------------------------------------------
# Convert SQL Date to CAP date form
#
#
function SQL2CAPdate ($dateString)
{
$monthAry=array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

$dateAry=explode("-", $dateString);
$CAPdate = ($dateAry[2]+0) . "-" . $monthAry[($dateAry[1]+0)] . "-" . $dateAry[0];

return ($CAPdate);

}

#-----------------------------------------------------------------
#
function makeColHeads($key, $DIR, $filter)
{
global $headingNames, $SELF;

$colHeadings="";

	for ($i=0; $i< count($headingNames); $i++) {
	$colHeadings .= "<th><a class=\"directory\" href=\"$SELF?key=$i&f=$filter\">$headingNames[$i]</a>";

		if ($key==$i) {

			if ($DIR=="ASC") {
			$colHeadings .=  "<a href=\"$SELF?key=$i&o=d&f=$filter\"><img border=\"0\" src=\"/images/uparrow.png\" TITLE=\" Click to Change the Sort Order \"></a>";
			}

                        if ($DIR=="DESC") {
                        $colHeadings .=  "<a href=\"$SELF?key=$i&o=a&f=$filter\"><img border=\"0\" src=\"/images/downarrow.png\" TITLE=\" Click to Change the Sort Order \"></a>";
                        }


		}
	$colHeadings .= "</th>\n";
	}

return($colHeadings);



}
#-----------------------------------------------------------------

?>

