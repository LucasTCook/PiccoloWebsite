<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cn = $_POST['cn'];
$email = $_POST['email'];
$reachyou = $_POST['reachyou'];
$pos = $_POST['pos'];
$edu = $_POST['edu'];
$experience = $_POST['experience'];
$accidents = $_POST['accidents'];


//$mail_to = 'senad@piccoloinc.com,dispatch@piccoloinc.com';
$mail_to = 'careers@piccoloinc.com';
$subject = 'You got an application from '.$fname.'  '.$lname;

$body_message = 'Name: '.$fname."\n";
$body_message .= 'Last Name: '.$lname."\n";
$body_message .= 'Address: '.$address."\n";
$body_message .= 'City: '.$city."\n";
$body_message .= 'State: '.$state."\n";
$body_message .= 'Zip: '.$zip."\n";
$body_message .= 'Contact Number: '.$cn."\n";
$body_message .= 'E-mail: '.$email."\n";
$body_message .= 'What time can you reach me: '.$reachyou."\n";
$body_message .= 'Position applying for: '.$pos."\n";
$body_message .= 'Education: '.$edu."\n";
$body_message .= 'Years of Experience: '.$experience."\n";
$body_message .= 'Accidents: '.$accidents;

$headers = 'From: '.'info@piccoloinc.com'."\r\n";
$headers .= 'Reply-To: '.$re_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for your application. ');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to Yahoo suppot');
		window.location = 'contact.html';
	</script>
<?php
}
?>