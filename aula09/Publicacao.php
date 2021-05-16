<?php
interface Publicacao {
    public function abrirLivro();
    public function fecharLivro();
    public function folhearLivro();
    public function avancarPag($numPag);
    public function recuarPag($numPag);
}
