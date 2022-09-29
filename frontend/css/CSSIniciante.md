# Introdução ao CSS

CSS, ou Cascading Styles Sheets, é uma forma de estilizar e apresentar HTML. Enquanto o HTML é o conteúdo, a folha de estilo é a apresentação desse conteúdo.

Os estilos não têm praticamente nada de HTML, eles têm o formato de ‘propriedade: valor’ e a maioria das propriedades pode ser aplicada à maioria das tags HTML.

## Conteúdo

    Applying CSS - The different ways you can apply CSS to HTML.
    Selectors, Properties, and Values - The bits that make up CSS.
    Colors - How to use color.
    Text - How to manipulate the size and shape of text.
    Margins and Padding - How to space things out.
    Borders - Erm. Borders. Things that go around things.
    Putting It All Together - Throwing all of the above ingredients into one spicy hotpot.

Original em inglês

https://www.htmldog.com/guides/css/beginner/


## Aplicando CSS ao HTML

Existem 3 maneiras de aplicar CSS ao HTML

- Inline - Inline ou estilos embutidos são inseridos diretamente nas tags HTML usando o atributo style.

Exemplo

<p style="color: red">text</p>

- Interna - Estilos incorporados ou internos são usados para a página inteira. Dentro do elemento head, as tags de estilo circundam todos os estilos da página.

Exemplo:
```css
<!DOCTYPE html>
<html>
<head>
<title>CSS Example</title>
<style>

    p {
        color: red;
    }

    a {
        color: blue;
    }

</style>
...
```
Isso tornará todos os parágrafos da página vermelhos e todos os links azuis.

- Externo - Estilos externos são usados para todo o site de várias páginas. Há um arquivo CSS separado.

