# Attribute Selectors

Antes de adicionar um atributo de classe a uma tag, veja se você pode simplesmente direcioná-lo por um atributo que pode já estar lá.

Os seletores de atributo permitem definir o estilo da box de um elemento com base na presença de um atributo HTML ou do valor de um atributo.

Com o atributo ...

Anexando um nome de atributo entre colchetes, para estilizar algo que simplesmente contém um determinado atributo, você pode fazer algo assim:

abbr[title] { border-bottom: 1px dotted #ccc }

Isso basicamente diz "insira uma linha pontilhada abaixo de todas as abreviações com um atributo title".

Com atributo e seu valor…

Você pode ainda especificar que deseja estilizar algo com um valor de atributo específico.

input[type=text] { width: 200px; }

Este exemplo aplicará uma largura de 200 pixels apenas a elementos input que são do tipo text (<input type = "text">).

Essa abordagem pode certamente ser útil em formulários em que os elementos de entrada podem assumir muitas formas usando o atributo type.

Você também pode direcionar mais de um atributo por vez de uma forma semelhante a esta:

input[type=text][disabled] { border: 1px solid #ccc }

Isso só aplicará uma borda cinza aos inputs do tipo text desabilitados.

O CSS 3 permite ainda que você combine um atributo sem ser exato:
     • [attribute ^ = algo] irá corresponder ao valor de um atributo que começa com algo.
     • [attribute $ = algo] irá corresponder ao valor de um atributo que termina com algo.
     • [attribute * = algo] irá corresponder ao valor de um atributo que contém algo, seja no início, meio ou fim.

Portanto, como exemplo, você pode estilizar links externos (por exemplo, "http://www.htmldog.com") de forma diferente de links internos (por exemplo, "overhere.html") da seguinte maneira:

a[href^=http] {
    padding-right: 10px;
    background: url(arrow.png) right no-repeat;
}


