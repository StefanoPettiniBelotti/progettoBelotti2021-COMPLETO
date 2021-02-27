<?php
require_once '../src/connection.php';

/**
 * Tests connect()
 */
function testConnectWithPar()
{
    // provo la connessione con i parametri
    $connection=null;
    try{
        $connection=connectWithPar("localhost","root","password","northwind");
    }catch (Exception $e){
        // gestisco l'errore
        logError("Errore tecnico:". $e->getMessage());
        
    }
    
    
}

/**
 * Tests connect()
 */
function testConnect()
{
    // provo la connessione senza parametri
    $connection = null;
    try{
        $connection=connect();
    }catch (Exception $e){
        // gestisco l'errore
        logError("Errore tecnico:". $e->getMessage());
        
    }
            
}

// test 
testConnectWithPar();
testConnect();
