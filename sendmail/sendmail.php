<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if (isset($_POST['send_message'])) {
  $name=htmlspecialchars($_POST['names']);
  $email=htmlspecialchars($_POST['email']);
  $message=htmlspecialchars($_POST['message']);



                               // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.1and1.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'info@melliom.com';                 // SMTP username
      $mail->Password = 'GetConnected';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('info@melliom.com', 'website');
      $mail->addAddress('info@melliom.com');     // Add a recipient
      $mail->addAddress('abdul@melliom.com');     // Add a recipient
                   // Name is optional


      // //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'From '.$name.' '.$message ;
      $mail->Body    = 'mail: '.$email.' <br>name: '.$name.'<br><br><strong>Message</strong><br>'.$message;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if ($mail->send()) {
          echo "<form id='form' method='post' action='../index.php'><input type='hidden' id='sent' name='sent' value='1'></form> ";
          ?>
          <script type="text/javascript">
              document.getElementById('form').submit();
          </script>
          <?php
      }
  } catch (Exception $e) {
    echo "<form id='form' method='post' action='../index.php'><input type='hidden' id='no-sent' name='sent' value='0'></form> ";
    ?>
    <script type="text/javascript">
        document.getElementById('form').submit();
    </script>
    <?php
  }
}
