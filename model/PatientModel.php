<?php

 function GetAllPatients(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patient";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
	}	

function createPatient($name, $species, $status)
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patient(name, species, status) VALUES (:name, :species, :status)";

    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $name,
        ':species' => $species,
        ':status' => $status
        ));

    	$db = null;
       	header("Location:" . URL . "patient/index");
}