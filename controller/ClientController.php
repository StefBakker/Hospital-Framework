<?php

require(ROOT . "model/ClientModel.php");
require(ROOT . "model/PatientModel.php");

function index()
{
	// Renders all the clients and puts them into a array
	render("client/index", array('clients' => GetAllClients()));
}

function create()
{	// render the create and give all patients with it
	render("client/create", array('clients' => GetAllPatients()));

// If the POST is an submit then create a client with information
	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$last_name = $_POST['last_name'];
		$telephone = $_POST['telephone'];
		$patient = $_POST['patient'];
		createClient($name, $last_name, $patient, $telephone);
    		echo "Created succesful";
		}
}

function edit()
{
	// If exist in URL then make $id
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$client = getClient($id);
	} else {
		return false;
	}

	// If post is submit then 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$last_name = $_POST['last_name'];
		$patient = $_POST['patient'];
		$telephone = $_POST['telephone'];
		editClient($name, $last_name, $patient, $telephone, $id);
	}
	render('client/edit', array("client" => $client));
}

function delete()
{
    // If id exist in url then make $id
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $client = getClient($id);
    }
  	if (isset($_POST['confirmed'])){
  		deleteclient($id);
   	}

  	elseif (isset($_POST['canceled'])) {
  		    header("Location:" . URL . "client/index");
  	}
	render('client/delete', array('client' => $client));
}
?>
