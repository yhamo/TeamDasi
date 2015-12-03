<?php

    $db = mysql_connect('localhost', 'p1205462', '172004');

    // on sélectionne la base
    mysql_select_db('p1205462',$db);

    // on crée la requête SQL
    $sql = 'SELECT id_event, title, start, end FROM event';

    // on envoie la requête
    $req = mysql_query($sql);

    // on fait une boucle qui va faire un tour pour chaque enregistrement
    $outp = "";
    while($data = mysql_fetch_assoc($req))
        {
            if ($outp != "") {$outp .= ",";}
            $outp .= '{"id_event":"'  . $rs["id_event"] . '",';
            $outp .= '{"title":"'  . $rs["title"] . '",';
            $outp .= '"start":"'   . $rs["start"]        . '",';
            $outp .= '"end":"'. $rs["end"]     . '"}';
        }
    
    $outp ='{"records":['.$outp.']}';
    echo($outp);
    // on ferme la connexion à mysql
    mysql_close(); 

 ?>

