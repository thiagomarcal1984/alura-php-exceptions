<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    // Erros e Exceções são coisas distintas.
    // Em PHP, não se pode criar uma classe baseada na classe Erro, apenas
    // na classe Exception. A interface Throwable não pode ser implementada
    // diretamente também: é necessário estender a classe Exception.
    // Erros são da abordagem procedural; são oriundos do ambiente do programa; 
    //       é descrita com line number, arquivo e mensagem.
    // Exceções são da abordagem OO; são oriundas do próprio programa; 
    //       mudam o fluxo normal do programa/script. 


    // O PHP exige a definição do tipo capturado: Exception ou Error.
    // Você pode usar o \Throwable para tornar o try/catch mais genérico.

    try {
        funcao2(); // A função 2 não tem o try/catch; a função 1 então faz o tratamento.
    } catch (DivisionByZeroError | RuntimeException $problema) { // Multi catching, captura várias exceções ao mesmo tempo.
        echo  "\tMensagem: " . $problema->getMessage() . PHP_EOL;
        echo  "\tLinha: " . $problema->getLine() . PHP_EOL;
        echo  "\tCallstack: " . $problema->getTraceAsString() . PHP_EOL;

        throw new RuntimeException(
            'Exceção foi tratada, mas há pendências.', // Mensagem de erro.
            1, // Código do erro.
            $problema // Exceção lançada.
        );
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $exception = new RuntimeException();
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
