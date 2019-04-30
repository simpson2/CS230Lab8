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

$results = $table->retrieve(); //runs sql query and returns result set as an object
$rowCount = $results->rowCount();

if($rowCount>0) {

    $tableArr = array();

    while($row = $results->fetch(PDO::FETCH_ASSOC)) {

        //extract will import variables from array.
        //so $row["ID"] becomes $ID etc.
        //imported variables need to be exactly as
        //in database. *CASE-SENSITIVE*!
        extract($row);

        $tableItem = array(
            "id" => $ID,
            "date" => $Date,
            "name" => $Name,
            "url" => $URL,
            "description" => $Description
        );

        array_push($tableArr, $tableItem);
    }

    http_response_code(200);

    echo json_encode($tableArr);
}
else {
    http_response_code(404);

    echo json_encode(
        array("Operation" => "Unsuccessful",
        "Message" => "Unable to retrieve data")
    );
}

?>