<?php

class WhatsApp implements CanalMensagem
{
    use Auditoria;
    public function enviar($destinatario, $mensagem)
    {
        echo "WhatsApp enviado para: $destinatario<br>";
        echo "$mensagem<br>";
        $this->registrarLog();
    }
}