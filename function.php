<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once  'phpmailer/Exception.php';
require_once  'phpmailer/PHPMailer.php';
require_once  'phpmailer/SMTP.php';


function data_clear($value)
{

    $value = trim($value);
    $value = strip_tags($value);
    $value = stripcslashes($value);
    $value = htmlspecialchars($value);
   
    return $value;

}

function tokenemail()

{

    $number = base64_encode( openssl_random_pseudo_bytes(32));
   
    return $number;

}

 function token_check($value)
{

    if(isset($_SESSION['tokenone']) && !empty($_SESSION['tokenone']) && $_SESSION['tokenone']==$value){

       unset($_SESSION['tokenone']);

     return true;

    }

     else{

        return false;
     }
    }
     function  send_email($to,$from,$text)
     {
        
            $mail = new PHPMailer(true);   

            try {

            
                $mail->isSMTP();                                           
                $mail->Host       = 'smtp.gmail.com';                    
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = $to;                   
                $mail->Password   = 'lzoj lbao cnww okdn';                                
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                $mail->Port       = 465;      
        
                $mail->CharSet = 'utf-8';
                $mail->FromName = 'from admin';
                $mail->ContentType = 'text/html;charset=utf-8';
        
                $mail->isHTML(true);
                $mail->setFrom($to, 'Mailer');
                $mail->addAddress ($from,'cue');                 
                $mail->Subject = 'news';
                $mail->Body = wordwrap($text, 100);
                $mail->send();
                if ($mail){
                  return $mail;
                }
            } catch (Exception $e) {
                echo 'خطا در ارسال ایمیل مجددا تلاش نمایید و یا با مدیرت تماس حاصل فرمایید...', $mail->ErrorInfo;
            }

             $mail->SmtpClose();

               return true;
        
               

            }


?>