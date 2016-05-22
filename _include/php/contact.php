<?php
/*
* Contact Form Class
*/

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

$message_min_length = 1; // Min Message Length

require_once('ses.php');
$key = 'key';
$secret = 'secret';
$ses = new SimpleEmailService($key, $secret);


	class Contact_Form{
		function __construct($details, $message_min_length, $ses){

			$this->name = stripslashes($details['name']);
			$this->email = trim($details['email']);
			if(isset($details['phone']))
				$this->phone = $details['phone'];
			else
				$this->phone = 'telefone em branco...';
			$this->message = stripslashes($details['message']);
			$this->messageExtras = "";
			$this->message_min_length = $message_min_length;
			$this->ses = $ses;

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

			$receiverEmail = 'diegogadens@gmail.com';
			$subject = "Contato no site";
			$from = "Contato no site <diegogadens@gmail.com>";

			$m = new SimpleEmailServiceMessage();
			$m->addTo($receiverEmail);
			$m->setFrom($from);
			$m->setSubject($subject);
			$body = $this->message;
			$plainTextBody = '';
			$m->setMessageFromString($plainTextBody,$body);

			$sentEmail = $this->ses->sendEmail($m);

			if(is_array($sentEmail)) {
				$this->response_status = 1;
				$this->response_html = '<p>Muito obrigado. Entrarei em contato em breve.</p>';
			}
			else {
				$this->response_status = 0;
				$this->response_html = '<p>Erro ao enviar email. Se preferir, entre em contato diretamente pelo email diegogadens@gmail.com</p>';
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

	$contact_form = new Contact_Form($_POST, $message_min_length, $ses);
	$contact_form->sendRequest();

?>
