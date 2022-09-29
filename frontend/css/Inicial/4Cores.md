# Cores no CSS

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

h1 {
    color: yellow;
    background-color: blue;
}

Essas cores podem ser um pouco fortes, então você pode alterar o código do seu arquivo CSS para tons ligeiramente diferentes:

body {
    font-size: 14px;
    color: navy;
}

h1 {
    color: #ffc;
    background-color: #009;
}

## Exemplo

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


