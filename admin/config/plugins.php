<?php

    // <!-- ===================Ago time=========== -->
    function time_elapsed_string($datetime, $full = false) {
        /**int to string time  **/
        $datte=date("Y-m-d H:i:s",$datetime);
        $now = new DateTime;
         /**onl string time  **/
        $ago = new DateTime($datte);
        $diff = $now->diff($ago);
        /**devided time  **/
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
        /**time array  **/
        $string = array(
            'y' => 'y',
            'm' => 'month',
            'w' => 'w',
            'd' => 'd',
            'h' => 'h',
            'i' => 'm',
            's' => 's',
        );
         /**loop for convert string*/
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . '' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }
        /**check string time */
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
        }
        
        // <!-- ===================php mailer=========== -->
        // ----------Mail will be sent from wherever you put it--------
    
        // if(isset($_POST['gmail_verify'])){
        //     $tim=time();
        //     $sql = "UPDATE user_info SET verificode='$tim' WHERE id=$id";
        //     $query = mysqli_query($conn,$sql);
        //     $email =  $show['email'];
        //     $id = $show['id'];
        //     $code = $email.$id; 
        //     $verify_code = base64_encode($code);
        //     $verify_link = "https://support.bddonation.com/verification_code.php?verify=$tim";
        
        //     $smtp_host = $mail['smtp_host'];
        //     $smtp_username = $mail['smtp_user_name'];
        //     $smtp_password = $mail['smtp_user_pass'];
        //     $smtp_port = $mail['smtp_port'];
        //     $smtp_secure = $mail['smtp_security'];
        //     $site_email = $mail['site_email'];
        //     $site_name = $mail['site_replay_email'];
        //     $address = $email;
        //     $body = 'Hi, Mr. Your verification link is: '.$verify_link;
        //     $subject = 'OTP verification';
        //     $send = sendVarifyCode($smtp_host,$smtp_username,$smtp_password,$smtp_port,$smtp_secure,$site_email,$site_name,$address,$body,$subject);
        
        //       if($send){
        //           $msg = 'Your message was sent successfully. Verify your message from your mail.';
        //           header("location:verification.php?msg=$msg");
        //       }
            
        //   }
    
    
    
        // function sendVarifyCode($smtp_host, $smtp_username, $smtp_password, $smtp_port, $smtp_secure, $site_email, $site_name, $address, $body, $subject)
        // {
        //     require 'PHPMailer/PHPMailerAutoload.php';
        //     $mail = new PHPMailer;
        //    // $mail->SMTPDebug = 4;                             // Enable verbose debug output
    
        //     $mail->isSMTP();                                      // Set mailer to use SMTP
        //     $mail->Host = $smtp_host;  // Specify main and backup SMTP servers
        //     $mail->SMTPAuth = true;                               // Enable SMTP authentication
        //     $mail->Username = $smtp_username;                 // SMTP username
        //     $mail->Password = $smtp_password;                           // SMTP password
        //     $mail->Port = $smtp_port;                                    // TCP port to connect to
        //     $mail->SMTPSecure = $smtp_secure;                            // Enable TLS encryption, `ssl` also accepted
    
        //     $mail->setFrom($site_email, $site_name);
        //     $mail->addAddress($address);     // Add a recipient
        //     $mail->addReplyTo($site_email, 'Noreplay');
    
        //     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //     $mail->isHTML(true);                                  // Set email format to HTML
    
        //     $mail->Subject = $subject;
        //     $mail->Body    = $body;
    
        //     if (!$mail->send()) {
        //         echo 'Code could not be sent.';
        //        //  echo 'Mailer Error: ' . $mail->ErrorInfo;
        //     } else {
        //     }
        // }
    
        
        ?>