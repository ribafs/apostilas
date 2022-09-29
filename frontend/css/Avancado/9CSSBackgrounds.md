# CSS Backgrounds

CSS Backgrounds: Multiples, Size, and Origin

Além de aplicar uma imagem de fundo única ou ladrilhada em partes da página, você também pode aplicar fundos múltiplos, ajustar o tamanho das imagens de fundo e definir a origem de um fundo com base nos níveis do modelo da box.

Multiple backgrounds/Vários fundos

CSS3 permite que você aplique várias imagens de fundo a uma única box, simplesmente colocando os locais das imagens em uma lista separada por vírgulas:


background-image: url(this.jpg), url(that.gif), url(theother.png);

Mais útil, você também pode definir todos os outros aspectos de fundo. Se você quiser estilizar um link em formato de botão com fundo, marcador e seta separados, por exemplo, pode usar algo como:


background: url(bg.png), url(bullet.png) 0 50% no-repeat, url(arrow.png) right no-repeat;

Fácil, certo? É o mesmo que usar background-image, background-position, background-repeat, background-attachment e background, exceto que você pode especificar mais de um fundo com a ajuda dessa vírgula útil.

## Background size

A propriedade background-size permite esticar ou comprimir uma imagem de fundo.

background-size: contain e background-size: cover
Os valores podem ser:
    • automático, que mantém o tamanho original da imagem de fundo e a proporção largura / altura.
    • comprimentos, largura e altura, como 100px 50px (100px de largura, 50px de altura). Especificar um único comprimento, como 100px, resultará no equivalente a 100px automático.
    • porcentagens, uma largura e uma altura, como 50% 25% (50% da largura da área de fundo, 25% da altura da área de fundo). Especificar uma única porcentagem, como 50%, resultará no equivalente a 50% automático.
    • Uma combinação de comprimentos, porcentagens e automático, como 80px automático (80px de largura, altura automática para manter a proporção original da imagem)
    • conter, que mantém a proporção original da imagem de fundo e a torna o maior possível, enquanto se ajusta inteiramente à área de fundo da caixa.
    • capa, que mantém a proporção original da imagem de fundo e a torna grande o suficiente para preencher toda a área de fundo, o que pode resultar no corte da altura ou da largura.

## Background origin

background-origin é o garoto notavelmente chato do grupo. A propriedade define onde a área de fundo de uma box realmente começa. Se você pensar no modelo da box, ao definir um fundo, ele deve, por padrão, começar no canto superior esquerdo da box de preenchimento. Então, se você tivesse ...

#burrito {
    width: 400px;
    height: 200px;
    border: 10px solid rgba(0,255,0,.5);
    padding: 20px;
    background: url(chilli.png) 0 0 no-repeat;
}

… A imagem de fundo deve aparecer no canto superior esquerdo, na box de preenchimento, imediatamente após as bordas internas de uma borda verde. Você pode alterar esse comportamento, no entanto, com a origem do fundo. Seus valores autodescritivos podem ser padding-box (padrão, conforme descrito acima), border-box e content-box.
Portanto, adicionar background-origin: border-box ao exemplo anterior fará com que a origem da imagem de fundo seja dobrada dentro da borda.

