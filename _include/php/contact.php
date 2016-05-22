<?php
/*
* Contact Form Class
*/

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

$admin_email = 'diegogadens@gmail.com'; // Your Email
$message_min_length = 1; // Min Message Length

	class Contact_Form{
		function __construct($details, $email_admin, $message_min_length, $phone_min_length){

			$this->name = stripslashes($details['name']);
			$this->email = trim($details['email']);
			$this->phone = $details['phone'];
			$this->subject = 'Contato em diegogadens.com'; // Subject
			$this->message = stripslashes($details['message']);
			$this->messageExtras = "";
			$this->email_admin = $email_admin;
			$this->message_min_length = $message_min_length;

			$this->response_status = 1;
			$this->response_html = '';
		}

		private function validateEmail(){
			$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';

			if($this->email == '') {
				return false;
			} else {
				$string = preg_replace($regex, '', $this->email);
			}

			return empty($string) ? true : false;
		}

		private function validateFields(){
			// Check name
			if(!$this->name)
			{
				$this->response_html .= '<p>Por favor, insira seu nome</p>';
				$this->response_status = 0;
			}

			// Check email
			if(!$this->email)
			{
				$this->response_html .= '<p>Por favor, insira seu endereço de email</p>';
				$this->response_status = 0;
			}

			// Check valid email
			if($this->email && !$this->validateEmail())
			{
				$this->response_html .= '<p>Por favor, insira um endereço de email válido</p>';
				$this->response_status = 0;
			}

			// Check message length
			if(!$this->message || strlen($this->message) < $this->message_min_length)
			{
				$this->response_html .= '<p>Por favor, insira sua mensagem.</p>';
				$this->response_status = 0;
			}

			$this->messageExtras = "Nome: " . $this->name . "<br>"
			                    .  "Telefone: " . $this->phone . "<br>"
													.  "Email: " . $this->email . "<br><br>"
			                    .  $this->messageExtras;

			$this->messageExtras = $this->messageExtras . "<br>";
			$this->message = $this->messageExtras . "<br>Mensagem:<br>" . $this->message;
		}

		private function sendEmail(){
			$mail = mail($this->email_admin, $this->subject, $this->message,
				 "From: ".$this->name." <".$this->email.">\r\n"
				."Reply-To: ".$this->email."\r\n"
				."X-Mailer: PHP/" . phpversion(). "\r\n"
				."Content-Type: text/html; charset=ISO-8859-1\r\n");

			if($mail)
			{
				$this->response_status = 1;
				$this->response_html = '<p>Muito obrigado. Entrarei em contato em breve.</p>';
			}
		}

		function sendRequest(){
			$this->validateFields();

			if($this->response_status)
			{
				$this->sendEmail();
			}

			$response = array();
			$response['status'] = $this->response_status;
			$response['html'] = $this->response_html;

			echo json_encode($response);
		}

	}

	$contact_form = new Contact_Form($_REQUEST, $admin_email, $message_min_length, $phone_min_length);
	$contact_form->sendRequest();

?>
