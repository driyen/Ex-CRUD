<?php 
    include_once('POO/Response.php');
    include_once('POO/SuccessResponse.php');
    include_once('POO/FailResponse.php');
// include_once('post.php');
// 
// function Add() {
    // envoie vers la base de donnée
    // $mailrequest = $_POST['mail'] ;
    // $Nom = $_POST['name'];
    // $Prenom = $_POST['name2'];
// 
	// 
// 
	// $connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');
// 
	// $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Insérer des données dans la base de donnée avec insert into
	// $request = $connect->prepare("INSERT INTO user(nom,prenom,mail) VALUES ('$Nom', '$Prenom', '$mailrequest') ;");
// 
	// $request->execute();
// 
// 
// }
	// 
    // 
	// $content = Add();
// 
    $response = new SuccessResponse(true,"Article ok",null); 
    //$response = new FailResponse(true,"Article pas ok",null);

    echo json_encode($response);


?>