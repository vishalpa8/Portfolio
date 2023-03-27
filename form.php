
<?php  
if( isset($_POST['submit']) ) {
//getting user data
$fullName = $_POST['Name'];
$fromEmail = $_POST['Email'];
$phone = $_POST['mobile'];
$emailSubect = $_POST['email_subject'];
$message = $_POST['message'];
 
//Recipient email, Replace with your email Address
$mailTo = 'vishalpa8@gmail.com';
 
//email subject
$subject = ' A New Message Received From ' .$fullName;
 
//email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Client Name: </b> '.$fullName . '</p>
<p> <b>Email: </b> '.$fromEmail .'</p>
<p> <b>Phone Number: </b> '.$phone .'</p>
<p> <b>Email Subject: </b> '.$emailSubect .'</p>
<p> <b>Message: </b> '.$message .'</p>';

//header for sender info
$headers = "From: " .$fullName . "<". $fromEmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
//PHP mailer function
 $result = mail($mailTo, $subject, $htmlContent, $headers);
 
   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
 
?>