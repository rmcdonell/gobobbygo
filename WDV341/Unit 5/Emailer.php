


<?php

//Emailer Class Definition
class Emailer {
	//add variables or properties
	 private $sendTo="";
	 private $sentFrom="";
	 private $emailMsg="";
	 private $emailSubject="";

	 public function _construct()
	 {

	 }

	 public function setSendTo($inSendTo)
	 {

		$this->sendTo = $inSendTo;
		//$this means class(current object)
		//->(arrow) takes place of .
	 }

	 public function setSentFrom($inSentFrom)
	 {
	 		 $this->sentFrom = $inSentFrom;
	 }

	 public function setEmailSubject($inEmailSubject)
	 {
	 	     $this->emailSubject = $inEmailSubject;
	 }

	 public function setEmailMsg($inEmailMsg)
	 {
	 	     $inEmailMsg = htmlentities($inEmailMsg); //entities changes into php symbols like @
			 $inEmailMsg = wordwrap($inEmailMsg, 70,"\n"); //only so many charachters  choose where to break the lines \n = new line
			 $this->emailMsg = $inEmailMsg;
	 }

	 public function getSentTo()
	 {
	 	     return $this->sendTo;
	 }

	 public function getSentFrom()
	 {
	 	     return $this->sentFrom;
	 }

	 public function getEmailSubject()
	 {
	 	return $this->emailSubject;
	 }

	 public function getEmailMsg()
	  {
	  	     return $this->EmailMsg;
	  }

}
?>
