<?php

// Meios de forçar a exibição dos vários tipos de erro em PHP:
// use as constantes de erro do PHP:
// https://www.php.net/manual/en/errorfunc.constants.php

// Para mostrar o caminho do php.ini, digite o comando php --ini!
// Faça isso para alterar o parâmetro de error_reporting no php.ini.

// Outra forma de alterar o parâmetro de error_reporting é o seguinte comando:
ini_set('error_reporting', E_ALL); // Põe na configuração o parâmetro E_ALL.

// O PHP também tem uma função própria chamada error_reporting(E_ALL);
// error_reporting(E_ALL); // O parâmetro é o conjunto dos erros reportáveis.

ini_set('display_errors', 0); 
// O 2o parâmetro diz se os erros vão ser exibidos. True exibe, false não.
// Se o parâmetro log_errors estiver ligado, os erros vão para o log padrão,
// que é a saída padrão (tela), mesmo com o display_errors=False.

ini_set('log_errors', 1);
// O 2o parâmetro diz se haverá log. True registra, false não.

// ini_set('error_log', 'log.txt');
// O 2o parâmetro diz o caminho para o log.

// https://www.php.net/manual/pt_BR/function.set-error-handler.php
// set_error_handler precisa de uma função anônima que represente um handler.
// handlers tem os seguintes parâmetros: $errno, $errstr, $errfile, $errline.
set_error_handler(function($errno, $errstr, $errfile, $errline){
    // var_dump($errno, $errstr, $errfile, $errline);
    switch ($errno){
        case E_WARNING:
            echo "Aviso: isso é perigoso." . PHP_EOL;
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso." . PHP_EOL;
            break;
    }

    // Este retorno serve para evitar o Error Handler padrão do PHP.
    return true; 
});


define('CONSTANTE1', 'valor_da_constante'); // Um jeito de definir constante.
const CONSTANTE2 = 'Valor da Constante'; // Outro jeito de definir constante.

// Error Function Constants:
// https://www.php.net/manual/en/errorfunc.constants.php

// Leia sobre o básico de erros em PHP:
// https://www.php.net/manual/pt_BR/language.errors.basics.php

// E_ERROR pára a execução do programa. Nada depois do E_ERROR é executado.

// E_NOTICE não causa problemas na execução.
echo "Acessando uma variável não declarada:";
// O @ é um operador de supressão de erro! A próxima linha não aparecerá.
// Usar o operador de supressão de erro NÃO é uma boa prática. Tire o @!
echo @$variavel; // Erro do tipo E_NOTICE (no PHP 7).

echo PHP_EOL . "Acessando um índice inexistente em um array (também inexistente):";
echo $array[12]; // Outro erro do tipo E_NOTICE (no PHP 7).

// E_WARNING causará problemas na execução em versões futuras do PHP.
echo PHP_EOL . "Acessando a constante CONSTANTE: ";
// echo CONSTANTE3; // Erro do tipo E_WARNING (no PHP 7).
// Até o PHP 7, o resultado do comando acima seria imprimir o texto CONSTANTE3.
echo @CONSTANTE3; // O @ é um operador de supressão de erro!
echo "Fim do programa.";
