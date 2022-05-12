<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        $arrayFixo = new SplFixedArray(2); // Cria um array com um tamanho fixo de 2 posições.
        $arrayFixo[3] = 'Valor'; // Tenta atribuir um valor à quarta posição. Lança uma EXCEÇÃO.'
    } catch (RuntimeException $erro) { 
        echo "Aconteceu um erro na função 1." . PHP_EOL;
        echo "\tTipo: " . get_class($erro) . PHP_EOL;
    }

    // $divisao = intdiv(5, 0); // Lança uma ERRO de divisão por zero.

    // Erros e Exceções são coisas distintas.
    // Erros são da abordagem procedural; são oriundos do ambiente do programa; é descrita com line number, arquivo e mensagem.
    // Exceções são da abordagem OO; são oriundas do próprio programa; é mudam o fluxo normal do programa/script. 

    // O PHP exige a definição do tipo capturado: Exception ou Error.
    // Você pode usar o \Throwable para tornar o try/catch mais genérico.

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
