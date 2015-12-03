<?php
function connexion_db()
{
	$host="localhost";
	$user="p1205462";
	$password="172004";
	$nombase="p1205462";
	try
	{
	$bdd=new PDO('mysql:host=localhost;dbname=p1205462','p1205462','172004');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	$bdd->exec('SET NAMES utf8');
	return $bdd;
}

function get_events_from_db()
{
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $bdd = connexion_db();

    
    $req= $bdd->prepare('SELECT id_event, title, start, end FROM event');
	$req->execute() or die(print_r($req->errorInfo()));
	$ligne=fetchAll($req);
	
    $outp = "";
    while($ligne != "" ) {
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"id_event":"'  . $ligne["id_event"] . '",';
        $outp .= '{"title":"'  . $ligne["title"] . '",';
        $outp .= '"start":"'   . $ligne["start"]        . '",';
        $outp .= '"end":"'. $ligne["end"]     . '"}';
    }
    $outp ='{"records":['.$outp.']}';
    $bdd->close();
    echo($outp);
    return $outp;
}
?>