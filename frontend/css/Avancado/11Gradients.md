# Gradients

Imagens que mostram uma dissolução suave de uma cor para outra estão espalhadas por toda a web. No entanto, o CSS 3 permite que você os coloque em seus designs sem ter que criar um arquivo de imagem real.

Não há propriedade especial para isso; você simplesmente usa a propriedade background ou background-image e define seu gradiente em seu valor. Você pode criar gradientes lineares e radiais dessa maneira.

## Linear gradients

Para uma distribuição uniforme de duas cores, esmaecendo de uma na parte superior para outra na parte inferior, uma declaração pode ser simplesmente algo como:

background: linear-gradient(yellow, red);

Para manipular o ângulo do desvanecimento, você posiciona "to" e o destino para o qual deseja que a transição siga. Você pode ir para um lado:

background: linear-gradient(to right, orange, red);

Ou um canto

background: linear-gradient(to bottom right, orange, red);

Ou qualquer ângulo que agrade a sua imaginação:

background: linear-gradient(20deg, orange, red);

Observe que o "to" é excluído com ângulos porque não há um destino explícito.

E por que parar em duas cores? Especifique quantos você ousar:

background: linear-gradient(hsl(0,100%,50%),hsl(60,100%,50%),hsl(120,100%,50%),hsl(180,100%,50%),hsl(240,100%,50%),hsl(300,100%,50%));

Para fazer os gradientes funcionarem no maior número possível de navegadores, você provavelmente também desejará usar -webkit-linear-gradient para cobrir o Safari e versões mais antigas do Chrome. Os valores destes também devem excluir a parte "to", se usada.

Os gradientes CSS não serão reproduzidos com o IE 9 e anteriores, mas você ainda pode fazê-los, e qualquer outro navegador incapaz, usar o método tradicional de uma boa imagem à moda antiga, especificando-o primeiro, como um fallback (declarações posteriores apenas ser ignorado).

Então, tudo incluído, seus gradientes podem ser parecidos com isto:

