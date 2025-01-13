<?php
require_once  'function.php';

if(isset($_POST['send']) && ($_POST['token']))
{

    if(!empty($_POST['addone']) && !empty($_POST['addtwo']) && !empty($_POST['text']) && (token_check($_POST['token'])==true) )
    {

        $to=data_clear($_POST['addone']);

        $from=data_clear($_POST['addtwo']);
        
        $text=data_clear($_POST['text']);

        $email=send_email($to,$from,$text);

        if($email){

            unset($_SESSION['token']);
            $_SESSION['email']='Email sent.';
            header('location:index.php');

        }else{

         unset($_SESSION['token']);
         $_SESSION['email']='Email not sent.';
         header('location:index.php');

        }
        
       }else{

         unset($_SESSION['token']);
         $_SESSION['email']='Complete the form.';
         header('location:index.php');

    }


}

if(isset($_POST['Cancel']) && ($_POST['token']) && (token_check($_POST['token'])==true) )
{

    unset($_SESSION['token']);
   
    header('location:index.php');

}




?>