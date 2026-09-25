<?php
require_once "CanalMensagem.php";
require_once "Auditoria.php";
require_once "Email.php";
require_once "Sms.php";
require_once "WhatsApp.php";
require_once "GerenciadorNotificacao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Notificações</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="menu">
    <a href="sobre.php">Sobre nós</a>
</div>

<div class="container">

    <h1>Central de Notificações</h1>

    <p class="subtitulo">
        Lembretes da Clínica Laura Rainha
    </p>

    <div class="mensagem email">

        <h2>E-mail</h2>
        <div class="mensagem-conteudo">

            <?php

            $email = new Email();
            $gerenciador = new GerenciadorNotificacao($email);
            $gerenciador->dispararLembrete(
                "fulano@email.com",
                "Olá, Egberto!

Sua consulta está marcada para amanhã, às 14h.

Esperamos você!

Se precisar reagendar, entre em contato.
(41) 00000-0000

Clínica Laura Rainha"
            );

            ?>

        </div>
    </div>

    <div class="mensagem sms">
        <h2>SMS</h2>
        <div class="mensagem-conteudo">

            <?php

            $sms = new Sms();
            $gerenciador = new GerenciadorNotificacao($sms);
            $gerenciador->dispararLembrete(
                "00000-0000",
                "Olá, Egberto!

Sua consulta está marcada para amanhã, às 14h.

Caso precise reagendar, entre em contato.
(41) 00000-0000

Clínica Laura Rainha"
            );

            ?>

        </div>
    </div>

    <div class="mensagem whatsapp">

        <h2>WhatsApp</h2>

        <div class="mensagem-conteudo">

            <?php
            $whatsapp = new WhatsApp();
            $gerenciador = new GerenciadorNotificacao($whatsapp);
            $gerenciador->dispararLembrete(
                "00000-0000",
                "Olá, Egberto!

Sua consulta está marcada para amanhã, às 14h.

Esperamos você!

Se precisar reagendar, entre em contato conosco.
(41) 00000-0000

Atenciosamente,
Clínica Laura Rainha"
            );
            ?>
        </div>
    </div>
</div>

</body>
</html>