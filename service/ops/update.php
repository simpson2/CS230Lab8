<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");

require_once "../config/db.php";
require_once "../objects/ReadingList.php";

$database = new Database();
$conn = $database->getConnection();
$table = new ReadingList($conn);

$input = json_decode(file_get_contents("php://input"));

$table->ID = $input->ID;

$table->Name = $input->Name;
$table->URL = $input->URL;
$table->Description = $input->Description;

if($table->update()) {
    http_response_code(200);
    echo json_encode(
        array("Operation" => "Successful",
        "Message" => "Entry updated"));
}
else {
    http_response_code(503);
    echo json_encode(
        array("Operation" => "Unsuccessful",
        "Message" => "Unable to update entry"));
    }
?>