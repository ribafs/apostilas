# Transformations

A poderosa manipulação da forma, tamanho e posição de uma caixa e seu conteúdo usando a propriedade transform.

Por padrão, as boxes CSS, aquelas representações visuais de elementos HTML, são tão quadradas. Retangular, pelo menos; nível, com quatro lados retos e quatro ângulos retos. Mas com o uso de transform você pode esticar e moldar essas boxes em todos os tipos de formas.

Esta página mencionará apenas as propriedades transform e transform-origin, mas, na prática, você provavelmente desejará duplicá-las com -webkit-transform e -webkit-transform-origin para obter os mesmos resultados em Safari e Chrome também as -ms-transform e -ms-transform-origin para o Internet Explorer 9, que é a versão mais antiga do IE que oferece suporte a transformações.

Manipulando uma box em duas dimensões, a transformação pode ser usada para girar, inclinar, dimensionar e traduzir uma caixa e seu conteúdo.

## Rotating

O seguinte resultaria em uma caixa quadrada laranja com todo o seu conteúdo - texto, imagens, o que quer que seja - obedientemente em posição de atenção:

.note {
    width: 300px;
    height: 300px;
    background: hsl(36,100%,50%);
}

Mas você pode girar esses soldados adicionando outra declaração:

transform: rotate(-10deg);

Isso girará a box e, o mais importante, tudo nela, dez graus no sentido anti-horário.

## Skewing

Skewing/inclinação permite que você incline a horizontal e a vertical para que o seguinte ...

transform: skew(20deg,10deg);

… Irá inclinar sobre o eixo x em 20 graus e no eixo y em 10 graus.

Você também pode especificar um ângulo, como inclinação (20 graus), que é equivalente a inclinação (20 graus, 0).

## Scaling

Obviamente, você pode alterar as propriedades width/largura e height/altura em uma box, mas isso não afetará o tamanho de nada dentro dela. O dimensionamento, no entanto, multiplicará não apenas a largura e a altura, mas também o tamanho de tudo o que está contido na caixa:

transform: scale(2);

Isso multiplicará o tamanho por dois. Você pode usar qualquer número positivo, incluindo um valor menor que "1", como "0,5", se quiser usar um raio de redução.
Você também pode dimensionar as dimensões horizontal e vertical separadamente:

transform: scale(1,2);

Isso deixará a horizontal como está (porque é uma escala de 1) e multiplicará a vertical por dois.

## Translating

Você pode deslocar uma box horizontal e verticalmente usando transform: translate:

transform: translate(100px,200px);

Semelhante à posição: relative; left: 100px; top: 200px ;, isso moverá uma box 100 pixels para a direita e 200 pixels para baixo.

Assim como os valores mencionados, se você deseja atingir um eixo individual, também pode usar skewX, skewY, scaleX, scaleY, translateX e translateY.

## Combining transformations

Quer girar e dimensionar ao mesmo tempo? Você pode fazer isso simplesmente separando os valores com espaços, como:

transform: rotate(-10deg) scale(2);

A ordem dos valores é importante - o último será executado antes do primeiro. No exemplo anterior, a caixa será dimensionada e girada. É, portanto, diferente transformar: scale (2) rotate (-10deg) ;, que será girado e depois escalado.

Alternativamente, você pode usar a função de matriz. o matrix faz tudo - girar, inclinar, dimensionar e traduzir. São seis valores:

transform: matrix(2,-0.35,0.35,2,0,0);

Esses valores não são totalmente diretos e envolvem matemática, se você realmente quiser abordar (há benefícios não apenas na brevidade, mas também na precisão), pode valer a pena dando uma olhada nas especificações.

## Origin

Há um aspecto importante faltando. Se você está transformando uma caixa, há um outro parâmetro envolvido: a origem da transformação. Se você estiver girando, por exemplo, ele irá, por padrão, ligar o ponto que é o centro da caixa; se você tivesse um pedaço de cartão, enfiasse um alfinete bem no meio dele e, em seguida, colasse na sua testa, o cartão giraria do meio. Você pode alterar onde no cartão o pino está preso com a origem da transformação, no entanto:

transform-origin: 0 0;

Este exemplo dirá à caixa para se transformar (girar, no exemplo anterior) do canto superior esquerdo, o primeiro "0" sendo horizontal, o segundo sendo vertical. Esses valores podem ser diferentes, é claro - como todos os outros x-y, e você pode usar os valores normais de centro, superior, direita, inferior, esquerda, comprimento e porcentagem, incluindo negativos.

E tudo isso com duas dimensões apenas. transform tem um poder ainda maior que também pode ser usado para magia tridimensional. No nível mais básico, você pode usar rotateX e rotateY, que irão girar "na direção/towards" ou "longe/away" de você nos eixos x e y, e existem os gostos de translate3d, scale3d e a intimidante matrix3d, todos dos quais têm dificuldades de navegador ainda maiores do que suas contrapartes 2D.

