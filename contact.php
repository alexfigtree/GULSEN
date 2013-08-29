<?php
$field_first_name = $_POST['cf_first_name'];
$field_last_name = $_POST['cf_last_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
$field_reference = $_POST['cf_reference'];

$mail_to = 'gulsenapps@gmail.com';
$subject = 'Message from a GULSEN visitor '.$field_first_name.' '.$field_last_name;

$body_message = 'From: '.$field_first_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message."\n";
$body_message .= 'Reference: '.$field_reference;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Thank you for the message. We will contact you shortly.');
		window.location = 'thankyou.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to gulsenapps@gmail.com');
		window.location = 'home.php';
	</script>
<?php
}
?>
