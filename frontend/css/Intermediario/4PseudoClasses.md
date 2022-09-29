# Pseudo Classes

As pseudo classes são aparafusadas aos seletores para especificar um estado ou relação com o seletor. Elas assumem a forma de seletor: 

seletor: pseudo_class {
  property: value; 
}

simplesmente com dois pontos entre o seletor e a pseudo classe.

## Links

link, direcionamento de links não visitados e visitados. Links visitados são as pseudo classes mais básicas.

O seguinte aplicará cores a todos os links em uma página, dependendo se o usuário já visitou a página antes ou não:

a:link {
    color: blue;
}

a:visited {
    color: purple;
}

## Pseudo classe dinâmica

Também comumente usadas para links, as pseudo classes dinâmicas podem ser usadas para aplicar estilos quando algo acontece a algo.

     • active é para quando algo foi ativado pelo usuário, como quando um link é clicado.
     • hover é para quando algo é passado sobre um input do usuário, como quando um cursor do mouse se move sobre um link.
     • focus é para quando algo recebe o foco, isto é, quando é selecionado ou está pronto para uma entrada do teclado.

focus é mais frequentemente usado em elementos de formulário, mas pode ser usado para links. Embora a maioria dos usuários navegue ao redor e entre as páginas usando um mouse, aqueles que escolhem observar ou são incapazes de fazê-lo, como aqueles com deficiência motora, podem navegar usando um teclado ou dispositivo semelhante. Os links podem ser alternados usando uma tecla tab e ganharão o foco um de cada vez.

a:active {
    color: red;
}

a:hover {
    text-decoration: none;
    color: blue;
    background-color: yellow;
}

input:focus, textarea:focus {
    background: #eee;
}

## First Children - Primeiro filho

Existe a pseudo classe primeiro filho/First Children. Isso terá como alvo algo apenas se for o primeiro descendente de um elemento. 

Então, no seguinte HTML ...

<body>
    <p>I’m the body’s first paragraph child. I rule. Obey me.</p>
    <p>I resent you.</p>
...

… Se você deseja estilizar apenas o primeiro dos parágrafos acima, pode usar o seguinte CSS:

p:first-child {
    font-weight: bold;
    font-size: 40px;
}

O CSS3 também trouxe um novo conjunto de pseudo classes: last-child, target, first-of-type e mais.

## Exemplos:

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Rollovers 1</title>
        <style>
                body {
                        font: 12px arial, helvetica, sans-serif;
                }

                #toucan {
                        /* Note: Using the '#toucan' ID selector (targeting elements with 'id="toucan"') instead of a simple 'a' HTML selector (targeting all a elements) so that this doesn't target the link back to HTML Dog at the bottom of the page */
                        display: block;
                        width: 200px;
                        height: 63px;
                        background-image: url(/examples/images/toucancombo.jpg);
                        text-indent: -999em;
                }

                a:hover {
                        background-position: bottom;
                }
        </style>
</head>
<body>
        <p><a href="#" id="toucan">Toucan</a></p>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

Outro

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Rollovers 2</title>
        <style>
        body {
                font: 12px arial, helvetica, sans-serif;
        }

        div a {
                /* Note: Using 'div a' (targeting all a elements inside div elements) instead of simply 'a' (all a elements) so that this doesn't target the link back to HTML Dog at the bottom of the page */
                display: block;
                width: 200px;
                height: 63px;
                background-image: url(/examples/images/toucancombo2.jpg);
                text-indent: -999em;
                text-decoration: none;
        }

        a:hover {
                background-position: center;
        }

        a:active {
                background-position: bottom;
        }
        </style>
</head>
<body>
        <div>
                <p><a href="#">Toucan</a></p>
                <p><a href="#">Toucan</a></p>
                <p><a href="#">Toucan</a></p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>


