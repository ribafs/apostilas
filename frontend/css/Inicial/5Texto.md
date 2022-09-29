# Texto no CSS

Você pode alterar o tamanho e a forma do texto em uma página da web com uma série de propriedades.

## font-family

Esta é a própria fonte, o seu nome, como Times New Roman, Arial ou Verdana.

O navegador do usuário deve ser capaz de encontrar a fonte que você especificar, o que, na maioria dos casos, significa que ela pode estar em seu computador.Não faz muito sentido usar fontes obscuras que estão apenas no seu computador. Existem algumas fontes "seguras" selecionadas (** as mais comumente usadas são Arial, Verdana e Times New Roman **), mas você pode especificar mais de uma fonte, separadas por vírgulas. O objetivo disso é que, se o usuário não tiver a primeira fonte especificada, o navegador percorrerá a lista até encontrar uma que tenha. Isso é útil porque computadores diferentes às vezes têm fontes diferentes instaladas. Então font-family: arial, helvetica, serif, procurará pela fonte Arial primeiro e, se o navegador não conseguir encontrá-la, ele pesquisará por Helvetica e, em seguida, por uma fonte serif comum.

Observação: se o nome de uma fonte for mais de uma palavra, deve-se colocar entre aspas, como por exemplo: font-family: "Times New Roman".
Você pode usar uma seleção mais ampla do que as fontes "seguras", mas se você está apenas começando a se familiarizar com CSS, sugerimos manter esta abordagem padrão básica por enquanto.

## Fontes seguras

https://www.w3bai.com/pt/cssref/css_websafe_fonts.html

https://kinsta.com/pt/blog/fontes-seguras-na-web/

https://www.webhostingsecretrevealed.net/pt/blog/web-business-ideas/25-gorgeous-web-safe-fonts-for-your-website/

## font-size

font-size define o tamanho da fonte. Tenha cuidado com isso - textos como cabeçalhos não devem ser apenas um parágrafo HTML (p) em uma fonte grande - você ainda deve usar cabeçalhos (h1, h2 etc.), embora, na prática, possa definir o tamanho da fonte de um parágrafo maior do que um título (não recomendado para pessoas sensatas).

## font-weight

font-weight indica se o texto está em negrito ou não. Mais comumente, isso é usado como  font-weight: bold ou  font-weight: normal, mas outros valores são bolder, lighter, 100, 200, 300, 400 (similar a normal), 500, 600, 700 (similar a bold), 800 ou 900.

font-weight: bold
font-style: italic
font-variant: small-caps
text-transform: uppercase

Brinque com esses valores de font-weight se quiser ver seu efeito, mas lembre-se de que alguns navegadores mais antigos ficam um pouco confusos com qualquer coisa que não seja negrito e normal, então sugerimos mantê-los, a menos que você seja um ninja tipográfico.

## font-style

font-style indica se o texto está em itálico ou não. Pode ser font-style: italic ou font-style: normal.

## text-decoration

text-decoration indica se o texto tem uma linha abaixo, sobre ou através dele.

     • text-decoration: underline, faz o que você esperaria.
     • text-decoration: overline coloca uma linha acima do texto.
     • text-decoration: line-through coloca uma linha no meio do texto (“tachado”).

Esta propriedade é geralmente usada para decorar links e você pode especificar nenhum sublinhado com text-decoration: none.
Sublinhados só devem ser usados para links. Eles são uma convenção da web comumente entendida que leva os usuários a geralmente esperar que o texto sublinhado seja um link.

## text-transform

text-transform mudará o caso (maiúsculas/minúsculas) do texto.

     • text-transform: capitalize transforma a primeira letra de cada palavra em maiúsculas.
     • text-transform: uppercase transforma tudo em maiúsculas.
     • text-transform: lowercase transforma tudo em minúsculas.
     • text-transform: none 

Então, algumas dessas coisas usadas juntas podem ter a seguinte aparência:

body {
    font-family: arial, helvetica, sans-serif;
    font-size: 14px;
}

h1 {
    font-size: 2em;
}

h2 {
    font-size: 1.5em;
}

a {
    text-decoration: none;
}

strong {
    font-style: italic;
    text-transform: uppercase;
}

## Espaçamento do texto

Podemos ter espaçemtos:

- Entre letras: letrar, l e t r a s (letter-spacing)
- Entre palavras: espaço    entre   palavras (word-spacing)
- Entre as linhas através de line-height
- Alinhamento do texto: text-align

letter-spacing: length ou normal
word-spacing: length ou normal
line-height - esta propriedade define a altura das linhas em um elemento, como um parágrafo, sem ajustar o tamanho da fonte. Pode ser um número (que especifica um múltiplo do tamanho da fonte, então "2" será duas vezes o tamanho da fonte atual, por exemplo), um comprimento, uma porcentagem ou normal.

text-align - esta propriedade irá alinhar o texto dentro de um elemento à esquerda, direita, centralizar ou justificar.

text-indent - esta propriedade irá recuar a primeira linha de um parágrafo, por exemplo, para um determinado comprimento ou porcentagem. Este é um estilo tradicionalmente usado na impressão, mas raramente em mídia digital como a web.

p {
    letter-spacing: 0.5em;
    word-spacing: 2em;
    line-height: 1.5;
    text-align: center;
}


