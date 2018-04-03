<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP class emaier</title>
	<script>
	<?php

               require_once(EmailCalss.php');

$sendMail=new EmailCalss();

// change sender and receiver email

$sendMail->to=‘testing@testing.com';

         $sendMail->subject='testing';

         $sendMail->message='message sent';

         $sendMail->sender=‘example@example.com';

$mail_sent=mail($sendMail->to,

                                     $sendMail->subject,

                                     $sendMail->message,

                                     $sendMail->sender);

if ($mail_sent == true){ ?>

// give full path of your javascript

<script language="javascript" type="text/javascript">

       alert(’Success fully send email’);

       </script>

<?php } else { ?>

<script language="javascript" type="text/javascript">

        alert(‘some error occured ’);

       

    </script>

<?php

   }

?>

// create Class using getter setter

<?php

class EmailCalss{

        

public function __construct() {

    echo "object created!";

}

         public $to;

         public $subject;

         public $message;

         public $sender;

        

        

         public function setTo($to){

        $this->to = $to;

    }

         public function setSubject($subject){

        $this->subject = $subject;

    }

         public function setMessage($message){

        $this->message = $message;

    }

         public function setSender($sender){

        $this->sender = $sender;

    }

        

         public function getTo(){

        return $this->to;

    }

           

         public function getSubject(){

        return $this->subject;

    }

        

         public function getMessage(){

        return $this->message;

    }

         public function getSender(){

        return $this->sender;

    }

}