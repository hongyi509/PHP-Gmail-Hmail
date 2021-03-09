<?php
class Contact extends Controller {
  public function __construct() {
    
  }
  public function insertData() {
    $data = $_POST['data'];
    echo var_dump(json_decode($data));
    //   // foreach ($data as $user) { 
  //   //   echo($user['name']);
  //   // }
  //   $DBCon = new DatabaseService();
  //   $insert = $DBCon->insert("user", $data);
  //   if($insert){
	// 			$json['status'] = 101;
	// 			$json['msg'] = "Data Successfully Inserted";
	// 		}
	// 		else{
	// 			$json['status'] = 102;
	// 			$json['msg'] = "Data Not Inserted";
	// 		}
  //   echo json_encode($json);
  }
}
