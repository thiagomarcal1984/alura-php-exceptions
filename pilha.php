<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    // XDebug é uma ferramenta própria pra debugar em PHP.
    // Tem curso na Alura sobre isso.

    // debug_backtrace() retorna a pilha de execução a partir do ponto 
    // em que essa função foi chamada.s
    print_r(debug_backtrace());
    // var_dump(debug_backtrace());
    // Saída de var_dump(debug_backtrace()):
    /*
    array(2) {
        [0]=>
        array(4) {
            ["file"]=>
            string(31) "D:\git\php-exceptions\pilha.php"
            ["line"]=>
            int(6)
            ["function"]=>
            string(7) "funcao2"
            ["args"]=>
            array(0) {
            }
        }
        [1]=>
        array(4) {
            ["file"]=>
            string(31) "D:\git\php-exceptions\pilha.php"
            ["line"]=>
            int(21)
            ["function"]=>
            string(7) "funcao1"
            ["args"]=>
            array(0) {
            }
        }
    }
    */
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
