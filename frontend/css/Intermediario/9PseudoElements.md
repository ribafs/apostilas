# Pseudo Elements

Os pseudoelementos são sugados para os seletores da mesma forma que as pseudo classes, tomando a forma que os seletores

seletor: pseudoelement {
  property: value; 
} 
Existem quatro pseudo elementos

First Letters e First Lines

O pseudoelemento da primeira letra se aplica à primeira letra dentro de uma caixa e a primeira linha à linha exibida mais acima em uma caixa.

Como exemplo, você pode criar letras maiúsculas e uma primeira linha em negrito para parágrafos com algo assim:

p {
    font-size: 12px;
}

p:first-letter {
    font-size: 24px;
    float: left;
}

p:first-line {
    font-weight: bold;
}

As especificações do CSS 3 sugerem que os pseudoelementos devem incluir dois pontos, então p::first-line ao invés de p:first-line. Isso é para diferenciá-los como pseudo classes. Visando a compatibilidade com versões anteriores (em que páginas da web mais antigas ainda funcionarão em novos navegadores), os navegadores ainda se comportarão se encontrarem a abordagem de dois pontos simples e esta continua sendo a melhor abordagem na maioria das circunstâncias, devido a alguns navegadores mais antigos não reconhecerem os dois pontos duplos.

## Before and After Content

Os pseudoelementos before e after são usados em conjunto com a propriedade content para colocar o conteúdo em qualquer lado de uma caixa sem tocar no HTML.
O que?! Conteúdo no meu CSS?! Mas eu pensei que HTML fosse para conteúdo!

Bem, é verdade. Portanto, use com moderação. Veja as coisas assim: Você está pegando emprestado conteúdo para usar apenas como apresentação, como usar "!" porque parece bonito. Não porque você realmente queira exclamar alguma coisa.

O valor da propriedade content pode ser aspas abertas, aspas fechadas, qualquer string entre aspas ou qualquer imagem, usando url (nome da imagem).

blockquote:before {
    content: open-quote;
}

blockquote:after {
    content: close-quote;
}

li:before {
    content: "POW! ";
}

p:before {
    content: url(images/jam.jpg);
}

A propriedade content cria efetivamente outra caixa para brincar, de modo que você também pode adicionar estilos ao "conteúdo de apresentação":

li:before {
    content: "POW! ";
    background: red;
    color: #fc0;
}


