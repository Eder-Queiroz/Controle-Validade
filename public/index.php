<?php

require_once dirname(__FILE__, 2) . '/src/config/database.php';

$teste = Database::getConnection();

echo 'Sucesso';