<?php

#####################################
#Begin Sending Email
#####################################
include 'class.phpmailer.php';

$name 			= $_POST['name'];
$email 			= $_POST['email'];
$phone 			= $_POST['phone'];
$msg1 			= $_POST['message'];
$msg2 			= stripslashes(strip_tags($msg1));
$messages 	= nl2br($msg2);

$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title> MissBrown E-mail </title>
</head>
<body bgcolor="#CCCCCC" style="font-weight:300;font-family:"Helvetica Neue", Helvetica, sans-serif;color:#FFFFFF;line-height:18px;margin:0;padding:0;">

<table cellpadding="15" cellspacing="0" border="0" align="center" width="600" bgcolor="#EEEEEE">
	<thead style="background:#391E03;">
		<th colspan="2" align="justify" style="font-size:14px;color:#FFF;font-weight:400;"> You have a Mail Information from <strong style="text-transform:capitalize;">'.$name.'</strong>... </th>
	</thead>
	
	<tbody style="color:#444444">		
		<tr id="introduction">
			<td style="font-size:14px;line-height:26px;width:100%;">
				<h3>Customer Information</h3>
				<dl>
					<dt style="clear:left;float:left;width:160px;font-weight:700;">Full Name</dt>
					<dd style="text-transform:capitalize;margin-left:180px;">'.$name.' &nbsp;</dd>
				</dl>
				<dl>
					<dt style="clear:left;float:left;width:160px;font-weight:700;">Email Address</dt>
					<dd style="margin-left:180px;">'.$email.' &nbsp;</dd>
				</dl>
				<dl>
					<dt style="clear:left;float:left;width:160px;font-weight:700;">Phone Number</dt>
					<dd style="margin-left:180px;">'.$phone.' &nbsp;</dd>
				</dl>
				<dl>
					<dt style="clear:left;float:left;width:160px;font-weight:700;">Feedback / Message</dt>
					<dd style="margin-left:180px;">'.$messages.' &nbsp;</dd>
				</dl>
			</td>
		</tr>
	</tbody>
	
	<tfoot style="background:#FF8D1D;font:300 11px sans-serif;color:#FFF;">
		<tr>
			<td align="right">
				<small>&copy; '.date('Y').' Powered by <a href="http://www.missbrown.co" title="MissBrown.Co" target="_blank" style="font-weight:600;color:#FFFFFF;text-decoration:none;">MissBrown</a></small>
			</td>
		</tr>
	</tfoot>
</table>

</body>
</html>';

$mail = new PHPMailer();
$mail->IsMail(); 

// send via Mail

//origin of sender
$mail->From     = ''.$email.'';

//concat name to fullname
$mail->FromName = ''.$name.'';

//Recipient
$mail->AddAddress('');
$mail->AddCC('');
$mail->AddBCC('');

$mail->IsHTML(true); // send as HTML

$mail->Subject  =  'You have a webmail information...';
$mail->Body     =  $message;
$mail->AltBody  =  $message;

if(!$mail->Send()){
 echo "Message was not sent <p>";
 echo "Mailer Error: " . $mail->ErrorInfo;
 //exit;
}

#####################################
#End of Sending Email
#####################################

?>
