<?php
require_once 'log.php';

/** nome host mysql di default*/
define("NOMEHOST","localhost");
/** utente mysql di default */
define("NOMEUSER","root");
/** password mysql di default */
define("NOMEPASSWORD","password");
/** nomedb  mysql di default */
define("NOMEDB","northwind");


/**
 * Default connection
 * @return  {} la connessione
 */
function  connect(){
   logInfo("connect, Connessione di default");
   
   // creo la connessione a mysql
   return connectWithPar(NOMEHOST, NOMEUSER, NOMEPASSWORD, NOMEDB);
   
}

/**
 * Connessione parametrica
 * @param string $nomehost il nome del server db
 * @param string $nomeuser il nome utente di connessione
 * @param string $password la password
 * @param string $nomedb il nome del database
 * @return {} la connessione
 */
function connectWithPar(string $nomehost, string $nomeuser, string $password, string $nomedb)
{
    logInfo("connectWithPar, nomehost:".$nomehost.", nomeuser:" . $nomeuser . ", nomedb:" . $nomedb);
    $conn=null;
    
    // creo la connessione a mysql
    logDebug("Tentativo di connessione");
    $conn = mysqli_connect($nomehost, $nomeuser, $password, $nomedb);
    
    // verifico la presenza di un errore
    if (mysqli_connect_errno()){
        logError("Errore di connessione ". mysqli_connect_error());
        // Lancio l'errore
    }else{
        logDebug("Connessione riuscita");
    }
    

    // restituisco la connessione
    return $conn;
    
}

/**
 * Default connection
 * @return  {} la connessione
 */
function  closeConnection($connection){
    logInfo("closeConnection, chiudo la connessione");
    
    // chiudo la connessione
    if($connection)
    {
        mysqli_close($connection);
    }
    
 }
