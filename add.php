<?php
header('Content-Type: application/json');

$new_nome = $_POST['nome'] ?? $_GET['nome'] ?? null;
$new_cognome = $_POST['cognome'] ?? $_GET['cognome'] ?? null;


if (!$new_nome || !$new_cognome) {
    echo json_encode(["success" => false, "message" => "Il campo Nome o Cognome è obbligatorio!"]);
    exit;
}

$file = 'Soggetti.json';
$data = json_decode(file_get_contents($file), true);

$data[] = ["nome" => $new_nome, "cognome" => $new_cognome];

file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo json_encode(["success" => true, "message" => "Soggetto aggiunto con successo!"]);
?>

