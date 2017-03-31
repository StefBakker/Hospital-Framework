<?php

// Get all the Clients and push it in an array
 function GetAllClients(){
	$db = openDatabaseConnection();
 
	$sql = "SELECT * FROM client";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
	}

//Get the patient and give it an id
 function getClient($id) {
    $db = openDatabaseConnection();
    $sql = 'SELECT * FROM client WHERE id=:id';
    $client = $db->prepare($sql);
    $client->execute(array(
        ':id' => $id
        ));

    $db = null;

    return $client->fetchAll();
}
//Create a Patient
function createClient($name, $last_name, $patient, $telephone)
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO client(name, last_name, patient, telephone) VALUES (:name, :last_name, :patient, :telephone)";

    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $name,
        ':last_name' => $last_name,
        ':patient' => $patient,
        ':telephone' => $telephone
        ));

    	$db = null;
       	header("Location:" . URL . "client/index");
}

//Parameters are needed or else it doesn't work
function editClient($name, $last_name, $patient, $telephone, $id) {
    $db = openDatabaseConnection();

    //Runs an query and updates name, last_name, patient and telephone
    $sql = "UPDATE client SET name=:name, last_name=:last_name, patient=:patient, telephone=:telephone WHERE id=:id";

    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $name,
        ':last_name' => $last_name,
        ':patient' => $patient,
        ':telephone' => $telephone,
        ':id' => $id
        ));
    // Makes $db empty
    $db = null;
    // Goes back to home when done
    header("Location:" . URL . "client/index");
}

function deleteClient($id)
{
    $db = openDatabaseConnection();
    
    // Deletes client from database
    $sql = "DELETE FROM client WHERE id=:id ";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':id' => $id
        ));
    $db = null;
    header("Location:" . URL . "client/index");

}
?>