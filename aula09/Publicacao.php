<?php
interface Publicacao {
    public function abrirLivro();
    public function fecharLivro();
    public function folhearLivro();
    public function avancarPag();
    public function recuarPag();
}
