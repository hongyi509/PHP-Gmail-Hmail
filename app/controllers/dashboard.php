<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '../app/vendor/phpmailer/phpmailer/src/Exception.php';
require_once '../app/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once '../app/vendor/phpmailer/phpmailer/src/SMTP.php';
require_once '../app/vendor/autoload.php';
require_once '../app/services/GoogleContactService.php';
class Dashboard extends Controller
{
    public static function index($auth_service)
    {
        // $contact_service = new GoogleContactService($auth_service);
        // $result = $contact_service->get_contacts();
        // $data = $result['feed']['entry'];
        return parent::view('dashboard/index', []);
    }
// Get google contacts
    public static function getContacts($auth_service) {
        $contact_service = new GoogleContactService($auth_service);
        $result = $contact_service->get_contacts();
        echo json_encode(['contacts' => $result['feed']['entry']]);
    }

    public static function sendEmail() {
        echo( $_POST["receptEmail"]);
    
        // create an mailer object
            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->Mailer = "smtp";

            $mail->SMTPDebug  = 2;  
            $mail->SMTPAuth   = TRUE;
            // $mail->SMTPSecure = "tls";
            $mail->SMTPSecure = "ssl"; 
            $mail->Port       = 587;
            echo('start smtp');
            // $mail->SMTPOptions = array(
            //     'ssl' => array(
            //         'verify_peer' => false,
            //         'verify_peer_name' => false,
            //         'allow_self_signed' => true
            //     )
            // );
            $mail->SMTPKeepAlive = true;
            $mail->Host       = "ssl://smtp.gmail.com";
            $mail->Username   = "Huang.ming.business@gmail.com";
            $mail->Password   = "letitgo2018";
        // Mail Content
            $mail->IsHTML(true);
            $mail->AddAddress("reactist313@hotmail.com", "Sender Display Name");
            $mail->SetFrom("reactist313@hotmail.com", "Recipient Display Name");
            // $mail->AddReplyTo("destinatin.id@domain.com", "Recipient Display Name"); - Enable if this is different from the sender mail id.
            // $mail->AddCC("destinatin.id@domain.com", "Sender Display Name"); - Add any CC 
            $mail->Subject = "Test Email using PHP Mailer";
            $content = "<b>This is a Test Email sent via SMTP Server using PHP mailer class.</b>";
        // Attach file
            // Directly attach f file
            // $mail->addAttachment('img/loading.gif', 'loading.gif');

            // Build the attachment 
            // $mail->AddStringAttachment(base64_decode("iVBORw0KGgoAAAANSUhEUgAAA"), "test.png", "base64", "image/png");
        // Send Mail
            $mail->MsgHTML($content); 
            if(!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
            } else {
            echo "Email sent successfully";
            }
        }

}
