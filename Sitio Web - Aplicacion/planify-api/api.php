<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);
$mensaje = $data["mensaje"];

$apiKey = "sk-proj-...3UA";

$url = "https://api.openai.com/v1/chat/completions";

$datos = [
    "model" => "gpt-4o-mini",
    "max_tokens" => 250,
    "messages" => [
        ["role" => "system", "content" => "Eres una IA que ayuda a estudiantes a crear rutinas de estudio, ejercicio y productividad. Responde de forma clara, organizada y breve. Genera rutinas realistas para estudiantes universitarios. Usa listas y horarios cuando sea necesario."],
        ["role" => "user", "content" => $mensaje]
    ]
];

$headers = [
    "Content-Type: application/json",
    "Authorization: Bearer " . $apiKey
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datos));

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

if(curl_errno($ch)){

    echo json_encode([
        "respuesta" => "Error cURL: " . curl_error($ch)
    ]);

    exit;
}

curl_close($ch);

$resultado = json_decode($response, true);

if(isset($resultado['error'])){

    echo json_encode([
        "respuesta" => "Error OpenRouter: " . $resultado['error']['message']
    ]);

    exit;
}

$respuestaIA =
$resultado['choices'][0]['message']['content']
?? "No se pudo obtener respuesta.";

echo json_encode([
    "respuesta" => $respuestaIA
]);
