<?php

$currencies = json_decode(file_get_contents('http://api.nbp.pl/api/exchangerates/tables/A'))[0];

if (!$currencies) {
    exit('Błąd pobierania danych z NBP.');
}

$db = new Database($config['database']);

$db->truncate('currencies');

foreach ($currencies->rates as $currency) {
    $db->query('INSERT INTO currencies (`table`, `no`, `date`, `currency`, `code`, `mid`) VALUES(:table, :no, :date, :currency, :code, :mid)', [
        'table' => $currencies->table,
        'no' => $currencies->no,
        'date' => $currencies->effectiveDate,
        'currency' => $currency->currency,
        'code' => $currency->code,
        'mid' => $currency->mid
    ]);
}

$currencies = $db->query('SELECT * FROM currencies')->fetchAll();

$header = 'Kursy walut - <span class="font-thin">Tabela ' . $currencies[0]['table'] . ', nr: ' . $currencies[0]['no'] . ' z dnia: ' . $currencies[0]['date'] . '</span>';

require 'views/index.view.php';