<?php

session_start();
session_regenerate_id();

$imagens = array("../imagens/captcha/placasXisto_captcha.jpg", "../imagens/captcha/dolmen_captcha.jpg", "../imagens/captcha/menhir_captcha.jpg");

$img_url = $imagens[rand(0,2)];

//$imagem = '../imagens/captcha/placasXisto_captcha.jpg';
$font = '../assets/AkzidenzGroteskBQ-Light.ttf';

// Obtem largura e altura da imagem
list($img_width, $img_height) = getimagesize($img_url);

// Cria um recurso de imagem do ficheiro
$imagem = imagecreatefromjpeg($img_url);

// Cria a imagem base da captcha
$captcha = imagecreatetruecolor(150, 50);

// Dá um fundo branco à captcha
$white = imagecolorallocate($captcha, 255, 255, 255);
imagefill($captcha, 0, 0, $white);

// Cria a captcha apenas com a imagem passado pelo url
imagecopyresampled($captcha, $imagem, 0, 0, 0, 0, $img_width, 50, $img_width, $img_height);

// Gere o text da captcha
$texto = '';

// Texto aleatório de 5 caracteres em letra minuscula
for ($i = 0; $i < 5; $i++) {
    $texto .= chr(rand(97, 122));
}

// regista o valor do texto na variável de sessão para poder
// ser validade depois no formulário
$_SESSION['random_code'] = $texto;

// Cores do texto
$red_wine = imagecolorallocate($captcha, 121, 49, 49);
$black = imagecolorallocate($captcha, 0, 0, 0);

// Aplica o texto na imagem da captcha
imagettftext($captcha, 22, 0, $img_width+5, 38, $red_wine, $font, $_SESSION['random_code']);

header('Content-type: image/jpeg');
imagejpeg($captcha);

?>
