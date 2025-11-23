<?php
header('Content-Type: application/json');

$new_nome = array_key_exists('nome', $_REQUEST) ? $_REQUEST['nome'] : null;
$new_cognome = array_key_exists('cognome', $_REQUEST) ? $_REQUEST['cognome'] : null;
$new_id = array_key_exists('id', $_REQUEST) ? $_REQUEST['id'] : null;

if (!$new_nome || !$new_cognome || !$new_id) {
    echo json_encode(["success" => false, "message" => "Per favore, inserisci informazioni obbligatori!"]);
    exit;
}

$file = 'Soggetti.json';
$data = json_decode(file_get_contents($file), true);

$Takenid = [];
foreach ($data as $soggetto) {
    $Takenid[] = $soggetto["ID"];
}

while (in_array($new_id, $Takenid)) {
    echo json_encode([
        "success" => false,
        "message" => "ID già esistente, scegli un altro!"
    ]);
    exit;
}

$data[] = ["nome" => $new_nome, "cognome" => $new_cognome,"ID"=> $new_id];



file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo json_encode(["success" => true, "message" => "Soggetto aggiunto con successo!"]);
?>

