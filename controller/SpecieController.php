<?php

// Require SpecieModel 
require(ROOT . "model/SpecieModel.php");

function index()
{
	// Renders all the species and puts them into a array
	render("specie/index", array('species' => GetAllSpecies()));
}


function create()
{
	// Render the page
	render("specie/create");

// If the POST is an submit then create a specie with information
	if (isset($_POST['submit'])) {

		$species = $_POST['test'];
		createspecie($species);
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

		$specie = $_POST['name'];
		editSpecie($specie, $id);
	}
	$specie = getSpecie($id);
	render('specie/edit', array("specie" => $specie));
}

function delete()
{
    // If id exist in url then make $id
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $specie = getSpecie($id);

    // If the Post is submit then deletespecie and go back to specie index
	  	if (isset($_POST['confirmed'])){
	  		deleteSpecie($id);
	  		header("Location:" . URL . "specie/index");
	   	}
	// If the POST submit is canceled then go back to specie index
	  	elseif (isset($_POST['canceled'])) {
	  		header("Location:" . URL . "specie/index");
	  	}

	  	render('specie/delete', array('species' => $specie));
  	} else {
  		header("Location:" . URL . "specie/index");
  	}
}
?>