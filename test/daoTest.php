<?php
require_once '../src/dao.php';

      /**
     * Tests getDaoByKey()
     */
     function testGetDaoByKey()
    {
        // restituisco tutti i clienti
        $clienti=null;
        $clienti=getDaoByKey("Clienti",null);
        if ($clienti){
            logDebug("rows:" . mysqli_num_rows($clienti));
            if (mysqli_num_rows($clienti)==0){
                logError("Attesi almeno 1 risultato");
            }else{
                logInfo("testGetDaoByKey concluso con successo");
            }
        }else{
            logError("Errore nella chiamata");
        }
    }
    
    /**
     * Tests getDaoByKey()
     */
     function testGetDaoByKey2()
    {
        // restituisco solo il cliente particolare
        $clienti=null;
        $clienti=getDaoByKey("Clienti","idcliente='ALFKI'");
       
        if ($clienti){
            logDebug("rows:" . mysqli_num_rows($clienti));
            if (mysqli_num_rows($clienti)!=1){
                logError("Attesi 1 risultato");
            }else{
                logInfo("testGetDaoByKey2 concluso con successo");
            }
        }else{
            logError("Errore nella chiamata");
        }
        
    }

    testGetDaoByKey();
    testGetDaoByKey2();