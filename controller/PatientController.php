<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	render("patient/index", array('patients' => GetAllPatients()));
}

function create()
{
	render("patient/create");

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$species = $_POST['species'];
		$status = $_POST['status'];
		createPatient($name, $species, $status);
    		echo "Created succesful";
	}
}
?>