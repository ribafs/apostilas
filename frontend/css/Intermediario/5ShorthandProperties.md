# Shorthand Properties

Algumas propriedades do CSS permitem uma sequência de valores numa única propriedade, substituindo a necessidade de várias propriedades. Eles são representados por valores separados por espaços.

## Margins and Padding

margin - permite que você possa fundir margin-top, margin-right, margin-bottom, and margin-left na forma

property: top right bottom left;

Assim:

p {
    margin-top: 1px;
    margin-right: 5px;
    margin-bottom: 10px;
    margin-left: 20px;
}

Pode ficar:

p {
    margin: 1px 5px 10px 20px;
}

padding pode ser usado exatamente da mesma maneira.

Declarando apenas dois valores assim:

padding: 1em 10em;

Os dois primeiros valores devem ser: top e bottom
Os dois últimos valores: right e left

## borders

border-width pode ser usado da mesma maneira que margin e padding também. Você também pode combinar largura da borda, cor da borda e estilo da borda com a propriedade da borda. Então:

p {
    border-width: 1px;
    border-color: red;
    border-style: solid;
}

Pode ser combinado assim:

p {
    border: 1px red solid;
}

A combinação width/color/style também pode ser aplicada a border-top, border-right, etc.

## fonts

As propriedades relacionadas às fontes também podem ser reunidas com a propriedade da fonte:

p {
    font: italic bold 12px/2 courier;
}

Isto combina font-style, font-weight, font-size, line-height e font-family.

Então, para colocar tudo junto, tente este código:

p {
    font: 14px/1.5 "Times New Roman", times, serif;
    padding: 30px 10px;
    border: 1px black solid;
    border-width: 1px 5px 5px 1px;
    border-color: red green blue yellow;
    margin: 10px 50px;
}

Beleza.


