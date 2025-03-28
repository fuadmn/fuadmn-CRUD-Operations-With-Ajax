<?php

header("Content-type: application/json");

include 'conn.php';

//function readAll
//function Insert
//function Delete
//function Update

// POST

$action = $_POST['action'];


function readAll($conn){

    $data = array();
    $message = array();
    // read All students in the database
    $query = "SELECT * FROM  student";

    //excute = the query

    $result = $conn->query($query);

    // success or error

    if($result){

        while($row = $result->fetch_assoc()){

            $data [] = $row;

        }

        $message = array("status" => true, "data" => $data);

    }else{
        
        $message = array("status" => false, "data" => $conn-> error);

    }

    echo json_encode($message);


}

if(isset($action)){

    $action($conn);

}




?>