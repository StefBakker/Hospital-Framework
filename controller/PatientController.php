<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	// Renders all the patients and puts them into a array
	render("patient/index", array('patients' => GetAllPatients()));
}


function create()
{
	render("patient/create");

// If the POST is an submit then create a patient with information
	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$species = $_POST['species'];
		$status = $_POST['status'];
		$birthdate = $_POST['birthdate'];
		createPatient($name, $species, $status, $birthdate);
    		echo "Created succesful";
		}
}

function edit()
{
	// If exist in URL then make $id
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	}
	// If post is submit then 
	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$species = $_POST['species'];
		$status = $_POST['status'];
		$birthdate = $_POST['birthdate'];
		editPatient($name, $species, $status, $birthdate, $id);
	}
	$patient = getPatient($id);
	render('patient/edit', array("patient" => $patient));
}
?>