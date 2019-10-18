<?php
if (!empty($_POST['name']) AND !empty($_POST['phone']) AND !empty($_POST['message'])){
	$headers = 'From Christina\r\n'.
				'Reply to:frontend@rgb-agency.com.ua\r\n'.
					'Mailer:PHP/'.phpversioin();
$letter = 'Data:\r\n';
$letter .= 'Name:'.$_POST['name'].'\r\n';
$letter .= 'Name:'.$_POST['phone'].'\r\n';$letter .= 'Name:'.$_POST['message'].'\r\n';$letter .= 'Name:'.$_POST['files[]'].'\r\n';


// $to = "christ270789@gmail.com";
// $name = $POST['name'];
// $phone = $POST['phone'];
// $message = $POST['message'];
// $files = $POST['file[]'];
if (mail('frontend@rgb-agency.com.ua','New message',$letter,$headers)){
header('Location:/send.php');
}else
{
header('Location:/');

}
else{
	header('Location:/error.php');
 
	}
}
?>