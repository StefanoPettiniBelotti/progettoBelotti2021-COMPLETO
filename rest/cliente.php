<?php
require_once '../src/dao.php';
require_once '../lib/helper.php';

/** costante di classe nome tabella cliente */
define("TABELLA_CLIENTE","clienti");
header('Content-Type: application/json');
echo fromDaoToDTO(getDaoByKey(TABELLA_CLIENTE, ""));
