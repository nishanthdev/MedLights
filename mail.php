
<?php 
// $ch = curl_init();
// $curlConfig = array(
//     CURLOPT_URL            => " http://ezmlr.in/mail_ogp.php?to=ogpcart@gmail.com&msg=%3Cb%3EHello%3C/b%3E",
//     CURLOPT_POST           => false,
//     // CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POSTFIELDS     => array(
//         'field1' => 'some date',
//         'field2' => 'some other data',
//     )
// );
// curl_setopt_array($ch, $curlConfig);
// $result = curl_exec($ch);
// curl_close($ch);

$email = "nishanthbht@gmail.com";
$msg = "Hello World";
	$url = "http://ezmlr.in/mail_ogp.php?to=nishanthbht@gmail.com&msg=";
	//echo $url;

	// create a new cURL resource
	$ch = curl_init();


	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $url);

	// grab URL and pass it to the browser
	curl_exec($ch);

	// close cURL resource, and free up system resources
	curl_close($ch);

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'vendor/autoload.php';

// $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
// try {
//     //Server settings
//     $mail->SMTPDebug = 2;                                 // Enable verbose debug output
//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = 'ogpcart@gmail.com';                 // SMTP username
//     $mail->Password = 'ogpcart123';                           // SMTP password
//     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//     $mail->Port = 587;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('ogpcart@gmail.com');
//     $mail->addAddress('nishanthbht@gmail.com');     // Add a recipient
//     // $mail->addAddress('ellen@example.com');               // Name is optional
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//     //Content
//     $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Subject = 'Here is the subject';
    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
// }

// use PHPMailer\PHPMailer\PHPMailer;
// require 'vendor/autoload.php';
//Create a new PHPMailer instance
// $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
// $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
// $mail->SMTPDebug = 2;
//Set the hostname of the mail server
// $mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
// $mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
// $mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
// $mail->SMTPAuth = true;/
// $mail->SMTPOptions = array(
// 'ssl' => array(
// 'verify_peer' => false,
// 'verify_peer_name' => false,
// 'allow_self_signed' => true
// )
// );
//Username to use for SMTP authentication - use full email address for gmail
// $mail->Username = "ogpcart@gmail.com";
//Password to use for SMTP authentication
// $mail->Password = "ogpcart123";
//Set who the message is to be sent from
// $mail->setFrom('ogpcart@gmail.com', 'OGP');
//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
// $mail->addAddress('nishanthbht@gmail.com', 'Nishanth');
//Set the subject line
// $mail->Subject = 'PHPMailer GMail SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is a plain-text message body';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
// if (!$mail->send()) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
// } else {
    // echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
// }/

// $msg = ""
    // $url = "http://www.smsidea.co.in/sendsms.aspx?mobile=8050789520&pass=@nishanth22B&senderid=SMSBUZ&to=8050789520&msg=HEllo";
    // //echo $url;

    // // create a new cURL resource
    // $ch = curl_init();


    // // set URL and other appropriate options
    // curl_setopt($ch, CURLOPT_URL, $url);

    // // grab URL and pass it to the browser
    // curl_exec($ch);

    // // close cURL resource, and free up system resources
    // curl_close($ch);



 ?>
 <h1>Hello</h1>

 
<!-- Required for Validation -->
  <!--   <script src="./js/jquery.js"></script>
    <script src="./js/jquery.form-validator.min.js"></script>
    <script type="text/javascript">
        $.validate({
    form : '#form'
    });
    </script> -->
    <!--   -->