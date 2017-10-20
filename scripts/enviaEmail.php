<?php

session_start();

function sanitizeText($texto)
{
  $texto = trim($texto);
  $texto = htmlspecialchars($texto);
  $texto = strip_tags($texto);

  return $texto;
}

if(isset($_POST['enviado']))
{
  //$_SESSION["erros"] = array();

  // VALIDA NOME
  if(isset($_POST['nome']) && strlen($_POST['nome']) > 0)
  {
    $nome = sanitizeText($_POST['nome']);
  } else {
    $_SESSION["erros"][0] = "Deve indicar o seu nome.";
  }

  // VALIDA EMAIL
  if(isset($_POST['email']) && strlen($_POST['email']) > 0)
  {
    if(preg_match('/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/', trim($_POST['email'])))
    {
        $email = trim($_POST['email']);
    } else {
        $_SESSION["erros"][1] = 'Deve indicar um Endereço de Email válido.';
    }

  } else {
      $_SESSION["erros"][1] = "Deve indicar o seu Endereço de Email.";
  }

  // VALIDA TELEFONE
  if(isset($_POST['telefone']) && strlen($_POST['telefone']) > 0)
  {
    if(preg_match('/^(9[1,2,3,6][0-9]{7})|(2[0-9]{8})$/', trim($_POST['telefone'])))
    {
        $telefone = trim($_POST['telefone']);
    } else {
        $_SESSION["erros"][2] = 'Deve indicar um número de Telefone válido.';
    }
  }

  // VALIDA MENSAGEM
  if(isset($_POST['mensagem']) && strlen($_POST['mensagem']) > 0)
  {
    $mensagem = sanitizeText($_POST['mensagem']);
  } else {
      $_SESSION["erros"][3] = "Deve escrever a sua mensagem.";
  }

  // VALIDA CAPTCHA
  if(isset($_SESSION['random_code']) && isset($_POST['captcha'])
    && strlen($_POST['captcha']) > 0)
  {
    // Verifica se a captcha é só caracteres minusculos
    if(preg_match('/^[a-z]{5}$/', $_POST['captcha']))
    {
      // Compara os caracteres introduzidos com os caracteres da captcha
      if(strcmp($_SESSION['random_code'], $_POST['captcha']) === 0)
      {
        $captcha = true;
      } else {
        $_SESSION["erros"][4] = "Texto da imagem incorrecto.";
      }
    } else {
      $_SESSION["erros"][4] = "Texto da imagem incorrecto.";
    }
  } else {
    $_SESSION["erros"][4] = "Texto da imagem incorrecto.";
  }

  // Existem erros
  if(count($_SESSION["erros"]) == 0)
  {
    date_default_timezone_set('Europe/Lisbon');
    require '../vendor/PHPMailerAutoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    // Define charset
    $mail->CharSet = 'utf-8';
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->isHTML(true);
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    //Set the hostname of the mail server
    $mail->Host = "mail.ctd.pt";
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 25;
    //Whether to use SMTP authentication
    $mail->SMTPAuth = false;
    //Set who the message is to be sent from
    $mail->setFrom($email, $nome);
    //Set who the message is to be sent to
    $mail->addAddress('geralmegalitismo@cm-mora.pt', 'Museu do Megalitismo de Mora');
    //Set the subject line
    $mail->Subject = 'Contacto a partir do Site';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $msg = $mensagem;
    $msg .= "<br><br><hr>";
    $msg .= "<strong>Informações de Contacto:</strong><br>";
    $msg .= "<strong>Nome: </strong>" . $nome . "<br>";
    $msg .= "<strong>Email: </strong>" . $email . "<br>";
    $msg .= "<strong>Telefone: </strong>" . $telefone . "<br>";
    $mail->msgHTML($msg);
    //send the message, check for errors
    if (!$mail->send()) {
        $_SESSION["erros"][5] = "Não foi possível enviar a sua mensagem";
        header("Location: ../index.php#contactos");
    } else {
      $mail->smtpClose();
        $_SESSION["sucesso"] = "Mensagem enviada com sucesso";
        header("Location: ../index.php#contactos");
    }
  } else {
    $_SESSION["erros"]["contactInfo"][0] = $_POST['nome'];
    $_SESSION["erros"]["contactInfo"][1] = $_POST['email'];
    $_SESSION["erros"]["contactInfo"][2] = $_POST['telefone'];
    $_SESSION["erros"]["contactInfo"][3] = $_POST['mensagem'];
    header("Location: ../index.php#contactos");
  }



} else {
  header("Location: ../index.php");
}

?>
