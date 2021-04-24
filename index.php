<?php

declare(strict_types=1);

namespace App;

require_once("src/Utils/debug.php");
require_once("src/View.php");

const DEFAULT_ACTION = 'list';

$action=$_GET['action'] ?? DEFAULT_ACTION;
//$_GET jest globalną zmienną, która przechowywuje w postaci tablicy asocjacyjnej paramtery z urla
//operator ?? Jeśli wartość po lewej nie jest pusta, to weż tą wartość i przypisz ją do zmiennej po lewj, jeśli jest pusta przypisz null
// Trzeba bardzo ostrożnie podchodzic do danych, które otrzymujemy z zewnątrz, dlatego przypisujemy do $page przypisujemy stałe stringi, na wypadek, gdyby ktoś przekazał inny params

$view = new View();

$viewParams=[];
if($action === 'create'){
    $page = 'create';
    $viewParams['resultCreate']='udało się';
}else {
    $page = 'list';
    $viewParams['resultList']='wyświetlamy notatki';
}

$view->render($page,$viewParams);





