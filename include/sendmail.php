<?php 
require '../email_file/mail-function.php';
// global $_REQUEST;
// $response = array('error'=>'');
$contact_email = 'babajide@xceed.africa';

// type
// $type = $_REQUEST['type'];	
// parse
extract($_POST);	
		

		$user_name = stripslashes(strip_tags(trim($username)));
		$user_email = stripslashes(strip_tags(trim($email)));
		$user_subject = stripslashes(strip_tags(trim($subject)));
		$phone = stripslashes(strip_tags(trim($phone)));
		$user_msg =stripslashes(strip_tags(trim($message)));
			
		if (trim($contact_email) != '') {
			$subj = 'Message from Exceed Africa';
			$msg = $subj." \r\nName: $user_name \r\nE-mail: $user_email \r\nPhone: $phone \r\nSubject: $user_subject \r\nMessage: $user_msg";
		
			$head = "Content-Type: text/plain; charset=\"utf-8\"\n"
				. "X-Mailer: PHP/" . phpversion() . "\n"
				. "Reply-To: $user_email\n"
				. "To: $contact_email\n"
				. "From: $user_email\n";
			
				$send_mail = send_mail($contact_email, $user_name, $subj, $msg);
				// $send_mail = true;
			if ($send_mail) {
				header("Location: ../?status=success");
				exit();
			}else{
				header("Location: ../?status=fail");
				exit();
			}
		} 
		

	//echo json_encode($post_data['username'].''.$post_data['email'].''$post_data['subject'].''.$post_data['message']);	
	// echo json_encode($response);
	// die();
?>