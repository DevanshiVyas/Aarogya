<?php
    
    require_once("class.phpmailer.php");
    require_once("class.smtp.php");
    global $error;
	//$current_email=$_GET['a'];
	$current_email="201101134@daiict.ac.in";
	//echo $current_email;
	$username = "senproject2014@gmail.com";
    $password = "khelo.com";
    $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
    //$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
	$mail->host = 'http://localhost'; 
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->Priority = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = '8bit';
	$mail->IsHTML(true);
    $mail->ContentType = 'text/html; charset=utf-8\r\n';
    $mail->SetFrom('np@demo.net', 'KHELO.COM');
    $mail->Subject = 'Activate Your Account';
    $mail->Body = 'Your confirmation link :'; 
     
	//$mail->Body .= 'http://localhost/htdocs/khelo/confirm.php?passkey='.$confirm_code.''; 
    $mail->Body .= "<a href='http://localhost/khelo/activate.php?a=".$current_email."' > Click Here </a>"; 
    $mail->AddAddress($current_email);
    $mail->IsHTML(true);
    $mail->WordWrap    = 900; 
    if (!$mail->Send()) {
	echo "error";
       // $error = 'Mail error: ' . $mail->ErrorInfo;
        return false;
    } 
	else {
        $error = 'Message sent! activate your Khelo Account Now!';
        $mail->SmtpClose();
        echo "Confirm Your Account, a Mail has Been sent to you";
		return true;
		}
?>
