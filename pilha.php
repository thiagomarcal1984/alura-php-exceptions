<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    // Erros e Exceções são coisas distintas.
    // Erros são da abordagem procedural; são oriundos do ambiente do programa; é descrita com line number, arquivo e mensagem.
    // Exceções são da abordagem OO; são oriundas do próprio programa; é mudam o fluxo normal do programa/script. 

    // O PHP exige a definição do tipo capturado: Exception ou Error.
    // Você pode usar o \Throwable para tornar o try/catch mais genérico.

    try {
        funcao2(); // A função 2 não tem o try/catch; a função 1 então faz o tratamento.
    // } catch (RuntimeException $problema) {
    //     echo "Na função 1, eu resolvi o problema da função 2." . PHP_EOL;
    // } catch (DivisionByZeroError $problema) {
    //     echo "Erro ao dividir um número por zero." . PHP_EOL;
    } catch (DivisionByZeroError | RuntimeException $problema) { // Multi catching, captura várias exceções ao mesmo tempo.
        echo  "\tMensagem: " . $problema->getMessage() . PHP_EOL;
        echo  "\tLinha: " . $problema->getLine() . PHP_EOL;
        echo  "\tCallstack: " . $problema->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    $divisao = intdiv(5, 0); // Lança uma ERRO de divisão por zero.
    $arrayFixo = new SplFixedArray(2); // Cria um array com um tamanho fixo de 2 posições.
    $arrayFixo[3] = 'Valor'; // Tenta atribuir um valor à quarta posição. Lança uma EXCEÇÃO.'
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    // XDebug é uma ferramenta própria pra debugar em PHP.
    // Tem curso na Alura sobre isso.

    // debug_backtrace() retorna a pilha de execução a partir do ponto 
    // em que essa função foi chamada.s
    print_r(debug_backtrace());

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
