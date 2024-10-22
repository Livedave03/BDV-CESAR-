<?php
    header('Content-Type: application/json');
    $botToken = '7387829277:AAGzF614gFlxPiikhEhrOIAv3dLO0nHzUYg';
    $chatId = '5391753542';
    echo json_encode(['botToken' => $botToken, 'chatId' => $chatId]);
?>
