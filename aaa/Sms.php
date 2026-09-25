<?php
class Sms implements CanalMensagem
{
    use Auditoria;
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para: $destinatario<br>";
        echo "$mensagem<br>";
        $this->registrarLog();
    }
}