## Exemplos

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Multiple backgrounds</title>
        <style>
                body {
                        font: 14px/1.5 courier, monospace;
                        background: white;
                        color: black;
                        margin: 20px;
                }
        
                pre, #htmldog {
                        background-color: #c72;
                        height: 200px;
                        margin: 20px 0;
                        overflow: auto;
                }
                pre code {
                        background: white;
                        padding: 2px 10px 4px 0;
                }

                #p0, #htmldog {
                        background-image: url("http://www.htmldog.com/examples/images/bg.gif");
                }
                #p1 {
                        background-image: url("http://www.htmldog.com/examples/images/circle.png"), url("http://www.htmldog.com/examples/images/bg.gif");
                }
                #p2 {
                        background-image: url("http://www.htmldog.com/examples/images/circle.png"), url("http://www.htmldog.com/examples/images/bg.gif");
                        background-repeat: no-repeat, repeat;
                }
                #p3 {
                        background-image: url("http://www.htmldog.com/examples/images/circle.png"), url("http://www.htmldog.com/examples/images/bg.gif");
                        background-repeat: no-repeat, repeat;
                        background-position: center;
                }
                #p4 {
                        background: url("http://www.htmldog.com/examples/images/circle.png") center no-repeat, url("http://www.htmldog.com/examples/images/bg.gif");
                }

                #htmldog a {
                        display: block;
                        height: 200px;
                        background: url("http://www.htmldog.com/examples/images/cornerbg.gif") top -15px left -15px, url("http://www.htmldog.com/examples/images/cornerbg.gif") top -15px right -15px, url("http://www.htmldog.com/examples/images/cornerbg.gif") bottom -15px right -15px, url("http://www.htmldog.com/examples/images/cornerbg.gif") bottom -15px left -15px, url("http://www.htmldog.com//badge1.gif") center;
                        background-repeat: no-repeat;
                        text-indent: -999em;
                        transition: background-position .5s steps(2);
                }
                #htmldog a:hover {
                        background-position: top -25px left -25px, top -25px right -25px, bottom -25px right -25px, bottom -25px left -25px, center;
                }
        </style>
</head>
<body>
        <h1><a href="http://www.htmldog.com/guides/css/advanced/backgrounds/">Multiple backgrounds</a></h1>
        <p>Using the <a href="http://www.htmldog.com/references/css/properties/background-image/"><code>background-image</code></a> and <a href="http://www.htmldog.com/references/css/properties/background/"><code>background</code></a> CSS properties.</p>

        <pre id="p0"><code>background-image: url("bg.gif");</code></pre>
        <pre id="p1"><code>background-image: url("circle.png"), url("bg.gif");</code></pre>
        <pre id="p2"><code>background-image: url("circle.png"), url("bg.gif");</code>
<code>background-repeat: no-repeat, repeat;</code></pre>
        <pre id="p3"><code>background-image: url("circle.png"), url("bg.gif");</code>
<code>background-repeat: no-repeat, repeat;</code>
<code>background-position: center;</code></pre>
        <pre id="p4"><code>background: url("circle.png") center no-repeat, url("bg.gif");</code></pre>

        <!-- Link back to HTML Dog: -->
        <p id="htmldog"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>background-size</title>
        <style>
                body {
                        font: 14px courier;
                        background: #c72 url("/examples/images/opacityBg.gif");
                        color: #000;
                        margin: 0;
                        padding: 10px;
                }
        
                p {
                        background: #7a796b url("/examples/images/tikal.jpg");
                        margin: 10px;
                        width: 300px;
                        height: 300px;
                        float: left;
                        text-align: center;
                }
                code {
                        background: white;
                        padding: 0 15px 2px;
                }

                #p1 {
                        background-size: auto;
                }
                #p2 {
                        background-size: 50%;
                }
                #p3 {
                        background-size: 100px;
                }
                #p4 {
                        background-size: 100px 100px;
                }
                #p5 {
                        background-size: contain;
                }
                #p6 {
                        background-size: cover;
                }

                #borderCollie a {
                        display: block;
                        height: 300px;
                        background: white url("http://www.htmldog.com//badge1.gif") center no-repeat;
                        background-size: 60px 45px;
                        transition: background-size .5s;
                        text-indent: -999em;
                }
                #borderCollie a:hover {
                        background-size: 120px 90px;
                }
        </style>
</head>
<body>
        <p id="p1"><code>background-size: auto;</code></p>
        <p id="p2"><code>background-size: 50%;</code></p>
        <p id="p3"><code>background-size: 100px;</code></p>
        <p id="p4"><code>background-size: 100px 100px;</code></p>
        <p id="p5"><code>background-size: contain;</code></p>
        <p id="p6"><code>background-size: cover;</code></p>

        <!-- Link back to HTML Dog: -->
        <p id="borderCollie"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

