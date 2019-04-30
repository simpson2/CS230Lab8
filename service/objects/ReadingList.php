<?php
//ReadingList table as an object

class ReadingList {

    private $pdo;
    private $tableName = "ReadingList";

    public $ID;
    public $Date;
    public $Name;
    public $URL;
    public $Description;

    public function __construct($conn) { //__construct used when parameters are involved in constructor function
        $this->pdo = $conn;
    }

    function create() {
        $sql = "INSERT INTO ".$this->tableName.
        " SET Date=now(), Name=:Name, URL=:URL, Description=:Description";
        //Only take in ID, Name, Desc as Date is automatically generated using now()
        //and id is auto-increment

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(":Name", $this->Name);
        $stmt->bindParam(":URL", $this->URL);
        $stmt->bindParam(":Description", $this->Description);

        if($stmt->execute()) return true;

        return false;
    }

    function retrieveByID() {
        $sql = "SELECT * FROM ".$this->tableName.
        " WHERE ID = :ID";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":ID", $this->ID);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //populate ReadingList attributes to be fetched by REST API operations
        $this->ID = $result['ID'];
        $this->Date = $result['Date'];
        $this->Name = $result['Name'];
        $this->URL = $result['URL'];
        $this->Description = $result['Description'];
    }

    function retrieveByName() {
        $sql = "SELECT * FROM ".$this->tableName.
        " WHERE Name = :Name";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":Name", $this->Name);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //populate ReadingList attributes to be fetched by REST API operations
        $this->ID = $result['ID'];
        $this->Date = $result['Date'];
        $this->Name = $result['Name'];
        $this->URL = $result['URL'];
        $this->Description = $result['Description'];
    }

    function updateName() {
        $sql = "UPDATE ".$this->tableName.
        " SET Name = :Name WHERE ID = :ID";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(":Name", $this->Name);
        $stmt->bindParam(":ID", $this->ID);

        if($stmt->execute()) return true;

        return false;
    }

    function updateURL() {
        $sql = "UPDATE ".$this->tableName.
        " SET URL = :URL WHERE ID = :ID";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(":URL", $this->URL);
        $stmt->bindParam(":ID", $this->ID);

        if($stmt->execute()) return true;

        return false;
    }

    function updateDesc() {
        $sql = "UPDATE ".$this->tableName.
        " SET Description = :Desc WHERE ID = :ID";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(":Desc", $this->Description);
        $stmt->bindParam(":ID", $this->ID);

        if($stmt->execute()) return true;

        return false;
    }

    function delete() {
        $sql = "DELETE FROM ".$this->tableName.
        " WHERE ID = :ID";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(":ID", $this->ID);

        if($stmt->execute()) return true;

        return false;
    }

        /*function retrieve() {
        $sql = "SELECT * FROM ".$this->tableName;
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt;
    }*/

    /*function update() {
        $sql = "UPDATE ".$this->tableName.
        " SET Name = :Name, URL = :URL, Description = :Description
        WHERE ID = :ID";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(":Name", $this->Name);
        $stmt->bindParam(":URL", $this->URL);
        $stmt->bindParam(":Description", $this->Description);
        $stmt->bindParam(":ID", $this->ID);

        if($stmt->execute()) return true;

        return false;
    }*/

    /**/
}
?>