Exemplo
```css
css/style.css

p {
    color: red;
}

a {
    color: blue;
}

<!DOCTYPE html>
<html>
<head>
    <title>CSS Example</title>
    <link rel="stylesheet" href="css/style.css">
...

## Seletores do CSS

Onde o HTML tem tags o CSS tem seletores

Seletores são os nomes dados aos estilos em folhas de estilo internas e externas. Neste Tutorial de CSS nos concentraremos nos seletores de HTML, que são simplesmente nomes de tags HTML e são usados para alterar o estilo de um tipo específico de elemento HTML.

Para cada seletor, existem "propriedades" entre chaves, que simplesmente assumem a forma de palavras como color, font-weight ou background-color.
Um valor é dado à propriedade após dois pontos (NÃO um sinal de "igual", mas dois pontos). Os pontos e vírgulas são usados para separar as propriedades, assim:
```css
body {
    font-size: 14px;
    color: navy;
}
```
Isso aplicará os valores fornecidos às propriedades font-size e color para o seletor body.


## Comprimento

Existem muitas unidades específicas de propriedade para valores usados em CSS, mas existem algumas unidades gerais que são usadas por uma série de propriedades e vale a pena se familiarizar com elas antes de continuar.

    • px (Ex: font-size: 12px) é a unidade dos pixels. 
    • em (Ex: font-size: 2em) é a unidade para o tamanho calculado de uma fonte. Portanto, "2em", por exemplo, é duas vezes o tamanho da fonte atual.
    • pt (Ex: font-size: 12pt) é a unidade dos points/pontos, para medidas normalmente em mídia impressa.
    • % (Ex: width: 80%) é a unidade para porcentagens. 

Outras unidades incluem pc (picas), cm (centímetros), mm (milímetros) e pol (polegadas).

Quando um valor é zero, você não precisa declarar sua unidade. Por exemplo, se você não quiser especificar nenhuma borda, será "border: 0;"

"Px", neste caso, não significa necessariamente pixels - os pequenos quadrados que compõem a tela de um computador. Os navegadores modernos permitem que os usuários aumentem e diminuam o zoom de uma página para que, mesmo que você especifique o tamanho da fonte: 12px ou a altura: 200px, por exemplo, embora sejam o tamanho genuíno especificado em um navegador sem zoom, eles ainda aumentam e diminuem de tamanho com a preferência do usuário.


## Cores no CSS

O CSS tem 16.777.216 cores à sua disposição. Elas podem ter a forma de um nome, um valor (red/green/blue) ou um código hexadecimal precedido de #.

Os seguintes valores, para especificar cores, todos produzem o mesmo resultado:

    • red 
    • rgb(255,0,0) 
    • rgb(100%,0%,0%) 
    • #ff0000 
    • #f00 

## Nomes de cores

Nomes de cores predefinidos incluem aqua, black, blue, fuchsia, gray, green, lime, maroon, navy, olive, purple, red, silver, teal, white, and yellow. transparent também é um valor válido.

Com a possível exceção de black e white, os nomes das cores têm uso limitado em sites modernos e bem projetados porque são muito específicos e limitantes.

## RGB

Os três valores do valor RGB (rgb(vr1, vr2, vr3)) vão de 0 a 255, sendo 0 o nível mais baixo (sem vermelho, por exemplo), 255 sendo o nível mais alto (vermelho completo, por exemplo). Esses valores também podem ser em porcentagem.

## Hexadecimal

Hexadecimal (anteriormente e mais precisamente conhecido como "sexadecimal") é um sistema numérico de base 16. Geralmente estamos acostumados com o sistema numérico decimal (base 10, de 0 a 9), mas hexadecimal tem 16 dígitos, de 0 a F.

O número hexadecimal é prefixado com um caractere hash (#) e pode ter três ou seis dígitos. Basicamente, a versão de três dígitos é uma versão compactada da de seis dígitos (#ff0000 torna-se #f00, #cc9966 torna-se #c96, etc.). A versão de três dígitos é mais fácil de decifrar (o primeiro dígito, como o primeiro valor em RGB, é vermelho, o segundo é verde e o terceiro é azul), mas a versão de seis dígitos oferece mais controle sobre a cor exata.

## CSS 3

CSS3, a versão mais recente do CSS, também permite definir matiz, saturação e luminosidade para as cores.

Mais detalhes - https://www.htmldog.com/guides/css/advanced/colors/

## color e background-color

As cores do texto podem ser aplicadas usando a propriedade color e cor de fundo usando background-color.

Para definir h1 com texto amarelo e fundo azul:
```css
h1 {
    color: yellow;
    background-color: blue;
}
```
Essas cores podem ser um pouco fortes, então você pode alterar o código do seu arquivo CSS para tons ligeiramente diferentes:
```css
body {
    font-size: 14px;
    color: navy;
}

h1 {
    color: #ffc;
    background-color: #009;
}
```
## Exemplo
```css
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Colors</title>
        <style>
                body {
                        font: 100 1.5em Helvetica, Arial, sans-serif;
                        color: white;
                        background-color: black;
                }
        
                #p1 {
                        color: #f83333;
                        background-color: #444;
                }
                #p2 {
                        color: rgb(0,255,127);
                        background-color: rgba(50%,50%,0%,0.5);
                }
                #p3 {
                        color: hsl(240,100%,75%);
                        background-color:  hsla(0,0%,100%,0.2);
                }
        </style>
</head>
<body>
        <h1>Colors</h1>
        <p>CSS color values can take <a href="/references/css/values/color/">one of several forms</a>.</p>
        <p>This page's body is set to color: white; background-color: black;</p>

        <p id="p1">This paragraph is set to color: #f83333; background-color: #444;</p>

        <p id="p2">This paragraph is set to color: rgb(0,127,255); background-color: rgba(0%,50%,50%,0.5);</p>

        <p id="p3">This paragraph is set to color: hsl(240,100%,75%); background-color: hsla(0,0%,100%,0.2);</p>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>
```

## Texto no CSS

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
```css
font-weight indica se o texto está em negrito ou não. Mais comumente, isso é usado como  font-weight: bold ou  font-weight: normal, mas outros valores são bolder, lighter, 100, 200, 300, 400 (similar a normal), 500, 600, 700 (similar a bold), 800 ou 900.

