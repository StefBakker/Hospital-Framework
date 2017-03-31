<?php

// Get all the Patients and push it in an array
 function GetAllPatients(){
	$db = openDatabaseConnection();
 
	$sql = "SELECT * FROM patient";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
	}

//Get the patient and give it an id
 function getPatient($id) {
    $db = openDatabaseConnection();
    $sql = 'SELECT * FROM patient WHERE id=:id';
    $patient = $db->prepare($sql);
    $patient->execute(array(
        ':id' => $id
        ));

    $db = null;

    return $patient->fetchAll();
}

//Create a Patient
function createPatient($name, $species, $status, $birthdate)
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patient(name, species, status, birthdate) VALUES (:name, :species, :status, :birthdate)";

    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $name,
        ':species' => $species,
        ':status' => $status,
        ':birthdate' => $birthdate
        ));

    	$db = null;
       	header("Location:" . URL . "patient/index");
}

//Parameters are needed or else it doesn't work
function editPatient($name, $species, $status, $birthdate, $id) {
    $db = openDatabaseConnection();

    //Runs an query and updates name, species, status from that id
    $sql = "UPDATE patient SET name=:name, species=:species, status=:status, birthdate=:birthdate WHERE id=:id";

    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $name,
        ':species' => $species,
        ':status' => $status,
        ':birthdate' => $birthdate,
        ':id' => $id
        ));
    // Makes $db empty
    $db = null;
    // Goes back to home when done
    header("Location:" . URL . "patient/index");
}


function deletePatient($id)
{
    $db = openDatabaseConnection();
    
    // Deletes patient from database
    $sql = "DELETE FROM patient WHERE id=:id ";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':id' => $id
        ));
    $db = null;
    header("Location:" . URL . "patient/index");

}
?>