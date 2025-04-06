<?php
// Arquivo onde o IP será salvo
$logFile = 'ips_log.txt';
date_default_timezone_set('America/Sao_Paulo');

// Função para obter o IP do visitante
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Função para obter informações do IP usando a API ipinfo.io
function getIPInfo($ip) {
    $apiKey = 'da5e016cbb3a0f';  // Substitua pela sua chave de API
    $url = "http://ipinfo.io/{$ip}?token={$apiKey}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Obtém o IP do visitante
$userIP = getUserIP();
$ipInfo = getIPInfo($userIP);

// Grava o IP e a localização no arquivo de log
$location = $ipInfo ? "{$ipInfo['city']}, {$ipInfo['region']}, {$ipInfo['country']}" : "Localização desconhecida";
file_put_contents($logFile, "IP: $userIP - Localização: $location - Acessado em: " . date("Y-m-d H:i:s") . "\n", FILE_APPEND);

// Lê todos os IPs do arquivo de log
$allIPs = file_exists($logFile) ? file($logFile, FILE_IGNORE_NEW_LINES) : [];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .alert-box {
            background-color: #333333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }
        h1 {
            color: #ff3333;
        }
        .ip-list {
            max-width: 600px;
            background-color: #222222;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: left;
        }
        .ip-item {
            color: #00ff00;
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="alert-box">
        <h1>Atenção!</h1>
        <p>Este site está monitorando seu acesso e salvando seu endereço IP pois voce acessou pelo o computador - se ficar provado que voce tentou fazer alguma invasao iremos investigar voce. por hora VOCE FOI BANIDO!</p>
        <p>Se você não deveria estar aqui, por favor, saia imediatamente.</p>
        <p class="ip-display">Seu IP: <?php echo htmlspecialchars($userIP); ?></p>
        <p>Localização: <?php echo htmlspecialchars($location); ?></p>
    </div>

    <div class="ip-list">
        <h2>IPs registrados:</h2>
        <?php if (!empty($allIPs)): ?>
            <?php foreach ($allIPs as $ip): ?>
                <p class="ip-item"><?php echo htmlspecialchars($ip); ?></p>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="ip-item">Nenhum acesso registrado ainda.</p>
        <?php endif; ?>
    </div>
</body>
</html>