body {
    background: #666 url(fade.png) 0 0 repeat-y;
    background: -webkit-linear-gradient(right, #000, #666); 
    background: linear-gradient(to right, #000, #666);
}

## Radial gradients

Gradientes radiais, com uma cor começando de um ponto central e desbotando para outra cor, usam uma sintaxe semelhante:

background: radial-gradient(yellow, green);

Você também pode especificar a forma do fade. Por padrão, é uma elipse, espalhando-se para preencher a caixa de fundo, mas você pode forçá-la a ser circular, independentemente do formato da caixa:

background: radial-gradient(circle, yellow, green);

Usando "closest-side", "closest-corner", "farthest-side" e "farthest-corner", você também pode especificar se o gradiente está contido pelos lados ou cantos da caixa mais próximos ou mais distantes da origem:

background: radial-gradient(circle closest-side, yellow, green);

E se você quiser colocar a origem do gradiente em algum lugar específico, você também pode usar "at":

background: radial-gradient(at top left, yellow, green);

Mais notas de compatibilidade: o uso adicional de -webkit-radial-gradiente é sábio. A ordem dos parâmetros precisa ser alterada aqui e, como "to", "at" é excluído. 

Então:

background: radial-gradient(circle closest-side at 100px 200px , black, white);

Estaria acompanhado por:

background: -webkit-radial-gradient(100px 200px, circle closest-side, black, white);

## Color stops

Se você não quiser uma mistura uniforme em seu gradiente, você pode especificar exatamente onde no gradiente cada cor entra em ação, logo após cada cor, começando em "0" e terminando em "100%" (embora comprimentos também possam ser usados )

Então, só para deixar claro antes de mexer:
     • linear-gradient (black 0, white 100%) é o equivalente ao linear-gradient(black, white) 
     • radial-gradient(#06c 0, #fc0 50%, #039 100%) é igual ao radial-gradient(#06c, #fc0, #039)
     • linear-gradient(red 0%, green 33.3%, blue 66.7%, black 100%) terá o mesmo resultado que linear-gradient(red, green, blue, black) 

Isso porque, quando as posições são declaradas nesses exemplos, elas espaçam uniformemente as cores, que é o padrão quando nenhuma interrupção de cor é explicitamente definida.

Então, para continuar com os ajustes, você pode puxar e alongar com essas paradas:

background: linear-gradient(135deg, hsl(36,100%,50%) 10%, hsl(72,100%,50%) 60%, white 90%);

## Repeating gradients

Um único gradiente preencherá uma box com os métodos anteriores, mas você pode usar "repeating-linear-gradient" e "repeating-linear-gradient" para construir sobre os pontos de cor e, bem, repetir o gradiente.

Para barras básicas de barras pretas e brancas, por exemplo:

background: repeating-linear-gradient(white, black 15px, white 30px);

Ou algo um pouco mais sólido:

background: repeating-radial-gradient(black, black 15px, white 15px, white 30px);

## Exemplos

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Linear gradients</title>
        <style>
                html {
                        background: -webkit-linear-gradient(left, yellow, red);
                        background: linear-gradient(to left, yellow, red);
                        height: 100%;
                }

                body {
                        font: 14px/1.5 courier;
                        color: #000;
                }
        
                p {
                        width: 200px;
                        height: 200px;
                        padding: 20px;
                        margin: 20px 0 0 20px;
                        float: left;
                        border: 1px solid yellow;
                }
        
                #gradient1 {
                        background: #888 url(images/gradientLinear.jpg) repeat-x; /* Background images can be used for browsers that aren't capable of producing gradients */
                        background: -webkit-linear-gradient(yellow, red); /* Backup for major browsers that can still handle gradients */
                        background: linear-gradient(yellow, red); /* The CSS3 standard */
                }
                
                #gradient2 {
                        background: -webkit-linear-gradient(right, yellow, red);
                        background: linear-gradient(to right, yellow, red);
                }
                
                #gradient3 {
                        background: -webkit-linear-gradient(bottom right, yellow, red);
                        background: linear-gradient(to bottom right, yellow, red);
                }
                
                #gradient4 {
                        background: -webkit-linear-gradient(20deg, yellow, red);
                        background: linear-gradient(20deg, yellow, red);
                }
                
                #gradient5 {
                        background: -webkit-linear-gradient(hsl(0,100%,50%), hsl(60,100%,50%), hsl(120,100%,50%), hsl(180,100%,50%), hsl(240,100%,50%), hsl(300,100%,50%));
                        background: linear-gradient(hsl(0,100%,50%), hsl(60,100%,50%), hsl(120,100%,50%), hsl(180,100%,50%), hsl(240,100%,50%), hsl(300,100%,50%));
                }
                
                #gradient6 {
                        background: -webkit-linear-gradient(135deg, hsl(36,100%,50%) 10%, hsl(72,100%,50%) 60%, white 90%);
                        background: linear-gradient(135deg, hsl(36,100%,50%) 10%, hsl(72,100%,50%) 60%, white 90%);
                }
                
                #gradientCollie {
                        width: 120px;
                        height: 90px;
                        padding: 75px 60px;
                        background: -webkit-linear-gradient(white, #06c);
                        background: linear-gradient(white, #06c);
                }
        </style>
</head>
<body>
        <p id="gradient1"><code>background: linear-gradient(yellow, red);</code></p>
        <p id="gradient2"><code>background: linear-gradient(to right, yellow, red);</code></p>
        <p id="gradient3"><code>background: linear-gradient(to bottom right, yellow, red);</code></p>
        <p id="gradient4"><code>background: linear-gradient(20deg, yellow, red);</code></p>
        <p id="gradient5"><code>background: linear-gradient(hsl(0,100%,50%), hsl(60,100%,50%), hsl(120,100%,50%), hsl(180,100%,50%), hsl(240,100%,50%), hsl(300,100%,50%));</code></p>
        <p id="gradient6"><code>background: linear-gradient(135deg, hsl(36,100%,50%) 10%, hsl(72,100%,50%) 60%, white 90%);</code></p>

        <!-- Link back to HTML Dog: -->
        <p id="gradientCollie"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Radial gradients</title>
        <style>
                html {
                        background: -webkit-radial-gradient(green, yellow);
                        background: radial-gradient(green, yellow);
                        height: 100%;
                }

                body {
                        font: 14px/1.5 courier;
                        color: #000;
                }
        
                p {
                        width: 300px;
                        height: 150px;
                        padding: 20px;
                        margin: 20px 0 0 20px;
                        float: left;
                        border: 1px solid green;
                }
        
                #gradient1 {
                        background: #888 url(images/gradientRadial.jpg); /* Background images can be used for browsers that aren't capable of producing gradients */
                        background: -webkit-radial-gradient(yellow, green); /* Backup for major browsers that can still handle gradients */
                        background: radial-gradient(yellow, green); /* The CSS3 standard */
                }
                
                #gradient2 {
                        background: -webkit-radial-gradient(circle, yellow, green);
                        background: radial-gradient(circle, yellow, green);
                }
                
                #gradient3 {
                        background: -webkit-radial-gradient(circle closest-side, yellow, green);
                        background: radial-gradient(circle closest-side, yellow, green);
                }
                
                #gradient4 {
                        background: -webkit-radial-gradient(top left, yellow, green);
                        background: radial-gradient(at top left, yellow, green);
                }
                
                #gradient5 {
                        background: -webkit-repeating-radial-gradient(#8d0, #0d0 10px, #9f0 10px, #0f0 20px);
                        background: repeating-radial-gradient(#8d0, #0d0 10px, #9f0 10px, #0f0 20px);
                }
                
                #gradientCollie {
                        width: 120px;
                        height: 90px;
                        padding: 50px 60px;
                        border-radius: 120px/95px;
                        background: -webkit-radial-gradient(white 50%, #06c 75%);
                        background: radial-gradient(white 50%, #06c 75%);
                }
        </style>
</head>
<body>
        <p id="gradient1"><code>background: radial-gradient(yellow, green);</code></p>
        <p id="gradient2"><code>background: radial-gradient(circle, yellow, green);</code></p>
        <p id="gradient3"><code>background: radial-gradient(circle closest-side, yellow, green);</code></p>
        <p id="gradient4"><code>background: radial-gradient(at top left, yellow, green);</code></p>
        <p id="gradient5"><code>background: repeating-radial-gradient(#8d0, #0d0 10px, #9f0 10px, #0f0 20px);</code></p>

        <!-- Link back to HTML Dog: -->
        <p id="gradientCollie"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

