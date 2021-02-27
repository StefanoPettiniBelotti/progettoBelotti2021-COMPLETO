<?php
require_once '../src/dao.php';
require_once '../lib/helper.php';

/** costante di classe nome tabella cliente */
define("TABELLA_CLIENTE","clienti");

echo fromDaoToDTO(getDaoByKey(TABELLA_CLIENTE, null));
