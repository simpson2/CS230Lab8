<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

require_once "../config/db.php";
require_once "../objects/ReadingList.php";

$database = new Database();
$conn = $database->getConnection();
$table = new ReadingList($conn);

//$input = json_decode(file_get_contents("php://input"));
if(isset($_POST['input'])) {
    $input = json_decode($_POST['input']);
}

$table->ID = $input->ID;
$table->retrieveByID();

//Use retrieveByID to check if ID exists before proceeding
if($table->ID!=null) {
    $table->Name = $input->Name;
    if($table->updateName()) {
        http_response_code(200);
        echo json_encode(array("Operation" => "Successful",
        "Message" => "Name of entry updated"));
    }
    else {
        http_response_code(500);
        echo json_encode(array("Operation" => "Unsuccessful",
        "Message" => "Internal server error"));
    }
}
else {
    http_response_code(404);
    echo json_encode(array("Operation" => "Unsuccessful",
    "Message" => "Unable to update name of entry - entry does not exist"));
}
?>