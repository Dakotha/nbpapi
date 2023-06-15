<?php

$header = 'Konwerter walut';
$errors = [];
$convert = null;

$db = new Database($config['database']);

$currencies = $db->query('SELECT * FROM currencies')->fetchAll();

if (isset($_POST['amount']) && strlen($_POST['amount']) === 0) {
    $errors['amount'] = 'Podaj kwotę.';
}

if (isset($_POST['amount']) && strlen($_POST['amount']) > 0 && $_POST['amount'] <= 0) {
    $errors['amount'] = 'Kwota musi być liczbą większą od zera.';
}

if (isset($_POST['from']) && strlen($_POST['from']) === 0) {
    $errors['from'] = 'Wybierz walutę.';
}

if (isset($_POST['to']) && strlen($_POST['to']) === 0) {
    $errors['to'] = 'Wybierz walutę.';
}

if (empty($errors) && $_POST['amount'] && $_POST['from'] && $_POST['to']) {

    $amount = trim(htmlspecialchars($_POST['amount']));
    $from = $db->query('SELECT mid FROM currencies WHERE code = :mid', ['mid' => $_POST['from']])->fetch()['mid'];
    $to = $db->query('SELECT mid FROM currencies WHERE code = :mid', ['mid' => $_POST['to']])->fetch()['mid'];

    $convert = round(($amount / $to) * $from, 2);

    $db->query('INSERT INTO converts (`amount`, `from`, `to`, `convert`) VALUES (:amount, :from, :to, :convert)', [
        'amount' => trim(htmlspecialchars($_POST['amount'])),
        'from' => trim(htmlspecialchars($_POST['from'])),
        'to' => trim(htmlspecialchars($_POST['to'])),
        'convert' => $convert 
    ]);
}

$converts = $db->query('SELECT * FROM converts')->fetchAll();

require 'views/converter.view.php';