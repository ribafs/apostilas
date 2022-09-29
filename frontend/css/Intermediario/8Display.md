# Display

Um truque chave para a manipulação de elementos HTML é entender que não há nada de especial em como a maioria deles funciona. A maioria das páginas pode ser composta de apenas algumas tags que podem ser estilizadas da maneira que você escolher. A representação visual padrão do navegador da maioria dos elementos HTML consiste em vários estilos de fonte, margens, preenchimento/padding	 e, essencialmente, tipos de exibição/display.

Os tipos mais fundamentais de exibição/display são inline, block e none e podem ser manipulados com a propriedade display e os valores surpreendentemente surpreendentes inline, block e none.

## inline

inline faz exatamente o que diz - as caixas que são exibidas inline seguem o fluxo de uma linha. Âncora (links) e ênfase/emphasis são exemplos de elementos exibidos em linha por padrão.

O código a seguir, por exemplo, fará com que todos os itens de uma lista apareçam lado a lado em uma linha contínua, em vez de cada um ter sua própria linha:

li { display: inline }

<ul>
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
</ul>

Serão exibidos assim:

     Item 1 Item 2 Item 3 

## block

block torna uma caixa autônoma, cabendo em toda a largura da caixa que a contém, com uma quebra de linha efetiva antes e depois dela. Ao contrário do inline, block permite uma maior manipulação de altura, margens e preenchimento. Elementos de título e parágrafo são exemplos de elementos que são exibidos dessa forma por padrão nos navegadores.

O próximo exemplo tornará todos os links em grandes blocos clicáveis “nav”:

#navigation a {
    display: block;
    padding: 20px 10px;
}

<div class="navigation">
  <a href="">Item 1</a>
  <a href="">Item 2</a>
  <a href="">Item 3</a>
  <a href="">Item 4</a>
  <a href="">Item 5</a>
  <a href="">Item 6</a>
  <a href="">Item 7</a>
  <a href="">Item 8</a>
  <a href="">Item 9</a>
  <a href="">Item 10</a>
  <a href="">Item 11</a>
  <a href="">Item 12</a>
  <a href="">Item 13</a>
  <a href="">Item 14</a>
  <a href="">Item 15</a>
</div>

display: inline-block - manterá um box inline, mas dará maior flexibilidade de formatação aos block boxes, permitindo margem à direita e à esquerda da caixa, por exemplo.

## none

none, não exibe nenhuma caixa, o que pode parecer inútil, mas pode ser usado com bons resultados com efeitos dinâmicos, como ativar e desativar informações estendidas com o clique de um link ou em folhas de estilo alternativas.

O código a seguir, por exemplo, pode ser usado em uma folha de estilo de impressão para basicamente "desligar" a exibição de elementos, como navegação, que seriam inúteis nessa situação:

#navigation, #related_links { display: none }

display: none e visibility: hidden variam nesse display: none tira a caixa do elemento completamente, enquanto visibility: hidden mantém a caixa e seu fluxo no lugar sem representar visualmente seu conteúdo. Por exemplo, se o segundo parágrafo de 3 fosse definido como display: none, o primeiro parágrafo iria diretamente para o terceiro, enquanto se fosse definido como visibility: hidden, haveria uma lacuna onde o parágrafo deveria estar.

## tables

Agora vamos para algo um pouco mais avançado e raramente usado ...

Talvez a melhor maneira de entender os valores das propriedades de exibição relacionadas às tabelas seja pensar em tabelas HTML. table é a exibição inicial e você pode imitar os elementos tr e td com os valores de propriedade table-row e table-cell, respectivamente.

A propriedade display vai além, oferecendo table-column, table-row-group, table-column-group, table-header-group, table-footer-group and table-caption como valores, que são todos bastante autodescritivos. O benefício imediatamente óbvio desses valores é que você pode construir uma tabela por colunas, em vez do método tendencioso de linha usado em HTML.

Finalmente, o valor inline-table basicamente define a tabela sem quebras de linha antes e depois dela.

