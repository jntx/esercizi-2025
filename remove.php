<?php
header('Content-Type: application/json');

$nome = $_POST['nome'] ?? '';
$cognome = $_POST['cognome'] ?? '';
$id =$_POST['id'] ??'';

if ($nome === '' || $cognome === '' || $id === '') {
    echo json_encode(["message" => "Inserisci informazioni obbligatori!"]);
    exit;
}


$file = 'Soggetti.json';
$data = json_decode(file_get_contents($file), true);

$newData = [];
$removed = false;

foreach ($data as $person) {
    if ($person['nome'] !== $nome || $person['cognome'] !== $cognome || $person['ID'] !== $id) {
        $newData[] = $person;
    } else {
        $removed = true;
    }
}

file_put_contents($file, json_encode($newData, JSON_PRETTY_PRINT));
 
if ($removed) {
    echo json_encode(["message" => "Soggetto rimosso con successo!"]);
} else {
    echo json_encode(["message" => "Soggetto non trovato!"]);
}
