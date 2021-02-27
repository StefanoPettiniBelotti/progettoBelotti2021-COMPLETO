<?php
require_once '../src/log.php';

function testLogDebug(){
    logDebug("Messaggio Debug");
}

function testLogInfo(){
    logInfo("Messaggio Info");
}

function testLogError(){
    logError("Messaggio Error");
}

// test 
testLogDebug();
testLogInfo();
testLogError();

