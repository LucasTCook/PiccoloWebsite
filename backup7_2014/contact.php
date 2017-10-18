<?php
$author = $_POST['author'];
$email = $_POST['email'];
$address = $_POST['address'];
$comments = $_POST['comments'];


$mail_to = 'senad@piccoloinc.com,dispatch@piccoloinc.com';
$subject = 'Message from a site visitor '.$author;

$body_message = 'Author: '.$author."\n";
$body_message .= 'Email: '.$email."\n";
$body_message .= 'Address: '.$address."\n";
$body_message .= 'Comments: '.$comments;




$headers = 'From: '.'info@piccoloinc.com'."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. ');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to Yahoo support');
		window.location = 'contact.html';
	</script>
<?php
}
?>