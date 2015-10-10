<?php
/*
* Contact Form Class
*/

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

$admin_email = 'diegogadens@gmail.com'; // Your Email
$message_min_length = 30; // Min Message Length
$phone_min_length = 10; // Min Message Length

	class Contact_Form{
		function __construct($details, $email_admin, $message_min_length, $phone_min_length){
			
			$this->name = stripslashes($details['name']);
			$this->email = trim($details['email']);
			$this->phone = $details['phone'];
			$this->contact_type = $details['contact_type'];
			$this->software_type = $details['software_type'];
			$this->integrations = $details['integrations'];
			$this->budget = $details['budget'];
			$this->subject = 'Contato em diegogadens.com'; // Subject 
			$this->message = stripslashes($details['message']);
			$this->messageExtras = "";
			$this->email_admin = $email_admin;
			$this->message_min_length = $message_min_length;
			$this->phone_min_length = $phone_min_length;
			
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
			
			// Check phone
			if(!$this->phone)
			{
				$this->response_html .= '<p>Por favor, insira seu DDD e Telefone</p>';
				$this->response_status = 0;
			}		
			
			// Check phone length
			if($this->phone && strlen($this->phone) < $this->phone_min_length)
			{
				$this->response_html .= '<p>Por favor, insira seu telefone com DDD</p>';
				$this->response_status = 0;
			}
			
			//Check Orçamento
			if(!$this->contact_type){
				$this->response_html .= '<p>Escolha o que você precisa</p>';
				$this->response_status = 0;	
			}else{
				if($this->contact_type == "contato"){
					$this->messageExtras .= 'Tipo do contato: Apenas contato';
				}else{
					$this->messageExtras .= 'Tipo do contato: Orçamento<br>';
					//Check software type
					if($_POST['software_type']){
						$this->messageExtras .= "Tipo do software: | ";
						foreach($_POST['software_type'] as $value){
					      $this->messageExtras .= $value . " | ";
					    }
					}else{
						$this->messageExtras .= "Tipo do software: não especificado";
					}
				    $this->messageExtras .= "<br>";
				    
				    //Check external integrations
				    if($_POST['integrations']){
					    $this->messageExtras .= "Integrações: | ";
						foreach($_POST['integrations'] as $value){
					      $this->messageExtras .= $value . " | ";
					    }
					}
					else{
						$this->messageExtras .= "Integrações: não especificado";
					}
				    $this->messageExtras .= "<br>";

				    switch ($_POST['budget']) {
				    	case 'budget1':
				    		$this->messageExtras .= "Budget: R$ 1.000,00 a R$ 5.000,00";
				    		break;
				    	case 'budget2':
				    		$this->messageExtras .= "Budget: R$ 5.000,00 a R$ 15.000,00";
				    		break;
				    	case 'budget3':
				    		$this->messageExtras .= "Budget: R$ 15.000,00 a R$ 30.000,00";
				    		break;		
				    	case 'budget4':
				    		$this->messageExtras .= "Budget: R$ 30.000,00 a R$ 50.000,00";
				    		break;
				    	case 'budget5':
				    		$this->messageExtras .= "Budget: mais de R$ 50.000,00";
				    		break;
				    	default:
				    		$this->messageExtras .= "Budget: não especificado";
				    		break;
				    }
				}
			}
			  
			// Check message length
			if(!$this->message || strlen($this->message) < $this->message_min_length)
			{
				$this->response_html .= '<p>Por favor, insira sua mensagem com pelo menos '.$this->message_min_length.' caracteres</p>';
				$this->response_status = 0;
			}

			$this->messageExtras = "Nome: " . $this->name . "<br>" 
			                    .  "Telefone: " . $this->phone . "<br><br>" 
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

	$contact_form = new Contact_Form($_POST, $admin_email, $message_min_length, $phone_min_length);
	$contact_form->sendRequest();

?>