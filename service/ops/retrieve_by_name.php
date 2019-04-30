<?php
//HTTP headers - allow different origins to access and data format is declared to be json
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");

require_once "../config/db.php";
require_once "../objects/ReadingList.php";

$database = new Database();
$conn = $database->getConnection();
$table = new ReadingList($conn);

if(isset($_GET['Name']) && $_GET['Name']!='') {
    $table->Name = $_GET['Name'];
}

$table->retrieveByName();

//fetch ReadingList attributes and map to resultArray array
if($table->Name!=null) {
    $resultArray = array(
        "ID" => $table->ID,
        "Date" => $table->Date,
        "Name" => $table->Name,
        "URL" => $table->URL,
        "Description" => $table->Description
    );

    http_response_code(200);

    echo json_encode($resultArray);
}
else {
    http_response_code(404);

    echo json_encode(
        array("Operation" => "Unsuccessful",
        "Message" => "Unable to retrieve data")
    );
}
?>