## Exemplos

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>2D Transforms</title>
        <style>
                body {
                        font: 15px/1.5 helvetica, arial, sans-serif;
                        background: #333;
                        color: #ccc;
                        margin: 50px 0 50px 50px;
                }
                a, code { color: #fff }
                p { margin-bottom: 50px }
        
                pre, #htmldog {
                        float: left;
                        height: 300px;
                        width: 300px;
                        background-color: #666;
                        margin: 0 50px 50px 0;
                        white-space: normal;
                }
                pre code {
                        display: block;
                        height: 260px;
                        background: rgba(255,204,000,.7);
                        padding: 20px;
                }

                #c0 {
                        -webkit-transform: none; /* for some older browsers */
                        -ms-transform: none; /* for IE9 */
                        transform: none; /* default, obvs */
                }
                #c1 {
                        -webkit-transform: rotate(10deg);
                        -ms-transform: rotate(10deg);
                        transform: rotate(10deg);
                }
                #c2 {
                        -webkit-transform: skewX(10deg);
                        -ms-transform: skewX(10deg);
                        transform: skewX(10deg);
                }
                #c3 {
                        -webkit-transform: skewY(-10deg);
                        -ms-transform: skewY(-10deg);
                        transform: skewY(-10deg);
                }
                #c4 {
                        -webkit-transform: skew(10deg, -10deg);
                        -ms-transform: skew(10deg, -10deg);
                        transform: skew(10deg, -10deg);
                }
                #c5 {
                        -webkit-transform: scale(0.8);
                        -ms-transform: scale(0.8);
                        transform: scale(0.8);
                }
                #c6 {
                        -webkit-transform: scale(0.8, 1.2);
                        -ms-transform: scale(0.8, 1.2);
                        transform: scale(0.8, 1.2);
                }
                #c7 {
                        -webkit-transform: translate(25px, 10px);
                        -ms-transform: translate(25px, 10px);
                        transform: translate(25px, 10px);
                }
                #c8 {
                        -webkit-transform: scale(0.8) rotate(10deg) translate(25px, 10px);
                        -ms-transform: scale(0.8) rotate(10deg) translate(25px, 10px);
                        transform: scale(0.8) rotate(10deg) translate(25px, 10px);
                }
                #c9 {
                        -webkit-transform: matrix(0.787846, 0.138919, -0.138919, 0.787846, 18.307, 11.3514);
                        -ms-transform: matrix(0.787846, 0.138919, -0.138919, 0.787846, 18.307, 11.3514);
                        transform: matrix(0.787846, 0.138919, -0.138919, 0.787846, 18.307, 11.3514);
                }

                #htmldog a {
                        display: block;
                        padding: 105px 90px;
                        background: rgba(255,204,000,.7);
                        -webkit-transform: scale(.8);
                        -ms-transform: scale(.8);
                        transform: scale(.8);
                        transition: .7s transform cubic-bezier(0.5,1.5,0.5,-0.5);
                }
                #htmldog a:hover {
                        -webkit-transform: scale(1);
                        -ms-transform: scale(1);
                        transform: scale(1);
                }
        </style>
