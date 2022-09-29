# CSS Transitions

As transições permitem que você anime facilmente partes do seu design sem a necessidade de JavaScript.

No nível mais simplista, pense em um foco tradicional, onde você pode alterar a aparência de um link quando um cursor o acaricia:

a:link {
    color: hsl(36,50%,50%);
}
a:hover {
    color: hsl(36,100%,50%);
}

Isso cria uma animação binária; um link muda de um laranja suave para um laranja intenso quando passa o mouse sobre ele.

A propriedade de transição, no entanto, é muito mais poderosa, permitindo uma animação suave (ao invés de um salto de um estado para outro). É uma propriedade abreviada que combina as seguintes propriedades (que podem ser usadas individualmente se você quiser):

     • transition-property/propriedade de transição: qual propriedade (ou propriedades) fará a transição.
     • transition-durationduração da transição: quanto tempo leva a transição.
     • transition-timing-function/função de tempo de transição: se a transição ocorre a uma velocidade constante ou se acelera e desacelera.
     • transition-delay/atraso de transição: quanto tempo esperar até que a transição ocorra.

Voltando à propriedade abreviada, se uma transição for aplicada assim ...

a:link {
    transition: all .5s linear 0;
    color: hsl(36,50%,50%);
}
a:hover {
    color: hsl(36,100%,50%);
}

… Quando o ponteiro do mouse passa sobre o link, a cor muda gradualmente em vez de mudar bruscamente. A propriedade de transição aqui está dizendo que deseja que todas as propriedades tenham a transição de meio segundo de maneira linear sem atraso.

Para que uma transição ocorra, apenas a duração da transição é necessária, o resto padronizando para a propriedade da transição: all; transition-timing-function: ease; transition-delay: 0 ;. Portanto, você poderia, por exemplo, simplesmente declarar a transição: .5s.

## Targeting specific properties

Embora “all” possa ser usado na propriedade transition-property (ou transição), você pode dizer a um navegador apenas para fazer a transição de certas propriedades, simplesmente inserindo o nome da propriedade que deseja alterar. Portanto, o exemplo anterior poderia realmente incluir transição: cor .5s atenuação 0, considerando apenas as alterações de cor.

Se você deseja segmentar mais de uma propriedade (sem usar “all”), você pode oferecer uma lista separada por vírgulas com a propriedade de transição:

a:link {
    transition: .5s;
    transition-property: color, font-size;
...

Ou você pode oferecer uma série de regras para a transição de cada propriedade, como:

a:link {
    transition: color .5s, font-size 2s;
...

## Easing/Relaxamento

OK, então a função de tempo de transição (catchy/cativante!) é o cara menos óbvio. Ele efetivamente afirma como o navegador deve lidar com os estados intermediários da transição.

Ele segue uma curva de Bézier cúbica. Sim. Obviamente, sabemos tudo sobre eles desde a escola infantil, mas, para chegar ao fundo, no nível mais básico você pode usar ease ou linear.

ease produz uma aceleração gradual no início da transição e uma desaceleração gradual no final. 

linear mantém uma velocidade constante durante todo o tempo. Outros valores incluem ease-in e ease-out.

As transições CSS não funcionam nas versões 9 e anteriores do Internet Explorer. Mas isso não importa nos casos (que serão na maioria dos casos) em que as transições não são essenciais para um design funcionar bem. É apenas algo para se manter em mente.

## Exemplos

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Simple CSS transitions: Text links</title>
        <style>
                * {
                        margin: 0;
                }
                body {
                        font: 20px/1.5 arial, helvetica, sans-serif;
                        color: #000;
                        margin: 20px;
                }
                p {
                        margin: 20px 0;
                }

                a {
                        -webkit-transition: .5s;
                        transition: .5s;
                }
        
                #elephant {
                        color: #999;
                }
                #elephant:hover {
                        color: #f66;
                }
        
                #plesiosaur {
                        color: #06c;
                        text-decoration: none;
                        border-bottom: 3px solid #ddd;
                }
                #plesiosaur:hover {
                        border-color: #06c;
                }
        
                #tourist {
                        color: #f66;
                }
                #tourist:hover {
                        color: #c00;
                        background: #fcc
                }
        

                #htmldog a:hover {
                        transform: rotate(360deg);
                }
        </style>
</head>
<body>
        <h1>Simple <a href="http://www.htmldog.com/guides/css/advanced/transitions/">CSS transitions</a></h1>
        <p>Using <a href="http://www.htmldog.com/references/css/properties/transition/">the <code>transition</code> property</a> for basic animated effects when links are hovered over.</p>
        <ul>
                <li><a href="" id="elephant">Changing color</a></li>
                <li><a href="" id="plesiosaur">Changing border color</a></li>
                <li><a href="" id="tourist">Changing color and background color</a></li>
        </ul>

        <!-- Link back to HTML Dog: -->
        <p id="htmldog"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
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

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>CSS transitions: Timing functions</title>
        <style>
                * {
                        padding: 0;
                        margin: 0;
                }
                body {
                        font: 15px arial, helvetica, sans-serif;
                        text-align: center;
                }

                h1 {
                        margin-top: 20px;
                        color: #06c;
                }

                li {
                        list-style: none;
                        margin: 20px 0;
                        background: #def;
                }
                li a {
                        display: block;
                        width: 300px;
                        padding: 20px 0;
                        background: #06c;
                        color: white;
                }

                #timing1 {
                        -webkit-transition: 1s;
                        transition: 1s;
                }
                #timing2 {
                        -webkit-transition: 1s linear;
                        transition: 1s linear;
                }
                #timing3 {
                        -webkit-transition: 1s ease-in;
                        transition: 1s ease-in;
                }
                #timing4 {
                        -webkit-transition: 1s ease-out;
                        transition: 1s ease-out;
                }
                #timing5 {
                        -webkit-transition: 1s ease-in-out;
                        transition: 1s ease-in-out;
                }
                #timing6 {
                        -webkit-transition: 1s cubic-bezier(0.5,0.25,0,1);
                        transition: 1s cubic-bezier(0.5,0.25,0,1);
                }
                #timing7 {
                        -webkit-transition: 1s cubic-bezier(0.5,1.5,0.5,-0.5);
                        transition: 1s cubic-bezier(0.5,1.5,0.5,-0.5);
                }
                #timing8 {
                        -webkit-transition: 1s steps(4);
                        transition: 1s steps(4);
                }
                
                li a:hover {
                        width: 100%;
                }
        </style>
</head>
<body>
        <h1>CSS transition timing functions</h1>
        <ul>
                <li><a href="" id="timing1"><code>ease</code> (default)</a></li>
                <li><a href="" id="timing2"><code>linear</code></a></li>
                <li><a href="" id="timing3"><code>ease-in</code></a></li>
                <li><a href="" id="timing4"><code>ease-out</code></a></li>
                <li><a href="" id="timing5"><code>ease-in-out</code></a></li>
                <li><a href="" id="timing6"><code>cubic-bezier(0.5,0.25,0,1)</code></a></li>
                <li><a href="" id="timing7"><code>cubic-bezier(0.5,1.5,0.5,-0.5)</code></a></li>
                <li><a href="" id="timing8"><code>steps(4)</code></a></li>
        </ul>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

