<?php

/** costante applicativa */
define("LOFFILENAME","log.txt");

/**
 * Scrive sul file di log
 *
 * @param string $logLevel il livello di log 
 * @param string $msg il messaggio
 * @return void
 */
function writeOnFile($logLevel, $msg){
    $myfile = fopen(LOFFILENAME, "a") or die("Unable to open file!");
    $now = new DateTime();
    $now->format('Y-m-d H:i:s');
    fwrite($myfile, $now->format('Y-m-d H:i:s') . " - " . $logLevel . " - " .  $msg . PHP_EOL);
    fclose($myfile);
}


/**
 * Logga a loglevel DEBUG
 * @param string $msg messaggio da loggare
 */
function logDebug($msg){
    writeOnFile("DEBUG",$msg);
}

/**
 * Logga a loglevel INFO
 * @param string $msg messaggio da loggare
 */
function logInfo($msg){
    writeOnFile("INFO",$msg);
}

/**
 * Logga a loglevel ERROR
 * @param string $msg messaggio da loggare
 */
function logError($msg){
    writeOnFile("ERROR",$msg);
}
