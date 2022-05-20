<?php

$arquivo = fopen('php://temp', 'w'); // Escrita temporária.

try {
    echo "Executando..." . PHP_EOL;
    throw new Exception("Exceção aqui.");
} catch (Throwable $e) {
    echo  "Caindo no catch." . PHP_EOL;
} finally {
    echo  "Finally." . PHP_EOL;
    // Haveria a duplicidade no try e no catch se não fosse o finally.
    // Mas o fclose poderia ser colocado fora do try/catch também!
    fclose($arquivo); 
}

echo PHP_EOL;

function a() : int 
{
    try {
        echo "Código" . PHP_EOL;
        // throw new Exception();
        return 0;
    } catch (Exception $e) {
        echo "Problema" . PHP_EOL;
        return 1;
    } finally {
        // A linha abaixo é executada, mesmo depois que se force o retorno!
        echo "Final da função" . PHP_EOL; 
    }
}

echo a();