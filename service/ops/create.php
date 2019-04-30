<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

require_once "../config/db.php";
require_once "../objects/ReadingList.php";

$database = new Database();
$conn = $database->getConnection();
$table = new ReadingList($conn);

if(isset($_POST['input'])) {
    $input = json_decode($_POST['input']);
}

if(
    !empty($input->Name) &&
    !empty($input->URL) &&
    !empty($input->Description)
) {
    $table->Name = $input->Name;
    $table->URL = $input->URL;
    $table->Description = $input->Description;
    
    if($table->create()) {
        http_response_code(201);
        echo json_encode(
            array("Operation" => "Successful",
            "Message" => "Entry created"));
    }
    else {
    http_response_code(500);
    echo json_encode(
        array("Operation" => "Unsuccessful",
        "Message" => "Unable to create entry"));
    }
}
else {
    http_response_code(400);
    echo json_encode(
        array("Operation" => "Unsuccessful",
        "Message" => "Data incomplete"));
}
?>