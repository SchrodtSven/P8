<?php
require_once 'src/P8/Autoload.php';
use SchrodtSven\P8\Internal\GenericDataProvider;
use SchrodtSven\P8\Internal\ListClass;
use SchrodtSven\P8\Internal\StringClass;
use SchrodtSven\P8\Internal\Repository;

$fh = fopen('dtata.out', 'w');

var_dump(get_resource_id($fh));

var_dump($fh);