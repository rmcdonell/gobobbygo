<?php
include  'Emailer.php';

$newEmail = new Emailer(); //instantiation a new object/variable

$newEmail->setSendTo("rmcdonell@dmacc.edu");

echo $newEmail->getSentTo();


?>
