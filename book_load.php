<?php
$attn = $_POST['ATTN'];
$Date = $_POST['Date'];
$client = $_POST['client'];
$contact_bl = $_POST['contact_bl'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$re_email = $_POST['re_email'];
$quote_number = $_POST['quote_number'];
$ref_number = $_POST['ref_number'];
$amount_quoted = $_POST['amount_quoted'];
$shipper_1 = $_POST['shipper_1'];
$shipper_1_address = $_POST['shipper_1_address'];
$s_city_1 = $_POST['s_city_1'];
$s_state_1 = $_POST['s_state_1'];
$s_zip_1 = $_POST['s_zip_1'];
$phone_shipper_1= $_POST['phone_shipper_1'];
$fax_shipper_1 = $_POST['fax_shipper_1'];
$consign_1 = $_POST['consign_1'];
$consign_1_address = $_POST['consign_1_address'];
$c_city_1 = $_POST['c_city_1'];
$c_state_1 = $_POST['c_state_1'];
$c_zip_1 = $_POST['c_zip_1'];
$phone_consign_1 = $_POST['phone_consign_1'];
$fax_consign_1 = $_POST['fax_consign_1'];
$pu_date_1 = $_POST['pu_date_1'];
$ready_1 = $_POST['ready_1'];
$close_1 = $_POST['close_1'];
$deliver_on_1 = $_POST['deliver_on_1'];
$hours_1 = $_POST['hours_1'];
$pieces_1 = $_POST['pieces_1'];
$weight_1 = $_POST['weight_1'];
$commodity_1 = $_POST['commodity_1'];
$item_class_1 = $_POST['item_class_1'];

$shipper_2 = $_POST['shipper_2'];
$shipper_2_address = $_POST['shipper_2_address'];
$s_city_2 = $_POST['s_city_2'];
$s_state_2 = $_POST['s_state_2'];
$s_zip_2 = $_POST['s_zip_2'];
$phone_shipper_2= $_POST['phone_shipper_2'];
$fax_shipper_1 = $_POST['fax_shipper_1'];

$destination = $_POST['destination'];
$destination_address = $_POST['destination_address'];
$destination_city = $_POST['destination_city'];
$destination_state = $_POST['destination_state'];
$destination_zip = $_POST['destination_zip'];
$phone_consign_2 = $_POST['phone_consign_2'];
$fax_consign_2 = $_POST['fax_consign_2'];
$pu_date_2 = $_POST['pu_date_2'];
$ready_2 = $_POST['ready_2'];
$close_2 = $_POST['close_2'];
$deliver_on_2 = $_POST['deliver_on_2'];
$hours_2 = $_POST['hours_2'];
$pieces_2 = $_POST['pieces_2'];
$weight_2 = $_POST['weight_2'];
$commodity_2 = $_POST['commodity_2'];
$item_class_2 = $_POST['item_class_2'];
$equipment_req = $_POST['equipment_req'];
$value = $_POST['value'];
$special_inst = $_POST['special_inst'];


$mail_to = 'senad@piccoloinc.com,dispatch@piccoloinc.com';
$subject = 'Message from a site visitor '.$client;

$body_message = 'ATTN: '.$attn."\n";
$body_message .= 'Date: '.$Date."\n";
$body_message .= 'Client: '.$client."\n";
$body_message .= 'Contact: '.$contact_bl."\n";
$body_message .= 'Phone: '.$phone."\n";
$body_message .= 'Fax: '.$fax."\n";
$body_message .= 'E-mail: '.$re_email."\n";
$body_message .= 'Quote No.: '.$quote_number."\n";
$body_message .= 'Our Ref No.: '.$ref_number."\n";
$body_message .= 'Amount quoted: '.$amount_quoted."\n";
$body_message .= 'Shipper 1: '.$shipper_1."\n";
$body_message .= 'Address: '.$shipper_1_address."\n";
$body_message .= 'City: '.$s_city_1."\n";
$body_message .= 'State: '.$s_state_1."\n";
$body_message .= 'Zip code: '.$s_zip_1."\n";
$body_message .= 'Shipper 1 Phone: '.$phone_shipper_1."\n";
$body_message .= 'Shipper 1 Fax: '.$fax_shipper_1."\n";
$body_message .= 'Consignee 1: '.$consig_1."\n";
$body_message .= 'Address: '.$consig_1_address."\n";
$body_message .= 'Consignee 1 City: '.$c_city_1."\n";
$body_message .= 'Cosignee 1 State: '.$c_state_1."\n";
$body_message .= 'Cosignee 1 zip: '.$c_zip_1."\n";
$body_message .= 'Consignee 1 phone: '.$phone_consig_1."\n";
$body_message .= 'Consignee 1 fax.: '.$fax_consig_1."\n";
$body_message .= 'P/U Date: '.$pu_date_1."\n";
$body_message .= 'Ready: '.$ready_1."\n";
$body_message .= 'Close: '.$close_1."\n";
$body_message .= 'Deliver on: '.$deliver_on_1."\n";
$body_message .= 'Hours: '.$hours_1."\n";
$body_message .= 'Pieces: '.$pieces_1."\n";
$body_message .= 'Weight: '.$weight_1."\n";
$body_message .= 'Commodity: '.$commodity_1."\n";
$body_message .= 'Item#/Class: '.$item_class_1."\n";

$body_message .= 'Shipper 2: '.$shipper_2."\n";
$body_message .= 'Address: '.$shipper_2_address."\n";
$body_message .= 'City: '.$s_city_2."\n";
$body_message .= 'State: '.$s_state_2."\n";
$body_message .= 'Zip code: '.$s_zip_2."\n";
$body_message .= 'Shipper 2 Phone: '.$phone_shipper_2."\n";
$body_message .= 'Shipper 2 Fax: '.$fax_shipper_2."\n";
$body_message .= 'Consignee 2: '.$destination."\n";
$body_message .= 'Address: '.$destination_address."\n";
$body_message .= 'Consignee 2 City: '.$destination_city."\n";
$body_message .= 'Cosignee 2 State: '.$destination_state."\n";
$body_message .= 'Cosignee 2 zip: '.$destination_zip."\n";
$body_message .= 'Consignee 2 phone: '.$phone_consig_2."\n";
$body_message .= 'Consignee 2 fax.: '.$fax_consig_2."\n";
$body_message .= 'P/U Date: '.$pu_date_2."\n";
$body_message .= 'Ready: '.$ready_2."\n";
$body_message .= 'Close: '.$close_2."\n";
$body_message .= 'Deliver on: '.$deliver_on_2."\n";
$body_message .= 'Hours: '.$hours_2."\n";
$body_message .= 'Pieces: '.$pieces_2."\n";
$body_message .= 'Weight: '.$weight_2."\n";
$body_message .= 'Commodity: '.$commodity_2."\n";
$body_message .= 'Item#/Class: '.$item_class_2."\n";
$body_message .= 'Equipment: '.$equipment_req."\n";
$body_message .= 'Value: '.$value."\n";
$body_message .= 'Special Instructions: '.$special_inst;




$headers = 'From: '.'info@piccoloinc.com'."\r\n";
$headers .= 'Reply-To: '.$re_email."\r\n";

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
		alert('Message failed. Please, send an email to Yahoo suppot');
		window.location = 'contact.html';
	</script>
<?php
}
?>