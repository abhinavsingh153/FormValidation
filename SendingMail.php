<?php

//mail('abhi.singh13534@gmail.com', 'Testing', 'This is just a test to check localhost email' ,'From:abhinavsingh153@gmail.com');
$emailTo ="abhinavsingh153@gmail.com";
$subject="Testing";
$body="This is just a test to check localhost email.";
$headers = "From:abhinavsingh153@gmail.com";

    if(mail($emailTo , $subject, $body, $headers)){
         echo "Mail sent successfully";
    }
else{
    echo "mail no sent";
}

?>