<?php
require_once '../app/services/GoogleMailBoxService.php';

class Emails extends Controller {

  public function __construct() {

  }
  
  public function index($auth_service) {
    $mailbox_service = new GoogleMailBoxService($auth_service);
    $data = [];
    $data['mail_lists'] = $mailbox_service->get_mails();
    echo $data['mail_lists'];
    return parent::view('emails/index', $data);
  }
}