<?php
class GerenciadorNotificacao
{
    private $canal;
    public function __construct(CanalMensagem $canal)
    {
        $this->canal = $canal;
    }
    public function dispararLembrete($destinatario, $mensagem)
    {
        $conteudo = $mensagem;
        $this->canal->enviar($destinatario, $conteudo);
    }
}