Tenha cuidado ao usar esses valores. Navegadores mais antigos lutam com eles e se deixar levar pelas tabelas CSS pode prejudicar seriamente sua acessibilidade. HTML deve ser usado para transmitir significado, portanto, ==se você tiver dados tabulares, eles devem ser organizados em tabelas HTML==. Usar tabelas CSS exclusivamente pode resultar em uma mistura de dados completamente ilegível sem o CSS.

## Outros tipos de display

list-item - exibe uma caixa da maneira que você normalmente esperaria que um elemento HTML li fosse exibido. Para funcionar corretamente, os elementos exibidos dessa forma devem ser aninhados em um elemento ul ou ol.

run-in - torna uma caixa em linha ou em bloco, dependendo da exibição de seu pai.

## Exemplos

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Block and inline boxes 1</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                }
                
                h1 {
                        font-size: 1.5em;
                }
                
                h2 {
                        font-size: 1em;
                }
                
                code {
                        font-family: courier;
                }
                
                #example1, #example2 {
                        background: #ccc;
                        border: 2px solid black;
                }

                span {
                        background: white;
                        display: block;
                }
                
                span.altern8 {
                        background: #5b5;
                }
                
                #example2 span {
                        display: inline;
                }
        </style>
</head>
<body>
        <h1>Block and inline boxes</h1>
        <p>Each of these examples contains the same HTML, but the elements in the first are set to <code>display: block</code> and the elements in the second are set to <code>display: inline</code>.</p>

        <h2>Block</h2>
        <p id="example1"><span>This</span><span class="altern8">That</span><span>The Other</span><span class="altern8">4</span></p>

        <h2>Inline</h2>
        <p id="example2"><span>This</span><span class="altern8">That</span><span>The Other</span><span class="altern8">4</span></p>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Block and inline boxes 2</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                }
                
                h1 {
                        font-size: 1.5em;
                }
                
                h2 {
                        font-size: 1em;
                }
                
                code {
                        font-family: courier;
                }
                
                #example1, #example2 {
                        background: #ccc;
                        border: 2px solid black;
                }

                span {
                        background: white;
                        display: block;
                        border: 0.5em solid red;
                        padding: 1em;
                        margin: 0.5em;
                }
                
                span.altern8 {
                        background: #5b5;
                }
                
                #example2 span {
                        display: inline;
                }

                #htmldog {
                        margin: 2em 0;
                }
        </style>
</head>
<body>
        <h1>Block and inline boxes (with padding, border and margin)</h1>
        <p>Each of these examples contains the same HTML, but the elements in the first are set to <code>display: block</code> and the elements in the second are set to <code>display: inline</code>.</p>

        <h2>Block</h2>
        <p id="example1"><span>This</span><span class="altern8">That</span><span>The Other</span><span class="altern8">4</span></p>

        <h2>Inline</h2>
        <p id="example2"><span>This</span><span class="altern8">That</span><span>The Other</span><span class="altern8">4</span></p>

        <!-- Link back to HTML Dog: -->
        <p id="htmldog"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Block and inline boxes 3</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                }
                
                h1 {
                        font-size: 1.5em;
                }
                
                h2 {
                        font-size: 1em;
                }
                
                code {
                        font-family: courier;
                }
                
                #example2, #example3 {
                        background: #ccc;
                        border: 2px solid black;
                }

                span {
                        background: white;
                        display: inline;
                        border: 0.5em solid red;
                        padding: 1em;
                        margin: 0.5em;
                }
                
                span.altern8 {
                        background: #5b5;
                }
                
                #example3 span {
                        display: inline-block;
                }
        </style>
</head>
<body>
        <h1>Block and inline boxes (with padding, border and margin)</h1>
        <p>Each of these examples contains the same HTML, but the elements in the first are set to <code>display: inline</code> and the elements in the second are set to <code>display: inline-block</code>.</p>

        <h2>Inline</h2>
        <p id="example2"><span>This</span><span class="altern8">That</span><span>The Other</span><span class="altern8">4</span></p>

        <h2>Inline-Block</h2>
        <p id="example3"><span>This</span><span class="altern8">That</span><span>The Other</span><span class="altern8">4</span></p>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>