font-weight: bold
font-style: italic
font-variant: small-caps
text-transform: uppercase
```
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
```css
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
```
## Espaçamento do texto

Podemos ter espaçemtos:

- Entre letras: letrar, l e t r a s (letter-spacing)
- Entre palavras: espaço    entre   palavras (word-spacing)
- Entre as linhas através de line-height
- Alinhamento do texto: text-align
```css
letter-spacing: length ou normal
word-spacing: length ou normal
line-height - esta propriedade define a altura das linhas em um elemento, como um parágrafo, sem ajustar o tamanho da fonte. Pode ser um número (que especifica um múltiplo do tamanho da fonte, então "2" será duas vezes o tamanho da fonte atual, por exemplo), um comprimento, uma porcentagem ou normal.
```
text-align - esta propriedade irá alinhar o texto dentro de um elemento à esquerda, direita, centralizar ou justificar.

text-indent - esta propriedade irá recuar a primeira linha de um parágrafo, por exemplo, para um determinado comprimento ou porcentagem. Este é um estilo tradicionalmente usado na impressão, mas raramente em mídia digital como a web.
```css
p {
    letter-spacing: 0.5em;
    word-spacing: 2em;
    line-height: 1.5;
    text-align: center;
}
```


## Margens e Padding/preenchimento

Margem e preenchimento são as duas propriedades mais comumente usadas para espaçar elementos. A margem é o espaço fora de um elemento, enquanto o preenchimento é o espaço dentro do elemento.

Altere o código CSS de h2 para o seguinte:
```css
h2 {
    font-size: 1.5em;
    background-color: #ccc;
    margin: 20px;
    padding: 40px;
}
```
Este texto aparecerá com margens à esquerda, acima, abaixo e à direita de 20 px ao redor da frase Apenas um teste. Veja abaixo o box model, representando as várias propriedades ao redor de um elemento.

## Box Model
```css
        Margin superior

        Border superior

        Padding superior

Left    Conteúdo            Também temos margin, border, padding na direita e na esquerda       Right

        Padding inferior

        Border inferior

        Margin inferior

Ordem

conteúdo no centro
padding ao redor do conteúdo
border ao redor do padding
margin ao redor das bordas
```
Não somos obrigados a usar sempre todos eles, mas é bom saber que todos os elementos tem margin, border, padding e content, nesta ordem.

width = largura do content

height - altura do content

Um bom exemplo, que pode ser modificado online para melhor entendimento:

https://www.w3schools.com/css/tryit.asp?filename=trycss_boxmodel

Veja o código abaixo:
```css
<!DOCTYPE html>
<html>
<head>
<style>
div {
  background-color: lightgrey;
  width: 300px;
  padding: 30px;
  border: 15px solid green;
  margin: 50px;
}
</style>
</head>
<body>

<h2>Demonstrating the Box Model</h2>

<p>The CSS box model is essentially a box that wraps around every HTML element. It consists of: borders, padding, margins, and the actual content.</p>

<div>This text is the content of the box. We have added a 50px padding, 20px margin and a 15px green border. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

</body>
</html>
```
Como está:
- Largura do conteúdo - 300px
- Preenchimento/padding - 30px ao redor do conteúdo
- Bordas/border - 15px verde ao redor do padding
- Margens/margin - 50px ao redor das bordas

Ao invés de usar as propriedades como no exemplo acima, que já contempla os 4 lados, também podemos especificar cada um dos lados:
```css
padding-top, 
padding-right, 
padding-bottom 
padding-left

border-top, 
border-right, 
border-bottom, 
border-left, 

margin-top, 
margin-right, 
margin-bottom, 
margin-left, 
```

## Borders

Bordas podem ser aplicadas à maioria dos elementos HTML dentro do body.

Para fazer uma borda ao redor de um elemento, tudo que você precisa é o estilo da borda. 

Os valores do estilo podem ser 
```css
solid, 
dotted, (pontos)
dashed, (barras)
double, 
groove, (ranhura)
ridge, (crista)
inset, (inserção)
outset (início)

border-width - define a largura da borda, mais comumente usando pixels como valor. Existem também propriedades para:

