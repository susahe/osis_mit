<?php
namespace App\Libraries;
// Send E-mail Class to send E-mail , this class used to send email 
class Send_Mail
{

        // send Email function which need to send mail with 3 parameters - email and subject and body
        public function user_reg_sendmail($e_mail,$subject,$body)
        {
                $email = \Config\Services::email();
                $email->setTo($e_mail);
        				$email->setFrom('mithardware@gmail.com');   // from email
        				$email->setSubject($subject);               // Email Subject
        			  $email->setMessage($body);                 // Email Body
        				if ($email->send())
        				{
                    return  'Email successfully sent'; // if email send sucess message
                }
        				else
        				{
              			return 'Cant connect E-mail Error';     // if email can't send error messgae

                }
          }
}

 ?>
