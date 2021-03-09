<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '../app/vendor/phpmailer/phpmailer/src/Exception.php';
require_once '../app/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once '../app/vendor/phpmailer/phpmailer/src/SMTP.php';
require_once '../app/services/GoogleContactService.php';
class Dashboard extends Controller
{
    public static function index($auth_service)
    {
        // $contact_service = new GoogleContactService($auth_service);
        // $result = $contact_service->get_contacts();
        // $data = $result['feed']['entry'];
        echo('dashboar');
        return parent::view('dashboard/index', []);
    }
// Get google contacts
    public static function getContacts($auth_service) {
        $contact_service = new GoogleContactService($auth_service);
        $result = $contact_service->get_contacts();
        echo json_encode(['contacts' => $result['feed']['entry']]);
    }

    public static function sendEmail() {
        // echo( $_POST["receptEmail"]);

        // // Pear Mail Library
        // require_once "../plugins/Mail-1.4.1/Mail.php";

        // $from = '<Huang.ming.business@gmail.com>';
        // $to = '<reactist313@hotmail.com>';
        // $subject = 'Hi!';
        // $body = "Hi,\n\nHow are you?";

        // $headers = array(
        //     'From' => $from,
        //     'To' => $to,
        //     'Subject' => $subject
        // );

        // $smtp = Mail::factory('smtp', array(
        //         'host' => 'ssl://smtp.gmail.com',
        //         'port' => '465',
        //         'auth' => true,
        //         'username' => 'Huang.ming.business@gmail.com',
        //         'password' => 'letitgo2018'
        //     ));

        // $mail = $smtp->send($to, $headers, $body);

        // if (PEAR::isError($mail)) {
        //     echo('<p>' . $mail->getMessage() . '</p>');
        // } else {
        //     echo('<p>Message successfully sent!</p>');
        // }
        // passing true in constructor enables exceptions in PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->IsSMTP();
            $mail->Mailer = "smtp";
            $mail->SMTPDebug = 1; // for detailed debug output
            $mail->SMTPAuth = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->Host = 'ssl://smtp.gmail.com';

            $mail->Username = 'Huang.ming.business@gmail.com'; // YOUR gmail email
            $mail->Password = 'letitgo2018'; // YOUR gmail password

            // Sender and recipient settings
            $mail->SetFrom('Huang.ming.business@gmail.com', 'sender');
            $mail->AddAddress('reactist313@hotmail.com', 'react');
            $mail->AddReplyTo('Huang.ming.business@gmail.com', 'Sender Name'); // to set the reply to
            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
            $mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
            $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
			// $mail->MsgHTML($content);

            $mail->Send();
            echo json_encode(['message' => 'success']);
        } catch (Exception $e) {
            echo json_encode(['message' => $mail->ErrorInfo]);
            // echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}
