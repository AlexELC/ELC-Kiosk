<?php
if(isset($_POST[‘ca’])){//if info was submitted, send sms msg:
$ca=”;
$ph = $_POST[‘ph’];
$ca = $_POST[‘ca’];
$msg = $_POST[‘msg’];

if($ca==”)$ca=’@vtext.com’;

$send_to = $ph.$ca;
echo “Attempting to reach $ph via $ca carrier…..<br />”;
echo “Sending Message to $send_to:<br />$msg<hr />”;
$sent_sms = mail($send_to, ”, $msg);
if($sent_sms){
    echo “<h2 style=’color:lime’>Message Sent!</h2>”;
}else{
    echo “<h3 style=’color:red’>Oops! Something went wrong, try again later. Make sure you selected the right carrier and phone number.</h3>”;
}
}

?>