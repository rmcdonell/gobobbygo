<?php
//getting form values in variables
$cname=$_POST['cname'];
$cemail=$_POST['cemail'];
$comments=$_POST['comments'];

if(isset($cname) && !empty($cname) && isset($cemail) && !empty($cemail) && isset($comments) && !empty($comments))
{
       //mail to customer
       $to = $cemail;
       $subject = "Contact query from ".$cname;
       $txt = "Hi ".$cname.", We have received your query. Our team wll contact you shortly. ";
       $headers = "From: rmcdonell@dmacc.edu";
       mail($to,$subject,$txt,$headers);
  
       //Mail to admin
       $to = "rmcdonell@dmacc.edu";
       $subject = "Contact us query from ".$cname;
       $txt = "Hi Admin You have one query from ".$cname."\n Customer Email: ".$cemail."\n Comment: ".$comments;
       $headers = "From: rmcdonell@dmacc.edu";
       mail($to,$subject,$txt,$headers);
      
       echo "We have received your query. Our team will contact you shortly!";
}
else
{
   echo "Invalid input";
   return 0;
}
?>