# Rounded Corners/Cantos arredondados

Cantos arredondados costumavam ser o material para restringir imagens de fundo sólidas ou, para caixas flexíveis, várias imagens de fundo, uma por canto, colocadas em vários elementos div aninhados. Argh, feio. Bem, não mais. Agora, com CSS simples, você pode produzir seus designs com mais curvas do que Marilyn Monroe.

## border-radius

Sim. Raio nas bordas. A propriedade border-radius pode ser usada para adicionar um canto a cada canto de uma caixa.

Detalhes:

https://www.w3schools.com/cssref/css3_pr_border-radius.asp

<style> 
#example1 {
  border: 2px solid red;
  padding: 10px;
  border-radius: 25px;
}

#example2 {
  border: 2px solid red;
  padding: 10px;
  border-radius: 50px 20px;
}
</style>
</head>
<body>

<h2>border-radius: 25px:</h2>
<div id="example1">
  <p>The border-radius property defines the radius of the element's corners.</p>
</div>

<h2>border-radius: 50px 20px:</h2>
<div id="example2">
  <p>If two values are set; the first one is for the top-left and bottom-right corner, the second one for the top-right and bottom-left corner.</p>
</div>

## Multiple values

border-top-left-radius, border-top-right-radius, border-bottom-right-radius e border-bottom-left-radius podem também ser usados para criar cantos arredondados.

Cada vez menos terrivelmente prolixo, você também pode definir todos os raios de canto individualmente com uma lista de valores separados por espaço, trabalhando no sentido horário a partir do canto superior esquerdo, assim como outras propriedades abreviadas:

#monroe {
    background: #fff;
    width: 100px;
    height: 100px;
    border-radius: 6px 12px 18px 24px;
}

Curvy.

Ao usar dois valores em vez de quatro, você segmenta top-left e bottom-right com o primeiro comprimento (ou porcentagem) e top-right + bottom-left com o segundo. Três valores? Top-left, then top-right + bottom-left, then bottom-right.

As versões 8 e anteriores do Internet Explorer não são compatíveis com border-radius. A única maneira de lidar com isso é se contentar com um design nos navegadores que não tenham cantos arredondados (a maioria das pessoas pode conviver com isso) ou reverter para as imagens de fundo antigas.

Você também pode se deparar com propriedades proprietárias semelhantes, como -webkit-border-radius e -moz-border-radius, que são para versões mais antigas e pouco utilizadas do Safari e Firefox, respectivamente.

## Ellipses

Os círculos são quadrados demais para você? Você pode especificar diferentes raios horizontais e verticais dividindo os valores com um “/” e criando elipses.


#nanoo {
        background: #fff;
        width: 100px;
        height: 150px;
        border-radius: 50px/100px;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
}


## Exemplos

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Rounded corners: border-radius</title>
        <style>
                body {
                        font: 14px courier;
                        background: #06c;
                        color: #000;
                }
        
                p {
                        width: 300px;
                        height: 100px;
                        padding: 50px;
                        margin: 20px 0 0 20px;
                        background: white;
                        float: left;
                }
                code {
                        display: block;
                        padding: 10px;
                        background: #def;
                        border-radius: 10px;
                }
                #corners1 {
                        border-top-left-radius: 100px;
                }
                #corners2 {
                        border-radius: 100px;
                }
                #corners3 {
                        border-radius: 0 50px 100px 200px;
                }
                #corners4 {
                        padding: 30px;
                        background: none;
                        border-radius: 50px;
                        border: 20px solid #fff;
                }
                #corners5 {
                        border-radius: 25%;
                }
                #corners6 {
                        border-radius: 200px/100px;
                }
                #borderCollie {
                        border-radius: 75px/125px;
                        border-bottom-left-radius: 75px;
                        border-bottom-right-radius: 75px;
                        width: 120px;
                        height: 90px;
                        padding: 80px 15px 30px 15px;
                }
        </style>
</head>
<body>
        <p id="corners1"><code>border-top-left-radius: 100px;</code></p>
        <p id="corners2"><code>border-radius: 100px;</code></p>
        <p id="corners3"><code>border-radius: 0 50px 100px 200px;</code></p>
        <p id="corners4"><code>border-radius: 50px;<br>border: 20px solid #fff;</code></p>
        <p id="corners5"><code>border-radius: 25%;</code></p>
        <p id="corners6"><code>border-radius: 200px/100px;</code></p>



        <!-- Link back to HTML Dog: -->
        <p id="borderCollie"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
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


