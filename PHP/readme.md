--------------- INTRODUÇÃO ----------------------

"<?php?>" -> Inicio de todo código 

echo -> apresenta um texto na tela

--------------- COEMENTÁRIOS --------------------

// ou # -> comentários de uma única linha
/**/ -> comentários de múltiplas linhas 

--------------- VARIÁVEIS -----------------------

$ - variável

O escopo de uma variável é a parte do script onde a variável pode ser referenciada/usada.
PHP tem três escopos de variáveis ​​diferentes: -local, -global, -estático

fora -> global
dentro -> local

$GLOBALS[index]index

static -> deixa a variável estática 

--------------- ECHO E PRINT ---------------------

Ambos são usados ​​para enviar dados para a tela.
A echo e print podem ser usadas com ou sem parênteses: echo ou echo() / print ou print ().

--------------- TIPOS DE DADOS PHP ----------------
String
Integer - INTEIRO
Float (double) - DECIMAL
Boolean - True ou False 
Array - armazena vários valores em uma única variável
Object - Classes e objetos são os dois aspectos principais da programação orientada a objetos
NULL
Resource

--------------- STRING ----------------------
strlen() -> retorna o comprimento de uma string - contagem

str_word_count() -> conta o número de palavras em uma string

strrev() -> Inverte a string

strpos() -> Procure um texto dentro de uma string

str_replace() - Substitui texto dentro de uma string

----------------- NÚMEROS INTEIRO -----------------

PHP_INT_MAX – O maior número inteiro suportado
PHP_INT_MIN – O menor número inteiro suportado
PHP_INT_SIZE - O tamanho de um inteiro em bytes

----------------- NÚMEROS DECIMAL -----------------

PHP_FLOAT_MAX – O maior número de ponto flutuante representável
PHP_FLOAT_MIN - O menor número de ponto flutuante positivo representável
PHP_FLOAT_DIG - O número de dígitos decimais que podem ser arredondados para um float e vice-versa sem perda de precisão
PHP_FLOAT_EPSILON - O menor número positivo representável x, de modo que x + 1,0! = 1,0

----------------- MATEMÁTICA -----------------

pi() -> função retorna o valor de PI
min() -> encontra o valor mais baixo
max() -> encontra o valor mais alto
abs() -> retorna o valor absoluto (positivo) de um número
sqrt() -> mostra a raiz quadrada de um número
round() ->função arredonda um número decimal para o número inteiro mais próximo
rand()função gera um número aleatório

----------------- CONSTANTES -----------------

----------------- OPERADORES -----------------

----------------- MANIPULAÇÃO DE FORMULÁRIOS  -----------------
Os superglobais $_GET e $_POST do PHP são usados ​​para coletar dados de formulário.

----------------- FUNÇÕES -----------------
Uma função é um bloco de instruções que pode ser usado repetidamente em um programa.

Argumentos de função -> 

Se chamarmos a função setHeight() sem argumentos, ela receberá o valor padrão como argumento:

----------------- MATRIZES (ARRAYS) -----------------

MATRIZES ASSOCIATIVAS -> Matrizes associativas são matrizes que usam chaves nomeadas que você atribui a elas.

Existem duas maneiras de criar uma matriz associativa: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

ou:

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";


MATRIZES MULTIDIMENSIONAIS ->  contém uma ou mais matrizes


FUNÇÕES DE CLASSIFICAÇÃO PARA ARRAYS 

sort()- classificar matrizes em ordem crescente
rsort()- classificar matrizes em ordem decrescente
asort()- classificar matrizes associativas em ordem crescente, de acordo com o valor
ksort()- classificar arrays associativos em ordem crescente, de acordo com a chave
arsort()- classificar matrizes associativas em ordem decrescente, de acordo com o valor
krsort()- classificar arrays associativos em ordem decrescente, de acordo com a chave


----------------- FORMULÁRIO -----------------
1° HTML
2° Declarar variáveis dentro de php


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

$_SERVER["PHP_SELF"] é uma variável superglobal que retorna o nome do arquivo do script atualmente em execução.

 htmlspecialchars() converte caracteres especiais em entidades HTML. Isso significa que substituirá caracteres HTML como < e > por < e>. Isso evita que invasores explorem o código injetando código HTML ou Javascript (ataques de script entre sites) em formulários.

-----------------------------------------------------------------------------------------------------------
----------------- DATA E HORA -----------------
A função PHP date()é usada para formatar uma data e/ou hora. -> date(format,timestamp)

d - Representa o dia do mês (01 a 31)
m - Representa um mês (01 a 12)
Y - Representa um ano (em quatro dígitos)
l ('L' minúsculo) - Representa o dia da semana

Ano Automático de Direitos Autorais -> &copy; 2010-<?php echo date("Y");?>

H - formato de 24 horas (00 a 23)
h - formato de 12 horas com zeros à esquerda (01 a 12)
i - Minutos com zeros à esquerda (00 a 59)
s - Segundos com zeros à esquerda (00 a 59)
a - Ante meridiem e Post meridiem em minúsculas (am ou pm)

----------------- INCLUIR -----------------
A instrução include(or require) pega todo o texto/código/marcação que existe no arquivo especificado e os copia no arquivo que usa a instrução include.

As instruções include e require são idênticas, exceto em caso de falha:

requireproduzirá um erro fatal (E_COMPILE_ERROR) e interromperá o script
includeproduzirá apenas um aviso (E_WARNING) e o script continuará

----------------- MANIPULAÇÃO -----------------
Função readfile() do PHP
A readfile()função lê um arquivo e o grava no buffer de saída.