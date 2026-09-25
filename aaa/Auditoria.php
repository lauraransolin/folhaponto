<?php
trait Auditoria
{
    public function registrarLog()
    {
         $data = date("d/m/Y H:i:s");
         echo "[LOG] - Mensagem processada em $data<br>";
    }
}