<?php
include_once 'connection.php';

/**
 * Interrogazione di una tabella a DB con eventuale chiave
 * @param string $name nome della tabella
 * @param string $key costrutto in where
 * @throws Exception se problemi
 * @return {} resultset di oggetti
 */
function  getDaoByKey($name, $key){
    logInfo("getDaoByKey, tabella:" .  $name .", chiave:". $key);
    
    // mi connetto al database
    $connection=connect();
    $result=null;
    
    if ($connection){

        // creo la query
        logDebug("Creo la query");
        $sql = "SELECT * FROM northwind." . $name;
        if ($key!="")
        {
            // concateno la chiave
            $sql = $sql . " where ". $key;
        }
        
        // eseguo la query
        logDebug("Eseguo la query ".$sql);
        $result=mysqli_query($connection,$sql);
    

        // verifico la presenza di errori
        if (!$result){
            logError("Errore nell'esecuzione della query ". mysqli_error($connection));
        }
        
        logDebug("Chiudo la connessione");
        closeConnection($connection);
        
    }else{
        logDebug("Errore connessione null");
    }
    return $result;
}