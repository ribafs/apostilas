# Background Images

Usadas de uma maneira muito diferente do elemento HTML img, as imagens de plano de fundo do CSS são uma maneira poderosa de adicionar apresentação detalhada a uma página.

Para entrar no fundo do poço, a shorthand property background pode lidar com todos os aspectos básicos da manipulação da background-image.

body {
    background: white url(http://www.htmldog.com/images/bg.gif) no-repeat top right;
}

Isso une essas propriedades:

     • background-color, que já vimos antes.
     • background-image, que é a localização da própria imagem.
     • background-repeat, que é como a imagem se repete. Seu valor pode ser:
         ◦ repita, o equivalente a um efeito de "bloco" em todo o fundo,
         ◦ repeat-y, repetindo no eixo y, acima e abaixo,
         ◦ repeat-x (repetindo no eixo x, lado a lado), ou
         ◦ no-repeat (que mostra apenas uma instância da imagem).
     • background-position, que pode ser superior, central, inferior, esquerda, direita, um comprimento ou uma porcentagem, ou qualquer combinação adequada, como superior direito.

Na verdade, ele pode ser usado para especificar alguns outros recursos de fundo, notavelmente anexo, clipe, origem e tamanho (consulte a referência da propriedade background para detalhes), mas não vamos nos deixar levar ainda - cor, imagem, repetição e a posição são de longe os aspectos mais fundamentais que você deseja manipular com mais frequência.

Imagens de fundo podem ser usadas na maioria dos elementos HTML - não apenas para a página inteira (body) e podem ser usadas para resultados simples, mas eficazes.

Como exemplo, imagens de fundo são usadas neste site como marcadores em listas, como lupa na caixa de pesquisa e como ícones no canto superior esquerdo de algumas notas, como esta.

## Exemplos

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Images: background-image</title>
        <style>
                body {
                        color: #fc6;
                        background-color: #c72;
                        background-image: url("http://www.htmldog.com/examples/images/bg.gif");;
                        font-size: 20px;
                        margin: 0;
                }
                article {
                        width: 480px;
                        padding: 20px;
                        margin: auto;
                        background-color: rgba(0,0,0,.2);
                }
                h1, #htmldog {
                        text-align: center;
                }
                a {
                        color: white;
                }
        </style>
</head>
<body>
        <article>
                <h1>Images</h1>
                <p>CSS images, applied using <a href="http://www.htmldog.com/references/css/properties/background-image/">the <code>background-image</code> property</a>, are used for decoration.</p>
                <p>HTML images, inserted using <a href="http://www.htmldog.com/references/html/tags/img/">the <code>img</code> tag</a>, are used for meaningful content.</p>
                <img src="/examples/images/ecuador_anaconda.jpg" width="480" height="287" alt="Anaconda">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="/examples/images/ecuador_tarantula.jpg" width="480" height="360" alt="Tarantula">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <img src="/examples/images/ecuador_owlMonkeys.jpg" width="480" height="315" alt="Owl monkeys">

                <!-- Link back to HTML Dog: -->
                <p id="htmldog"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
        </article>
</body>
</html>

Outro

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Positioning backgrounds</title>
        <style>
                body {
                        font: 14px courier;
                        background: #fff;
                        color: #000;
                        margin: 0;
                        padding: 10px;
                }
                p {
                        background: #ccc url("/examples/images/opacityBg.gif") no-repeat;
                        height: 200px;
                        text-align: center;
                        margin: 20px;
                }
                code {
                        background: white;
                        padding: 0 15px 2px;
                }
                
                #p0 {
                        background: none;
                        height: auto;
                }

                #p1 {
                        background-position: center;
                }
                #p2 {
                        background-position: right;
                }
                #p3 {
                        background-position: bottom left;
                }
                #p4 {
                        background-position: 20px;
                }
                #p5 {
                        background-position: 50%;
                }
                #p6 {
                        background-position: 75% 25px;
                }
                #p7 {
                        background-position: top 99px right 9px;
                }

                #borderCollie {
                        background: none;
                }
                #borderCollie a {
                        display: block;
                        height: 200px;
                        background: #ccc url("http://www.htmldog.com//badge1.gif") center no-repeat;
                        transition: background-position .5s;
                        text-indent: -999em;
                }
                #borderCollie a:hover {
                        background-position: 50% 10px;
                }
        </style>
</head>
<body>
        <p id="p0">In addition to <code>background-repeat: no-repeat</code>&hellip;</p>
        <p id="p1"><code>background-position: center;</code></p>
        <p id="p2"><code>background-position: right;</code></p>
        <p id="p3"><code>background-position: bottom left;</code></p>
        <p id="p4"><code>background-position: 20px;</code></p>
        <p id="p5"><code>background-position: 50%;</code></p>
        <p id="p6"><code>background-position: 75% 25px;</code></p>
        <p id="p7"><code>background-position: top 99px right 9px;</code></p>

        <!-- Link back to HTML Dog: -->
        <p class="pbp" id="borderCollie"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

Outro

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>background-repeat</title>
        <style>
                body {
                        font: 14px courier;
                        background: #fff;
                        color: #000;
                        margin: 0;
                        padding: 10px;
                }
        
                p {
                        background-color: #ccc;
                        background-image: url("/examples/images/opacityBg.gif");
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
                        background-repeat: repeat;
                }
                #p2 {
                        background-repeat: no-repeat;
                }
                #p3 {
                        background-repeat: repeat-x;
                }
                #p4 {
                        background-repeat: repeat-y;
                }
                #p5 {
                        background-repeat: space;
                }
                #p6 {
                        background-repeat: round;
                }

                #borderCollie a {
                        display: block;
                        height: 300px;
                        background: white url("http://www.htmldog.com//badge1.gif") center no-repeat;
                        text-indent: -999em;
                }       
        </style>
</head>
<body>
        <p id="p1"><code>background-repeat: repeat;</code></p>
        <p id="p2"><code>background-repeat: no-repeat;</code></p>
        <p id="p3"><code>background-repeat: repeat-x;</code></p>
        <p id="p4"><code>background-repeat: repeat-y;</code></p>
        <p id="p5"><code>background-repeat: space;</code></p>
        <p id="p6"><code>background-repeat: round;</code></p>

        <!-- Link back to HTML Dog: -->
        <p id="borderCollie"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>


