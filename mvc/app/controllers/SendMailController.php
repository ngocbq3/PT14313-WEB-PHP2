<?php
//Gửi email
require './app/PHPMailer/src/Exception.php';
require './app/PHPMailer/src/PHPMailer.php';
require './app/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class SendMailController extends Controller {
    public function index() {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            //Set unicode
            $mail->CharSet = 'utf-8';
            $mail->Username   = 'sinhvienftppoly.noreply@gmail.com';                     // SMTP username
            $mail->Password   = '!@#qwe123456';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('sinhvienftppoly.noreply@gmail.com', 'Ngocbq');
            $mail->addAddress('ngocbq@fpt.edu.vn', 'Ngocbq');     // Add a recipient
            $mail->addAddress('phucnvph07307@fpt.edu.vn');               // Name is optional
            $mail->addReplyTo('ngocbq@fpt.edu.vn', 'Ngocbq');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addAttachment('./public/images/bluboowooo_800x450.jpg', 'bluboo.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Thư test mới';
            $mail->Body    = 'Nội dung thư được viết ở đây <b>trong html bold!</b>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}