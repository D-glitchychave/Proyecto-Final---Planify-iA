<?php

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);
$mensaje = $data["mensaje"];

$apiKey = "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";

$url = "https://openrouter.ai/api/v1/chat/completions";

$datos = [
    "model" => "meta-llama/llama-3.3-70b-instruct:free",
    "messages" => [
        ["role" => "system", "content" => "Eres una IA que ayuda a estudiantes a crear rutinas de estudio, ejercicio y productividad."],
        ["role" => "user", "content" => $mensaje]
    ]
];

$headers = [
    "Content-Type: application/json",
    "Authorization: Bearer " . $apiKey,
    "HTTP-Referer: https://damianchavezproyectointegral.atwebpages.com",
    "X-Title: Planify IA"
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

$respuestaIA =
$resultado['choices'][0]['message']['content']
?? "No se pudo obtener respuesta.";

echo json_encode([
    "respuesta" => $respuestaIA
]);
