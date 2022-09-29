# Shadows/Sombras

Veja! É como se alguém iluminasse minha página da web!

Você pode dar para partes de sua página sombras para boxes e para o texto.

## box-shadow

box-shadow é a propriedade CSS padrão para você começar e pode ter um valor composto por várias partes:

box-shadow: 5px 5px 3px 1px #999

     • O primeiro valor é o deslocamento horizontal (horizontal offset) - o quanto a sombra é empurrada para a direita (ou para a esquerda se for negativo)
     • O segundo valor é o deslocamento vertical (vertical offset) - o quão longe a sombra é empurrada para baixo (ou para cima se for negativo)
     • O terceiro valor é o raio de desfoque (blur radius) - quanto mais alto o valor, menos nítida é a sombra. ("0" sendo absolutamente nítido). Isso é opcional - omiti-lo é equivalente a definir "0".
     • O quarto valor é a distância de propagação (spread distance) - quanto mais alto o valor, maior a sombra ("0" sendo o tamanho herdado da caixa). Isso também é opcional - omiti-lo é equivalente a definir "0".
     • O quinto valor é uma cor (color). Isso também é opcional.

## Inner shadows

Você também pode aplicar sombras no interior de uma caixa, adicionando "inset" à lista:

box-shadow: inset 0 0 7px 5px #ddd;

Você pode encontrar versões específicas do navegador de box-shadow, como -moz-box-shadow e -webkit-box-shadow. Ignore-os. Eles são velhos e estúpidos. A maioria dos navegadores modernos entende box-shadow, incluindo o Internet Explorer versões 9 e posteriores.

## Text Shadows

box-shadow - box-shadow, como o próprio nome indica, só tem olhos para boxes. Fera inconstante. Mas você também pode aplicar sombras ao contorno do texto com (surpresa!) Sombra de texto:

text-shadow: -2px 2px 2px #999;

Da mesma forma que a sombra da caixa:

     • O primeiro valor é o deslocamento horizontal/horizontal offset 
     • O segundo valor é o deslocamento vertical/vertical offset 
     • O terceiro valor é o raio do desfoque/blur radius (opcional)
     • O quarto valor é a cor (opcional, embora omiti-lo tornará a sombra da mesma cor do texto em si)

Observe que não há distância de propagação ou opção de inserção para sombra de texto.

text-shadow demorou um pouco mais para os navegadores descobrirem. O Internet Explorer 9 e versões anteriores não o compreenderão, por isso sugerimos usá-lo apenas em situações não críticas.

## Exemplos

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
        <title>Text shadows</title>
        <style>
                body {
                        font: 20px/2 "times new roman", times, serif;
                        color: #000;
                }
                h1 {
                        text-shadow: -2px 2px 2px #999;
                }
                em {
                        font-weight: bold;
                        padding: 8px;
                }
                #elephant {
                        color: #eee;
                        background: #999;
                        text-shadow: 2px 1px 0 #000;
                }
                #plesiosaur {
                        background: #bde;
                        color: #06c;
                        text-shadow: 0 -3px 1px #fff;
                }
                #tourist {
                        color: #efa;
                        background: #be0;
                        text-shadow: 0 0 4px #360;
                }
        </style>
</head>
<body>
        <h1>A little tale accompanied by a little text shadow</h1>
        <p>In Botswana's Chobe National Park, <em id="elephant">an elephant with an especially large trunk</em> is minding its own business when <em id="plesiosaur">a plesiosaur with five heads, two tails, and the legs of a lion</em> falls out of the sky and lands on the elephant's back.</p>
        <p>"Hah hah! That's hilarious!", says the plesiosaur, "Your trunk is huge!"</p>
        <p><em id="tourist">A stunned tourist in a nearby Jeep</em> drops his camera, stares in amazement, and excitedly taps his wife on the shoulder.</p>
        <p>"Look, honey! That's amazing! The talking prehistoric marine reptile with five heads, two tails, and the legs of a lion that fell out of the sky is right! That elephant's trunk is ginormous!"</p>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>