</head>
<body>
        <h1><a href="http://www.htmldog.com/guides/css/advanced/transformations/">2D Transforms</a></h1>
        <p>Using the <a href="http://www.htmldog.com/references/css/properties/transform/"><code>transform</code></a> CSS property.</p>

        <pre><code id="c0">transform: none;</code></pre>

        <pre><code id="c1">transform: rotate(10deg);</code></pre>

        <pre><code id="c2">transform: skewX(10deg);</code></pre>

        <pre><code id="c3">transform: skewY(-10deg);</code></pre>

        <pre><code id="c4">transform: skew(10deg, -10deg);</code></pre>

        <pre><code id="c5">transform: scale(0.8);</code></pre>

        <pre><code id="c6">transform: scale(0.8, 1.2);</code></pre>

        <pre><code id="c7">transform: translate(25px, 10px);</code></pre>

        <pre><code id="c8">transform: scale(0.8) rotate(10deg) translate(25px, 10px);</code></pre>

        <pre><code id="c9">transform: matrix(0.787846, 0.138919, -0.138919, 0.787846, 18.307, 11.3514);</code></pre>

        <!-- Link back to HTML Dog: -->
        <p id="htmldog"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog" width="120" height="90"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Transform origin</title>
        <style>
                body {
                        font: 15px/1.5 helvetica, arial, sans-serif;
                        background: #333;
                        color: #ccc;
                        margin: 50px 0 50px 50px;
                }
                a, code { color: white }
                p { margin-bottom: 50px }
        
                pre, #htmldog {
                        float: left;
                        height: 300px;
                        width: 300px;
                        background-color: #666;
                        margin: 0 50px 50px 0;
                        white-space: normal;
                        position: relative;
                }
                pre code {
                        display: block;
                        height: 260px;
                        background: rgba(255,204,000,.7);
                        padding: 20px;
                }
                pre:after {
                        content: "";
                        position: absolute;
                        width: 10px;
                        height: 10px;
                        background: red;
                        border: 5px solid white;
                        border-radius: 10px;
                        margin: -10px 0 0 -10px;
                }

                #p0 code {
                        -webkit-transform: rotate(10deg); /* for some older browsers */
                        -webkit-transform-origin: 50% 50%;
                        -ms-transform: rotate(10deg); /* for IE9 */
                        -ms-transform-origin: 50% 50%;
                        transform: rotate(10deg);
                        transform-origin: 50% 50%; /* default */
                }
                #p0:after {
                        top: 50%;
                        left: 50%;
                }
                #p1 code {
                        -webkit-transform: rotate(10deg);
                        -webkit-transform-origin: top;
                        -ms-transform: rotate(10deg);
                        -ms-transform-origin: top;
                        transform: rotate(10deg);
                        transform-origin: top;
                }
                #p1:after {
                        top: 0;
                        left: 50%;
                }
                #p2 code {
                        -webkit-transform: rotate(10deg);
                        -webkit-transform-origin: right;
                        -ms-transform: rotate(10deg);
                        -ms-transform-origin: right;
                        transform: rotate(10deg);
                        transform-origin: right;
                }
                #p2:after {
                        top: 50%;
                        right: 0;
                        margin: -10px -10px 0 0;
                }
                #p3 code {
                        -webkit-transform: rotate(10deg);
                        -webkit-transform-origin: right top;
                        -ms-transform: rotate(10deg);
                        -ms-transform-origin: right top;
                        transform: rotate(10deg);
                        transform-origin: right top;
                }
                #p3:after {
                        top: 0;
                        right: 0;
                        margin: -10px -10px 0 0;
                }
                #p4 code {
                        -webkit-transform: rotate(10deg);
                        -webkit-transform-origin: 25% 25%;
                        -ms-transform: rotate(10deg);
                        -ms-transform-origin: 25% 25%;
                        transform: rotate(10deg);
                        transform-origin: 25% 25%;
                }
                #p4:after {
                        top: 25%;
                        left: 25%;
                }
                #p5 code {
                        -webkit-transform: rotate(10deg);
                        -webkit-transform-origin: -20px 20px;
                        -ms-transform: rotate(10deg);
                        -ms-transform-origin: -20px 20px;
                        transform: rotate(10deg);
                        transform-origin: -20px 20px;
                }
                #p5:after {
                        top: 20px;
                        left: -20px;
                }

                #htmldog a {
                        display: block;
                        padding: 105px 90px;
                        background: rgba(255,204,000,.7);
                        -webkit-transform: rotate(10deg);
                        -webkit-transform-origin: 0 0;
                        -ms-transform: rotate(10deg);
                        -ms-transform-origin: 0 0;
                        transform: rotate(10deg);
                        transform-origin: 0 0;
                        transition: 1s;
                }
                #htmldog a:hover {
                        -webkit-transform: rotate(-10deg);
                        -webkit-transform-origin: right top;
                        -ms-transform: rotate(-10deg);
                        -ms-transform-origin: right top;
                        transform: rotate(-10deg);
                        transform-origin: right top;
                }
        </style>
</head>
<body>
        <h1><a href="http://www.htmldog.com/guides/css/advanced/transformations/">Transform origin</a></h1>
        <p>Using the <a href="http://www.htmldog.com/references/css/properties/transform-origin/"><code>transform-origin</code></a> CSS property to alter the point at which transformations are measured from. Using a rotated 2D transformation as an example.</p>

        <pre id="p0"><code id="c0">transform: rotate(10deg);
transform-origin: 50% 50%;
/* default */</code></pre>

        <pre id="p1"><code id="c1">transform: rotate(10deg);
transform-origin: top;</code></pre>

        <pre id="p2"><code id="c2">transform: rotate(10deg);
transform-origin: right;</code></pre>

        <pre id="p3"><code id="c3">transform: rotate(10deg);
transform-origin: right top;</code></pre>

        <pre id="p4"><code id="c4">transform: rotate(10deg);
transform-origin: 25% 25%;</code></pre>

        <pre id="p5"><code id="c5">transform: rotate(10deg);
transform-origin: -20px 20px;</code></pre>

        <!-- Link back to HTML Dog: -->
        <p id="htmldog"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog" width="120" height="90"></a></p>
</body>
</html>

