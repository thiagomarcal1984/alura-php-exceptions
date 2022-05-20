<?php

define('CONSTANTE1', 'valor_da_constante'); // Um jeito de definir constante.
const CONSTANTE2 = 'Valor da Constante'; // Outro jeito de definir constante.

// Error Function Constants:
// https://www.php.net/manual/en/errorfunc.constants.php

// Leia sobre o básico de erros em PHP:
// https://www.php.net/manual/pt_BR/language.errors.basics.php

// E_ERROR pára a execução do programa. Nada depois do E_ERROR é executado.

// E_NOTICE não causa problemas na execução.
echo "Acessando uma variável não declarada:";
echo $variavel; // Erro do tipo E_NOTICE (no PHP 7).

echo PHP_EOL . "Acessando um índice inexistente em um array (também inexistente):";
echo $array[12]; // Outro erro do tipo E_NOTICE (no PHP 7).

// E_WARNING causará problemas na execução em versões futuras do PHP.
echo PHP_EOL . "Acessando a constante CONSTANTE: ";
echo CONSTANTE3; // Erro do tipo E_WARNING (no PHP 7).
// Até o PHP 7, o resultado do comando acima seria imprimir o texto CONSTANTE3.
