<?php

// DomainException é aplicável ao domínio da aplicação.
class MinhaExcecao extends DomainException 
{
    public function exibeTexto()
    {
        echo "Texto.";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeTexto();
}