border-top-width, 
border-right-width, 
border-bottom-width
border-left-width

border-color - configura a cor da borda
```

## Exemplo
```css
h2 {
    border-style: dashed;
    border-width: 3px;
    border-left-width: 10px;
    border-right-width: 10px;
    border-color: red;
}
```
Exemplo2
```css
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Borders</title>
        <style>
                body {
                        font-size: 80%;
                        color: #000; /* Note that borders that do not have an explicit color will take on this color declaration */
                        margin: 0;
                        padding: 0;
                }
        
                p {
                        padding: 4em;
                        margin: 2em;
                }
                
                code {
                        font: 1em/1.5 Courier;
                }
        
                #border1 {      
                        border: 1px solid;
                        
                }
                
                #border2 {
                        border: 1px dotted;
                }
                
                #border3 {
                        border: 2px dashed #ccc;
                }
                
                #border4 {
                        border: solid;
                        border-width: 1px 5px 10px 15px;
                }
                
                #border5 {
                        border: 5px;
                        border-style: solid dotted dashed solid;
                }
                
                #border6 {
                        border: 5px solid;
                        border-color: black #444 #888 #ccc;
                }
                
                #borderCollie {
                        border: 3px dotted #06c;
                }
        </style>
</head>
<body>
        <p id="border1"><code>border: 1px solid;</code></p>
        <p id="border2"><code>border: 1px dotted;</code></p>
        <p id="border3"><code>border: 2px dashed #ccc;</code></p>
        <p id="border4"><code>border: solid;<br>
                                border-width: 1px 5px 10px 15px;</code></p>
        <p id="border5"><code>border: 5px;<br>
                                border-style: solid dotted dashed solid;</code></p>
        <p id="border6"><code>border: 5px solid;<br>
                                border-color: black #444 #888 #ccc;</code></p>


        <!-- Link back to HTML Dog: -->
        <p id="borderCollie"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>
```


## Exemplos de CSS

O código abaixo cobre todos os métodos CSS da seção Inicial. Se você salvar isso como seu arquivo CSS e olhar para o arquivo HTML, então você deve entender agora o que cada propriedade CSS faz e como aplicá-las. A melhor maneira de entender tudo isso é mexer nos arquivos HTML e CSS e ver o que acontece quando você muda as coisas.
```css
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Exemplo de CSS</title>

<style>
body {
    font-family: arial, helvetica, sans-serif;
    font-size: 14px;
    color: black;
    background-color: #ffc;
    margin: 20px;
    padding: 0;
}

/* This is a comment, by the way */

p {
    line-height: 21px;
}

h1 {
    color: #ffc;
    background-color: #900;
    font-size: 2em;
    margin: 0;
    margin-bottom: 7px;
    padding: 4px;
    font-style: italic;
    text-align: center;
    letter-spacing: 0.5em;
    border-bottom-style: solid;
    border-bottom-width: 0.5em;
    border-bottom-color: #c00;
}

h2 {
    color: white;
    background-color: #090;
    font-size: 1.5em;
    margin: 0;
    padding: 2px;
    padding-left: 14px;
}

h3 {
    color: #999;
    font-size: 1.25em;
}

img {
    border-style: dashed;
    border-width: 2px;
    border-color: #ccc;
}

a {
    text-decoration: none;
}

strong {
    font-style: italic;
    text-transform: uppercase;
}

li {
    color: #900;
    font-style: italic;
}

table {
    background-color: #ccc;
}
</style>
</head>
<body>
        <h1>Título 1 - CSS</h1>
        <h2>Título 2 - Exemplo de CSS</h2>
        <h3>Título 3 - Exemplo de CSS</h3>  
        <p>Parágrafo</p>
  
        <strong>Teste com strong</strong>  

        <!-- Link back to HTML Dog: -->
        <p><b>Imagem</b> <br><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
  
  <p>Lista
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
  </ul>
  </p>
  
  <table>
    <tr>
      <td>TD da Tabela</td>
    </tr>
  </table>
  </table>
</body>
</html>
```

## Crédito

https://www.htmldog.com/guides/html/beginner/


