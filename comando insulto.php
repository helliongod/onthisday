<?php
// Array 1
$nombres = ['David', 'Jiroki', 'Faraon', 'Cabezon29', 'Lasarou', 'Poeth', 'Lix', 'Arekun', 'Sobre el culto', 'Furrolover69'];

// Array 2
$verbos = ['eres', 'comes', 'bebes', 'saltas', 'corres', 'absorbes', 'tienes', 'tragas', 'rascas', 'peinas', 'comes', 'bebes', 'peinas', 'follas', 'fumas', 'escupes', 'muerdes', 'lames', 'rompes'];

// Array 3
$insultos = ['lento', 'calvas', 'boba', 'bobo', 'orto', 'pito', 'tetas', 'puta', 'porritos', 'penes flácidos', 'mameluco', 'lento', 'gomitao', 'random', 'pene', 'ortos', 'viejas', 'culos', 'inculto', 'anormal de carrito', 'viejo', 'camaleón'];

// Selecciona elementos aleatorios de cada array
$nombreAleatorio = $nombres[array_rand($nombres)];
$verboAleatorio = $verbos[array_rand($verbos)];
$insultoAleatorio = $insultos[array_rand($insultos)];

// Construye la frase 
$frase = "$nombreAleatorio $verboAleatorio como un $insultoAleatorio.";

// Imprime la frase
echo $frase;
?>