# Advanced Colors

Já sabemos que as cores podem ser definidas por nome, RGB ou valores hexadecimais, mas o CSS 3 também permite colorir com HSL - matiz, saturação e luminosidade - além de estipular transparência.

Não há propriedades superespeciais em jogo aqui - HSL e RGBa (o "a" que significa "alpha", como em "transparência alpha") podem ser aplicadas a qualquer propriedade que tenha um valor de cor, como color, background-color , border-color ou box-shadow, para citar apenas alguns.

## Alpha transparenceTransparência alfa

RGBa abre uma nova dimensão excitante para web design, permitindo que você defina a transparência de uma caixa ou texto. Se você quiser que uma pitada de uma imagem de fundo atraente apareça através de um título, por exemplo, você pode usar algo assim:

h1 {
    padding: 50px;
    background-image: url(snazzy.jpg);
    color: rgba(0,0,0,0.8);
}

Um valor padrão de rgb (0,0,0) definiria o título para preto puro, mas o quarto valor, em rgba, define o nível de transparência, "1" sendo completamente opaco, "0" sendo completamente transparente. Então rgba (0,0,0,0.8) está dizendo vermelho = "0", verde = "0", azul = "0", alfa = "0,8", o que, todos juntos, torna 80% preto.
Isso não se aplica apenas ao texto, é claro, você pode aplicar uma cor de fundo transparente a uma box inteira, para uma sombra de box transparente ... em qualquer lugar onde você pode usar rgb, você pode usar rgba.

## Hue, saturation, and lightness

Nomes de cores à parte, as cores da web sempre foram tendenciosas de vermelho-verde-azul, seja por meio de códigos hexadecimais ou RBG explícito (ou RGBa). Embora um pouco menos direto (especialmente se seu cérebro for treinado para dividir as cores em vermelho, verde e azul), o HSL pode realmente ser mais intuitivo porque dá a você controle direto sobre os aspectos da tonalidade de uma cor em vez de seus ingredientes lógicos.

É usado de maneira semelhante ao rgb:

#smut { color: hsl(36, 100%, 50%) }

Em vez de cada subvalor ser parte do espectro de cores, eles são:

     • Hue/Matiz ("36" no exemplo acima): qualquer ângulo, de 0 a 360, tirado de uma roda de cores típica, onde "0" (e "360") é vermelho, "120" é verde e "240" é azul.
     • Saturation/Saturação ("100%" no exemplo): Quão saturado você deseja que a cor seja, de 0% (nenhum, então um nível de cinza dependendo da luminosidade) a 100% (o golpe completo, por favor).
     • Lightness/Luminosidade ("50%" no exemplo): De 0% (preto) a 100% (branco), sendo 50% "normal".

Portanto, o exemplo usado aqui produzirá uma laranja (36°) que é rica (saturação de 100%) e vibrante (50% lightness/Luminosidade). Isto é o equivalente de #ff9900, #f90 e rgb(255, 153, 0).

## HSLa

Essa nova transparência e HSL podem ser combinados?! É melhor você acreditar. Aqui está HSLa:

#rabbit { background: hsla(0, 75%, 75%, 0.5) }

Você pode descobrir o que isso faz, certo?

hsl e hsla são suportados pela maioria dos navegadores modernos, incluindo IE versões 9 e superiores.

## Exemplos

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

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Box shadows</title>
        <style>
                body {
                        font: 14px courier, monospace;
                        padding: 25px;
                        margin: 0;
                        background: #edc;
                        color: #000;
                }
        
                p {
                        width: 400px;
                        height: 50px;
                        padding: 50px;
                        margin: 25px;
                        background: white;
                        float: left;
                }
                #shadow1 {
                        box-shadow: 5px 5px;
                }
                #shadow2 {
                        box-shadow: 5px 5px 3px 1px #999;
                }
                #shadow3 {
                        box-shadow: 5px 5px 3px 1px rgba(0,0,0,.4);
                }
                #shadow4 {
                        box-shadow: 0 0 10px 0 rgba(0,0,0,.4);
                }
                #shadow5 {
                        box-shadow: inset 0 0 10px 0 rgba(0,0,0,.4);
                }


                #shadowBoxer {
                        width: 120px;
                        height: 90px;
                        padding: 30px 40px;
                        box-shadow: 0 0 20px 5px #06c;
                }
        </style>
</head>
<body>
        <p id="shadow1"><code>box-shadow: 5px 5px;</code></p>
        <p id="shadow2"><code>box-shadow: 5px 5px 3px 1px #999;</code></p>
        <p id="shadow3"><code>box-shadow: 5px 5px 3px 1px rgba(0,0,0,.4);</code></p>
        <p id="shadow4"><code>box-shadow: 0 0 10px 0 rgba(0,0,0,.4);</code></p>
        <p id="shadow5"><code>box-shadow: inset 0 0 10px 0 rgba(0,0,0,.4);</code></p>

        <!-- Link back to HTML Dog: -->
        <p id="shadowBoxer"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Transitions with border-radius and RGBa</title>
        <style>
                * {
                        margin: 0;
                }
                body {
                        font: 36px arial, helvetica, sans-serif;
                        color: #000;
                        background: #06c;
                }
                h1 {
                        margin: 40px;
                        font-size: 24px;
                        color: white;
                        text-align: center;
                }
                p {
                        height: 360px;
                        padding: 40px;
                }
                a, img {
                        display: block;
                        margin: 0 auto;
                        color: rgba(255,255,255,.5);
                        text-align: center;
                        text-decoration: none;
                        -webkit-transition: .5s;
                        transition: .5s;
                }
                a:hover {
                        background: rgba(255,255,255,.5);
                        color: white;
                        border-color: white;
                }

                #daddy {
                        background: rgba(0,0,0,.3);
                }
                #daddy a {
                        width: 120px;
                        height: 120px;
                        padding: 60px;
                        border-radius: 80px;
                        border: 60px solid rgba(255,255,255,.5);
                }
                #daddy a:hover {
                        border-radius: 180px;
                }

                #spurt {
                        background: rgba(0,0,0,.2);
                }
                #spurt a, #baby a {
                        width: 80px;
                        height: 80px;
                        padding: 40px;
                        border-radius: 60px;
                        border: 40px solid rgba(255,255,255,.5);
                        margin: 60px auto;
                        font-size: 24px;
                }
                #spurt a:hover {
                        width: 120px;
                        height: 120px;
                        padding: 60px;
                        border-width: 60px;
                        border-radius: 180px;
                        margin: 0 auto;
                        font-size: 36px;
                }

                #baby {
                        background: rgba(0,0,0,.1);
                }
                #baby a:hover {
                        width: 40px;
                        height: 40px;
                        padding: 20px;
                        border-width: 20px;
                        border-radius: 60px;
                        margin: 120px auto;
                        font-size: 12px;
                }



                #pet a {
                        width: 120px;
                        margin-top: 125px;
                        background: white;
                        border: 10px solid white;
                        border-radius: 10px;
                        opacity: .7;
                }
                #pet a:hover {
                        background: white;
                        box-shadow: 0 0 100px 50px rgba(255,255,255,.5);
                        opacity: 1;
                }
        </style>
</head>
<body>
        <h1>CSS transitions, using <code>border-radius</code> and RGBa colors.</h1>
        <p id="daddy"><a href="">Big daddy link!</a></p>
        <p id="spurt"><a href="">Growth spurt link!</a></p>
        <p id="baby"><a href="">Shy baby link!</a></p>

        <!-- Link back to HTML Dog: -->
        <p id="pet"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

