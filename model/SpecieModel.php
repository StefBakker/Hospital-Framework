<?php

// Get all the Species and push it in an array
 function GetAllSpecies(){
	$db = openDatabaseConnection();
 
	$sql = "SELECT * FROM specie";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
	}

//Get the specie and give it an id
 function getSpecie($id) {
    $db = openDatabaseConnection();
    $sql = 'SELECT * FROM specie WHERE id=:id';
    $specie = $db->prepare($sql);
    $specie->execute(array(
        ':id' => $id
        ));

    $db = null;

    return $specie->fetchAll();
}
//Create a specie
function createspecie($specie)
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO specie(name) VALUES (:name)";

    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $specie,
        ));

    	$db = null;
       	header("Location:" . URL . "specie/index");
}

//Parameters are needed or else it doesn't work
function editSpecie($specie, $id) {
    $db = openDatabaseConnection();

    //Runs an query and updates specie, last_specie, specie and telephone
    $sql = "UPDATE specie SET name=:name WHERE id=:id";

    $query = $db->prepare($sql);
    $query->execute(array(
        ':name' => $specie,
        ':id' => $id
        ));
    // Makes $db empty
    $db = null;
    // Goes back to home when done
    header("Location:" . URL . "specie/index");
}

function deleteSpecie($id)
{
    $db = openDatabaseConnection();
    
    // Deletes specie from database
    $sql = "DELETE FROM specie WHERE id=:id ";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':id' => $id
        ));
    $db = null;
    header("Location:" . URL . "specie/index");

}
?>