<?php
class Email implements CanalMensagem
{
    use Auditoria;
    public function enviar($destinatario, $mensagem)
    {
        echo "E-mail enviado para: $destinatario<br>";
        echo "$mensagem<br>";
 $this->registrarLog();
    }
}